<?php
/** 
 * mm_ddSelectDocuments
 * @version 1.0b (2013-05-30)
 * 
 * @description Виджет для выбора id определённых документов в удобном виде.
 * 
 * @uses ManagerManager 0.5.
 *
 * @param $tvs {comma separated string} - Имена TV, для которых необходимо применить виджет. @required
 * @param $roles {comma separated string} - Роли, для которых необходимо применить виждет, пустое значение — все роли. По умолчанию: ''.
 * @param $templates {comma separated string} - Id шаблонов, для которых необходимо применить виджет, пустое значение — все шаблоны. По умолчанию: ''.
 * @param $parentId {integer} - Id родительского документа, дочерние документы которого необходимо выбирать. @required
 * @param $depth {integer} - Глубина поиска дочерних документов. По умолчанию: 1.
 * @param $filter {separated string} - Условия фильтрации документов (чем-то похож на фильтр Ditto), разделённые через '&' между парами и через '=' между ключом и значением. Например: 'template=15&published=1', — получим только опубликованные документы с id шаблона 15. В фильтрации могут участвовать только поля документа (без TV). По умолчанию: ''.
 * @param $max {integer} - Максимальное количество документов, которое пользователь может выбрать (при == 0 — без ограничений). По умолчанию: 0.
 * 
 * @link http://code.divandesign.biz/modx/mm_ddselectdocuments/1.0b
 * 
 * @copyright 2013, DivanDesign
 * http://www.DivanDesign.ru
 */

function mm_ddSelectDocuments($tvs = '', $roles = '', $templates = '', $parentId, $depth = 1, $filter = '', $max = 0){
	global $modx, $mm_current_page;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates) && is_numeric($parentId)){
		$output = '';
		
		$tvs = tplUseTvs($mm_current_page['template'], $tvs);
		if ($tvs == false){return;}
		
		$filter = ddTools::explodeAssoc($filter, '&', '=');
		
		//Рекурсивно получает все необходимые документы
		if (!function_exists('ddGetDocs')){function ddGetDocs($parentId = 0, $filter = array(), $depth = 1){
			//Получаем дочерние документы текущего уровня
			$docs = ddTools::getDocumentChildren($parentId, false);
			
			$result = array();
			
			//Если что-то есть
			if ($docs && count($docs) > 0){
				//Перебираем полученные документы
				foreach ($docs as $val){
					//Если фильтр пустой, либо не пустой и документ удовлетворяет всем условиям
					if (empty($filter) || count(array_intersect_assoc($filter, $val)) == count($filter)){
						//Записываем результат
						$result[] = array('label' => $val['pagetitle'].' ('.$val['id'].')', 'value' => $val['id']);
					}
					
					//Если ещё надо двигаться глубже
					if ($depth > 1){
						//Сливаем результат с дочерними документами
						$result = array_merge($result, ddGetDocs($val['id'], $filter, $depth - 1));
					}
				}
			}
			
			return $result;
		}}
		
		//Получаем все дочерние документы
		$docs = ddGetDocs($parentId, $filter, $depth);
		
		if (count($docs) == 0){return;}
		
		$pluginDir = $modx->config['site_url'].'assets/plugins/managermanager/';
		$widgetDir = $pluginDir.'widgets/ddselectdocuments/';

		$output .= "// ---------------- mm_ddSelectDocuments :: Begin ------------- \n";
		//General functions
		$output .= '
'.includeCss($widgetDir.'ddselectdocuments.css').'
'.includeJs($pluginDir.'js/jquery.ddTools-1.8.1.min.js', 'js', 'jquery.ddTools', '1.8.1').'
'.includeJs($pluginDir.'js/jquery-ui-1.10.3.min.js', 'js', 'jquery-ui', '1.10.3').'
'.includeJs($widgetDir.'jquery.ddMultipleInput-1.1.min.js', 'js', 'jquery.ddMultipleInput', '1.1').'
		';

		foreach ($tvs as $tv){
			$output .= '
$j("#tv'.$tv['id'].'").ddMultipleInput({source: $j.parseJSON(\''.json_encode($docs).'\'), max: '.$max.'});
			';
		}

		$output .= "\n// ---------------- mm_ddSelectDocuments :: End -------------";

		$e->output($output."\n");
	}
}
?>
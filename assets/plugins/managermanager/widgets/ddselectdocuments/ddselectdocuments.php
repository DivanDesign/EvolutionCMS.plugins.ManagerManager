<?php
/** 
 * mm_ddSelectDocuments
 * @version 1.1b (2013-08-09)
 * 
 * @desc A widget for ManagerManager that makes selection of documents ids easier.
 * 
 * @uses ManagerManager 0.5.1.
 *
 * @param $tvs {comma separated string} - TVs names that the widget is applied to. @required
 * @param $roles {comma separated string} - Roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $templates {comma separated string} - Templates IDs for which the widget is applying (empty value means the widget is applying to all templates). Default: ''.
 * @param $parentIds {comma separated string} - Parent documents IDs. @required
 * @param $depth {integer} - Depth of search. Default: 1.
 * @param $filter {separated string} - Filter clauses, separated by '&' between pairs and by '=' between keys and values. For example, 'template=15&published=1' means to choose the published documents with template id=15. Be advised that you can't filter by TVs values. Default: ''.
 * @param $max {integer} - The largest number of elements that can be selected by user (“0” means selection without a limit). Default: 0.
 * 
 * @link http://code.divandesign.biz/modx/mm_ddselectdocuments/1.1b
 * 
 * @copyright 2013, DivanDesign
 * http://www.DivanDesign.ru
 */

function mm_ddSelectDocuments($tvs = '', $roles = '', $templates = '', $parentIds, $depth = 1, $filter = '', $max = 0){
	global $modx, $mm_current_page;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates) && !empty($parentIds)){
		$output = '';
		
		$tvs = tplUseTvs($mm_current_page['template'], $tvs);
		if ($tvs == false){return;}
		
		$filter = ddTools::explodeAssoc($filter, '&', '=');
		
		//Рекурсивно получает все необходимые документы
		if (!function_exists('ddGetDocs')){function ddGetDocs($parentIds = array(0), $filter = array(), $depth = 1){
			//Получаем дочерние документы текущего уровня
			$docs = array();
			
			//Перебираем всех родителей
			foreach ($parentIds as $parent){
				//Получаем документы текущего родителя
				$tekDocs = ddTools::getDocumentChildren($parent, false);
				
				//Если что-то получили
				if (is_array($tekDocs)){
					//Запомним
					$docs = array_merge($docs, $tekDocs);
				}
			}
			
			$result = array();
			
			//Если что-то есть
			if (count($docs) > 0){
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
						$result = array_merge($result, ddGetDocs(array($val['id']), $filter, $depth - 1));
					}
				}
			}
			
			return $result;
		}}
		
		//Получаем все дочерние документы
		$docs = ddGetDocs(explode(',', $parentIds), $filter, $depth);
		
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
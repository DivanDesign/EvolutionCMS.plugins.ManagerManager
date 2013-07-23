<?php
/** 
 * mm_ddNumericFields
 * @version 1.1 (2013-05-20)
 * 
 * Позволяет сделать возможным ввод в tv только цифр.
 * 
 * @uses ManagerManager plugin 0.5.
 *
 * @param $tvs {comma separated string} - Имена TV, для которых необходимо применить виджет.
 * @param $roles {comma separated string} - Роли, для которых необходимо применить виждет, пустое значение — все роли. По умолчанию: ''.
 * @param $templates {comma separated string} - Id шаблонов, для которых необходимо применить виджет, пустое значение — все шаблоны. По умолчанию: ''.
 * @param $allowFloat {0; 1} - Можно ли вводить числа с плавающей запятой? По умолчанию: 1.
 * @param $decimals {integer} - Количество цифр после запятой (0 — любое). По умолчанию: 0.
 * 
 * @link http://code.divandesign.biz/modx/mm_ddnumericfields/1.1
 * 
 * @copyright 2013, DivanDesign
 * http://www.DivanDesign.ru
 */

function mm_ddNumericFields($tvs = '', $roles = '', $templates = '', $allowFloat = 1, $decimals = 0){
	global $modx, $mm_current_page;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates)){
		$output = '';
		
		$tvs = tplUseTvs($mm_current_page['template'], $tvs);
		if ($tvs == false){
			return;
		}
		
		$output .= "\n// ---------------- mm_ddNumericFields :: Begin ------------- \n";
		
		//Include jquery.ddTools
		$output .= includeJs($modx->config['site_url'].'assets/plugins/managermanager/js/jquery.ddTools-1.8.1.min.js', 'js', 'jquery.ddTools', '1.8.1');

		foreach ($tvs as $tv){
			$output .= '
$j("#tv'.$tv['id'].'").ddNumeric({
	allowFloat: '.intval($allowFloat).',
	decimals: '.intval($decimals).'
});
			';
		}

		$output .= "\n// ---------------- mm_ddNumericFields :: End -------------";

		$e->output($output . "\n");
	}
}
?>
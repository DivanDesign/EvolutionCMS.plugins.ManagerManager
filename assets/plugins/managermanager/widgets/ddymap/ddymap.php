<?php
/**
 * mm_ddYMap
 * @version 1.5b (2015-05-08)
 * 
 * @desc A widget for ManagerManager plugin allowing Yandex Maps integration.
 * 
 * @uses ManagerManager plugin 0.6.2.
 * 
 * @param $tvs {comma separated string} - TV names to which the widget is applied. @required
 * @param $roles {comma separated string} - The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $templates {comma separated string} - Id of the templates to which this widget is applied (when this parameter is empty then widget is applied to the all templates). Default: ''.
 * @param $width {'auto'; integer} - Width of the map container. Default: 'auto'.
 * @param $height {integer} - Height of the map container. Default: 400.
 * @param $hideField {boolean} - Original coordinates field hiding status (true — hide, false — show). Default: true.
 * 
 * @event OnDocFormPrerender
 * @event OnDocFormRender
 * 
 * @link http://code.divandesign.biz/modx/mm_ddymap/1.5b
 * 
 * @copyright 2015, DivanDesign
 * http://www.DivanDesign.biz
 */

function mm_ddYMap($tvs, $roles = '', $templates = '', $width = 'auto', $height = '400', $hideField = true){
	if (!useThisRule($roles, $templates)){return;}
	
	global $modx;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormPrerender'){
		//The Yandex.Maps library including
		$output = includeJsCss('http://api-maps.yandex.ru/2.1/?lang=ru_RU', 'html', 'api-maps.yandex.ru', '2.1');
		//The jQuery.ddYMap library including
		$output .= includeJsCss($modx->config['site_url'].'assets/plugins/managermanager/widgets/ddymap/jquery.ddYMap-1.3.1.min.js', 'html', 'jquery.ddYMap', '1.3.1');
		//The main js file including
		$output .= includeJsCss($modx->config['site_url'].'assets/plugins/managermanager/widgets/ddymap/jquery.ddMM.mm_ddYMap.js', 'html', 'jquery.ddMM.mm_ddYMap', '1.1');
		
		$e->output($output);
	}else if ($e->name == 'OnDocFormRender'){
		global $mm_current_page;
		
		$output = '';
		
		//if we've been supplied with a string, convert it into an array
		$tvs = makeArray($tvs);
		
		$usedTvs = tplUseTvs($mm_current_page['template'], $tvs, '', 'id', 'name');
		if ($usedTvs == false){return;}
		
		$output .= "//---------- mm_ddYMap :: Begin -----\n";
		
		//Iterate over supplied TVs instead of doing so to the result of tplUseTvs() to maintain rendering order.
		foreach ($tvs as $tv){
			//If this $tv is used in a current template
			if (isset($usedTvs[$tv])){
				$output .= 
'
$j("#tv'.$usedTvs[$tv]['id'].'").mm_ddYMap({
	hideField: '.intval($hideField).',
	width: "'.$width.'",
	height: "'.$height.'"
});
';
			}
		}
		
		$output .= "//---------- mm_ddYMap :: End -----\n";
		
		$e->output($output);
	}
}
?>
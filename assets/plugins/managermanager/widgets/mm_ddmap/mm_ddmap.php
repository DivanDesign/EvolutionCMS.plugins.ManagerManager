<?php
/**
 * mm_ddMap
 * @version 1.7 (2023-05-24)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/mm_ddmap
 * 
 * @copyright 2012–2023 Ronef {@link https://Ronef.ru }
 */

function mm_ddMap($params){
	//For backward compatibility
	if (
		!is_array($params) &&
		!is_object($params)
	){
		//Convert ordered list of params to named
		$params = \ddTools::orderedParamsToNamed([
			'paramsList' => func_get_args(),
			'compliance' => [
				'fields',
				'roles',
				'templates',
				'mapWidth',
				'mapHeight',
				'hideOriginalInput'
			]
		]);
	}
	
	//Defaults
	$params = \DDTools\ObjectTools::extend([
		'objects' => [
			(object) [
//	 			'fields' => '',
				'mapWidth' => 'auto',
				'mapHeight' => 400,
				'hideOriginalInput' => true,
				'defaultZoom' => '',
				'defaultPosition' => '',
				'roles' => '',
				'templates' => '',
			],
			$params
		]
	]);
	
	if (
		!useThisRule(
			$params->roles,
			$params->templates
		)
	){
		return;
	}
	
	global $modx;
	
	if ($modx->Event->name == 'OnDocFormPrerender'){
		//The jQuery.ddMap library including
		$output .= includeJsCss(
			$modx->config['site_url'] . 'assets/plugins/managermanager/widgets/mm_ddmap/jQuery.ddMap-2.0.min.js',
			'html',
			'jQuery.ddMap',
			'2.0'
		);
		//The main js file including
		$output .= includeJsCss(
			$modx->config['site_url'] . 'assets/plugins/managermanager/widgets/mm_ddmap/jQuery.ddMM.mm_ddMap.js',
			'html',
			'jQuery.ddMM.mm_ddMap',
			'2.1'
		);
		
		$modx->Event->output($output);
	}elseif ($modx->Event->name == 'OnDocFormRender'){
		if (is_array($params->fields)){
			$params->fields = implode(
				',',
				$params->fields
			);
		}
		
		$output = 
'
//---------- mm_ddMap :: Begin -----
$j.ddMM.getFieldElems({fields: "' . $params->fields . '"}).mm_ddMap({
	hideField: ' . intval($params->hideOriginalInput) . ',
	width: "' . $params->mapWidth . '",
	height: "' . $params->mapHeight . '"' . (
		!empty($params->defaultZoom) ?
		', defaultZoom: ' . intval($params->defaultZoom) :
		''
	) . (
		!empty($params->defaultPosition) ?
		', defaultPosition: "' . $params->defaultPosition . '"' :
		''
	) . '
});
//---------- mm_ddMap :: End -----
';
		
		$modx->Event->output($output);
	}
}
?>
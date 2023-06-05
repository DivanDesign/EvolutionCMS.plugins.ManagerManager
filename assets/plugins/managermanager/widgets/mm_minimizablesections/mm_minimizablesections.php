<?php
/**
 * mm_minimizableSections
 * @version 1.0 (2023-06-06)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/mm_minimizablesections
 * 
 * @copyright 2015–2023
 */

function mm_minimizableSections($params = []){
	//For backward compatibility
	if (
		!is_array($params) &&
		!is_object($params)
	){
		//Convert ordered list of params to named
		$params = \ddTools::orderedParamsToNamed([
			'paramsList' => func_get_args(),
			'compliance' => [
				'sections',
				'roles',
				'templates',
				'minimizedByDefault'
			]
		]);
	}
	
	//Defaults
	$params = \DDTools\ObjectTools::extend([
		'objects' => [
			(object) [
				'sections' => '',
				'minimizedByDefault' => '',
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
	
	$output = '';
	
	if ($modx->Event->name == 'OnDocFormPrerender'){
		$widgetDir = $modx->config['site_url'] . 'assets/plugins/managermanager/widgets/mm_minimizablesections/';
		
		$output .= includeJsCss(
			$widgetDir . 'mm_minimizableSections.css',
			'html'
		);
		$output .= includeJsCss(
			$widgetDir . 'jQuery.ddMM.mm_minimizableSections.js',
			'html',
			'jQuery.ddMM.mm_minimizableSections.js',
			'1.1.2'
		);
		
		$modx->Event->output($output);
	}elseif ($modx->Event->name == 'OnDocFormRender'){
		if ($params->sections == ''){
			$params->sections = '*';
		}
		
		$params->sections = makeArray($params->sections);
		$params->minimizedByDefault = makeArray($params->minimizedByDefault);
		
		$params->sections = array_map(
			'mm_minimizableSections_prepareSectionHeaderSelector',
			$params->sections
		);
		$params->minimizedByDefault = array_map(
			'mm_minimizableSections_prepareSectionHeaderSelector',
			$params->minimizedByDefault
		);
		
		$output .= '
//ManagerManager.mm_minimizableSections
$j("' . implode(',', $params->sections) . '", "#documentPane").mm_minimizableSections({
	minimizedByDefault: "' . implode(',', $params->minimizedByDefault) . '"
});
';
		
		$modx->Event->output($output);
	}
}

/**
 * mm_minimizableSections_prepareSectionHeaderSelector
 * @version 1.0.3 (2023-06-05)
 * 
 * @param $sectionId {string} — Section name. @required
 * 
 * @return {string}
 */
function mm_minimizableSections_prepareSectionHeaderSelector($sectionId){
	$result = '';
	
	switch ($sectionId){
		case 'access':
			$result = '#sectionAccessHeader';
		break;
		
		case '':
		//For backward compatibility
		case '*':
			$result = '.sectionHeader';
		break;
		
		default:
			$sectionId = prepareSectionId($sectionId);
			
			$result = '#' . $sectionId . '_header';
		break;
	}
	
	return $result;
}
?>
<?php
/**
 * mm_hideEmpty
 * @version 1.0.1 (2023-05-24)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/mm_hideempty
 * 
 * @copyright 2016–2023
 */

function mm_hideEmpty($params = []){
	//For backward compatibility
	if (
		!is_array($params) &&
		!is_object($params)
	){
		//Convert ordered list of params to named
		$params = \ddTools::orderedParamsToNamed([
			'paramsList' => func_get_args(),
			'compliance' => [
				'roles',
				'templates'
			]
		]);
	}
	
	$params = \DDTools\ObjectTools::extend([
		'objects' => [
			//Defaults
			(object) [
				'roles' => '',
				'templates' => ''
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
		//The main js file including
		$output = includeJsCss(
			$modx->getConfig('site_url') . 'assets/plugins/managermanager/widgets/mm_hideempty/jQuery.ddMM.mm_hideEmpty.js',
			'html',
			'jQuery.ddMM.mm_hideEmpty',
			'1.2.1'
		);
		
		$modx->Event->output($output);
	}elseif ($modx->Event->name == 'OnDocFormRender'){
		$output = '//---------- mm_hideEmpty :: Begin -----' . PHP_EOL;
		
		$output .= '$j.ddMM.mm_hideEmpty.hideEmptySections();' . PHP_EOL;
		$output .= '$j.ddMM.mm_hideEmpty.hideEmptyTabs();' . PHP_EOL;
		
		$output .= '//---------- mm_hideEmpty :: End -----' . PHP_EOL;
		
		$modx->Event->output($output);
	}
}
?>
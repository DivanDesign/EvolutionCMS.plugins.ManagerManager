<?php
/**
 * mm_ddDependentFields
 * @version 1.0 (2024-01-03)
 * 
 * @see README.md
 * 
 * @link https://code.divandesign.ru/modx/mm_dddependentfields
 * 
 * @copyright 2024 Ronef {@link https://Ronef.ru }
 */

function mm_ddDependentFields($params){
	//Defaults
	$params = \DDTools\ObjectTools::extend([
		'objects' => [
			(object) [
				//Required (null means “not set”)
	 			'masterFieldName' => null,
	 			'masterFieldValue' => null,
				'dependentFieldName' => null,
				//Optional
				'roles' => '',
				'templates' => '',
			],
			$params
		]
	]);
	
	if (
		//Required parameters
		(
			is_null($params->masterFieldName) ||
			is_null($params->masterFieldValue) ||
			is_null($params->dependentFieldName)
		) ||
		//Roles and templates
		!useThisRule(
			$params->roles,
			$params->templates
		)
	){
		return;
	}
	
	global $modx;
	
	if ($modx->Event->name == 'OnDocFormPrerender'){
		//Including of the main JS file
		$output = includeJsCss(
			$modx->config['site_url'] . 'assets/plugins/managermanager/widgets/dependentFields/jQuery.ddMM.mm_ddDependentFields.js',
			'html',
			'jQuery.ddMM.mm_ddDependentFields',
			'1.0'
		);
		
		$modx->Event->output($output);
	}elseif ($modx->Event->name == 'OnDocFormRender'){
		$matchedFields = getTplMatchedFields(
			//Fields
			[
				$params->masterFieldName,
				$params->dependentFieldName,
			],
		);
		
		if (
			$matchedFields === false ||
			//We always need 2 fields
			count($matchedFields) != 2
		){
			return;
		}
		
		$output = '
//ManagerManager.mm_ddDependentFields
$j.ddMM.mm_ddDependentFields({
	masterFieldName: "' . $params->masterFieldName . '",
	masterFieldValue: "' . $params->masterFieldValue . '",
	dependentFieldName: "' . $params->dependentFieldName . '",
});
';
		
		$modx->Event->output($output);
	}
}
?>
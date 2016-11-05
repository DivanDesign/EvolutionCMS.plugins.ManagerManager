<?php
/**
 * mm_hideEmpty
 * @version 0.2 (2016-11-05)
 * 
 * @desc A widget for ManagerManager plugin that allows to hide all empty sections and tabs.
 * 
 * @uses PHP >= 5.4.
 * @uses MODXEvo.plugin.ManagerManager >= 0.7.
 * 
 * @param $params {array_associative|stdClass} — The object of params. @required
 * @param $params['roles'] {string_commaSeparated} — Roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $params['templates'] {string_commaSeparated} — Templates IDs for which the widget is applying (empty value means the widget is applying to all templates). Default: ''.
 * 
 * @event OnDocFormPrerender
 * @event OnDocFormRender
 * 
 * @author Sergey Davydov <webmaster@sdcollection.com>
 * @author DivanDesign <code@DivanDesign.biz>
 * 
 * @link https://github.com/MrSwed/MODXEvo.plugin.ManagerManager.mm_hideEmpty
 * @link http://code.divandesign.biz/modx/mm_hideempty/0.2
 * 
 * @copyright 2016
 */

function mm_hideEmpty($params = []){
	//For backward compatibility
	if (
		!is_array($params) &&
		!is_object($params)
	){
		//Convert ordered list of params to named
		$params = ddTools::orderedParamsToNamed([
			'paramsList' => func_get_args(),
			'compliance' => [
				'roles',
				'templates'
			]
		]);
	}
	
	//Defaults
	$params = (object) array_merge([
		'roles' => '',
		'templates' => ''
	], (array) $params);
	
	if (!useThisRule($params->roles, $params->templates)){return;}
	
	global $modx;
	$e = &$modx->Event;
	
	// if the current page is being edited by someone in the list of roles, and uses a template in the list of templates
	if ($e->name == 'OnDocFormPrerender'){
		//The main js file including
		$output = includeJsCss($modx->getConfig('site_url').'assets/plugins/managermanager/widgets/mm_hideempty/jQuery.ddMM.mm_hideEmpty.js', 'html', 'jQuery.ddMM.mm_hideEmpty', '1.0');
		
		$e->output($output);
	}else if ($e->name == 'OnDocFormRender'){
		$output = '//---------- mm_hideEmpty :: Begin -----'.PHP_EOL;
		
		$output .= '$j.ddMM.mm_hideEmpty.hideEmptySections();'.PHP_EOL;
		$output .= '$j.ddMM.mm_hideEmpty.hideEmptyTabs();'.PHP_EOL;
		
		$output .= '//---------- mm_hideEmpty :: End -----'.PHP_EOL;
		
		$e->output($output);
	}
}
?>
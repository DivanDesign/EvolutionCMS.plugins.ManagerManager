<?php
/**
 * mm_hideFields
 * @version 1.2 (2016-10-31)
 * 
 * @desc A widget for ManagerManager plugin that allows one or more of the default document fields or template variables to be hidden within the manager.
 * 
 * @uses MODXEvo >= 1.1.
 * @uses MODXEvo.plugin.ManagerManager >= 0.7.
 * 
 * @param $fields {string_commaSeparated} — The name(s) of the document fields (or TVs) this should apply to. @required
 * @param $roles {string_commaSeparated} — The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $templates {string_commaSeparated} — Id of the templates to which this widget is applied (when this parameter is empty then widget is applied to the all templates). Default: ''.
 * 
 * @link http://code.divandesign.biz/modx/mm_hidefields/1.2
 * 
 * @copyright 2012–2015
 */

function mm_hideFields($fields, $roles = '', $templates = ''){
	global $modx;
	$e = &$modx->Event;
	
	if (
		$e->name == 'OnDocFormRender' &&
		//if the current page is being edited by someone in the list of roles, and uses a template in the list of templates
		useThisRule($roles, $templates)
	){
		$output = '//---------- mm_hideFields :: Begin -----'.PHP_EOL;
		
		$output .= '$j.ddMM.hideFields("'.$fields.'");'.PHP_EOL;
		
		$output .= '//---------- mm_hideFields :: End -----'.PHP_EOL;
		
		$e->output($output);
	}
}
?>
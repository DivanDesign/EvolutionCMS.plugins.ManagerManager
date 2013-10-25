<?php
/**
 * mm_moveFieldsToTab
 * @version 1.2.1 (2013-10-25)
 *
 * @desc Move a field to a different tab.
 * 
 * @uses ManagerManager plugin 0.5.2.
 * 
 * @param $fields {comma separated string} - The name(s) of the document fields (or TVs) this should apply to. @required
 * @param $tabId {string} - The ID of the tab which the fields should be moved to. Can be one of the default tab IDs or a new custom tab created with mm_createTab. @required
 * @param $roles {comma separated string} - The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles).
 * @param $templates {comma separated string} - The Id of the templates to which this widget is applied (when this parameter is empty then widget is applied to the all templates).
 * 
 * @link http://code.divandesign.biz/modx/mm_movefieldstotab/1.2.1
 * 
 * @copyright 2013
 */

function mm_moveFieldsToTab($fields, $tabId, $roles = '', $templates = ''){
	global $modx;
	$e = &$modx->Event;
	
	// if the current page is being edited by someone in the list of roles, and uses a template in the list of templates
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates)){
		$output = "\n//  -------------- mm_moveFieldsToTab :: Begin ------------- \n";
		
		$output .= '$j.ddMM.moveFields("'.$fields.'", "'.prepareTabId($tabId).'");';
		
		$output .= "\n//  -------------- mm_moveFieldsToTab :: End ------------- \n";
		
		$e->output($output . "\n");
	}
}
?>
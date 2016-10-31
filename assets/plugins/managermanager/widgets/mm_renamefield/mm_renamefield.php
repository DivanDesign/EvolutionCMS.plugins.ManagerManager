<?php
/**
 * mm_renameField
 * @version 1.2.2 (2016-10-31)
 * 
 * @desc A widget for ManagerManager plugin that allows one of the default document fields or template variables to be renamed within the manager.
 * 
 * @uses MODXEvo >= 1.1.
 * @uses ManagerManager plugin 0.7.
 * 
 * @param $fields {string_commaSeparated} — The name(s) of the document fields (or TVs) this should apply to. @required
 * @param $newLabel {string} — The new text for the label. @required
 * @param $roles {string_commaSeparated} — The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles).
 * @param $templates {string_commaSeparated} — Id of the templates to which this widget is applied (when this parameter is empty then widget is applied to the all templates).
 * @param $newHelp {string} — New text for the help icon with this field or for comment with TV. The same restriction apply as when using mm_changeFieldHelp directly.
 * 
 * @link http://code.divandesign.biz/modx/mm_renamefield/1.2.2
 * 
 * @copyright 2011–2016
 */

function mm_renameField($fields, $newLabel, $roles = '', $templates = '', $newHelp = ''){
	global $modx;
	$e = &$modx->Event;
	
	// if the current page is being edited by someone in the list of roles, and uses a template in the list of templates
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates)){
		$fields = makeArray($fields);
		if (count($fields) == 0){return;}
		
		$output = '//---------- mm_renameField :: Begin -----'.PHP_EOL;
		
		foreach ($fields as $field){
			$element = '';
			
			switch ($field){
				// Exceptions
				case 'which_editor':
					$element = '$j("#which_editor").prev("span.warning")';
				break;
				
				case 'content':
					$element = '$j("#content_header")';
				break;
				
				// Ones that follow the regular pattern
				default:
					global $mm_fields;
					
					if (isset($mm_fields[$field])){
						$element = '$j.ddMM.fields.'.$field.'.$elem.parents("td:first").prev("td").children("span.warning")';
					}
				break;
			}
			
			if ($element != ''){
				$output .= $element.'.contents().filter(function(){return this.nodeType === 3;}).replaceWith("'.jsSafe($newLabel).'");'."\n";
			}
			
			// If new help has been supplied, do that too
			if ($newHelp != ''){
				mm_changeFieldHelp($field, $newHelp, $roles, $templates);
			}
		}
		
		$output .= '//---------- mm_renameField :: End -----'.PHP_EOL;
		
		$e->output($output);
	}
}
?>
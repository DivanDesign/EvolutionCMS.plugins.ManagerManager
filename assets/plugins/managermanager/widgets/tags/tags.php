<?php
/**
 * mm_widget_tags
 * @version 1.1.1 (2013-07-02)
 *
 * Adds a tag selection widget to the specified TVs.
 *
 * @uses ManagerManager plugin 0.5.
 * 
 * @param $fields {comma separated string} - The name(s) of the template variables this should apply to. @required
 * @param $delimiter {string} - The sign that separates tags in the field. Default: ','.
 * @param $source {comma separated string} - The names(s) of the template variables the list of tags should come from. This allows the list of tags to come from a different field than the widget. By default it uses all the TVs listed in "fields" parameter. Default: =$fields.
 * @param $display_count {boolean} - Display the number of documents using each tag (in brackets after it). Default: false.
 * @param $roles {comma separated string} - The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $templates {comma separated string} - The templates that the widget is applied to (when this parameter is empty then widget is applied to the all templates). Default: ''.
 *
 * @link http://code.divandesign.biz/modx/mm_widget_tags/1.1.1
 *
 * @copyright 2013
 */

function mm_widget_tags($fields, $delimiter = ',', $source = '', $display_count = false, $roles = '', $templates = ''){
	global $modx, $mm_current_page, $mm_fields;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates)){
		$output = '';
		
		// if we've been supplied with a string, convert it into an array
		$fields = makeArray($fields);
		
		// And likewise for the data source (if supplied)
		$source = (empty($source) ? $fields : makeArray($source));
		
		// Does this page's template use any of these TVs? If not, quit.
		$field_tvs = tplUseTvs($mm_current_page['template'], $fields);
		if ($field_tvs == false){
			return;
		}
		
		$source_tvs = tplUseTvs($mm_current_page['template'], $source);
		if ($source_tvs == false){
			return;
		}
		
		// Insert some JS and a style sheet into the head
		$output .= "//  -------------- Tag widget include ------------- \n";
		$output .= includeJs($modx->config['base_url'].'assets/plugins/managermanager/widgets/tags/tags.js');
		$output .= includeCss($modx->config['base_url'].'assets/plugins/managermanager/widgets/tags/tags.css');
		
		// Go through each of the fields supplied
		foreach ($fields as $targetTv){
			$tv_id = $mm_fields[$targetTv]['fieldname'];
			
			// Make an SQL friendly list of fields to look at:
			//$escaped_sources = array();
			//foreach ($source as $s){
			//	$s=substr($s,2,1);
			//	$escaped_sources[] = "'".$s."'";
			//}
			
			$sql_sources = implode(',', $source_tvs[0]);
			
			// Get the list of current values for this TV
			$sql = 'SELECT `value` FROM '.$modx->getFullTableName('site_tmplvar_contentvalues').' WHERE tmplvarid IN ('.$sql_sources.')';
			
			$result = $modx->dbQuery($sql);
			$all_docs = $modx->db->makeArray($result);
			
			$foundTags = array();
			foreach ($all_docs as $theDoc){
				$theTags = explode($delimiter, $theDoc['value']);
				foreach ($theTags as $t){
					$foundTags[trim($t)]++;
				}
			}
			
			// Sort the TV values (case insensitively)
			uksort($foundTags, 'strcasecmp');
			
			$lis = '';
			foreach($foundTags as $t => $c){
				$lis .= '<li title="Used '.$c.' times">'.jsSafe($t).($display_count?' ('.$c.')':'').'</li>';
			}
			
			$html_list = '<ul class="mmTagList" id="'.$tv_id.'_tagList">'.$lis.'</ul>';
			
			// Insert the list of tags after the field
			$output .= '
			//  -------------- Tag widget for '.$targetTv.' ('.$tv_id.') --------------
			$j("#'.$tv_id.'").after(\''.$html_list.'\');
			';
			
			// Initiate the tagCompleter class for this field
			$output .= 'var '.$tv_id.'_tags = new TagCompleter("'.$tv_id.'", "'.$tv_id.'_tagList", "'.$delimiter.'"); ';
		}
		$e->output($output . "\n");
	}
}
?>
<?php
//---------------------------------------------------------------------------------
//   Utility functions
// 
//--------------------------------------------------------------------------------- 

// Pass useThisRule a comma separated list of allowed roles and templates, and it will
// return TRUE or FALSE to indicate whether this rule should be run on this page
function useThisRule($roles='', $templates='') {

	global $mm_current_page, $modx;
	$e = &$modx->Event;
	
	$exclude_roles = false;
	$exclude_templates = false;
	
	// Are they negative roles?
	if (substr($roles, 0, 1) == '!') {
		$roles = substr($roles, 1);
		$exclude_roles = true;
	}
	
	// Are they negative templates?
	if (substr($templates, 0, 1) == '!') {
		$templates = substr($templates, 1);
		$exclude_templates = true;
	}
	
	// Make the lists into arrays
	$roles = makeArray($roles);
	$templates = makeArray($templates);
	
	// Does the current role match the conditions supplied?
	$match_role_list = ($exclude_roles) ? !in_array($mm_current_page['role'], $roles) : in_array($mm_current_page['role'], $roles);

	// Does the current template match the conditions supplied?
	$match_template_list = ($exclude_templates) ? !in_array($mm_current_page['template'], $templates) : in_array($mm_current_page['template'], $templates);
	
	// If we've matched either list in any way, return true	
	if ( ($match_role_list || count($roles)==0) && ($match_template_list || count($templates)==0) ) {
		return true;
	} 
	
	return false;
}

// Makes a commas separated list into an array
function makeArray($csv) {
	
	// If we've already been supplied an array, just return it
	if (is_array($csv)) {
		return $csv;
	}	
	
	// Else if we have an empty string
	if (trim($csv)=='') {
		return array();
	}
	
	// Otherwise, turn it into an array
	$return = explode(',',$csv);
	array_walk( $return, create_function('$v, $k', 'return trim($v);'));	// Remove any whitespace
	return $return;
}

// Make an output JS safe
function jsSafe($str) {
	global $modx;
	
	// Only PHP versions > 5.2.3 allow us to prevent double_encoding
	// If you are using an older version of PHP, and use characters which require 
	// HTML entity encoding in new label names, etc you will have to specify the
	// actual character, not a pre-encoded version
	if (version_compare(PHP_VERSION, '5.2.3') >= 0) {
		return htmlentities($str, ENT_QUOTES, $modx->config['modx_charset'], false);
	} else {
		return htmlentities($str, ENT_QUOTES, $modx->config['modx_charset']);
	}
}

/**
 * tplUseTvs
 * @version 1.1 (2013-03-20)
 *
 * @desc Does the specified template use the specified TVs?
 *
 * @param $tpl_id {integer} - Template ID.
 * @param $tvs {comma separated string; array} - TV names. Default: ''.
 * @param $types {comma separated string; array} - TV types, e.g. image. Default: ''.
 * @param $dbFields {somma separated string} - DB fields which get from 'site_tmplvars' table. Default: 'id'.
 */
function tplUseTvs($tpl_id, $tvs = '', $types = '', $dbFields = 'id') {
	
	// If it's a blank template, it can't have TVs
	if($tpl_id == 0){return false;}
	
	global $modx;
	
	// Make the TVs and field types into an array
	$fields = makeArray($tvs); 
	$types = makeArray($types); 
	
	// Get the DB table names
	$tv_table = $modx->getFullTableName('site_tmplvars');	
	$rel_table = $modx->getFullTableName('site_tmplvar_templates');
	
	// Are we looking at specific TVs, or all?
	$tvs_sql = !empty($fields) ? ' AND tvs.name IN ' . makeSqlList($fields) : '';
	
	// Are we looking at specific TV types, or all?
	$types_sql = !empty($types) ? ' AND type IN ' . makeSqlList($types) : '';
	
	// Make the SQL for this template
	$cur_tpl = !empty($tpl_id) ? ' AND rel.templateid = ' . $tpl_id : '';
		
	// Do the SQL query	
	$result = $modx->db->query("SELECT $dbFields FROM $tv_table tvs LEFT JOIN $rel_table rel ON rel.tmplvarid = tvs.id WHERE 1=1  $cur_tpl $tvs_sql $types_sql");

	// If we have results, return them, otherwise return false
	if ( $modx->db->getRecordCount($result) == 0) {
		return false;	
	} else {
		return $modx->db->makeArray($result);
	}
}

/**
 * makeSqlList
 * @version 1.0.1 (2013-03-19)
 * 
 * @desc Create a MySQL-safe list from an array.
 * 
 * @param $arr {array; comma separated string} - Values.
 */
function makeSqlList($arr){
	$arr = makeArray($arr);
	
	foreach($arr as $k => $tv){
        //if (substr($tv, 0, 2) == 'tv') {$tv=substr($tv,2);}
		// Escape them for MySQL
		$arr[$k] = "'".mysql_real_escape_string($tv)."'";
	}
	
	$sql = " (".implode(',', $arr).") ";
	
	return $sql;
}

/**
 * includeJs
 * @version 1.1 (2013-05-19)
 * 
 * @desc Generates the code needed to include an external script file.
 * 
 * @param $url {string} - The URL of the external script. @required
 * @param $output_type {'js'; 'html'} - Either js or html - depending on where the output is appearing. Default: 'js'.
 * @param $name {string} - Script name.
 * @param $version {string} - Script version.
 * 
 * @return {string} - Code.
 */
function includeJs($url, $output_type = 'js', $name = '', $version = ''){
	global $mm_includedJs;
	
	if (empty($name) || empty($version)){
		$fileinfo = pathinfo($url);
		
		//Try to get file version [0 — full name, 1 — script name, 2 — version, 3 — all chars after version]
		preg_match('/(\D*?)-?(\d(?:\.\d+)*(?:-?[A-Za-z])*)(.*)/', $fileinfo['basename'], $match);
		
		//If fail
		if (count($match) < 4){
			//Full string
			$name = strtolower($url);
			$version = '0';
		}else{
			$name = strtolower($match[1]);
			$version = $match[2];
		}
	}
	
	$useThisVer = true;
	$result = '';
	
	//If this script is already included
	if (isset($mm_includedJs[$name])){
		//If old < new, use new, else — old
		$useThisVer = version_compare($mm_includedJs[$name]['version'], $version, '<');
	}else{
		//Add
		$mm_includedJs[$name] = array(
			'version' => $version
		);
	}
		
	//If use the new version
	if ($useThisVer){
		if ($output_type == 'js'){
			$result = '$j("head").append(\' <script src="'.$url.'" type="text/javascript"></scr\'+\'ipt> \'); ' . "\n";
		}else if ($output_type == 'html'){
			$result = '<script src="'.$url.'" type="text/javascript"></script>' . "\n";
		}
	}
	
	return $result;
}

// Generates the code needed to include an external CSS file. 
// $url is any URL
// $output_type is either js or html - depending on where the output is appearing
function includeCss($url, $output_type = 'js'){
	if ($output_type == 'js'){
		return  '$j("head").append(\' <link href="'.$url.'" rel="stylesheet" type="text/css" /> \'); ' . "\n";	
	}else if ($output_type == 'html'){
		return  '<link href="'.$url.'" rel="stylesheet" type="text/css" />' . "\n";	
	}else{
		return;	
	}
}

/**
 * prepareTabId
 * @version 1.0 (2013-05-21)
 * 
 * @desc Prepare id of a tab.
 * 
 * @param $id {string} - Tab id.
 * 
 * @return {string} - Tab id.
 */
function prepareTabId($id){
	//General tab by default
	if ($tab == ''){$tab = 'general';}
	
	//If it's one of the default tabs, we need to get the capitalisation right
	switch ($id){
		case 'general':
		case 'settings':
		case 'access':
		case 'meta': // version 1.0.0 only, removed in 1.0.1
			$id = ucfirst($id);
		break;
	}
	
	return 'tab'.$id;
}

/**
 * prepareSectionId
 * @version 1.0 (2013-05-21)
 * 
 * @desc Prepare id of a section.
 * 
 * @param $id {string} - Section id.
 * 
 * @return {string} - Section id.
 */
function prepareSectionId($id){
	return 'ddSection'.$id;
}

//function tvIdFromName($tv_id) {
//	
//	global $modx;
//	
//	// Get the DB table names
//	$tv_table = $modx->getFullTableName('site_tmplvars');
//	
//	$tv_id = mysql_escape_string($tv_id);
//	
//	$result = $modx->db->query("SELECT id FROM $tv_table tvs WHERE name = '$tv_id'");
//	$result = $modx->db->makeArray($result);
//	
//	
//	
//	
//	
//	// If we have results, return them, otherwise return false
//	if ( $modx->db->getRecordCount($result) == 0) {
//		return false;	
//	} else {
//		print_r($result);
//		return $result[0]['id'];
//	}
//
//}
?>
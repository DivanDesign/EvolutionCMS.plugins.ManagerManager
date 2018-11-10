<?php
/**
 * ManagerManager
 * @version 0.6.2 (2014-05-28)
 * 
 * @desc Used to manipulate the display of document fields in the manager.
 * 
 * @uses PHP >= 5.4.
 * @uses MODXEvo >= 1.1.
 * 
 * @author DivanDesign studio (www.DivanDesign.biz)
 * @author Nick Crossland (www.rckt.co.uk)
 * 
 * @inspiration HideEditor plugin by Timon Reinhard and Gildas; HideManagerFields by Brett @ The Man Can!
 * 
 * @license Released under the GNU General Public License: http://creativecommons.org/licenses/GPL/2.0/
 * 
 * @link http://code.divandesign.biz/modx/managermanager/0.6.2
 * 
 * @copyright 2012–2016
 */

global $mm_version;
$mm_version = '0.6.2';

// Bring in some preferences which have been set on the configuration tab of the plugin, and normalise them

// Current event
global $e;
$e = &$modx->Event;

if (!isset($e->params['config_chunk'])){$e->params['config_chunk'] = '';}

$jsUrls = [
	'jq' => [
		'url' => $modx->config['site_url'].'assets/plugins/managermanager/js/jQuery-3.1.1.min.js',
		'name' => 'jquery',
		'version' => '3.1.1'
	],
	'mm' => [
		'url' => $modx->config['site_url'].'assets/plugins/managermanager/js/jquery.ddMM.js',
		'name' => 'ddMM',
		'version' => '1.2.1'
	],
	'ddTools' => [
		'url' => $modx->config['site_url'].'assets/plugins/managermanager/js/jquery.ddTools-1.8.6.min.js',
		'name' => 'jquery.ddTools',
		'version' => '1.8.6'
	]
];

$pluginDir = $modx->config['base_path'].'assets/plugins/managermanager/';

// Set variables
global $content, $template, $default_template, $mm_current_page, $mm_fields, $mm_includedJsCss;

if (!is_array($mm_includedJsCss)){
	$mm_includedJsCss = [];
}

//Include ddTools (needed for some widgets)
include_once($pluginDir.'modx.ddtools.class.php');
//Include Utilites
include_once($pluginDir.'utilities.inc.php');

// When loading widgets, ignore folders / files beginning with these chars
$ignore_first_chars = ['.', '_', '!'];

// Include widgets
// We look for a PHP file with the same name as the directory - e.g.
// /widgets/widgetname/widgetname.php
$widget_dir = $pluginDir.'widgets';

if ($handle = opendir($widget_dir)){
	while (($file = readdir($handle)) !== false){
		if (
			!in_array(substr($file, 0, 1), $ignore_first_chars) &&
			$file != '..' &&
			is_dir($widget_dir.'/'.$file)
		){
			include_once($widget_dir.'/'.$file.'/'.$file.'.php');
		}
	}
	
	closedir($handle);
}

$mm_current_page = [];

//Get page template
if (isset($e->params['template'])){
	$mm_current_page['template'] = $e->params['template'];
}else if (isset($_POST['template'])){
	$mm_current_page['template'] = $_POST['template'];
}else if (isset($content['template'])){
	$mm_current_page['template'] = $content['template'];
}else if (isset($template)){
	$mm_current_page['template'] = $template;
}else{
	$mm_current_page['template'] = $default_template;
}

$mm_current_page['role'] = $_SESSION['mgrRole'];

// What are the fields we can change, and what types are they?
$mm_fields = [
	'pagetitle' => ['fieldtype' => 'input', 'fieldname' => 'pagetitle', 'dbname' => 'pagetitle', 'tv' => false],
	'longtitle' => ['fieldtype' => 'input', 'fieldname' => 'longtitle', 'dbname' => 'longtitle', 'tv' => false],
	'description' => ['fieldtype' => 'input', 'fieldname' => 'description', 'dbname' => 'description', 'tv' => false],
	'alias' => ['fieldtype' => 'input', 'fieldname' => 'alias', 'dbname' => 'alias', 'tv' => false],
	'link_attributes' => ['fieldtype' => 'input', 'fieldname' => 'link_attributes', 'dbname' => 'link_attributes', 'tv' => false],
	'introtext' => ['fieldtype' => 'textarea', 'fieldname' => 'introtext', 'dbname' => 'introtext', 'tv' => false],
	'template' => ['fieldtype' => 'select', 'fieldname' => 'template', 'dbname' => 'template', 'tv' => false],
	'menutitle' => ['fieldtype' => 'input', 'fieldname' => 'menutitle','dbname' => 'menutitle', 'tv' => false],
	'menuindex' => ['fieldtype' => 'input', 'fieldname' => 'menuindex', 'dbname' => 'menuindex', 'tv' => false],
	'show_in_menu' => ['fieldtype' => 'input', 'fieldname' => 'hidemenucheck','dbname' => 'hidemenu', 'tv' => false],
	// synonym for show_in_menu
	'hide_menu' => ['fieldtype' => 'input', 'fieldname' => 'hidemenucheck', 'dbname' => 'hidemenu', 'tv' => false],
	'parent' => ['fieldtype' => 'input', 'fieldname' => 'parent', 'dbname' => 'parent', 'tv' => false],
	'is_folder' => ['fieldtype' => 'input', 'fieldname' => 'isfoldercheck', 'dbname' => 'isfolder', 'tv' => false],
	'alias_visible' => ['fieldtype' => 'input', 'fieldname' => 'alias_visible_check', 'dbname' => 'alias_visible', 'tv' => false],
	'is_richtext' => ['fieldtype' => 'input', 'fieldname' => 'richtextcheck','dbname' => 'richtext', 'tv' => false],
	'donthit' => ['fieldtype' => 'input', 'fieldname' => 'donthitcheck', 'dbname' => 'donthit', 'tv' => false],
	'published' => ['fieldtype' => 'input', 'fieldname' => 'publishedcheck','dbname' => 'published', 'tv' => false],
	'pub_date' => ['fieldtype' => 'input', 'fieldname' => 'pub_date', 'dbname' => 'pub_date', 'tv' => false],
	'unpub_date' => ['fieldtype' => 'input', 'fieldname' => 'unpub_date', 'dbname' => 'unpub_date', 'tv' => false],
	'searchable' => ['fieldtype' => 'input', 'fieldname' => 'searchablecheck','dbname' => 'searchable', 'tv' => false],
	'cacheable' => ['fieldtype' => 'input', 'fieldname' => 'cacheablecheck', 'dbname' => 'cacheable', 'tv' => false],
	'clear_cache' => ['fieldtype' => 'input', 'fieldname' => 'syncsitecheck','dbname' => '', 'tv' => false],
	'content_type' => ['fieldtype' => 'select', 'fieldname' => 'contentType', 'dbname' => 'contentType', 'tv' => false],
	'content_dispo' => ['fieldtype' => 'select', 'fieldname' => 'content_dispo', 'dbname' => 'content_dispo', 'tv' => false],
	'keywords' => ['fieldtype' => 'select', 'fieldname' => 'keywords[]', 'dbname' => '', 'tv' => false],
	'metatags' => ['fieldtype' => 'select', 'fieldname' => 'metatags[]', 'dbname' => '', 'tv' => false],
	'content' => ['fieldtype' => 'textarea', 'fieldname' => 'ta', 'dbname' => 'content', 'tv' => false],
	'which_editor' => ['fieldtype' => 'select', 'fieldname' => 'which_editor','dbname' => '', 'tv' => false],
	'resource_type' => ['fieldtype' => 'select', 'fieldname' => 'type', 'dbname' => 'isfolder', 'tv' => false],
	'weblink' => ['fieldtype' => 'input', 'fieldname' => 'ta', 'dbname' => 'content', 'tv' => false]
];

// Add in TVs to the list of available fields
$allTvs = $modx->db->makeArray($modx->db->select(
	'name,type,id',
	ddTools::$tables['site_tmplvars'],
	'',
	'name ASC'
));
foreach ($allTvs as $thisTv){
	// What is the field name?
	$fieldName = $thisTv['name'];
	
	// Checkboxes place an underscore in the ID, so accommodate this...
	$fieldName_suffix = '';
	
	// What fieldtype is this TV type?
	// fix for MODX EVO 1.1 by Dmi3yy
	$thisTvI = explode(':', $thisTv['type']);	
	switch ($thisTvI[0]){
		case 'textarea':
		case 'rawtextarea':
		case 'textareamini':
		case 'richtext':
		case 'custom_tv':
			$fieldType = 'textarea';
		break;
		
		case 'dropdown':
		case 'listbox':
			$fieldType = 'select';
		break;
		
		case 'listbox-multiple':
			$fieldType = 'select';
			$fieldName_suffix = '[]';
		break;
		
		case 'checkbox':
			$fieldType = 'input';
			$fieldName_suffix = '[]';
		break;
		
		default:
			$fieldType = 'input';
		break;
	}
	
	// check if there are any name clashes between TVs and default field names? If there is, preserve the default field
	if (!isset($mm_fields[$fieldName])){
		$mm_fields[$fieldName] = [
			'fieldtype' => $fieldType,
			'fieldname' => 'tv'.$thisTv['id'].$fieldName_suffix,
			'dbname' => '',
			'tv' => true
		];
	}
}

/**
 * ManagerManager_includeRules
 * @version 1.0 (2016-11-10)
 * 
 * @desc Include the rules.
 * 
 * @param $chunkName {string} — Chunk that contains rules. Default: —.
 * 
 * @return {string} — Including status message.
 */
if (!function_exists('ManagerManager_includeRules')){function ManagerManager_includeRules($chunkName){
	//Global modx object & $content for rules
	global $modx, $content;
	
	$result = '';
	
	$configFilePath = $modx->config['base_path'].'assets/plugins/managermanager/mm_rules.inc.php';
	
	//See if there is any chunk output (e.g. it exists, and is not empty)
	$chunkContent = $modx->getChunk($chunkName);
	if (!empty($chunkContent)){
		// If there is, run it.
		eval($chunkContent);
		$result = '// Getting rules from chunk: '.$chunkName;
	//If there's no chunk output, read in the file.
	}else if (is_readable($configFilePath)){
		include($configFilePath);
		$result = '// Getting rules from file: '.$configFilePath;
	}else{
		$result = '// No rules found';
	}
	
	return $result.PHP_EOL.PHP_EOL;
}}

/**
 * ManagerManger_initJQddMM
 * @version 1.1 (2017-05-12)
 * 
 * @desc jQuery.ddMM initialization.
 * 
 * @return {string_js}
 */
if (!function_exists('ManagerManger_initJQddMM')){function ManagerManger_initJQddMM(){
	global $modx, $_lang, $mm_fields;
	
	$result =
'
$j.ddMM.config.site_url = "'.$modx->config['site_url'].'";
$j.ddMM.config.datetime_format = "'.$modx->config['datetime_format'].'";
$j.ddMM.config.datepicker_offset = '.$modx->config['datepicker_offset'].';

$j.ddMM.lang.dp_dayNames = '.$_lang['dp_dayNames'].';
$j.ddMM.lang.dp_monthNames = '.$_lang['dp_monthNames'].';
$j.ddMM.lang.dp_startDay = '.$_lang['dp_startDay'].';
$j.ddMM.lang.edit = "'.$_lang['edit'].'";

$j.ddMM.urls.manager = "'.MODX_MANAGER_URL.'";

$j.ddMM.fields = $j.parseJSON(\''.json_encode($mm_fields).'\');
';
	
	return $result;
}}

// The start of adding or editing a document (before the main form)
switch ($e->name){
	// if it's the plugin config form, give us a copy of all the relevant values
	case 'OnPluginFormRender':
		$editingPluginName = $modx->db->getValue($modx->db->select(
			'name',
			$modx->getFullTableName('site_plugins'),
			// The ID of the plugin we're editing
			'id='.$e->params['id']
		));
		
		// if it's the right plugin
		if (strtolower($editingPluginName) == 'managermanager'){
			// Get all templates
			$allTemplates = $modx->db->makeArray($modx->db->select(
				'templatename, id, description',
				$modx->getFullTableName('site_templates'),
				'',
				'templatename ASC'
			));
			
			$output_templates = '<table>';
			$output_templates .= '<tr><th class="gridHeader">Template name</th><th class="gridHeader">Template description</th><th class="gridHeader">ID</th></tr>';
			$output_templates .= '<tr><td class="gridItem">(blank)</td><td class="gridItem">Blank</td><td class="gridItem">0</td></tr>';
			
			foreach ($allTemplates as $count => $tpl){
				$class = ($count % 2) ? 'gridItem':'gridAltItem';
				$output_templates .= '<tr>';
				$output_templates .= '<td class="'.$class.'">'.jsSafe($tpl['templatename']).'</td>';
				$output_templates .= '<td class="'.$class.'">'.jsSafe($tpl['description']).'</td>';
				$output_templates .= '<td class="'.$class.'">'.$tpl['id'].'</td>';
				$output_templates .= '</tr>';
			}
			
			$output_templates .= '</table>';
			
			// Get all tvs
			$allTvs = $modx->db->makeArray($modx->db->select(
				'name,caption,id',
				ddTools::$tables['site_tmplvars'],
				'',
				'name ASC'
			));
			
			$output_tvs = '<table>';
			$output_tvs .= '<tr><th class="gridHeader">TV name</th><th class="gridHeader">TV caption</th><th class="gridHeader">ID</th></tr>';
			
			foreach ($allTvs as $count => $tv){
				$class = ($count % 2) ? 'gridItem' : 'gridAltItem';
				$output_tvs .= '<tr>';
				$output_tvs .= '<td class="'.$class.'">'.jsSafe($tv['name']).'</td>';
				$output_tvs .= '<td class="'.$class.'">'.jsSafe($tv['caption']).'</td>';
				$output_tvs .= '<td class="'.$class.'">'.$tv['id'].'</td>';
				$output_tvs .= '</tr>';
			}
			
			$output_tvs .= '</table>';
			
			// Get all roles
			$allRoles = $modx->db->makeArray($modx->db->select(
				'name, id',
				$modx->getFullTableName('user_roles'),
				'',
				'name ASC'
			));
			
			$output_roles = '<table>';
			$output_roles .= '<tr><th class="gridHeader">Role name</th><th class="gridHeader">ID</th></tr>';
			
			foreach ($allRoles as $count => $role){
				$class = ($count % 2) ? 'gridItem' : 'gridAltItem';
				$output_roles .= '<tr>';
				$output_roles .= '<td class="'.$class.'">'.jsSafe($role['name']).'</td>';
				$output_roles .= '<td class="'.$class.'">'.$role['id'].'</td>';
				$output_roles .= '</tr>';
			}
			
			$output_roles .= '</table>';
			
			// Load the jquery library
			$output = '<!-- Begin ManagerManager output -->'.PHP_EOL;
			if(
				!isset($modx->config['mgr_jquery_path']) ||
				empty($modx->config['mgr_jquery_path'])
			){
				$output .= includeJsCss($jsUrls['jq']['url'], 'html', $jsUrls['jq']['name'], $jsUrls['jq']['version']);
			}
			$output .= includeJsCss($jsUrls['mm']['url'], 'html', $jsUrls['mm']['name'], $jsUrls['mm']['version']);
			
			$output .= '<script type="text/javascript">'.PHP_EOL;
			//produces var $j = jQuery.noConflict();
			$output .= 'var $j = jQuery.noConflict();'.PHP_EOL;
			
			$output .= ManagerManger_initJQddMM();
			
			$output .= 'mm_lastTab = "tabEvents";'.PHP_EOL;
			$e->output($output);
			
			mm_createTab('Templates, TVs &amp; Roles', 'rolestemplates', '', '', '<p>These are the IDs for current templates,tvs and roles in your site.</p>'.$output_templates.'&nbsp;'.$output_tvs.'&nbsp;'.$output_roles);
			
			$e->output('</script>');
			$e->output('<!-- End ManagerManager output -->'.PHP_EOL);
		}
	break;
	
	case 'OnDocFormPrerender':
		$e->output('<!-- Begin ManagerManager output -->'.PHP_EOL);
		// Load the js libraries
		if(
			!isset($modx->config['mgr_jquery_path']) ||
			empty($modx->config['mgr_jquery_path'])
		){
			$e->output(includeJsCss($jsUrls['jq']['url'], 'html', $jsUrls['jq']['name'], $jsUrls['jq']['version']));
		}
		$e->output(includeJsCss($jsUrls['mm']['url'], 'html', $jsUrls['mm']['name'], $jsUrls['mm']['version']));
		$e->output(includeJsCss($jsUrls['ddTools']['url'], 'html', $jsUrls['ddTools']['name'], $jsUrls['ddTools']['version']));
		
		// Create a mask to cover the page while the fields are being rearranged
		$e->output(
'
<div id="loadingmask">&nbsp;</div>
<script type="text/javascript">
window.$j = jQuery.noConflict();
'.ManagerManger_initJQddMM().'
$j("#loadingmask").css({
	width: "100%",
	minHeight: "100%",
	position: "absolute",
	zIndex: "1000",
	backgroundColor: "#ffffff"
});

$j(function(){
	$j("#loadingmask").css({height: $j("body").height()});
});
</script>
');
		
		//Just run widgets
		ManagerManager_includeRules($e->params['config_chunk']);
		
		$e->output('<!-- End ManagerManager output -->'.PHP_EOL);
	break;
	
	// The main document editing form
	case 'OnDocFormRender':
		// Include the JQuery call
		$e->output('
<!-- ManagerManager Plugin :: '.$mm_version.' -->
<!-- This document is using template: '. $mm_current_page['template'] .' -->
<!-- You are logged into the following role: '. $mm_current_page['role'] .' -->

<script type="text/javascript" charset="'.$modx->config['modx_charset'].'">
	var mm_lastTab = "tabGeneral";
	var mm_sync_field_count = 0;
	var synch_field = new Array();
	
	$j(document).ready(function(){
		// Lets handle errors nicely...
		try {
			// Change section index depending on Content History running or not
			//ch-body is the CH id name (currently at least)
			var sidx = ($j("div.sectionBody:eq(1)").attr("id") == "ch-body") ? 1 : 0;
			
			// Give IDs to the sections of the form
			// This assumes they appear in a certain order
			$j("div.sectionHeader:eq(sidx)").attr("id", "sectionContentHeader");
			$j("div.sectionHeader:eq(sidx+1)").attr("id", "sectionTVsHeader");
			
			$j("div.sectionBody:eq(sidx+1)").attr("id", "sectionContentBody");
			$j("div.sectionBody:eq(sidx+2)").attr("id", "sectionTVsBody");
		');
		
		// Get the JS for the changes & display the status
		$e->output(ManagerManager_includeRules($e->params['config_chunk']));
		
		// Close it off
		$e->output('
			// Misc tidying up
			
			// General tab table container is too narrow for receiving TVs -- make it a bit wider
			$j("div#tabGeneral table").attr("width", "100%");
			
			// if template variables containers are empty, remove their section
			if ($j("div.tmplvars :input").length == 0){
				// Still contains an empty table and some dividers
				$j("div.tmplvars").hide();
				// Still contains an empty table and some dividers
				$j("div.tmplvars").prev("div").hide();
				//$j("#sectionTVsHeader").hide();
			}
			
			// If template category is empty, hide the optgroup
			$j("#template optgroup").each(function(){
				var $this = $j(this),
					visibleOptions = 0;
				
				$this.find("option").each(function(){
					if ($j(this).css("display") != "none"){visibleOptions++;}
				});
				
				if (visibleOptions == 0){$this.remove();}
			});
		}catch(e){
			// If theres an error, fail nicely
			alert("ManagerManager: An error has occurred: " + e.name + " - " + e.message);
		}finally{
			// Whatever happens, hide the loading mask
			$j("#loadingmask").hide();
		}
	});
</script>
<!-- ManagerManager Plugin :: End -->
		');
	break;
	
	case 'OnTVFormRender':
		// Should we remove deprecated Template variable types from the TV creation list?
		$removeDeprecatedTvTypes = ($e->params['remove_deprecated_tv_types_pref'] == 'yes') ? true : false;
		
		if ($removeDeprecatedTvTypes){
			// Load the jquery library
			echo '<!-- Begin ManagerManager output -->';
			
			if(
				!isset($modx->config['mgr_jquery_path']) ||
				empty($modx->config['mgr_jquery_path'])
			){
				echo includeJsCss($jsUrls['jq']['url'], 'html', $jsUrls['jq']['name'], $jsUrls['jq']['version']);
			}
			
			// Create a mask to cover the page while the fields are being rearranged
			echo '
<script type="text/javascript">
	var $j = jQuery.noConflict();
	
	$j("select[name="type"] option").each(function(){
		var $this = $j(this);
		if(!($this.text().match("deprecated") == null)){
			$this.remove();
		}
	});
</script>
			';
			
			echo '<!-- End ManagerManager output -->';
		}
	break;
	
	case 'OnDocDuplicate':
		//Get document template from db
		$mm_current_page['template'] = $modx->db->getValue($modx->db->select(
			'template',
			ddTools::$tables['site_content'],
			'`id` = '.$e->params['new_id']
		));
		
		//Just run widgets
		ManagerManager_includeRules($e->params['config_chunk']);
	break;
	
	case 'OnDocFormSave':
	case 'OnBeforeDocFormSave':
		//Just run widgets
		ManagerManager_includeRules($e->params['config_chunk']);
	break;
}
?>
<?php
/**
 * ManagerManager plugin
 * @version 0.6.2 (2014-05-28)
 * 
 * @for MODx Evolution 1.0.x
 * 
 * @desc Used to manipulate the display of document fields in the manager.
 * 
 * @link http://code.divandesign.biz/modx/managermanager/0.6.2
 * 
 * @author DivanDesign studio (www.DivanDesign.biz), Nick Crossland (www.rckt.co.uk)
 * 
 * @inspiration HideEditor plugin by Timon Reinhard and Gildas; HideManagerFields by Brett @ The Man Can!
 * 
 * @license Released under the GNU General Public License: http://creativecommons.org/licenses/GPL/2.0/
 * 
 * @copyright 2014
 */

class MANAGERMANAGER
{

	function MANAGERMANAGER() {
		$this->setVariables();
	}
	
	function setVariables() {
		global $modx;
		
		$this->mm_version = '0.6.2';
		$this->pluginDir = $modx->config['base_path'].'assets/plugins/managermanager/';
		
		$this->jsUrls = array(
			'jq' => array(
				'url' => $modx->config['site_url'].'assets/plugins/managermanager/js/jquery-1.9.1.min.js',
				'name' => 'jquery',
				'version' => '1.9.1'
			),
			'mm' => array(
				'url' => $modx->config['site_url'].'assets/plugins/managermanager/js/jquery.ddMM.js',
				'name' => 'ddMM',
				'version' => '1.2.1'
			),
			'ddTools' => array(
				'url' => $modx->config['site_url'].'assets/plugins/managermanager/js/jquery.ddTools-1.8.6.min.js',
				'name' => 'jquery.ddTools',
				'version' => '1.8.6'
			)
		);
		
		global $mm_fields;
		$mm_fields = $this->getFieldsInfo();
	}
	
	function run() {
		global $modx;
		
		// Bring in some preferences which have been set on the configuration tab of the plugin, and normalise them
		
		// Current event
		global $e;
		$e = &$modx->Event;
		
		if (!isset($e->params['config_chunk'])){$e->params['config_chunk'] = '';}
		
		
		// Set variables
		global $content, $template, $default_template, $mm_current_page, $mm_fields, $mm_includedJsCss;
		
		if (!is_array($mm_includedJsCss)){
			$mm_includedJsCss = array();
		}
		
		//Include ddTools (needed for some widgets)
		include_once($this->pluginDir.'modx.ddtools.class.php');
		//Include Utilites
		include_once($this->pluginDir.'utilities.inc.php');
		
		// When loading widgets, ignore folders / files beginning with these chars
		$ignore_first_chars = array('.', '_', '!');
		
		// Include widgets
		// We look for a PHP file with the same name as the directory - e.g.
		// /widgets/widgetname/widgetname.php
		$widget_dir = $this->pluginDir.'widgets';
		
		if ($handle = opendir($widget_dir)){
			while (false !== ($file = readdir($handle))){
				if (!in_array(substr($file, 0, 1), $ignore_first_chars) && $file != '..' && is_dir($widget_dir.'/'.$file)){
						include_once($widget_dir.'/'.$file.'/'.$file.'.php');
				}
			}
			
			closedir($handle);
		}
		
		$mm_current_page = array();
		
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
		
		// Add in TVs to the list of available fields
		$all_tvs = $modx->db->makeArray($modx->db->select('name,type,id', $modx->getFullTableName('site_tmplvars'), '', 'name ASC'));
		foreach ($all_tvs as $thisTv){
			// What is the field name?
			$n = $thisTv['name'];
			
			// Checkboxes place an underscore in the ID, so accommodate this...
			$fieldname_suffix = '';
			
			// What fieldtype is this TV type?
			switch ($thisTv['type']){
				case 'textarea':
				case 'rawtextarea':
				case 'textareamini':
				case 'richtext':
				case 'custom_tv':
					$t = 'textarea';
				break;
				
				case 'dropdown':
				case 'listbox':
					$t = 'select';
				break;
				
				case 'listbox-multiple':
					$t = 'select';
					$fieldname_suffix = '[]';
				break;
				
				case 'checkbox':
					$t = 'input';
					$fieldname_suffix = '[]';
				break;
				
				default:
					$t = 'input';
				break;
			}
			
			// check if there are any name clashes between TVs and default field names? If there is, preserve the default field
			if (!isset($mm_fields[$n])){
				$mm_fields[$n] = array('fieldtype' => $t, 'fieldname' => 'tv'.$thisTv['id'].$fieldname_suffix, 'dbname' => '', 'tv' => true);
			}
		}
		
		// The start of adding or editing a document (before the main form)
		switch ($e->name){
			// if it's the plugin config form, give us a copy of all the relevant values
			case 'OnPluginFormRender':
				// The ID of the plugin we're editing
				$plugin_id_editing = $e->params['id'];
				$result = $modx->db->select('name', $modx->getFullTableName('site_plugins'), 'id='.$plugin_id_editing);
				$plugin_editing_name = $modx->db->getValue($result);
				
				// if it's the right plugin
				if (strtolower($plugin_editing_name) == 'managermanager'){
					// Get all templates
					$result = $modx->db->select('templatename, id, description', $modx->getFullTableName('site_templates'), '', 'templatename ASC');
					$all_templates = $modx->db->makeArray($result);
					
					$template_table = '<table>';
					$template_table .= '<tr><th class="gridHeader">Template name</th><th class="gridHeader">Template description</th><th class="gridHeader">ID</th></tr>';
					$template_table .= '<tr><td class="gridItem">(blank)</td><td class="gridItem">Blank</td><td class="gridItem">0</td></tr>';
					
					foreach ($all_templates as $count => $tpl){
						$class = ($count % 2) ? 'gridItem':'gridAltItem';
						$template_table .= '<tr>';
						$template_table .= '<td class="'.$class.'">'.jsSafe($tpl['templatename']).'</td>';
						$template_table .= '<td class="'.$class.'">'.jsSafe($tpl['description']).'</td>';
						$template_table .= '<td class="'.$class.'">'.$tpl['id'].'</td>';
						$template_table .= '</tr>';
					}
					
					$template_table .= '</table>';
					
					// Get all tvs
					$result = $modx->db->select('name,caption,id', $modx->getFullTableName('site_tmplvars'), '', 'name ASC');
					$all_tvs = $modx->db->makeArray($result);
					$tvs_table = '<table>';
					$tvs_table .= '<tr><th class="gridHeader">TV name</th><th class="gridHeader">TV caption</th><th class="gridHeader">ID</th></tr>';
					
					foreach ($all_tvs as $count => $tv){
						$class = ($count % 2) ? 'gridItem' : 'gridAltItem';
						$tvs_table .= '<tr>';
						$tvs_table .= '<td class="'.$class.'">'.jsSafe($tv['name']).'</td>';
						$tvs_table .= '<td class="'.$class.'">'.jsSafe($tv['caption']).'</td>';
						$tvs_table .= '<td class="'.$class.'">'.$tv['id'].'</td>';
						$tvs_table .= '</tr>';
					}
					
					$tvs_table .= '</table>';
					
					// Get all roles
					$result = $modx->db->select('name, id', $modx->getFullTableName('user_roles'), '', 'name ASC');
					$all_roles = $modx->db->makeArray($result);
					
					$roles_table = '<table>';
					$roles_table .= '<tr><th class="gridHeader">Role name</th><th class="gridHeader">ID</th></tr>';
					
					foreach ($all_roles as $count => $role){
						$class = ($count % 2) ? 'gridItem' : 'gridAltItem';
						$roles_table .= '<tr>';
						$roles_table .= '<td class="'.$class.'">'.jsSafe($role['name']).'</td>';
						$roles_table .= '<td class="'.$class.'">'.$role['id'].'</td>';
						$roles_table .= '</tr>';
					}
					
					$roles_table .= '</table>';
					
					// Load the jquery library
					$output = '<!-- Begin ManagerManager output -->'."\n";
					$output .= includeJsCss($this->jsUrls['jq']['url'], 'html', $this->jsUrls['jq']['name'], $this->jsUrls['jq']['version']);
					$output .= includeJsCss($this->jsUrls['mm']['url'], 'html', $this->jsUrls['mm']['name'], $this->jsUrls['mm']['version']);
					
					$output .= '<script type="text/javascript">'."\n";
					//produces var $j = jQuery.noConflict();
					$output .= "var \$j = jQuery.noConflict(); \n";
					
					$output .= $this->initJQddManagerManager();
					
					$output .= "mm_lastTab = 'tabEvents'; \n";
					$e->output($output);
					
					mm_createTab('Templates, TVs &amp; Roles', 'rolestemplates', '', '', '<p>These are the IDs for current templates,tvs and roles in your site.</p>'.$template_table.'&nbsp;'.$tvs_table.'&nbsp;'.$roles_table);
					
					$e->output('</script>');
					$e->output('<!-- End ManagerManager output -->'."\n");
				}
			break;
			
			case 'OnDocFormPrerender':
				$e->output("<!-- Begin ManagerManager output -->\n");
				// Load the js libraries
				$e->output(includeJsCss($this->jsUrls['jq']['url'], 'html', $this->jsUrls['jq']['name'], $this->jsUrls['jq']['version']));
				$e->output(includeJsCss($this->jsUrls['mm']['url'], 'html', $this->jsUrls['mm']['name'], $this->jsUrls['mm']['version']));
				$e->output(includeJsCss($this->jsUrls['ddTools']['url'], 'html', $this->jsUrls['ddTools']['name'], $this->jsUrls['ddTools']['version']));
				
				// Create a mask to cover the page while the fields are being rearranged
				$e->output(
'
<div id="loadingmask">&nbsp;</div>
<script type="text/javascript">
window.$j = jQuery.noConflict();
'.$this->initJQddManagerManager().'
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
				$this->make_changes($e->params['config_chunk']);
				
				$e->output("<!-- End ManagerManager output -->\n");
			break;
			
			// The main document editing form
			case 'OnDocFormRender':
				// Include the JQuery call
				$e->output('
<!-- ManagerManager Plugin :: '.$this->mm_version.' -->
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
				$e->output($this->make_changes($e->params['config_chunk']));
				
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
			
			// Re-initiate the tooltips, in order for them to pick up any new help text which has been added
			// This bit is MooTools, matching code inserted further up the page
			if(!window.ie6){
				$$(".tooltip").each(function(help_img){
					help_img.setProperty("title", help_img.getProperty("alt"));
				});
				new Tips($$(".tooltip"), {className:"custom"});
			}
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
				$remove_deprecated_tv_types = ($e->params['remove_deprecated_tv_types_pref'] == 'yes') ? true : false;
				
				if ($remove_deprecated_tv_types){
					// Load the jquery library
					echo '<!-- Begin ManagerManager output -->';
					echo includeJsCss($this->jsUrls['jq']['url'], 'html', $this->jsUrls['jq']['name'], $this->jsUrls['jq']['version']);
					
					// Create a mask to cover the page while the fields are being rearranged
					echo '
<script type="text/javascript">
	var $j = jQuery.noConflict();
	
	$j("select[name=type] option").each(function(){
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
				$mm_current_page['template'] = $modx->db->getValue($modx->db->select('template', ddTools::$tables['site_content'], '`id` = '.$e->params['new_id']));
				
				//Just run widgets
				$this->make_changes($e->params['config_chunk']);
			break;
			
			case 'OnDocFormSave':
			case 'OnBeforeDocFormSave':
				//Just run widgets
				$this->make_changes($e->params['config_chunk']);
			break;
		}
	}
	
// Get the contents of the config chunk, and put it in the “make_changes” function, to be run at the appropriate moment later on
	function make_changes($chunk){
		//Global modx object & $content for rules
		global $modx, $content;
		
		$config_file = $modx->config['base_path'].'assets/plugins/managermanager/mm_rules.inc.php';
		
		//See if there is any chunk output (e.g. it exists, and is not empty)
		$chunk_output = $modx->getChunk($chunk);
		if (!empty($chunk_output)){
			// If there is, run it.
			eval($chunk_output);
			return "// Getting rules from chunk: $chunk \n\n";
		//If there's no chunk output, read in the file.
		}else if (is_readable($config_file)){
			include($config_file);
			return "// Getting rules from file: $config_file \n\n";
		}else{
			return "// No rules found \n\n";
		}
	}

	function initJQddManagerManager(){
		global $modx, $mm_fields;
		
		$output =
'
$j.ddMM.config.site_url = "'.$modx->config['site_url'].'";
$j.ddMM.config.datetime_format = "'.$modx->config['datetime_format'].'";
$j.ddMM.config.datepicker_offset = '.$modx->config['datepicker_offset'].';

$j.ddMM.urls.manager = "'.MODX_MANAGER_URL.'";

$j.ddMM.fields = $j.parseJSON(\''.json_encode($mm_fields).'\');
';
		
		return $output;
	}
	
	function getFieldsInfo() {
		// What are the fields we can change, and what types are they?
		$_ = array();
		$_['pagetitle']       = 'input,   pagetitle,          pagetitle';
		$_['longtitle']       = 'input,   longtitle,          longtitle';
		$_['description']     = 'input,   description,        description';
		$_['alias']           = 'input,   alias,              alias';
		$_['link_attributes'] = 'input,   link_attributes,    link_attributes';
		$_['introtext']       = 'textarea,introtext,          introtext';
		$_['template']        = 'select,  template,           template';
		$_['menutitle']       = 'input,   menutitle,          menutitle';
		$_['menuindex']       = 'input,   menuindex,          menuindex';
		$_['show_in_menu']    = 'input,   hidemenucheck,      hidemenu';
			// synonym for show_in_menu
		$_['hide_menu']       = 'input,   hidemenucheck,      hidemenu';
		$_['parent']          = 'input,   parent,             parent';
		$_['is_folder']       = 'input,   isfoldercheck,      isfolder';
		$_['alias_visible']   = 'input,   alias_visible_check,alias_visible';
		$_['is_richtext']     = 'input,   richtextcheck,      richtext';
		$_['log']             = 'input,   donthitcheck,       donthit';
		$_['published']       = 'input,   publishedcheck,     published';
		$_['pub_date']        = 'input,   pub_date,           pub_date';
		$_['unpub_date']      = 'input,   unpub_date,         unpub_date';
		$_['searchable']      = 'input,   searchablecheck,    searchable';
		$_['cacheable']       = 'input,   cacheablecheck,     cacheable';
		$_['clear_cache']     = 'input,   syncsitecheck,';
		$_['content_type']    = 'select,  contentType,        contentType';
		$_['content_dispo']   = 'select,  content_dispo,      content_dispo';
		$_['keywords']        = 'select,  keywords[],';
		$_['metatags']        = 'select,  metatags[],';
		$_['content']         = 'textarea,ta,                 content';
		$_['which_editor']    = 'select,  which_editor,';
		$_['resource_type']   = 'select,  type,               isfolder';
		$_['weblink']         = 'input,   ta,                 content';
		$mm_fields = array();
		foreach($_ as $k=>$v)
		{
			$a = explode(',', $v);
			$mm_fields[$k]['fieldtype'] = trim($a[0]);
			$mm_fields[$k]['fieldname'] = trim($a[1]);
			$mm_fields[$k]['dbname']    = trim($a[2]);
			$mm_fields[$k]['tv']        = false;
		}
		return $mm_fields;
	}
}
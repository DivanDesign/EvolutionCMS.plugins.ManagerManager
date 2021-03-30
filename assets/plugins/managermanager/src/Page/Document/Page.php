<?php
namespace ManagerManager\Page\Document;

use ManagerManager\Core;

class Page extends \ManagerManager\Page\Page {
	public
		$template
	;
	
	protected
		$injectedHTML = [
			'OnDocFormPrerender' => [
				[
					'name' => 'div',
					'data' => [
						'attrs.id' => 'loadingmask',
						'content' => '&nbsp;'
					]
				],
				[
					'name' => 'script',
					'params' => [
						'data' => [
							'content' => '
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
							'
						]
					]
				]
			],
			'OnDocFormRender' => [
				[
					'name' => 'script',
					'data' => [
						'content' => '
window.mm_lastTab = "tabGeneral";
window.mm_sync_field_count = 0;
window.synch_field = new Array();

$j(document).ready(function(){
	//Change section index depending on Content History running or not
	//ch-body is the CH id name (currently at least)
	var sidx = ($j("div.sectionBody:eq(1)").attr("id") == "ch-body") ? 1 : 0;
	
	//Give IDs to the sections of the form
	//This assumes they appear in a certain order
	$j("div.sectionHeader:eq(sidx)").attr(
		"id",
		"sectionContentHeader"
	);
	$j("div.sectionHeader:eq(sidx + 1)").attr(
		"id",
		"sectionTVsHeader"
	);
	
	$j("div.sectionBody:eq(sidx + 1)").attr(
		"id",
		"sectionContentBody"
	);
	$j("div.sectionBody:eq(sidx + 2)").attr(
		"id",
		"sectionTVsBody"
	);
	
	//TODO: Is it still needed?
	//General tab table container is too narrow for receiving TVs -- make it a bit wider
	$j("div#tabGeneral table").attr(
		"width",
		"100%"
	);
	
	//If template variables containers are empty, remove their section
	if ($j("div.tmplvars :input").length == 0){
		//Still contains an empty table and some dividers
		$j("div.tmplvars").hide();
		//Still contains an empty table and some dividers
		$j("div.tmplvars").prev("div").hide();
		//$j("#sectionTVsHeader").hide();
	}
	
	//If template category is empty, hide the optgroup
	$j("#template optgroup").each(function(){
		var $this = $j(this),
			visibleOptions = 0;
		
		$this.find("option").each(function(){
			if ($j(this).css("display") != "none"){
				visibleOptions++;
			}
		});
		
		if (visibleOptions == 0){
			$this.remove();
		}
	});
});
						'
					]
				]
			]
		]
	;
	
	/**
	 * __construct
	 * @version 1.0 (2019-01-24)
	 */
	public function __construct(){
		parent::__construct();
		
		//Init current page data
		$this->fillCurrentTemplate();
	}
	
	/**
	 * fillCurrentTemplate
	 * @version 1.0.2 (2021-03-09)
	 * 
	 * @return {void}
	 */
	private function fillCurrentTemplate(){
		global
			$content,
			$template,
			$default_template
		;
		
		//Get page template
		if (isset($this->event->params['template'])){
			$this->template = $this->event->params['template'];
		}elseif (isset($_POST['template'])){
			$this->template = $_POST['template'];
		}elseif (isset($content['template'])){
			$this->template = $content['template'];
		}elseif (isset($template)){
			$this->template = $template;
		}else{
			$this->template = $default_template;
		}
	}
	
	/**
	 * isRuleMatched
	 * @version 2.0.1 (2019-02-21)
	 * 
	 * @desc Pass isRuleMatched a comma separated list of allowed roles and templates, and it will return TRUE or FALSE to indicate whether this rule should be run on this page.
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params.
	 * @param $params->role {array|stringCommaSeparated} — Roles. Default: ''.
	 * @param $params->template {array|stringCommaSeparated} — Templates. Default: ''.
	 * 
	 * @return {boolean}
	 */
	public function isRuleMatched($params = []){
		//Defaults
		$params = (object) array_merge(
			[
				'role' => '',
				'template' => ''
			],
			(array) $params
		);
		
		return parent::isRuleMatched($params);
	}
	
	/**
	 * fireCurrentEvent
	 * @version 1.0.2 (2020-05-20)
	 * 
	 * @return {void}
	 */
	public function fireCurrentEvent(){
		//Validate event
		if (in_array(
			$this->event->name,
			[
				'OnDocFormPrerender',
				'OnDocFormRender',
				'OnDocDuplicate',
				'OnBeforeDocFormSave',
				'OnDocFormSave',
			]
		)){
			switch ($this->event->name){
				case 'OnDocFormRender':
					//TODO: Is it needed?
					array_unshift(
						$this->injectedHTML->{$this->event->name},
						(object) [
							'name' => 'comment',
							'data' => [
								'content' =>
									'This document is using template: ' .
									$this->template
							]
						],
						(object) [
							'name' => 'comment',
							'data' => [
								'content' =>
									'You are logged into the following role: ' .
									$this->role
							]
						]
					);
				break;
				
				case 'OnDocDuplicate':
					//Get document template from db
					$this->template = $modx->db->getValue($modx->db->select(
						'template',
						\ddTools::$tables['site_content'],
						'`id` = ' . $this->event->params['new_id']
					));
				break;
			}
			
			parent::fireCurrentEvent();
			
			//TODO: Remove it
			if ($this->event->name == 'OnDocFormRender'){
				//TODO: Don't use “$this->event->output” here and “$this->applyRules”
				$this->event->output('
<script type="text/javascript" charset="' . \ddTools::$modx->getConfig('modx_charset') . '">
$j(document).ready(function(){
	//Lets handle errors nicely…
	try {
				');
				
				$this->event->output($this->applyRules());
				
				$this->event->output('
	}catch(e){
		//If theres an error, fail nicely
		alert("ManagerManager: An error has occurred: " + e.name + " - " + e.message);
	}finally{
		//Whatever happens, hide the loading mask
		$j("#loadingmask").hide();
	}
});
</script>
				');
			}else{
				//TODO: Remove it
				//Just run widgets
				$this->applyRules();
			}
		}
	}
	
	/**
	 * toArray
	 * @version 1.0 (2019-01-25)
	 * 
	 * @return $result {arrayAssociative} See parent class.
	 * @return $result['template'] {integer} @required
	 */
	public function toArray(){
		return array_merge(
			parent::toArray(),
			[
				'template' => $this->template
			]
		);
	}
}
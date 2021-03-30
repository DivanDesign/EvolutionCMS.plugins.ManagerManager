<?php
namespace ManagerManager\Page;

use ManagerManager\Core;

class Page extends \DDTools\BaseClass {
	public
		$role,
		$event
	;
	
	protected
		/**
		 * @var $includedJs {stdClass}
		 * @var $includedJs[includedScriptName] {stdClass}
		 * @var $includedJs[includedScriptName]->version {string}
		 */
		$includedJs = [],
		$includedCss = [],
		
		/**
		 * @var $injectedHTML {stdClass}
		 * @var $injectedHTML->{eventName} {array} — Elements that must be injected to the page on the appropriate event.
		 * @var $injectedHTML->{eventName}[i] {stdClass} — Element info.
		 * @var $injectedHTML->{eventName}[i]->name {string} — Element name.
		 * @var $injectedHTML->{eventName}[i]->data {arrayAssociative} — Element data (placeholders).
		 * @var $injectedHTML->{eventName}[i]->data[placeholderName] {string} — Element data item.
		 */
		$injectedHTML = [],
		
		/**
		 * @var $injectedHTML_hasJsInit {boolean} — Is JS init already injected to the page?
		 */
		$injectedHTML_hasJsInit = false
	;
	
	/**
	 * __construct
	 * @version 1.0.1 (2020-05-20)
	 */
	public function __construct(){
		//Init current event
		$this->event = &\ddTools::$modx->Event;
		
		if (!isset($this->event->params['config_chunk'])){
			$this->event->params['config_chunk'] = '';
		}
		
		//Get role
		$this->role = $_SESSION['mgrRole'];
		
		$this->includedJs = (object) $this->includedJs;
		$this->includedCss = (object) $this->includedCss;
		
		$this->injectedHTML = (object) $this->injectedHTML;
		
		foreach (
			$this->injectedHTML as
			$eventName =>
			$elements
		){
			foreach (
				$elements as
				$elements_itemIndex =>
				$elements_itemInfo
			){
				if (is_array($elements_itemInfo)){
					$this->injectedHTML->{$eventName}[$elements_itemIndex] = (object) $elements_itemInfo;
				}
			}
		}
	}
	
	/**
	 * includedJsCss_prepareNameVersionExtension
	 * @version 1.0.3a (2021-03-30)
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params. @required
	 * @param $params->source {string} — The URL of the external script or code (if $plaintext == true). @required
	 * @param $params->name {string} — Script name. Default: ''.
	 * @param $params->version {string} — Script version. Default: ''.
	 * @param $params->extension {''|'js'|'css'} — Script extension. Default: ''.
	 * 
	 * @return $result {stdClass}
	 * @return $result->name {string}
	 * @return $result->version {string}
	 * @return $result->extension {string}
	 */
	private function includedJsCss_prepareNameVersionExtension($params){
		$params = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				(object) [
					'name' => '',
					'version' => '',
					'extension' => ''
				],
				$params
			],
			'overwriteWithEmpty' => false
		]);
		
		
		$result = (object) [
			'name' => $params->name,
			'version' => $params->version,
			'extension' => $params->extension
		];
		
		if (
			empty($result->name) ||
			empty($result->version)
		){
			$result = (object) \ddTools::parseFileNameVersion($params->source);
		}elseif (empty($result->extension)){
			$temp = pathinfo($params->source);
			
			$result->extension =
				$temp['extension'] ?
				$temp['extension'] :
				'js'
			;
		}
		
		return $result;
	}
	
	/**
	 * includedJsCss_add
	 * @version 1.0a (2019-02-01)
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params. @required
	 * @param $params->name {string} — Script name. @required
	 * @param $params->version {string} — Script version. @required
	 * @param $params->extension {'js'|'css'} — Type of source (required if $params->isPlaintext == true). @required
	 * 
	 * @return {boolean} — Is script included?
	 */
	private function includedJsCss_add($params){
		$params = (object) $params;
		
		$result = true;
		
		$thisIncludedField = &$this->includedJs;
		
		if ($params->extension == 'css'){
			$thisIncludedField = &$this->includedCss;
		}
		
		//If this script is already included
		if (isset($thisIncludedField->{$params->name})){
			//If old < new, use new, else — old
			$result = version_compare(
				$thisIncludedField->{$params->name}->version,
				$params->version,
				'<'
			);
		}else{
			//Init
			$thisIncludedField->{$params->name} = (object) [];
		}
		
		//If the new version must be used
		if ($result){
			$thisIncludedField->{$params->name}->version = $params->version;
		}
		
		return $result;
	}
	
	/**
	 * includedJsCss_get
	 * @version 1.0 (2019-02-01)
	 * 
	 * @return {stdClass}
	 */
	public function includedJsCss_get(){
		//Well…
		return (object) array_merge(
			(array) $this->includedJs,
			(array) $this->includedCss
		);
	}
	
	/**
	 * includeJsCss
	 * @version 2.0.5a (2021-03-30)
	 * 
	 * @desc Generates the code needed to include an external script file.
	 * 
	 * @todo I don't like the method wich return the code, i think the code must be saved to $this->injectedHTML only.
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params. @required
	 * @param $params->source {string} — The URL of the external script or code (if $plaintext == true). @required
	 * @param $params->outputType {'js'|'html'} — Either js or html - depending on where the output is appearing. Default: 'js'.
	 * @param $params->name {string} — Script name. Default: ''.
	 * @param $params->version {string} — Script version. Default: ''.
	 * @param $params->isPlaintext {boolean} — Is this plaintext? Default: false.
	 * @param $params->extension {''|'js'|'css'} — Script extension. Default: ''.
	 * 
	 * @return {string} — Code.
	 */
	public function includeJsCss($params){
		//Defaults
		$params = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				(object) [
					'outputType' => 'js',
					'name' => '',
					'version' => '',
					'isPlaintext' => false,
					'extension' => ''
				],
				$params
			],
			'overwriteWithEmpty' => false
		]);
		
		
		$result = '';
		
		$nameVersionExtension = (object) [
			'name' => $params->name,
			'version' => $params->version,
			'extension' => $params->extension
		];
		
		if (!$params->isPlaintext){
			//Well…
			$nameVersionExtension->source = $params->source;
			
			$nameVersionExtension = $this->includedJsCss_prepareNameVersionExtension($nameVersionExtension);
		}
		
		//If something wrong
		if (
			empty($nameVersionExtension->name) ||
			empty($nameVersionExtension->version) ||
			empty($nameVersionExtension->extension)
		){
			return $result;
		}
		
		//Save
		$useThisVersion = $this->includedJsCss_add($nameVersionExtension);
		
		//If the new version is used
		if ($useThisVersion){
			$result = $params->source;
			
			if (!$params->isPlaintext){
				$result .=
					strrpos(
						$result,
						'?'
					) !== false ?
					'&' :
					'?'
				;
				//Version was added at the end of path (“path/to/file.js?version=1.0”) to avoid browser cache.
				$result .=
					'version=' .
					$nameVersionExtension->version
				;
			}
			
			$elementName =
				$nameVersionExtension->extension == 'css' ?
				'style' :
				'script'
			;
			$elementData = [];
			
			if ($params->isPlaintext){
				$elementData['content'] = $result;
			}else{
				if ($nameVersionExtension->extension == 'css'){
					$elementName = 'link';
					$elementData['attrs.href'] = $result;
				}else{
					$elementData['attrs.src'] = $result;
				}
			}
			
			$result = \ManagerManager\Element\Element::createChildInstance([
				'name' => $elementName,
				'parentDir' =>
					Core::getPluginPaths()->src .
					'Element'
				,
				'params' => [
					'data' => $elementData
				]
			])->render();
			
			if ($params->outputType == 'js'){
				$result =
					'$j("head").append(\'' .
					//'</script>' → '</scrip' + 't>'
					preg_replace(
						'/(<\/.+)(.{1}>)/',
						'$1\' + \'$2',
						$result
					) .
					'\');'
				;
			}
			
			$result =
				$result .
				PHP_EOL
			;
		}
		
		return $result;
	}
	
	/**
	 * isRuleMatched
	 * @version 2.0.2 (2021-03-30)
	 * 
	 * @desc Pass isRuleMatched a comma separated list of allowed roles and templates, and it will return TRUE or FALSE to indicate whether this rule should be run on this page.
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params.
	 * @param $params->role {array|stringCommaSeparated} — Roles. Default: ''.
	 * 
	 * @return {boolean}
	 */
	public function isRuleMatched($params = []){
		//Defaults
		$params = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				(object) [
					'role' => ''
				],
				$params
			],
			'overwriteWithEmpty' => false
		]);
		
		
		$result = true;
		
		foreach (
			$params as
			$fieldToCompareName =>
			$values
		){
			$excludeValues = false;
			
			//Are they negative values?
			if (
				substr(
					$values,
					0,
					1
				) == '!'
			){
				$values = substr(
					$values,
					1
				);
				
				$excludeValues = true;
			}
			
			//Make the lists into arrays
			$values = makeArray($values);
			
			if (count($values) > 0){
				$result =
					//Does the current value match the conditions supplied?
					$excludeValues ?
					!in_array(
						$this->{$fieldToCompareName},
						$values
					) :
					in_array(
						$this->{$fieldToCompareName},
						$values
					)
				;
				
				//False is false forever
				if (!$result){
					break;
				}
			}
		}
		
		return $result;
	}
	
	/**
	 * injectedHTML_addJsCssInit
	 * @version 2.0.1 (2020-10-31)
	 * 
	 * @desc jQuery.ddMM initialization.
	 * 
	 * @param $index {integer|NULL} — Inserting index.
	 * 
	 * @return {void}
	 */
	private function injectedHTML_addJsCssInit($index = NULL){
		if (
			//If need to inject some HTML elements on this event
			isset($this->injectedHTML->{$this->event->name}) &&
			//And JS init is not injected before
			!$this->injectedHTML_hasJsInit
		){
			global
				$_lang
			;
			
			$injectedJsCss = [];
			
			//All needed JS
			$pluginJsUrls = Core::getPluginJsUrls();
			
			foreach (
				$pluginJsUrls as
				$pluginJsUrls_itemName =>
				$pluginJsUrls_itemData
			){
				if (
					$pluginJsUrls_itemName != 'jQuery' ||
					//jQuery including depends on CMS config
					empty(\ddTools::$modx->getConfig('mgr_jquery_path'))
				){
					//Inject script
					$injectedJsCss[] = (object) [
						'name' => 'script',
						'data' => [
							'attrs.src' => $pluginJsUrls_itemData->source
						]
					];
					
					//Remember including
					$pluginJsUrls_itemData->extension = 'js';
					$this->includedJsCss_add($pluginJsUrls_itemData);
				}
			}
			
			//All needed CSS
			$pluginCssUrls = Core::getPluginCssUrls();
			
			foreach (
				$pluginCssUrls as
				$pluginCssUrls_itemData
			){
				//Inject CSS
				$injectedJsCss[] = (object) [
					'name' => 'link',
					'data' => [
						'attrs.href' => $pluginCssUrls_itemData->source
					]
				];
				
				//Remember including
				$pluginCssUrls_itemData->extension = 'css';
				$this->includedJsCss_add($pluginCssUrls_itemData);
			}
			
			$injectedJsCss[] = (object) [
				'name' => 'script',
				'data' => [
					'content' => '
window.$j = jQuery.noConflict();

$j.ddMM.config.site_url = "' . \ddTools::$modx->getConfig('site_url') . '";
$j.ddMM.config.datetime_format = "' . \ddTools::$modx->getConfig('datetime_format') . '";
$j.ddMM.config.datepicker_offset = ' . \ddTools::$modx->getConfig('datepicker_offset') . ';

$j.ddMM.lang.dp_dayNames = ' . $_lang['dp_dayNames'] . ';
$j.ddMM.lang.dp_monthNames = ' . $_lang['dp_monthNames'] . ';
$j.ddMM.lang.dp_startDay = ' . $_lang['dp_startDay'] . ';
$j.ddMM.lang.edit = "' . $_lang['edit'] . '";

$j.ddMM.urls.manager = "' . MODX_MANAGER_URL . '";

$j.ddMM.fields = $j.parseJSON(\'' . json_encode(Core::getDocFields()) . '\');
					'
				]
			];
			
			//Insert at the end by default
			if ($index === NULL){
				$index = count($this->injectedHTML->{$this->event->name});
			}
			
			//Save
			array_splice(
				$this->injectedHTML->{$this->event->name},
				$index,
				0,
				$injectedJsCss
			);
			
			//And remember to avoid duplication
			$this->injectedHTML_hasJsInit = true;
		}
	}
	
	/**
	 * fireCurrentEvent
	 * @version 1.0.4 (2021-03-30)
	 * 
	 * @return {void}
	 */
	public function fireCurrentEvent(){
		//If need to inject some HTML elements on this event
		if (
			isset($this->injectedHTML->{$this->event->name}) &&
			!empty($this->injectedHTML->{$this->event->name})
		){
			//If begining is not ejected before
			if (
				$this->injectedHTML->{$this->event->name}[0]->name != 'comment' ||
				$this->injectedHTML->{$this->event->name}[0]->data['content'] != 'ManagerManager : Begin'
			){
				//Add begining
				array_unshift(
					$this->injectedHTML->{$this->event->name},
					(object) [
						'name' => 'comment',
						'data' => [
							'content' => 'ManagerManager : Begin'
						]
					]
				);
			}
			
			//If ending is not ejected before
			if (
				$this->injectedHTML->{$this->event->name}[
					count($this->injectedHTML->{$this->event->name}) - 1
				]->name != 'comment'
			){
				//Add ending
				$this->injectedHTML->{$this->event->name}[] = (object) [
					'name' => 'comment',
					'data' => [
						'content' => 'ManagerManager : End'
					]
				];
			}
			
			//Inject JS init if some scripts is used on the page
			foreach (
				$this->injectedHTML->{$this->event->name} as
				$elementIndex =>
				$elementInfo
			){
				if (strtolower($elementInfo->name) == 'script'){
					$this->injectedHTML_addJsCssInit($elementIndex);
					
					//Just one time
					break;
				}
			}
			
			$htmlToOutput = [];
			
			//Foreach all elements
			foreach (
				$this->injectedHTML->{$this->event->name} as
				$element
			){
				//Get element code
				$htmlToOutput[] = \ManagerManager\Element\Element::createChildInstance([
					'name' => $element->name,
					'parentDir' =>
						Core::getPluginPaths()->src .
						'Element'
					,
					'params' => [
						'data' => $element->data
					]
				])->render();
			}
			
			//Inject elements
			$this->event->output(
				implode(
					PHP_EOL,
					$htmlToOutput
				) .
				PHP_EOL
			);
		}
	}
	
	/**
	 * applyRules
	 * @version 1.0.7 (2021-03-30)
	 * 
	 * @desc Apply the rules.
	 * 
	 * @todo Must it be protected?
	 * @todo Must be removed. Stop using “rules” concept, use new “field types” and “actions” instead.
	 * 
	 * @param $rulesChunkName {string} — Chunk that contains rules. Default: $this->currentPage->event->params['config_chunk'].
	 * 
	 * @return {string} — Including status message.
	 */
	protected function applyRules($rulesChunkName){
		//Global modx object & $content for rules :|
		global
			$modx,
			$content
		;
		
		$result = '';
		
		if (!isset($rulesChunkName)){
			$rulesChunkName = $this->event->params['config_chunk'];
		}
		
		$rulesFilePath =
			Core::getPluginPaths()->resource .
			'mm_rules.inc.php'
		;
		
		//See if there is any chunk output (e.g. it exists, and is not empty)
		$chunkContent = \ddTools::$modx->getChunk($rulesChunkName);
		
		if (!empty($chunkContent)){
			//If there is, run it.
			eval($chunkContent);
			
			$result =
				'//Getting rules from chunk: ' .
				$rulesChunkName
			;
		//If there's no chunk output, read in the file.
		}elseif (is_readable($rulesFilePath)){
			include($rulesFilePath);
			
			$result =
				'//Getting rules from file: ' .
				$rulesFilePath
			;
		}else{
			$result = '//No rules found';
		}
		
		return
			$result .
			PHP_EOL .
			PHP_EOL
		;
	}
	
	/**
	 * toArray
	 * @version 1.0 (2019-01-25)
	 * 
	 * @return $result {arrayAssociative} @required
	 * @return $result['role'] {integer} @required
	 */
	public function toArray(){
		return [
			'role' => $this->role
		];
	}
}
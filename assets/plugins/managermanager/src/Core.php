<?php
namespace ManagerManager;

class Core {
	public static
		$pluginVersion = '0.6.2'
	;
	
	private static
		/**
		 * @property $paths {stdClass}
		 * @property $paths->resource {string} — Full path to the plugin folder.
		 * @property $paths->src {string} — Ful path to `src`.
		 */
		$paths = [
			'resource' => '',
			'src' => ''
		],
		
		$pluginJsUrls,
		$pluginCssUrls,
		$pluginEvents = [
			'OnDocFormPrerender',
			'OnDocFormRender',
			'OnDocDuplicate',
			'OnDocFormSave',
			'OnBeforeDocFormSave',
			'OnTVFormRender'
		],
		$docFields
	;
	
	public
		$currentPage
	;
	
	/**
	 * __construct
	 * @version 1.2.5 (2022-05-23)
	 */
	public function __construct($params = []){
		$params = (object) $params;
		
		//Init plugin path
		self::getPluginPaths();
		
		//Init document fields
		self::getDocFields();
		
		//Init plugin JS urls
		self::getPluginJsUrls();
		
		//Init plugin CSS urls
		self::getPluginCssUrls();
		
		//Init current page object
		$pageType = 'virtual';
		
		switch (\ddTools::$modx->Event->name){
			case 'OnDocFormPrerender':
			case 'OnDocFormRender':
			case 'OnDocDuplicate':
			case 'OnDocFormSave':
			case 'OnBeforeDocFormSave':
				$pageType = 'document';
			break;
			
			case 'OnTVFormRender':
				$pageType = 'tv';
			break;
		}
		
		$this->currentPage = \ManagerManager\Page\Page::createChildInstance([
			'name' => $pageType,
			'parentDir' =>
				self::$paths->src .
				'Page'
		]);
		
		if (
			isset($params->copmatibility) &&
			is_callable($params->copmatibility)
		){
			call_user_func(
				$params->copmatibility,
				[
					'currentPage' => $this->currentPage
				]
			);
		}
		
		//TODO: Remove it
		//Include widgets
		$this->includeWidgets();
		
		//Fire event
		$this->currentPage->fireCurrentEvent();
	}
	
	/**
	 * getPluginPaths
	 * @version 2.0 (2021-03-30)
	 * 
	 * @return {stdClass}
	 */
	public static function getPluginPaths(){
		//If paths is not inited before
		if (!is_object(self::$paths)){
			self::$paths = (object) self::$paths;
			
			self::$paths->resource =
				dirname(
					__DIR__,
					1
				) .
				DIRECTORY_SEPARATOR
			;
			
			self::$paths->src =
				__DIR__ .
				DIRECTORY_SEPARATOR
			;
		}
		
		return self::$paths;
	}
	
	/**
	 * getDocFields
	 * @version 1.0.2 (2021-03-30)
	 * 
	 * @return {string}
	 */
	public static function getDocFields(){
		if (!isset(self::$docFields)){
			//What are the fields we can change, and what types are they?
			self::$docFields = [
				'pagetitle' => [
					'fieldtype' => 'input',
					'fieldname' => 'pagetitle',
					'dbname' => 'pagetitle',
					'tv' => false
				],
				'longtitle' => [
					'fieldtype' => 'input',
					'fieldname' => 'longtitle',
					'dbname' => 'longtitle',
					'tv' => false
				],
				'description' => [
					'fieldtype' => 'input',
					'fieldname' => 'description',
					'dbname' => 'description',
					'tv' => false
				],
				'alias' => [
					'fieldtype' => 'input',
					'fieldname' => 'alias',
					'dbname' => 'alias',
					'tv' => false
				],
				'link_attributes' => [
					'fieldtype' => 'input',
					'fieldname' => 'link_attributes',
					'dbname' => 'link_attributes',
					'tv' => false
				],
				'introtext' => [
					'fieldtype' => 'textarea',
					'fieldname' => 'introtext',
					'dbname' => 'introtext',
					'tv' => false
				],
				'template' => [
					'fieldtype' => 'select',
					'fieldname' => 'template',
					'dbname' => 'template',
					'tv' => false
				],
				'menutitle' => [
					'fieldtype' => 'input',
					'fieldname' => 'menutitle',
					'dbname' => 'menutitle',
					'tv' => false
				],
				'menuindex' => [
					'fieldtype' => 'input',
					'fieldname' => 'menuindex',
					'dbname' => 'menuindex',
					'tv' => false
				],
				'show_in_menu' => [
					'fieldtype' => 'input',
					'fieldname' => 'hidemenucheck',
					'dbname' => 'hidemenu',
					'tv' => false
				],
				//synonym for show_in_menu
				'hide_menu' => [
					'fieldtype' => 'input',
					'fieldname' => 'hidemenucheck',
					'dbname' => 'hidemenu',
					'tv' => false
				],
				'parent' => [
					'fieldtype' => 'input',
					'fieldname' => 'parent',
					'dbname' => 'parent',
					'tv' => false
				],
				'is_folder' => [
					'fieldtype' => 'input',
					'fieldname' => 'isfoldercheck',
					'dbname' => 'isfolder',
					'tv' => false
				],
				'alias_visible' => [
					'fieldtype' => 'input',
					'fieldname' => 'alias_visible_check',
					'dbname' => 'alias_visible',
					'tv' => false
				],
				'is_richtext' => [
					'fieldtype' => 'input',
					'fieldname' => 'richtextcheck',
					'dbname' => 'richtext',
					'tv' => false
				],
				'donthit' => [
					'fieldtype' => 'input',
					'fieldname' => 'donthitcheck',
					'dbname' => 'donthit',
					'tv' => false
				],
				'published' => [
					'fieldtype' => 'input',
					'fieldname' => 'publishedcheck',
					'dbname' => 'published',
					'tv' => false
				],
				'pub_date' => [
					'fieldtype' => 'input',
					'fieldname' => 'pub_date',
					'dbname' => 'pub_date',
					'tv' => false
				],
				'unpub_date' => [
					'fieldtype' => 'input',
					'fieldname' => 'unpub_date',
					'dbname' => 'unpub_date',
					'tv' => false
				],
				'searchable' => [
					'fieldtype' => 'input',
					'fieldname' => 'searchablecheck',
					'dbname' => 'searchable',
					'tv' => false
				],
				'cacheable' => [
					'fieldtype' => 'input',
					'fieldname' => 'cacheablecheck',
					'dbname' => 'cacheable',
					'tv' => false
				],
				'clear_cache' => [
					'fieldtype' => 'input',
					'fieldname' => 'syncsitecheck',
					'dbname' => '',
					'tv' => false
				],
				'content_type' => [
					'fieldtype' => 'select',
					'fieldname' => 'contentType',
					'dbname' => 'contentType',
					'tv' => false
				],
				'content_dispo' => [
					'fieldtype' => 'select',
					'fieldname' => 'content_dispo',
					'dbname' => 'content_dispo',
					'tv' => false
				],
				'keywords' => [
					'fieldtype' => 'select',
					'fieldname' => 'keywords[]',
					'dbname' => '',
					'tv' => false
				],
				'metatags' => [
					'fieldtype' => 'select',
					'fieldname' => 'metatags[]',
					'dbname' => '',
					'tv' => false
				],
				'content' => [
					'fieldtype' => 'textarea',
					'fieldname' => 'ta',
					'dbname' => 'content',
					'tv' => false
				],
				'which_editor' => [
					'fieldtype' => 'select',
					'fieldname' => 'which_editor',
					'dbname' => '',
					'tv' => false
				],
				'resource_type' => [
					'fieldtype' => 'select',
					'fieldname' => 'type',
					'dbname' => 'isfolder',
					'tv' => false
				],
				'weblink' => [
					'fieldtype' => 'input',
					'fieldname' => 'ta',
					'dbname' => 'content',
					'tv' => false
				]
			];
			
			//Add in TVs to the list of available fields
			$allTvs = \ddTools::$modx->db->makeArray(\ddTools::$modx->db->select(
				//Fields
				'name,type,id',
				//From
				\ddTools::$tables['site_tmplvars'],
				//Where
				'',
				//Order by
				'name ASC'
			));
			
			foreach (
				$allTvs as
				$allTvs_item
			){
				//What is the field name?
				$fieldName = $allTvs_item['name'];
				
				//Input by default
				$fieldType = 'input';
				//Checkboxes place an underscore in the ID, so accommodate this...
				$fieldName_suffix = '';
				
				//What fieldtype is this TV type?
				//fix for MODX EVO 1.1 by Dmi3yy
				$allTvs_itemType = explode(
					':',
					$allTvs_item['type']
				)[0];
				
				switch ($allTvs_itemType){
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
						$fieldName_suffix = '[]';
					break;
				}
				
				//Check if there are any name clashes between TVs and default field names? If there is, preserve the default field
				if (!isset(self::$docFields[$fieldName])){
					self::$docFields[$fieldName] = [
						'fieldtype' => $fieldType,
						'fieldname' =>
							'tv' .
							$allTvs_item['id'] .
							$fieldName_suffix
						,
						'dbname' => '',
						'tv' => true
					];
				}
			}
		}
		
		return self::$docFields;
	}
	
	/**
	 * getPluginJsUrls
	 * @version 2.0.4 (2024-01-04)
	 * 
	 * @return {string}
	 */
	public static function getPluginJsUrls(){
		if (!isset(self::$pluginJsUrls)){
			self::$pluginJsUrls = (object) [
				'jQuery' => (object) [
					'source' =>
						\ddTools::$modx->getConfig('site_url') .
						'assets/plugins/managermanager/js/jQuery-3.1.1.min.js'
					,
					'name' => 'jQuery',
					'version' => '3.1.1'
				],
				'jQuery.ddMM' => (object) [
					'source' =>
						\ddTools::$modx->getConfig('site_url') .
						'assets/plugins/managermanager/js/jquery.ddMM.js'
					,
					'name' => 'jQuery.ddMM',
					'version' => '1.4.0'
				],
				'jQuery.ddTools' => (object) [
					'source' =>
						\ddTools::$modx->getConfig('site_url') .
						'assets/plugins/managermanager/js/jQuery.ddTools-2.7.1.min.js'
					,
					'name' => 'jQuery.ddTools',
					'version' => '2.7.1'
				],
				'jQuery.ddUI' => (object) [
					'source' =>
						\ddTools::$modx->getConfig('site_url') .
						'assets/plugins/managermanager/js/jQuery.ddUI-0.16.min.js'
					,
					'name' => 'jQuery.ddUI',
					'version' => '0.16.0'
				]
			];
		}
		
		return self::$pluginJsUrls;
	}
	
	/**
	 * getPluginCssUrls
	 * @version 2.0.1 (2021-04-06)
	 * 
	 * @return {string}
	 */
	public static function getPluginCssUrls(){
		if (!isset(self::$pluginCssUrls)){
			self::$pluginCssUrls = (object) [
				'jQuery.ddUI' => (object) [
					'source' =>
						\ddTools::$modx->getConfig('site_url') .
						'assets/plugins/managermanager/js/jQuery.ddUI-0.16.min.css'
					,
					'name' => 'jQuery.ddUI',
					'version' => '0.16.0'
				]
			];
		}
		
		return self::$pluginCssUrls;
	}
	
	/**
	 * isPluginUsed
	 * @version 1.0 (2019-01-25)
	 * 
	 * @return {boolean}
	 */
	public static function isPluginUsed(){
		return in_array(
			\ddTools::$modx->Event->name,
			self::$pluginEvents
		);
	}
	
	/**
	 * includeWidgets
	 * @version 1.0.2 (2021-03-30)
	 * 
	 * @todo Remove it, don't use “widgets” concept.
	 * 
	 * @return {void}
	 */
	private function includeWidgets(){
		//When loading widgets, ignore folders / files beginning with these chars
		$ignoreFirstChars = [
			'.',
			'_',
			'!'
		];
		
		//Include widgets
		//We look for a PHP file with the same name as the directory - e.g.
		///widgets/widgetname/widgetname.php
		$widgetDir =
			self::$pluginPath .
			'widgets'
		;
		
		if ($handle = opendir($widgetDir)){
			while (
				(
					$file =
					readdir($handle)
				) !==
				false
			){
				if (
					!in_array(
						substr(
							$file,
							0,
							1
						),
						$ignoreFirstChars
					) &&
					$file != '..' &&
					is_dir(
						$widgetDir .
						'/' .
						$file
					)
				){
					include_once(
						$widgetDir .
						'/' .
						$file .
						'/' .
						$file .
						'.php'
					);
				}
			}
			
			closedir($handle);
		}
	}
}
?>
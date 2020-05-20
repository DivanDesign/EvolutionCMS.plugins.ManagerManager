<?php
namespace ManagerManager\Element;

use ManagerManager\Core;

class Element {
	protected
		$template = '',
		/**
		 * @var $data {array_associative}
		 * @var $data[placeholderName] {string}
		 */
		$data = []
	;
	
	protected static
		/**
		 * @var $dataDefault {array_associative} — Default data value for all elements.
		 */
		$dataDefault = [
			'content' => '',
			'attrs.classString' => 'class="[+attrs.class+]"',
			'attrs.idString' => 'id="[+attrs.id+]"',
			'attrs.extraString' => ''
		]
	;
	
	/**
	 * create
	 * @version 1.0.1 (2020-05-20)
	 * 
	 * @todo Move it somewhere to avoid code duplucation.
	 * 
	 * @param $className {string} — Class name. @required
	 * 
	 * @throws \Exception
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params->name {string} — Class name. @required
	 * @param $params->params {array_associative|stdClass} — Params to be passed to object constructor. Default: [].
	 * 
	 * @return {ManagerManager\Page\Page}
	 */
	public final static function create($params){
		//Defaults
		$params = (object) array_merge(
			[
				'params' => []
			],
			(array) $params
		);
		
		//Current classname without namespace
		$thisClassName = substr(
			__CLASS__,
			strrpos(
				__CLASS__,
				'\\'
			) + 1
		);
		
		$params->name = ucfirst(strtolower($params->name));
		$filePath =
			$params->name .
			DIRECTORY_SEPARATOR .
			$thisClassName .
			'.php'
		;
		
		if(is_file(
			__DIR__ .
			DIRECTORY_SEPARATOR .
			$filePath
		)){
			require_once($filePath);
			
			$objectClass =
				__NAMESPACE__ .
				'\\' .
				$params->name .
				'\\' .
				$thisClassName
			;
			
			return new $objectClass($params->params);
		}else{
			throw new \Exception(
				(
					$thisClassName .
					' “' .
					$params->name .
					'” not found.'
				),
				500
			);
		}
	}
	
	/**
	 * __construct
	 * @version 1.0.2 (2020-05-20)
	 * 
	 * @param $params {array_associative|stdClass} — The object of params.
	 * @param $params->data {array_associative} — Multidimensional data is supported too. Default: —.
	 * @param $params->data[placeholderName] {string|array_associative} — @required
	 * @param $params->data['attrs.extraString'] {string} — Additional attributes string. Default: ''.
	 */
	public function __construct($params = []){
		$params = (object) $params;
		
		//Prepare template name first
		$templatePath = explode(
			'\\',
			get_class($this)
		);
		
		//Child class name
		$templatePath = strtolower($templatePath[count($templatePath) - 2]);
		
		$templatePath =
			Core::getPluginPath() .
			'src' .
			DIRECTORY_SEPARATOR .
			'ElementTemplates' .
			DIRECTORY_SEPARATOR .
			$templatePath .
			'.html'
		;
		
		//Save template
		if (is_file($templatePath)){
			$this->template = file_get_contents($templatePath);
		}
		
		//Support multidimensional data
		$this->data = \ddTools::unfoldArray($this->data);
		
		$this->data = array_merge(
			self::$dataDefault,
			$this->data
		);
		
		//Save data
		if (is_array($params->data)){
			//Support multidimensional data
			$params->data = \ddTools::unfoldArray($params->data);
			
			$this->data = array_merge(
				$this->data,
				$params->data
			);
		}
	}
	
	/**
	 * render
	 * @version 1.0.1 (2019-02-21)
	 * 
	 * @return {string}
	 */
	public function render(){
		//Prepare attrs class string
		if (!empty($this->data['attrs.class'])){
			$this->data['attrs.classString'] = \ddTools::parseText([
				'text' => $this->data['attrs.classString'],
				//We need only $this->data['attrs.class'], but we just can send all $this->data. Why not?
				'data' => $this->data
			]);
		}else{
			$this->data['attrs.classString'] = '';
		}
		
		//Prepare attrs id string
		if (!empty($this->data['attrs.id'])){
			$this->data['attrs.idString'] = \ddTools::parseText([
				'text' => $this->data['attrs.idString'],
				//We need only $this->data['attrs.src'], but we just can send all $this->data. Why not?
				'data' => $this->data
			]);
		}else{
			$this->data['attrs.idString'] = '';
		}
		
		return \ddTools::parseText([
			'text' => str_replace(
				[
					"\r\n",
					"\r",
					"\n"
				],
				' ',
				$this->template
			),
			'data' => $this->data
		]);
	}
}
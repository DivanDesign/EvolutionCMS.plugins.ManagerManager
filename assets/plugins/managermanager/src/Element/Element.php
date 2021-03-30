<?php
namespace ManagerManager\Element;

use ManagerManager\Core;

class Element extends \DDTools\BaseClass {
	protected
		$template = '',
		/**
		 * @var $data {arrayAssociative}
		 * @var $data[placeholderName] {string}
		 */
		$data = []
	;
	
	protected static
		/**
		 * @var $dataDefault {arrayAssociative} — Default data value for all elements.
		 */
		$dataDefault = [
			'content' => '',
			'attrs.classString' => 'class="[+attrs.class+]"',
			'attrs.idString' => 'id="[+attrs.id+]"',
			'attrs.extraString' => ''
		]
	;
	
	/**
	 * __construct
	 * @version 1.0.4 (2021-03-30)
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params.
	 * @param $params->data {arrayAssociative} — Multidimensional data is supported too. Default: —.
	 * @param $params->data[placeholderName] {string|arrayAssociative} — @required
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
		$templatePath = strtolower(
			$templatePath[
				count($templatePath) -
				2
			]
		);
		
		$templatePath =
			Core::getPluginPaths()->src .
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
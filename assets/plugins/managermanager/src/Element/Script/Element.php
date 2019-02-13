<?php
namespace ManagerManager\Element\Script;

use ManagerManager\Core;

class Element extends \ManagerManager\Element\Element {
	protected
		$data = [
			'attrs.charset' => '',
			'attrs.srcString' => 'src="[+attrs.src+]"',
		]
	;
	
	/**
	 * __construct
	 * @version 1.0 (2019-01-26)
	 * 
	 * @param $params {array_associative|stdClass} — See parent class.
	 * @param $params->data {array_associative} — See parent class.
	 * @param $params->data['attrs.charset'] {string} — Script charset. Default: \ddTools::$modx->getConfig('modx_charset').
	 * @param $params->data['attrs.src'] {string} — Script URL (if content is not used. Default —.
	 * @param $params->data['content'] {string} — Script content. Default: ''.
	 */
	public function __construct($params = []){
		$this->data['attrs.charset'] = \ddTools::$modx->getConfig('modx_charset');
		
		parent::__construct($params);
	}
	
	/**
	 * render
	 * @version 1.0 (2019-01-31)
	 * 
	 * @return {string}
	 */
	public function render(){
		//Prepare attrs src string
		if (!empty($this->data['attrs.src'])){
			$this->data['attrs.srcString'] = \ddTools::parseText([
				'text' => $this->data['attrs.srcString'],
				//We need only $this->data['attrs.src'], but we just can send all $this->data. Why not?
				'data' => $this->data
			]);
		}else{
			$this->data['attrs.srcString'] = '';
		}
		
		parent::render();
	}
}
<?php
namespace DDTools;

abstract class Response {
	protected
		$meta,
		$data
	;
	
	/**
	 * includeResponseByVersion
	 * @version 1.0.1 (2019-06-22)
	 * 
	 * @param $version {string} — Response version.
	 * 
	 * @return {string}
	 * @throws \Exception
	 */
	public final static function includeResponseByVersion($version){
		//Only digits
		$className = 'Response_v' . preg_replace(
			'/\D/',
			'',
			$version
		);
		
		$versionPath = __DIR__.DIRECTORY_SEPARATOR . 'Response' . DIRECTORY_SEPARATOR . $className . '.php';
		
		if(is_file($versionPath)){
			require_once $versionPath;
			
			return __NAMESPACE__ . '\\Response\\' . $className;
		}else{
			throw new \Exception(
				'ddTools Response ' . $version . ' is not found.',
				500
			);
		}
	}
	
	/**
	 * validateMeta
	 * 
	 * @desc Validates the “meta” part of a response.
	 * 
	 * @param $meta
	 * 
	 * @return {boolean}
	 */
	abstract public function validateMeta(array $meta);
	
	/**
	 * setMeta
	 * 
	 * @desc Setter for $this->meta.
	 * 
	 * @param $meta
	 * 
	 * @return {boolean}
	 */
	public function setMeta($meta){
		$output = false;
		
		if($this->validateMeta($meta)){
			$this->meta = $meta;
			$output = true;
		}
		
		return $output;
	}
	
	/**
	 * getMeta
	 * 
	 * @desc Getter for $this->meta
	 * 
	 * @return {null|array}
	 */
	public function getMeta(){
		return $this->meta;
	}
	
	/**
	 * setData
	 * 
	 * @desc Setter for $this->data.
	 * 
	 * @param $data
	 */
	public function setData($data){
		$this->data = $data;
	}
	
	/**
	 * getData
	 * 
	 * @desc Getter for $this->data.
	 * 
	 * @return {mixed}
	 */
	public function getData(){
		return $this->data;
	}
	
	/**
	 * toArray
	 * 
	 * @desc Converts this object to array.
	 * 
	 * @return {array}
	 */
	public function toArray(){
		$output = array(
			'meta' => $this->meta
		);
		
		if(isset($this->data)){
			$output['data'] = $this->data;
		}
		
		return $output;
	}
	
	/**
	 * toJSON
	 * 
	 * @desc Converts this object to JSON string.
	 * 
	 * @return string
	 */
	public function toJSON(){
		return json_encode($this->toArray());
	}
	
	public function __toString(){
		return $this->toJSON();
	}
}
<?php
namespace DDTools;

class BaseClass {
	/**
	 * setExistingProps
	 * @version 1.3.1 (2020-05-06)
	 * 
	 * @see README.md
	 * 
	 * @return {void}
	 */
	public function setExistingProps($props){
		$props = (object) $props;
		
		foreach (
			$props as
			$propName =>
			$propValue
		){
			$this->ddSetProp([
				'object' => $this,
				'propName' => $propName,
				'propValue' => $propValue
			]);
		}
	}
	
	/**
	 * ddSetProp
	 * @version 1.0.2 (2020-05-06)
	 * 
	 * @throws \ReflectionException
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->object {object} — Объект для модификации. @required
	 * @param $params->propName {string} — Имя поля. @required
	 * @param $params->propValue {mixed} — Значение. @required
	 * @param $params->class {string|object|null} — Класс или объект. Default: null.
	 * 
	 * @return {void}
	 */
	private function ddSetProp($params){
		//Defaults
		$params = (object) array_merge(
			[
				'class' => null
			],
			(array) $params
		);
		
		if ($params->class === null){
			$params->class = get_class($params->object);
		}
		
		$classReflection = new \ReflectionClass($params->class);
		
		if ($classReflection->hasProperty($params->propName)){
			$reflectionProperty = $classReflection->getProperty($params->propName);
			
			if (!$reflectionProperty->isPublic()){
				$reflectionProperty->setAccessible(true);
			}
			
			$reflectionProperty->setValue(
				$params->object,
				$params->propValue
			);
		}else{
			$parent = $classReflection->getParentClass();
			
			if ($parent !== false){
				$this->ddSetProp([
					'object' => $params->object,
					'propName' => $params->propName,
					'propValue' => $params->propValue,
					'class' => $parent->getName()
				]);
			}
		}
	}
	
	/**
	 * ddGetPropValues
	 * @version 1.0 (2020-05-06)
	 * 
	 * @throws \ReflectionException
	 * 
	 * @param $class {string|object|null} — Класс или объект. Default: null.
	 * 
	 * @return $result {arrayAssociative}
	 * @return $result[$propName] {mixed}
	 */
	private function ddGetPropValues($class = null){
		$result = [];
		
		if ($class === null){
			$class = get_class($this);
		}
		
		$classReflection = new \ReflectionClass($class);
		$reflectionProperties = $classReflection->getProperties();
		
		if (!empty($reflectionProperties)){
			foreach(
				$reflectionProperties as
				$reflectionProperty
			){
				if (!$reflectionProperty->isPublic()){
					$reflectionProperty->setAccessible(true);
				}
				
				$result[$reflectionProperty->getName()] = $reflectionProperty->getValue($this);
			}
		}else{
			$parent = $classReflection->getParentClass();
			
			if ($parent !== false){
				$result = array_merge(
					$result,
					$this->ddGetPropValues($parent->getName())
				);
			}
		}
		
		return $result;
	}
	
	/**
	 * createChildInstance
	 * @version 1.1.1 (2019-08-22)
	 * 
	 * @see README.md
	 * 
	 * @throws \Exception
	 */
	public static final function createChildInstance($params){
		//Defaults
		$params = (object) array_merge(
			[
				'params' => [],
				'capitalizeName' => true
			],
			(array) $params
		);
		
		$thisClassName = get_called_class();
		
		$thisNameSpace = substr(
			$thisClassName,
			0,
			strrpos(
				$thisClassName,
				'\\'
			)
		);
		
		//Current classname without namespace
		$thisClassName = substr(
			$thisClassName,
			strrpos(
				$thisClassName,
				'\\'
			) + 1
		);
		
		//Capitalize child name if needed
		if ($params->capitalizeName){
			$params->name = ucfirst(strtolower($params->name));
		}
		
		$filePath =
			$params->parentDir .
			DIRECTORY_SEPARATOR .
			$params->name .
			DIRECTORY_SEPARATOR .
			$thisClassName .
			'.php'
		;
		
		if(is_file($filePath)){
			require_once($filePath);
			
			$objectClass =
				'\\' .
				$thisNameSpace .
				'\\' .
				$params->name .
				'\\' .
				$thisClassName
			;
			
			return new $objectClass($params->params);
		}else{
			throw new \Exception(
				$thisClassName . ' “' . $params->name . '” not found.',
				500
			);
		}
	}
	
	/**
	 * toArray
	 * @version 1.0 (2020-05-06)
	 * 
	 * @see README.md
	 */
	public function toArray(){
		return $this->ddGetPropValues();
	}
	
	/**
	 * toJSON
	 * @version 1.0 (2020-05-06)
	 * 
	 * @see README.md
	 * 
	 * @return {stringJsonObject}
	 */
	public function toJSON(){
		return json_encode($this->toArray());
	}
	
	/**
	 * __toString
	 * @version 1.0 (2020-05-06)
	 * 
	 * @see README.md
	 * 
	 * @return {stringJsonObject}
	 */
	public function __toString(){
		return $this->toJSON();
	}
}
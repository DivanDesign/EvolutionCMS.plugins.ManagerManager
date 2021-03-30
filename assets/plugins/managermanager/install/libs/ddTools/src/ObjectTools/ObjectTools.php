<?php
namespace DDTools;

class ObjectTools {
	/**
	 * isObjectOrArray
	 * @version 0.1 (2020-04-30)
	 * 
	 * @todo Should it get $object directly or as $params->object?
	 * 
	 * @return {boolean}
	 */
	private static function isObjectOrArray($object){
		return
			is_object($object) ||
			is_array($object)
		;
	}
	
	/**
	 * isPropExists
	 * @version 1.0 (2020-04-30)
	 * 
	 * @see README.md
	 * 
	 * @return {mixed}
	 */
	public static function isPropExists($params){
		$params = (object) $params;
		
		return
			is_object($params->object) ?
			//Objects
			property_exists(
				$params->object,
				$params->propName
			) :
			//Arrays
			array_key_exists(
				$params->propName,
				$params->object
			)
		;
	}
	
	/**
	 * getPropValue
	 * @version 1.0.1 (2020-04-30)
	 * 
	 * @see README.md
	 * 
	 * @return {mixed}
	 */
	public static function getPropValue($params){
		$params = (object) $params;
		
		return
			!self::isPropExists($params) ?
			//Non-existing properties
			NULL :
			//Existing properties
			(
				is_object($params->object) ?
				//Objects
				$params->object->{$params->propName} :
				//Arrays
				$params->object[$params->propName]
			)
		;
	}
	
	/**
	 * convertType
	 * @version 1.1 (2021-03-20)
	 * 
	 * @see README.md
	 */
	public static function convertType($params){
		//Defaults
		$params = (object) array_merge(
			[
				'type' => 'objectAuto'
			],
			(array) $params
		);
		
		//Case insensitive parameter value
		$params->type = strtolower($params->type);
		
		$result = $params->object;
		
		//If string is passed, we need to parse it first
		if (!self::isObjectOrArray($params->object)){
			if (empty($params->object)){
				$result = new \stdClass();
			}else{
				$isObjectJson =
					//JSON first letter is `{` or `[`
					in_array(
						substr(
							ltrim($params->object),
							0,
							1
						),
						[
							'{',
							'['
						]
					)
				;
				
				if ($isObjectJson){
					$result = json_decode(
						$params->object,
						$params->type == 'objectarray'
					);
					
					if (is_null($result)){
						//Include PHP.libraries.hjson
						require_once(
							'hjson' .
							DIRECTORY_SEPARATOR .
							'HJSONException.php'
						);
						require_once(
							'hjson' .
							DIRECTORY_SEPARATOR .
							'HJSONUtils.php'
						);
						require_once(
							'hjson' .
							DIRECTORY_SEPARATOR .
							'HJSONParser.php'
						);
						
						try {
							$hjsonParser = new \HJSON\HJSONParser();
							
							$result = $hjsonParser->parse(
								$params->object,
								[
									'assoc' => $params->type == 'objectarray'
								]
							);
						}catch (\Exception $e){
							//Flag
							$isObjectJson = false;
						}
					}
				}
				
				//Not JSON
				if (!$isObjectJson){
					//Query string
					parse_str(
						$params->object,
						$result
					);
				}
			}
		}
		
		//stdClass
		if ($params->type == 'objectstdclass'){
			$result = (object) $result;
		//array
		}elseif ($params->type == 'objectarray'){
			$result = (array) $result;
		//stringJson
		}elseif(
			substr(
				$params->type,
				0,
				10
			) == 'stringjson'
		){
			if ($params->type == 'stringjsonobject'){
				$result = (object) $result;
			}elseif ($params->type == 'stringjsonarray'){
				$result = array_values((array) $result);
			}
			
			$result = json_encode(
				$result,
				//JSON_UNESCAPED_UNICODE — Не кодировать многобайтные символы Unicode | JSON_UNESCAPED_SLASHES — Не экранировать /
				JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
			);
		}
		
		return $result;
	}
	
	/**
	 * extend
	 * @version 1.3.7 (2021-03-12)
	 * 
	 * @see README.md
	 * 
	 * @return {object|array}
	 */
	public static function extend($params){
		//Defaults
		$params = (object) array_merge(
			[
				'deep' => true,
				'overwriteWithEmpty' => true
			],
			(array) $params
		);
		
		//The first item is the target
		$result = array_shift($params->objects);
		//Empty or invalid target
		if (!self::isObjectOrArray($result)){
			$result = new \stdClass();
		}
		
		$isResultObject = is_object($result);
		
		foreach (
			$params->objects as
			$additionalProps
		){
			//Invalid objects will not be used
			if (self::isObjectOrArray($additionalProps)){
				foreach (
					$additionalProps as
					$additionalPropName =>
					$additionalPropValue
				){
					//Is the source property exists
					$isSourcePropExists = self::isPropExists([
						'object' => $result,
						'propName' => $additionalPropName
					]);
					
					if ($isSourcePropExists){
						//Source property value
						$sourcePropValue = self::getPropValue([
							'object' => $result,
							'propName' => $additionalPropName
						]);
						
						//Is the source property object or array
						$isSourcePropObjectOrArray = self::isObjectOrArray($sourcePropValue);
					}else{
						$sourcePropValue = null;
						$isSourcePropObjectOrArray = false;
					}
					
					//Is the additional property object or array
					$isAdditionalPropObjectOrArray = self::isObjectOrArray($additionalPropValue);
					
					//The additional property value will be used by default
					$isAdditionalPropUsed = true;
					
					if (
						//Overwriting with empty value is disabled
						!$params->overwriteWithEmpty &&
						//And source property exists. Because if not exists we must set it in anyway (an empty value is better than nothing, right?)
						$isSourcePropExists
					){
						//Check if additional property value is empty
						$isAdditionalPropUsed =
							(
								//Empty object or array
								(
									$isAdditionalPropObjectOrArray &&
									count((array) $additionalPropValue) == 0
								) ||
								//Empty string
								(
									is_string($additionalPropValue) &&
									$additionalPropValue == ''
								) ||
								//NULL
								is_null($additionalPropValue)
							) ?
							//Additional is empty — don't use it
							false:
							//Additional is not empty — use it
							true
						;
						
						if (
							//Additional property value is empty
							!$isAdditionalPropUsed &&
							//And source property value is empty too
							(
								//Empty object or array
								(
									$isSourcePropObjectOrArray &&
									count((array) $sourcePropValue) == 0
								) ||
								//Empty string
								(
									is_string($sourcePropValue) &&
									$sourcePropValue == ''
								) ||
								//NULL
								is_null($sourcePropValue)
							) &&
							//But they have different types
							$sourcePropValue !== $additionalPropValue
						){
							//Okay, overwrite source in this case
							$isAdditionalPropUsed = true;
						}
					}
					
					//If additional value must be used
					if ($isAdditionalPropUsed){
						if (
							//If recursive merging is needed
							$params->deep &&
							//And we can extend source value
							$isSourcePropObjectOrArray &&
							//And the value is an object or array
							$isAdditionalPropObjectOrArray
						){
							//Start recursion
							$additionalPropValue = self::extend([
								'objects' => [
									$sourcePropValue,
									$additionalPropValue
								],
								'deep' => true,
								'overwriteWithEmpty' => $params->overwriteWithEmpty
							]);
						}
						
						//Save the new value (replace preverious or create the new property)
						if ($isResultObject){
							$result->{$additionalPropName} = $additionalPropValue;
						}else{
							$result[$additionalPropName] = $additionalPropValue;
						}
					}
				}
			}
		}
		
		return $result;
	}
}
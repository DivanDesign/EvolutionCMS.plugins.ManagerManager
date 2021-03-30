<?php
namespace DDTools;

abstract class Snippet {
	protected
		/**
		 * @property $name {string} — Constructor fills it from namespace.
		 */
		$name = '',
		
		/**
		 * @property $version {string} — Set in children classes.
		 */
		$version = '',
		
		/**
		 * @property $paths {stdClass}
		 * @property $paths->snippet {string} — Full path to the snippet folder.
		 * @property $paths->src {string} — Ful path to `src`.
		 */
		$paths = [
			'snippet' => '/',
			'src' => 'src/'
		],
		
		/**
		 * @property $params {stdClass} — Overwrite with defaults in children classes.
		 */
		$params = [],
		
		/**
		 * @property $paramsTypes {arrayAssociative} — Overwrite in child classes if you want to convert some parameters types.
		 * @property $paramsTypes[$paramName] {'integer'|'boolean'|'objectAuto'|'objectStdClass'|'objectArray'|'stringJsonAuto'|'stringJsonObject'|'stringJsonArray'} — The parameter type.
		 */
		$paramsTypes = [],
		
		/**
		 * @property $renamedParamsCompliance {arrayAssociative} — Overwrite in child classes if you want to rename some parameters with backward compatibility (see \ddTools::verifyRenamedParams).
		 */
		$renamedParamsCompliance = []
	;
	
	/**
	 * __construct
	 * @version 1.1.1 (2021-03-10)
	 * 
	 * @param $params {stdClass|arrayAssociative|stringJsonObject|stringQueryFormatted}
	 */
	public function __construct($params = []){
		//# Prepare name
		$thisClassName = get_called_class();
		
		//Get snippet name from namespace
		$this->name = substr(
			$thisClassName,
			0,
			strrpos(
				$thisClassName,
				'\\'
			)
		);
		
		
		//# Prepare paths
		$this->paths = (object) $this->paths;
		
		$this->paths->snippet =
			//path to `assets`
			dirname(
				__DIR__,
				4
			) .
			'/snippets/' .
			$this->name .
			$this->paths->snippet
		;
		
		$this->paths->src =
			$this->paths->snippet .
			$this->paths->src
		;
		
		
		//# Prepare params
		$this->prepareParams($params);
	}
	
	/**
	 * prepareParams
	 * @version 1.1.1 (2021-03-29)
	 * 
	 * @param $params {stdClass|arrayAssociative|stringJsonObject|stringQueryFormatted}
	 * 
	 * @return {void}
	 */
	protected function prepareParams($params = []){
		$this->params = (object) $this->params;
		
		$params = \DDTools\ObjectTools::convertType([
			'object' => $params,
			'type' => 'objectStdClass'
		]);
		
		//Renaming params with backward compatibility
		if (!empty($this->renamedParamsCompliance)){
			$params = \ddTools::verifyRenamedParams([
				'params' => $params,
				'compliance' => $this->renamedParamsCompliance,
				'returnCorrectedOnly' => false
			]);
		}
		
		if (!empty($this->paramsTypes)){
			foreach (
				$this->paramsTypes as
				$paramName =>
				$paramType
			){
				$paramType = strtolower($paramType);
				
				//Convert defaults
				if (
					\DDTools\ObjectTools::isPropExists([
						'object' => $this->params,
						'propName' => $paramName
					])
				){
					if ($paramType == 'integer'){
						$this->params->{$paramName} = intval($this->params->{$paramName});
					}elseif ($paramType == 'boolean'){
						$this->params->{$paramName} = boolval($this->params->{$paramName});
					}else{
						$this->params->{$paramName} = \DDTools\ObjectTools::convertType([
							'object' => $this->params->{$paramName},
							'type' => $paramType
						]);
					}
				}
				
				//Convert given
				if (
					\DDTools\ObjectTools::isPropExists([
						'object' => $params,
						'propName' => $paramName
					])
				){
					if ($paramType == 'integer'){
						$params->{$paramName} = intval($params->{$paramName});
					}elseif ($paramType == 'boolean'){
						$params->{$paramName} = boolval($params->{$paramName});
					}else{
						$params->{$paramName} = \DDTools\ObjectTools::convertType([
							'object' => $params->{$paramName},
							'type' => $paramType
						]);
					}
				}
			}
		}
		
		$this->params = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				$this->params,
				//Given parameters
				$params
			]
		]);
	}
	
	public abstract function run();
	
	/**
	 * runSnippet
	 * @version 1.0 (2021-02-18)
	 * 
	 * @param $params {stdClass|arrayAssociative|stringJsonObject|stringQueryFormatted}
	 * @param $params->name {string}
	 * @param $params->params {object}
	 * 
	 * @return $result {mixed} — Result of the snippet as is.
	 * @return $result {''} — Empty string if snippet is not exists.
	 */
	public static function runSnippet($params){
		$result = '';
		
		$params = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				(object) [
					'name' => '',
					'params' => []
				],
				\DDTools\ObjectTools::convertType([
					'object' => $params,
					'type' => 'objectStdClass'
				])
			]
		]);
		
		$requireData = (object) [
			'snippetDir' =>
				//path to `assets`
				dirname(
					__DIR__,
					4
				) .
				'/snippets/' .
				$params->name .
				'/'
			,
			'snippetFile' => 'src/Snippet.php',
			'requireFile' => 'require.php'
		];
		
		$requireData->snippetFile =
			$requireData->snippetDir .
			$requireData->snippetFile
		;
		$requireData->requireFile =
			$requireData->snippetDir .
			$requireData->requireFile
		;
		
		if (file_exists($requireData->snippetFile)){
			require_once($requireData->requireFile);
			
			$snippetClass =
				'\\' .
				$params->name .
				'\Snippet'
			;
			
			$snippetObject = new $snippetClass($params->params);
			
			$result = $snippetObject->run();
		}
		
		return $result;
	}
}
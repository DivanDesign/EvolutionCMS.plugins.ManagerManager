<?php
namespace ManagerManager;

use ManagerManager\Core;

class Installer {
	/**
	 * @var $installPath {string} — Full path to install dir.
	 */
	public
		$installPath
	;
	
	/**
	 * __construct
	 * @version 1.0.1 (2020-05-20)
	 */
	public function __construct(){
		//Install dir
		$this->installPath =
			Core::getPluginPath() .
			'install' .
			DIRECTORY_SEPARATOR
		;
		
		//If install folder exist
		if (is_dir($this->installPath)){
			$typeDirs = array_diff(
				scandir($this->installPath),
				[
					'.',
					'..'
				]
			);
			
			//Foreach all types
			foreach (
				$typeDirs as
				$typeDirs_item
			){
				$typePath =
					$this->installPath .
					$typeDirs_item .
					DIRECTORY_SEPARATOR
				;
				
				if (is_dir($typePath)){
					//Get resources dirs
					$resourceDirs = array_diff(
						scandir($typePath),
						[
							'.',
							'..'
						]
					);
					
					foreach (
						$resourceDirs as
						$resourceDirs_item
					){
						$this->installResource([
							'resourceType' => $typeDirs_item,
							'resourceDistrPath' =>
								$typePath .
								$resourceDirs_item .
								DIRECTORY_SEPARATOR
						]);
					}
				}
			}
			
			//Include (MODX)EvolutionCMS.libraries.ddTools
			require_once(
				MODX_BASE_PATH .
				'assets/libs/ddTools/modx.ddtools.class.php'
			);
			
			//Remove distributive directory
			\ddTools::removeDir($this->installPath);
		}
	}
	
	/**
	 * installResource
	 * @version 1.0.2 (2020-05-20)
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params->resourceType {'libs'} — Resource type. @required
	 * @param $params->resourceDistrPath {string} — Resource install dir. @required
	 * 
	 * @return {void}
	 */
	private function installResource($params){
		$params = (object) $params;
		
		$distrData = (object) [
			'path' => $params->resourceDistrPath,
			'composer' => (object) []
		];
		
		$desctinationData  = (object) [
			'path' =>
				MODX_BASE_PATH .
				'assets' .
				DIRECTORY_SEPARATOR .
				$params->resourceType .
				DIRECTORY_SEPARATOR
			,
			'composer' => (object) []
		];
		
		if (
			is_dir($distrData->path) &&
			//composer.json is required
			is_file(
				$distrData->path .
				'composer.json'
			) &&
			//Resource type is valid
			is_dir($desctinationData->path)
		){
			//Init distr composer
			$distrData->composer = json_decode(file_get_contents(
				$distrData->path .
				'composer.json'
			));
			
			//Resource version is required
			if (isset($distrData->composer->version)){
				//Init destinanion path
				$desctinationData->path .= substr(
					$distrData->path,
					strrpos(
						rtrim(
							$distrData->path,
							'/'
						),
						DIRECTORY_SEPARATOR
					) + 1
				);
				
				//Is need to install by default
				$isNeedToInstall = true;
				
				//Desctination composer exists
				if (is_file(
					$desctinationData->path .
					'composer.json'
				)){
					//Init exist resource composer
					$desctinationData->composer = json_decode(file_get_contents(
						$desctinationData->path .
						'composer.json'
					));
					
					//Exist resource composer has version (resource will be updated if not)
					if (isset($desctinationData->composer->version)){
						//If destination version >= distributive version
						if (version_compare(
							$desctinationData->composer->version,
							$distrData->composer->version,
							'>='
						)){
							//Exist resource is fresh and installation is no needed
							$isNeedToInstall = false;
						}
					}
				}
				
				//If installation is needed
				if ($isNeedToInstall){
					//Update resource files
					self::copyDir([
						'sourcePath' => $distrData->path,
						'destinationPath' => $desctinationData->path
					]);
				}
			}
		}
	}
	
	/**
	 * copyDir
	 * @version 2.0.2 (2020-11-01)
	 * 
	 * @desc Copies a required folder with all contents recursively. “ddTools::copyDir” from EvolutionCMS.libraries.ddTools.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['sourcePath'] {string} — Path to the directory, that should copied. @required
	 * @param $params['destinationPath'] {string} — The destination path. @required
	 * 
	 * @return {boolean} — Returns true on success or false on failure.
	 */
	private static function copyDir($params){
		$params = (object) $params;
		
		//Допишем папкам недостающие '/' при необходимости
		if (
			substr(
				$params->sourcePath,
				-1
			) != '/'
		){
			$params->sourcePath .= '/';
		}
		if (
			substr(
				$params->destinationPath,
				-1
			) != '/'
		){
			$params->destinationPath .= '/';
		}
		
		//Проверяем существование
		if (!file_exists($params->sourcePath)){
			return false;
		}
		//Если папки назначения нет, создадим её
		if (!file_exists($params->destinationPath)){
			mkdir($params->destinationPath);
		}
		
		//Получаем файлы в директории
		$fileNames = array_diff(
			scandir($params->sourcePath),
			[
				'.',
				'..'
			]
		);
		
		foreach (
			$fileNames as
			$fileName
		){
			//Если это папка, обработаем её
			if (is_dir(
				$params->sourcePath .
				$fileName
			)){
				self::copyDir([
					'sourcePath' =>
						$params->sourcePath .
						$fileName
					,
					'destinationPath' =>
						$params->destinationPath .
						$fileName
				]);
			}else{
				copy(
					(
						$params->sourcePath .
						$fileName
					),
					(
						$params->destinationPath .
						$fileName
					)
				);
			}
		}
		
		return true;
	}
}
?>
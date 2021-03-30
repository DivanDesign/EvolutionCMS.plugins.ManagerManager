<?php
namespace DDTools;

class FilesTools {
	/**
	 * createDir
	 * @version 1.3.1 (2019-09-03)
	 * 
	 * @desc Makes directory using `$modx->config['new_folder_permissions']`. Nested directories will be created too. Doesn't throw an exception if the folder already exists.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->path {string} — The directory path. @required
	 * 
	 * @return {boolean} — Success status.
	 */
	public static function createDir($params){
		$params = (object) $params;
		
		//True by default
		$result = true;
		
		//На всякий случай проверим, что необходимой папки ещё нет
		if (!file_exists($params->path)){
			$result = mkdir(
				$params->path,
				intval(
					\ddTools::$modx->getConfig('new_folder_permissions'),
					8
				),
				true
			);
		}
		
		return $result;
	}
	
	/**
	 * copyDir
	 * @version 2.0.3 (2020-06-17)
	 * 
	 * @desc Copies a required folder with all contents recursively.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->sourcePath {string} — Path to the directory, that should copied. @required
	 * @param $params->destinationPath {string} — The destination path. @required
	 * 
	 * @return {boolean} — Returns true on success or false on failure.
	 */
	public static function copyDir($params){
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
			if (is_dir($params->sourcePath . $fileName)){
				self::copyDir([
					'sourcePath' => $params->sourcePath . $fileName,
					'destinationPath' => $params->destinationPath . $fileName
				]);
			}else{
				copy(
					$params->sourcePath . $fileName,
					$params->destinationPath . $fileName
				);
			}
		}
		
		return true;
	}
	
	/**
	 * removeDir
	 * @version 1.0.7 (2020-06-17)
	 * 
	 * @desc Removes a required folder with all contents recursively.
	 * 
	 * @param $path {string} — Path to the directory, that should removed. @required
	 * 
	 * @return {boolean}
	 */
	public static function removeDir($path){
		//Если не существует, ок
		if (!file_exists($path)){
			return true;
		}
		
		//Получаем файлы в директории
		$fileNames = array_diff(
			scandir($path),
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
			if (is_dir($path . '/' . $fileName)){
				self::removeDir($path . '/' . $fileName);
			}else{
				unlink($path . '/' . $fileName);
			}
		}
		
		return rmdir($path);
	}
	
	/**
	 * modifyImage
	 * @version 2.6.2 (2021-03-09)
	 * 
	 * @see README.md
	 * 
	 * @return {void}
	 */
	public static function modifyImage($params){
		//Defaults
		$params = \DDTools\ObjectTools::extend([
			'objects' => [
				(object) [
					'transformMode' => 'resize',
					'allowEnlargement' => false,
					'backgroundColor' => 'FFFFFF',
					'quality' => 100
				],
				$params
			]
		]);
		
		if (!\DDTools\ObjectTools::isPropExists([
			'object' => $params,
			'propName' => 'outputFullPathName'
		])){
			$params->outputFullPathName = $params->sourceFullPathName;
		}
		
		
		//Include PHP.libraries.phpThumb
		require_once(
			'phpThumb' .
			DIRECTORY_SEPARATOR .
			'phpthumb.class.php'
		);
		
		//Prepare source image addresses
		foreach (
			[
				'sourceFullPathName',
				'outputFullPathName',
				'watermarkImageFullPathName'
			] as
			$paramName
		){
			if (
				//If the parameter is set
				\DDTools\ObjectTools::isPropExists([
					'object' => $params,
					'propName' => $paramName
				]) &&
				//And set as relative path
				substr(
					$params->{$paramName},
					0,
					strlen(\ddTools::$modx->getConfig('base_path'))
				) !=
				\ddTools::$modx->getConfig('base_path')
			){
				//Convert relative path to absolute if needed
				$params->{$paramName} =
					\ddTools::$modx->getConfig('base_path') .
					$params->{$paramName}
				;
			}
		}
		
		
		//If source image is not exists
		if (!file_exists($params->sourceFullPathName)){
			return;
		}
		
		$originalImg = (object) [
			'width' => 0,
			'height' => 0,
			'ratio' => 1
		];
		
		//Вычислим размеры оригинаольного изображения
		list(
			$originalImg->width,
			$originalImg->height
		) = getimagesize($params->sourceFullPathName);
		
		//Если хотя бы один из размеров оригинала оказался нулевым (например, это не изображение) — на(\s?)бок
		if (
			$originalImg->width == 0 ||
			$originalImg->height == 0
		){
			return;
		}
		
		//Пропрорции реального изображения
		$originalImg->ratio =
			$originalImg->width /
			$originalImg->height
		;
		
		//Если по каким-то причинам высота не задана
		if (
			$params->height == '' ||
			$params->height == 0
		){
			//Вычислим соответственно пропорциям
			$params->height =
				$params->width /
				$originalImg->ratio
			;
		}
		//Если по каким-то причинам ширина не задана
		if (
			$params->width == '' ||
			$params->width == 0
		){
			//Вычислим соответственно пропорциям
			$params->width =
				$params->height *
				$originalImg->ratio
			;
		}
		
		//Если превьюшка уже есть и имеет нужный размер, ничего делать не нужно
		if (
			$originalImg->width == $params->width &&
			$originalImg->height == $params->height &&
			file_exists($params->outputFullPathName)
		){
			return;
		}
		
		$thumb = new \phpThumb();
		//зачистка формата файла на выходе
		$thumb->setParameter(
			'config_output_format',
			null
		);
		//Путь к оригиналу
		$thumb->setSourceFilename($params->sourceFullPathName);
		//Качество (для JPEG)
		$thumb->setParameter(
			'q',
			$params->quality
		);
		//Разрешить ли увеличивать изображение
		$thumb->setParameter(
			'aoe',
			intval($params->allowEnlargement)
		);
		
		//Если нужно просто обрезать
		if($params->transformMode == 'crop'){
			//Ширина превьюшки
			$thumb->setParameter(
				'sw',
				$params->width
			);
			//Высота превьюшки
			$thumb->setParameter(
				'sh',
				$params->height
			);
			
			//Если ширина оригинального изображения больше
			if ($originalImg->width > $params->width){
				//Позиция по оси x оригинального изображения (чтобы было по центру)
				$thumb->setParameter(
					'sx',
					(
						$originalImg->width -
						$params->width
					) /
					2
				);
			}
			
			//Если высота оригинального изображения больше
			if ($originalImg->height > $params->height){
				//Позиция по оси y оригинального изображения (чтобы было по центру)
				$thumb->setParameter(
					'sy',
					(
						$originalImg->height -
						$params->height
					) /
					2
				);
			}
		}else{
			//Ширина превьюшки
			$thumb->setParameter(
				'w',
				$params->width
			);
			//Высота превьюшки
			$thumb->setParameter(
				'h',
				$params->height
			);
			
			//Если нужно уменьшить + отрезать
			if($params->transformMode == 'resizeAndCrop'){
				$thumb->setParameter(
					'zc',
					'1'
				);
			//Если нужно пропорционально уменьшить, заполнив поля цветом
			}elseif($params->transformMode == 'resizeAndFill'){
				//Устанавливаем фон (без решётки)
				$thumb->setParameter(
					'bg',
					str_replace(
						'#',
						'',
						$params->backgroundColor
					)
				);
				//Превьюшка должна точно соответствовать размеру и находиться по центру (недостающие области зальются цветом)
				$thumb->setParameter(
					'far',
					'c'
				);
			}
		}
		
		
		//If need to overlay image with watermark
		if (\DDTools\ObjectTools::isPropExists([
			'object' => $params,
			'propName' => 'watermarkImageFullPathName'
		])){
			$thumb->setParameter(
				'fltr',
				implode(
					'|',
					[
						//WaterMarkImage
						'wmi',
						//Src
						$params->watermarkImageFullPathName,
						//Alignment — center
						'C',
						//Opacity — 100
						'100'
					]
				)
			);
		}
		
		
		//Создаём превьюшку
		$thumb->GenerateThumbnail();
		//Сохраняем в файл
		$thumb->RenderToFile($params->outputFullPathName);
	}
}
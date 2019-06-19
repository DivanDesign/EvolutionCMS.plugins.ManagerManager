<?php
namespace DDTools;


class FilesTools
{
	/**
	 * copyDir
	 * @version 2.0.1 (2019-01-24)
	 * 
	 * @desc Copies a required folder with all contents recursively.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['sourcePath'] {string} — Path to the directory, that should copied. @required
	 * @param $params['destinationPath'] {string} — The destination path. @required
	 * 
	 * @return {boolean} — Returns true on success or false on failure.
	 */
	public static function copyDir($params){
		$params = (object) $params;
		
		//Допишем папкам недостающие '/' при необходимости
		if (substr(
			$params->sourcePath,
			-1
		) != '/'){
			$params->sourcePath .= '/';
		}
		if (substr(
			$params->destinationPath,
			-1
		) != '/'){
			$params->destinationPath .= '/';
		}
		
		//Проверяем существование
		if (!file_exists($params->sourcePath)){return false;}
		//Если папки назначения нет, создадим её
		if (!file_exists($params->destinationPath)){mkdir($params->destinationPath);}
		
		//Получаем файлы в директории
		$fileNames = array_diff(
			scandir($params->sourcePath),
			[
				'.',
				'..'
			]
		);
		
		foreach ($fileNames as $fileName){
			//Если это папка, обработаем её
			if (is_dir($params->sourcePath.$fileName)){
				self::copyDir([
					'sourcePath' => $params->sourcePath.$fileName,
					'destinationPath' => $params->destinationPath.$fileName
				]);
			}else{
				copy(
					$params->sourcePath.$fileName,
					$params->destinationPath.$fileName
				);
			}
		}
		
		return true;
	}
	
	/**
	 * removeDir
	 * @version 1.0.5 (2018-10-01)
	 * 
	 * @desc Removes a required folder with all contents recursively.
	 * 
	 * @param $path {string} — Path to the directory, that should removed. @required
	 * 
	 * @return {boolean}
	 */
	public static function removeDir($path){
		//Если не существует, ок
		if (!file_exists($path)){return true;}
		
		//Получаем файлы в директории
		$fileNames = array_diff(
			scandir($path),
			[
				'.',
				'..'
			]
		);
		
		foreach ($fileNames as $fileName){
			//Если это папка, обработаем её
			if (is_dir($path.'/'.$fileName)){
				self::removeDir($path.'/'.$fileName);
			}else{
				unlink($path.'/'.$fileName);
			}
		}
		
		return rmdir($path);
	}
	
	/**
	 * modifyImage
	 * @version 2.0a (2018-07-16)
	 * 
	 * @desc Делает превьюшку.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['sourceFullPathName'] {string} — Адрес оригинального изображения. @required
	 * @param $params['outputFullPathName'] {string} — Адрес результирующего изображения. @required
	 * @param $params['transformMode'] {'resize'|'crop'|'resizeAndCrop'|'resizeAndFill'} — Режим преобразования. @required
	 * @param $params['width'] {integer} — Ширина результирующего изображения. Если задать один размер — второй будет вычислен автоматически исходя из пропорций оригинального изображения. @required
	 * @param $params['height'] {integer} — Высота результирующего изображения. Если задать один размер — второй будет вычислен автоматически исходя из пропорций оригинального изображения. @required
	 * @param $params['backgroundColor'] {string} — Фон результирующего изображения (может понадобиться для заливки пустых мест). @required
	 * @param $params['allowEnlargement'] {0|1} — Разрешить ли увеличение изображения? @required
	 * @param $params['quality'] {integer} — Output image quality level. @required
	 * 
	 * @return {void}
	 */
	public static function modifyImage($params){
		$params = (object) $params;
		
		$originalImg = (object) [
			'width' => 0,
			'height' => 0,
			'ratio' => 1
		];
		
		require_once('src/FilesTools/phpthumb.class.php');
		
		//Вычислим размеры оригинаольного изображения
		list(
			$originalImg->width,
			$originalImg->height
		) = getimagesize($params->sourceFullPathName);
		
		//Если хотя бы один из размеров оригинала оказался нулевым (например, это не изображение) — на(\s?)бок
		if (
			$originalImg->width == 0 ||
			$originalImg->height == 0
		){return;}
		
		//Пропрорции реального изображения
		$originalImg->ratio = $originalImg->width / $originalImg->height;
		
		//Если по каким-то причинам высота не задана
		if (
			$params->height == '' ||
			$params->height == 0
		){
			//Вычислим соответственно пропорциям
			$params->height = $params->width / $originalImg->ratio;
		}
		//Если по каким-то причинам ширина не задана
		if (
			$params->width == '' ||
			$params->width == 0
		){
			//Вычислим соответственно пропорциям
			$params->width = $params->height * $originalImg->ratio;
		}
		
		//Если превьюшка уже есть и имеет нужный размер, ничего делать не нужно
		if ($originalImg->width == $params->width &&
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
			$params->allowEnlargement
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
					($originalImg->width - $params->width) / 2
				);
			}
			
			//Если высота оригинального изображения больше
			if ($originalImg->height > $params->height){
				//Позиция по оси y оригинального изображения (чтобы было по центру)
				$thumb->setParameter(
					'sy',
					($originalImg->height - $params->height) / 2
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
			}else if($params->transformMode == 'resizeAndFill'){
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
		
		//Создаём превьюшку
		$thumb->GenerateThumbnail();
		//Сохраняем в файл
		$thumb->RenderToFile($params->outputFullPathName);
	}
}
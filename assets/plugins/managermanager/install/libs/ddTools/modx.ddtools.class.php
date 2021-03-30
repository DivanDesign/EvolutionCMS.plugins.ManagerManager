<?php
/**
 * EvolutionCMS.libraries.ddTools
 * @version 0.48.1 (2021-03-29)
 * 
 * @see README.md
 * 
 * @copyright 2012–2021 DD Group {@link https://DivanDesign.biz }
 */

global $modx;

if (!class_exists('ddTools')){
class ddTools {
	public static
		$modx,
		//Contains names of document fields (`site_content`)
		$documentFields = [
			'id',
			'type',
			'contentType',
			'pagetitle',
			'longtitle',
			'description',
			'alias',
			'alias_visible',
			'link_attributes',
			'published',
			'pub_date',
			'unpub_date',
			'parent',
			'isfolder',
			'introtext',
			'content',
			'richtext',
			'template',
			'menuindex',
			'searchable',
			'cacheable',
			'createdby',
			'createdon',
			'editedby',
			'editedon',
			'deleted',
			'deletedon',
			'deletedby',
			'publishedon',
			'publishedby',
			'menutitle',
			'donthit',
			'haskeywords',
			'hasmetatags',
			'privateweb',
			'privatemgr',
			'content_dispo',
			'hidemenu'
		],
		//Contains full names of db tables
		$tables = [
			//System
			'categories' => '',
			'event_log' => '',
			'manager_log' => '',
			'manager_users' => '',
			'system_eventnames' => '',
			'system_settings' => '',
			//Documents
			'site_content' => '',
			'documentgroup_names' => '',
			'document_groups' => '',
			//Templates
			'site_templates' => '',
			//Chunks
			'site_htmlsnippets' => '',
			//TVs
			'site_tmplvars' => '',
			'site_tmplvar_access' => '',
			'site_tmplvar_contentvalues' => '',
			'site_tmplvar_templates' => '',
			//Snippets
			'site_snippets' => '',
			//Plugins
			'site_plugins' => '',
			'site_plugin_events' => '',
			//Modules
			'site_modules' => '',
			'site_module_access' => '',
			'site_module_depobj' => '',
			//Users
			'membergroup_access' => '',
			'membergroup_names' => '',
			'member_groups' => '',
			'active_users' => '',
			'active_user_locks' => '',
			'active_user_sessions' => '',
			'user_attributes' => '',
			'user_messages' => '',
			'user_roles' => '',
			'user_settings' => '',
			'webgroup_access' => '',
			'webgroup_names' => '',
			'web_groups' => '',
			'web_users' => '',
			'web_user_attributes' => '',
			'web_user_settings' => ''
		]
	;
	
	private static
		$instance
	;
	
	/**
	 * __construct
	 * @version 1.0.4 (2020-02-11)
	 */
	private function __construct(){
		global $modx;
		
		self::$modx = $modx;
		
		//Init full table names
		foreach (
			self::$tables as
			$tableAlias =>
			$tableFullName
		){
			self::$tables[$tableAlias] = self::$modx->getFullTableName($tableAlias);
		}
		
		//We need to include required files if Composer is not used
		if(!class_exists('\DDTools\FilesTools')){
			require_once(
				__DIR__ .
				DIRECTORY_SEPARATOR .
				'require.php'
			);
		}
	}
	
	private function __clone(){}
	
	/**
	 * getInstance
	 * @version 1.0 (2018-10-01)
	 */
	public static function getInstance(){
		global $modx;
		
		if(
			isset($modx) &&
			!self::$instance
		){
			self::$instance = new ddTools();
		}
		
		return self::$instance;
	}
	
	/**
	 * orderedParamsToNamed
	 * @version 1.1.6 (2019-06-22)
	 * 
	 * @desc Convert list of ordered parameters to named. Method is public, but be advised that this is beta-version!
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->paramsList {array} — Parameters in ordered list (func_get_args). @required
	 * @param $params->paramsList[i] {mixed} — Parameter value. @required
	 * @param $params->compliance {array} — The order of parameters. @required
	 * @param $params->compliance[i] {string} — Parameter name. @required
	 * 
	 * @return {arrayAssociative}
	 */
	public static function orderedParamsToNamed($params){
		$params = (object) $params;
		
		$result = [];
		
		$logData = (object) [
			'message' => [],
			'backtraceArray' => []
		];
		
		//Перебираем массив соответствия
		foreach (
			$params->compliance as
			$index =>
			$name
		){
			//Если параметр задан
			if (isset($params->paramsList[$index])){
				//Сохраним его
				$result[$name] = $params->paramsList[$index];
			}
			
			$logData->message[] = "'" . $name . "' => $" . $name;
		}
		
		$logData->backtraceArray = debug_backtrace();
		//Remove this method
		array_shift($logData->backtraceArray);
		$caller = $logData->backtraceArray[0];
		$caller =
			(
				isset($caller['class']) ?
				$caller['class'] . '->' :
				''
			) .
			$caller['function']
		;
		
		//General info with code example
		$logData->message =
			'<p>Deprecated ordered parameters.</p><p>Ordered list of parameters is no longer allowed, use the “<a href="https://en.wikipedia.org/wiki/Named_parameter" target="_blank">pass-by-name</a>” style.</p>' .
			'<pre><code>//Old style' .
			$caller .
			'($' .
			implode(
				', $',
				$params->compliance
			) .
			');' .
			'//Pass-by-name' .
			$caller .
			'([' .
			implode(
				',' . PHP_EOL . "\t",
				$logData->message
			) .
			']);' .
			'</code></pre>'
		;
		
		self::logEvent($logData);
		
		return $result;
	}
	
	/**
	 * explodeAssoc
	 * @version 1.1.6 (2020-06-07)
	 * 
	 * @desc Splits string on two separators in the associative array.
	 * 
	 * @param $inputString {stringSeparated} — String to explode. @required
	 * @param $itemDelimiter {string} — Separator between pairs of key-value. Default: '||'.
	 * @param $keyValDelimiter {string} — Separator between key and value. Default: '::'.
	 * 
	 * @return {arrayAssociative}
	 */
	public static function explodeAssoc(
		$inputString,
		$itemDelimiter = '||',
		$keyValDelimiter = '::'
	){
		$result = [];
		
		//Если строка пустая, выкидываем сразу
		if ($inputString == ''){
			return $result;
		}
		
		//Разбиваем по парам
		$inputString = explode(
			$itemDelimiter,
			$inputString
		);
		
		foreach (
			$inputString as
			$item
		){
			//Разбиваем на ключ-значение
			$item = explode(
				$keyValDelimiter,
				$item
			);
			
			$result[$item[0]] =
				isset($item[1]) ?
				$item[1] :
				''
			;
		}
		
		return $result;
	}
	
	/**
	 * unfoldArray
	 * @version 1.0.5 (2019-06-22)
	 * 
	 * @desc Converts a multidimensional array into an one-dimensional one joining the keys with '.'. It can be helpful while using placeholders like [+size.width+].
	 * @example [
	 * 	'a' => 'a val',
	 * 	'b' => [
	 * 		'b1' => 'b1 val',
	 * 		'b2' => [
	 * 			'b21' => 'b2.1 val',
	 * 			'b22' => 'b2.2 val'
	 * 		]
	 * 	],
	 * 	'c' => 'c val'
	 * ] turns into [
	 * 	'a' => 'a val',
	 * 	'b.b1' => 'b1 val',
	 * 	'b.b2.b21' => 'b2.1 val',
	 * 	'b.b2.b22' => 'b2.2 val',
	 * 	'c' => 'c val'
	 * ].
	 * 
	 * @param $array {array} — An array to convert. @required
	 * @param $keyPrefix {string} — Prefix of the keys of an array (it's an internal varible, can be used if required). Default: ''.
	 * 
	 * @return {array} — Unfolded array.
	 */
	public static function unfoldArray(
		$array,
		$keyPrefix = ''
	){
		$result = [];
		
		//Перебираем массив
		foreach (
			$array as
			$key =>
			$val
		){
			//Если значение является массивом
			if (is_array($val)){
				//Запускаем рекурсию дальше
				$result = array_merge(
					$result,
					self::unfoldArray(
						$val,
						$keyPrefix . $key . '.'
					)
				);
			//Если значение — не массив
			}else{
				//Запоминаем (в соответствии с ключом родителя)
				$result[$keyPrefix . $key] = $val;
			}
		}
		
		return $result;
	}
	
	/**
	 * sort2dArray
	 * @version 1.2.1 (2021-03-09)
	 * 
	 * @desc Sorts 2-dimensional array by multiple columns (like in SQL) using Hoare's method, also referred to as quicksort. The sorting is stable.
	 * 
	 * @param $array {array} — Array to sort. Associative arrays are also supported. @required
	 * @param $sortBy {array} — Columns (second level keys) by which the array is sorted. @required
	 * @param $sortDir {1|-1} — Sort direction (1 == ASC; -1 == DESC). Default: 1.
	 * @param $i {integer} — Count, an internal variable used during recursive calls. Default: 0.
	 * 
	 * @return {array} — Sorted array.
	 */
	public static function sort2dArray(
		$array,
		$sortBy,
		$sortDir = 1,
		$i = 0
	){
		//В качестве эталона получаем сортируемое значение (по первому условию сортировки) первого элемента
		$currentRow = array_values($array)[0][$sortBy[$i]];
		$isCurrentRowNumeric = is_numeric($currentRow);
		
		$isArrayAssociative =
			count(array_filter(
				array_keys($array),
				'is_string'
			)) >
			0
		;
		
		$resultArrayLeft = [];
		$resultArrayRight = [];
		$resultArrayCenter = [];
		
		//Перебираем массив
		foreach (
			$array as
			$rowKey =>
			$rowValue
		){
			//Если эталон и текущее значение — числа
			if (
				$isCurrentRowNumeric &&
				is_numeric($rowValue[$sortBy[$i]])
			){
				//Получаем нужную циферку
				$cmpRes =
					$rowValue[$sortBy[$i]] == $currentRow ?
					0 :
					(
						$rowValue[$sortBy[$i]] > $currentRow ?
						1 :
						-1
					)
				;
			//Если они строки
			}else{
				//Сравниваем текущее значение со значением эталонного
				$cmpRes = strcmp(
					$rowValue[$sortBy[$i]],
					$currentRow
				);
			}
			
			//Если меньше эталона, отбрасываем в массив меньших
			if ($cmpRes * $sortDir < 0){
				$resultArray = &$resultArrayLeft;
			//Если больше — в массив больших
			}elseif ($cmpRes * $sortDir > 0){
				$resultArray = &$resultArrayRight;
			//Если равно — в центральный
			}else{
				$resultArray = &$resultArrayCenter;
			}
			
			if ($isArrayAssociative){
				$resultArray[$rowKey] = $rowValue;
			}else{
				$resultArray[] = $rowValue;
			}
		}
		
		//Массивы меньших и массивы больших прогоняем по тому же алгоритму (если в них что-то есть)
		$resultArrayLeft =
			count($resultArrayLeft) > 1 ?
			self::sort2dArray(
				$resultArrayLeft,
				$sortBy,
				$sortDir,
				$i
			) :
			$resultArrayLeft
		;
		$resultArrayRight =
			count($resultArrayRight) > 1 ?
			self::sort2dArray(
				$resultArrayRight,
				$sortBy,
				$sortDir,
				$i
			) :
			$resultArrayRight
		;
		//Массив одинаковых прогоняем по следующему условию сортировки (если есть условие и есть что сортировать)
		$resultArrayCenter =
			(
				count($resultArrayCenter) > 1 &&
				$sortBy[$i + 1]
			) ?
			self::sort2dArray(
				$resultArrayCenter,
				$sortBy,
				$sortDir,
				$i + 1
			) :
			$resultArrayCenter
		;
		
		//Склеиваем отсортированные меньшие, средние и большие
		return array_merge(
			$resultArrayLeft,
			$resultArrayCenter,
			$resultArrayRight
		);
	}
	
	/**
	 * parseFileNameVersion
	 * @version 1.1.4 (2020-02-11)
	 * 
	 * @desc Parses a file path and gets its name, version & extension.
	 * 
	 * @param $file {string|array} — String of file path or result array of pathinfo() function. @required
	 * 
	 * @return $result {arrayAssociative} — File data.
	 * @return $result['name'] {string} — File name.
	 * @return $result['version'] {string} — File version.
	 * @return $result['extension'] {string} — File extension.
	 */
	public static function parseFileNameVersion($file){
		//Если сразу передали массив
		if (is_array($file)){
			//Просто запоминаем его
			$fileinfo = $file;
			//А также запоминаем строку
			$file =
				$fileinfo['dirname'] .
				'/' .
				$fileinfo['basename']
			;
			//Если передали строку
		}else{
			//Получаем необходимые данные
			$fileinfo = pathinfo($file);
		}
		
		//Fail by default
		$result = [
			'name' => strtolower($file),
			'version' => '0',
			'extension' =>
				!$fileinfo['extension'] ?
				'' :
				$fileinfo['extension']
		];
		
		//Try to get file version [0 — full name, 1 — script name, 2 — version, 3 — all chars after version]
		preg_match(
			'/(\D*?)-?(\d(?:\.\d+)*(?:-?[A-Za-z])*)(.*)/',
			$fileinfo['basename'],
			$match
		);
		
		//If not fail
		if (count($match) >= 4){
			$result['name'] = strtolower($match[1]);
			$result['version'] = strtolower($match[2]);
		}
		
		return $result;
	}
	
	/**
	 * createDir
	 * @version 1.0 (2019-10-22)
	 * 
	 * @desc Makes directory using `$modx->config['new_folder_permissions']`. Nested directories will be created too. Doesn't throw an exception if the folder already exists.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->path {string} — The directory path. @required
	 * 
	 * @return {boolean} — Success status.
	 */
	public static function createDir($params){
		return \DDTools\FilesTools::createDir($params);
	}
	
	/**
	 * copyDir
	 * @version 1.1 (2018-10-02)
	 * 
	 * @desc Copies a required folder with all contents recursively.
	 * 
	 * @param $sourcePath {string} — Path to the directory, that should copied. @required
	 * @param $destinationPath {string} — The destination path. @required
	 * 
	 * @return {boolean} — Returns true on success or false on failure.
	 */
	public static function copyDir(
		$sourcePath,
		$destinationPath
	){
		return \DDTools\FilesTools::copyDir([
			'sourcePath' => $sourcePath,
			'destinationPath' => $destinationPath
		]);
	}
	
	/**
	 * removeDir
	 * @version 1.1 (2018-10-02)
	 * 
	 * @desc Removes a required folder with all contents recursively.
	 * 
	 * @param $path {string} — Path to the directory, that should removed. @required
	 * 
	 * @return {boolean}
	 */
	public static function removeDir($path){
		return \DDTools\FilesTools::removeDir($path);
	}
	
	/**
	 * generateRandomString
	 * @version 1.0.3 (2018-06-17)
	 * 
	 * @desc Generate random string with necessary length.
	 * 
	 * @param $length {integer} — Length of output string. Default: 8.
	 * @param $chars {string} — Chars to generate. Default: 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'.
	 * 
	 * @return {string}
	 */
	public static function generateRandomString(
		$length = 8,
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'
	){
		$numChars = strlen($chars);
		$string = '';
		
		for (
			$i = 0;
			$i < $length;
			$i++
		){
			$string .= substr(
				$chars,
				rand(
					1,
					$numChars
				) - 1,
				1
			);
		}
		
		return $string;
	}
	
	/**
	 * escapingForJS
	 * @version 1.1.2 (2019-06-22)
	 * 
	 * @desc Escaping chars in string for JS.
	 * 
	 * @param $str {string} — String to escaping. @required
	 * 
	 * @return {string}
	 */
	public static function escapeForJS($str){
		//Backslach escaping (see issue #1)
		$str = str_replace(
			'\\',
			'\\\\',
			$str
		);
		//Line breaks
		$str = str_replace(
			"\r\n",
			' ',
			$str
		);
		$str = str_replace(
			"\n",
			' ',
			$str
		);
		$str = str_replace(
			"\r",
			' ',
			$str
		);
		//Tabs
		$str = str_replace(
			chr(9),
			' ',
			$str
		);
		$str = str_replace(
			'  ',
			' ',
			$str
		);
		//MODX placeholders
		$str = str_replace(
			'[+',
			'\[\+',
			$str
		);
		$str = str_replace(
			'+]',
			'\+\]',
			$str
		);
		//Quotes
		$str = str_replace(
			"'",
			"\'",
			$str
		);
		$str = str_replace(
			'"',
			'\"',
			$str
		);
		
		return $str;
	}
	
	/**
	 * encodedStringToArray
	 * @version 1.2 (2020-06-02)
	 * 
	 * @desc Converts encoded strings to arrays.
	 * Supported formats:
	 * 1. [JSON](https://en.wikipedia.org/wiki/JSON).
	 * 2. [Query string](https://en.wikipedia.org/wiki/Query_string).
	 * 
	 * @param $inputString {stringJsonObject|stringJsonArray|stringQueryFormated|stdClass|array} — Input string. @required
	 * 
	 * @return {array}
	 */
	public static function encodedStringToArray($inputString){
		$result = \DDTools\ObjectTools::convertType([
			'object' => $inputString,
			'type' => 'objectArray'
		]);
		
		//The old deprecated format where string is separated by '||' and '::'
		if (
			count($result) == 1 &&
			array_keys($result)[0] == $inputString
		){
			$result = self::explodeAssoc($inputString);
			
			self::logEvent([
				'message' =>
					'<p>Strings separated by <code>::</code> && <code>||</code> in parameters are deprecated.</p>' .
					'<p>Use <a href="https://en.wikipedia.org/wiki/JSON" target="_blank">JSON</a> or <a href="https://en.wikipedia.org/wiki/Query_string" target="_blank">Query string</a> instead.</p>'
			]);
		}
		
		return $result;
	}

	/**
	 * getPlaceholdersFromText
	 * @version 1.0.2 (2020-02-11)
	 * 
	 * @desc Finds all placeholders' names and returns them as an array.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->text {string} — Source string. @required
	 * @param $params->placeholderPrefix {string} — Placeholders prefix. Default: '[+'.
	 * @param $params->placeholderSuffix {string} — Placeholders suffix. Default: '+]'.
	 * 
	 * @return {array}
	 */
	public static function getPlaceholdersFromText($params = []){
		//Defaults
		$params = (object) array_merge(
			[
				'text' => '',
				'placeholderPrefix' => '[+',
				'placeholderSuffix' => '+]'
			],
			(array) $params
		);
		
		$params->placeholderPrefix = preg_quote($params->placeholderPrefix);
		$params->placeholderSuffix = preg_quote($params->placeholderSuffix);
		
		$result = [];
		
		preg_match_all(
			(
				'/' .
				$params->placeholderPrefix .
				'(.*?)' .
				$params->placeholderSuffix .
				'/'
			),
			$params->text,
			$result
		);
		
		$result = array_unique($result[1]);
		
		return $result;
	}
	
	/**
	 * logEvent
	 * @version 1.0.3 (2020-02-11)
	 * 
	 * @desc Add an alert message to the system event log with debug info (backtrace, snippet name, document id, etc).
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->message {string} — Message to be logged. Default: ''.
	 * @param $params->source {string} — Source of the event (module, snippet name, etc). Default: $modx->currentSnippet || caller.
	 * @param $params->eventId {integer} — Event ID. Default: 1.
	 * @param $params->eventType {'information'|'warning'|'error'} — Event type. Default: 'warning'.
	 * @param $params->backtraceArray {array} — Backtrace (if default is not suitable). See http://php.net/manual/en/function.debug-backtrace.php. Default: debug_backtrace().
	 * 
	 * @return {void}
	 */
	public static function logEvent($params){
		//Defaults
		$params = (object) array_merge(
			[
				'message' => '',
				'source' => '',
				//TODO: Why “1”, what does it mean?
				'eventId' => 1,
				'eventType' => 'warning',
// 				'backtraceArray' => debug_backtrace(),
			],
			(array) $params
		);
		
		
		//Prepare backtrace and caller
		if (!isset($params->backtraceArray)){
			$params->backtraceArray = debug_backtrace();
			//Remove this method
			array_shift($params->backtraceArray);
		}
		$caller = $params->backtraceArray[0];
		$caller =
			(
				isset($caller['class']) ?
				$caller['class'] . '->' :
				''
			) .
			$caller['function']
		;
		
		
		$debugInfo = [];
		
		//Add current document Id to debug info
		if (!empty(self::$modx->documentIdentifier)){
			$debugInfo[] =
				'<li>Document id: “' .
				self::$modx->documentIdentifier .
				'”;</li>'
			;
		}
		
		//Is the code being run in the snippet?
		if (!empty(self::$modx->currentSnippet)){
			//Empty source
			if ($params->source == ''){
				//Set as source
				$params->source = self::$modx->currentSnippet;
			}else{
				//Add to debug info
				$debugInfo[] =
					'<li>Snippet: “' .
					self::$modx->currentSnippet .
					'”;</li>'
				;
			}
		}
		
		if ($params->source == ''){
			$params->source = $caller;
		}
		
		
		//Add debug info to the message
		$params->message .= '<h3>Debug info</h3>';
		
		if (!empty($debugInfo)){
			$params->message .=
				'<ul>' .
				implode(
					'',
					$debugInfo
				) .
				'</ul>'
			;
		}
		
		//Add backtrace to message
		$params->message .= self::$modx->get_backtrace($params->backtraceArray);
		
		
		//Prepare event type
		switch (substr(
			$params->eventType,
			0,
			1
		)){
			//Information
			case 'i':
				$params->eventType = 1;
			break;
			
			//Warning
			case 'w':
				$params->eventType = 2;
			break;
			
			//Error
			case 'e':
				$params->eventType = 3;
			break;
		}
		
		
		self::$modx->logEvent(
			$params->eventId,
			$params->eventType,
			$params->message,
			$params->source
		);
	}
	
	/**
	 * parseText
	 * @version 1.5.2 (2019-06-22)
	 * 
	 * @desc Similar to $modx->parseChunk, but takes a text.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->text {string} — String to parse. @required
	 * @param $params->data {stdClass|arrayAssociative} — Array of values. Nested arrays are supported too: “['stringPlaceholder' = > 'one', 'arrayPlaceholder' => ['a' => 'one', 'b' => 'two']]” => “[+stringPlaceholder+]”, “[+arrayPlaceholder.a+]”, “[+arrayPlaceholder.b+]”. Default: [].
	 * @param $params->data->{$key} {string|stdClass|arrayAssociative} — Key — placeholder name, value — value.
	 * @param $params->placeholderPrefix {string} — Placeholders prefix. Default: '[+'.
	 * @param $params->placeholderSuffix {string} — Placeholders suffix. Default: '+]'.
	 * @param $params->removeEmptyPlaceholders {boolean} — Do you need to remove empty placeholders? Default: false.
	 * @param $params->mergeAll {boolean} — Additional parsing the document fields, settings, chunks. Default: true.
	 * 
	 * @return {string}
	 */
	public static function parseText($params = []){
		//For backward compatibility
		if (func_num_args() > 1){
			//Convert ordered list of params to named
			$params = self::orderedParamsToNamed([
				'paramsList' => func_get_args(),
				'compliance' => [
					'text',
					'data',
					'placeholderPrefix',
					'placeholderSuffix',
					'mergeAll'
				]
			]);
		}
		
		//Defaults
		$params = (object) array_merge(
			[
				'text' => '',
				'data' => [],
				'placeholderPrefix' => '[+',
				'placeholderSuffix' => '+]',
				'removeEmptyPlaceholders' => false,
				'mergeAll' => true
			],
			(array) $params
		);
		
		$result = $params->text;
		
		//Convert stdClass to array
		if (!is_array($params->data)){
			$params->data = (array) $params->data;
		}
		
		//Если значения для парсинга переданы
		if (!empty($params->data)){
			//Unfold for arrays support (e. g. “some[a]=one&some[b]=two” => “[+some.a+]”, “[+some.b+]”; “some[]=one&some[]=two” => “[+some.0+]”, “[some.1]”)
			$params->data = self::unfoldArray($params->data);
			
			foreach (
				$params->data as
				$key =>
				$value
			){
				$result = str_replace(
					$params->placeholderPrefix . $key . $params->placeholderSuffix,
					$value,
					$result
				);
			}
		}
		
		if ($params->mergeAll){
			$result = self::$modx->mergeDocumentContent($result);
			$result = self::$modx->mergeSettingsContent($result);
			$result = self::$modx->mergeChunkContent($result);
		}
		
		if ($params->removeEmptyPlaceholders){
			$result = preg_replace(
				'/(\[\+\S+?\+\])/m',
				'',
				$result
			);
		}
		
		return $result;
	}
	
	/**
	 * parseSource
	 * @version 1.1 (2018-12-24)
	 * 
	 * @desc Parse the source (run $modx->parseDocumentSource and $modx->rewriteUrls);
	 * 
	 * @param $source {string} — Text to parse. @required
	 * 
	 * @return {string}
	 */
	public static function parseSource($source){
		//Uncashed snippets must be evaled too
		$source = strtr(
			$source,
			[
				'[!' => '[[',
				'!]' => ']]'
			]
		);
		
		return self::$modx->rewriteUrls(self::$modx->parseDocumentSource($source));
	}
	
	/**
	 * clearCache
	 * @version 1.1 (2020-02-11)
	 * 
	 * @desc Clears cache of required document(s) and their parents.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->docIds {arrayAssociative|stringCommaSeparated} — Document ID(s). @required
	 * @param $params->docIds[i] {integer} — Document ID. @required
	 * @param $params->clearParentsCache {boolean} — Is need to clear parents cache? Default: true.
	 * 
	 * @return {void}
	 */
	public static function clearCache($params){
		//Defaults
		$params = (object) array_merge(
			[
				'clearParentsCache' => true,
			],
			(array) $params
		);
		
		//Comma separated strings support
		if (!is_array($params->docIds)){
			$params->docIds = explode(
				',',
				$params->docIds
			);
		}
		
		$cacheFilePrefix =
			self::$modx->getConfig('base_path') .
			self::$modx->getCacheFolder() .
			'docid_'
		;
		
		$cacheFileSuffix = '.pageCache.php';
		
		foreach (
			$params->docIds as
			$docId
		){
			//$_GET cache
			$cacheFiles = glob(
				$cacheFilePrefix .
				$docId .
				'_*' .
				$cacheFileSuffix
			);
			//Without $_GET
			$cacheFiles[] =
				$cacheFilePrefix .
				$docId .
				$cacheFileSuffix
			;
			
			foreach (
				$cacheFiles as
				$cacheFiles_item
			){
				if (!is_file($cacheFiles_item)){
					continue;
				}
				
				unlink($cacheFiles_item);
			}
			
			//IF need to clear parents cache too
			if ($params->clearParentsCache){
				self::clearCache([
					//Get all parents
					'docIds' => self::getDocumentParentIds([
						'docId' => $docId
					]),
					'clearParentsCache' => false
				]);
			}
		}
	}
	
	/**
	 * prepareDocData
	 * @version 2.0.4 (2020-02-11)
	 * 
	 * @desc Prepare document data from single array of fields and TVs: separate them and get TV IDs if needed.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->data {stdClass|arrayAssociative} — Array of document fields (from table `site_content`) or TVs with values. @required
	 * @param $params->data->{$key} {mixed} — Field value (optional), when key is field name. The method use only keys, values just will be returned without changes. @required
	 * @param $params->tvAdditionalFieldsToGet {array} — Fields of TVs to get if needed (e. g. 'id', 'type'). Default: [].
	 * @param $params->tvAdditionalFieldsToGet[i] {string} — TV field.
	 * 
	 * @return $result {stdClass}
	 * @return $result->fieldsData {arrayAssociative} — Document fields data (like 'id', 'pagetitle', etc). @required
	 * @return $result->fieldsData[key] {mixed} — Field value, when key is field name.
	 * @return $result->tvsData {arrayAssociative} — TVs values. @required
	 * @return $result->tvsData[key] {mixed} — TV value, when key is TV name.
	 * @return $result->tvsAdditionalData {arrayAssociative} — TVs additional data, when key is TV name. @required
	 * @return $result->tvsAdditionalData[key] {arrayAssociative} — TV data, when key is TV name.
	 * @return $result->tvsAdditionalData[key][item] {string} — TV data.
	 */
	public static function prepareDocData($params){
		//Defaults
		$params = (object) array_merge(
			[
				'tvAdditionalFieldsToGet' => []
			],
			(array) $params
		);
		
		$result = (object) [
			'fieldsData' => [],
			'tvsData' => [],
			'tvsAdditionalData' => []
		];
		
		//Перебираем поля, раскидываем на поля документа и TV
		foreach (
			$params->data as
			$data_itemFieldName =>
			$data_itemFieldValue
		){
			//Если это не поле документа
			if (!in_array(
				$data_itemFieldName,
				self::$documentFields
			)){
				//Запоминаем как TV`шку
				$result->tvsData[$data_itemFieldName] = $data_itemFieldValue;
			}else{
				//Save as document field
				$result->fieldsData[$data_itemFieldName] = $data_itemFieldValue;
			}
		}
		
		if (
			!empty($params->tvAdditionalFieldsToGet) &&
			//Если есть хоть одна TV
			count($result->tvsData) > 0
		){
			if (!in_array(
				'name',
				$params->tvAdditionalFieldsToGet
			)){
				$params->tvAdditionalFieldsToGet[] = 'name';
			}
			
			//Получаем id всех необходимых TV
			$dbRes = self::$modx->db->select(
				//Fields
				(
					'`' .
					implode(
						'`, `',
						$params->tvAdditionalFieldsToGet
					) .
					'`'
				),
				//From
				self::$tables['site_tmplvars'],
				//Where
				(
					"`name` IN ('" .
					implode(
						"','",
						array_keys($result->tvsData)
					) .
					"')"
				)
			);
			
			while ($row = self::$modx->db->getRow($dbRes)){
				$result->tvsAdditionalData[$row['name']] = $row;
			}
		}
		
		return $result;
	}
	
	/**
	 * createDocument_prepareAlias
	 * @version 0.1 (2020-06-07)
	 * 
	 * @desc Translate strings.
	 * 
	 * @param $sourceString {string} — Document pagetitle. @required
	 * 
	 * @return {string} — Translated string.
	 */
	private static function createDocument_prepareAlias($sourceString){
		$result = $sourceString;
		
		$result = transliterator_transliterate(
			'Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();',
			$result
		);
		
		$result = str_replace(
			' ',
			'-',
			$result
		);
		
		$result = preg_replace(
			'/[^A-Za-zА-Яа-я0-9\-_]/',
			'',
			$result
		);
		
		return $result;
	}
	
	/**
	 * createDocument
	 * @version 1.5 (2020-06-21)
	 * 
	 * @desc Create a new document.
	 * 
	 * @param $docData {stdClass|arrayAssociative} — Array of document fields or TVs. Key — name, value — value. @required
	 * @param $docData->pagetitle {string} — Document pagetitle. Default: 'New resource'.
	 * @param $docData->alias {string} — Document alias. If empty, will be transliterated from `$docData->pagetitle`. Default: ''.
	 * @param $docGroups {array} — Array of document groups id.
	 * 
	 * @return {integer|false} — ID нового документа или false, если что-то не так.
	 */
	public static function createDocument(
		$docData = [],
		$docGroups = false
	){
		//Defaults
		$docData = \DDTools\ObjectTools::extend([
			'objects' => [
				(object) [
					'pagetitle' => 'New resource',
					//Autotransliterate from pagetitle
					'alias' => '',
					//Если не передана дата создания документа, ставим текущую
					'createdon' => time(),
					//Если не передано, кем документ создан, ставим 1
					'createdby' => 1
				],
				$docData
			],
			'overwriteWithEmpty' => false
		]);
		
		//Если группы заданы, то это приватный документ
		if ($docGroups){
			$docData->privatemgr = 1;
		}
		
		//Если надо публиковать, поставим дату публикации текущей
		if ($docData->published == 1){
			$docData->pub_date = $docData->createdon;
		}
		
		if (trim($docData->alias) == ''){
			$docData->alias = self::createDocument_prepareAlias($docData->pagetitle);
		}
		
		$docAlias = $docData->alias;
		
		foreach (
			$docData as
			$fieldName =>
			$fieldValue
		){
			$docData->{$fieldName} = self::$modx->db->escape($fieldValue);
		}
		
		$docData = self::prepareDocData([
			'data' => $docData,
			'tvAdditionalFieldsToGet' => [
				'id',
				'type'
			]
		]);
		
		//Вставляем новый документ в базу, получаем id, если что-то пошло не так, выкидываем
		$docId = self::$modx->db->insert(
			$docData->fieldsData,
			self::$tables['site_content']
		);
		
		if (!$docId){
			return false;
		}
		
		//Если есть хоть одна существующая TV
		if (count($docData->tvsAdditionalData) > 0){
			//Перебираем массив TV с ID
			foreach (
				$docData->tvsAdditionalData as
				$tvName =>
				$tvData
			){
				if (
					//Если это дата
					$tvData['type'] == 'date' &&
					//И она задана как Unixtime
					is_numeric($docData->tvsData[$tvName])
				){
					//Приведём её к формату системы
					$docData->tvsData[$tvName] = self::$modx->toDateFormat($docData->tvsData[$tvName]);
				}
				
				//Добавляем значение TV в базу
				self::$modx->db->insert(
					//Fields
					[
						'value' => $docData->tvsData[$tvName],
						'tmplvarid' => $tvData['id'],
						'contentid' => $docId
					],
					//Table
					self::$tables['site_tmplvar_contentvalues']
				);
			}
		}
		
		//Если заданы группы (и на всякий проверим ID)
		if ($docGroups){
			//Перебираем все группы
			foreach (
				$docGroups as
				$docGroupId
			){
				self::$modx->db->insert(
					//Field
					[
						'document_group' => $docGroupId,
						'document' => $docId
					],
					//Table
					self::$tables['document_groups']
				);
			}
		}
		
		//Смотрим родителя нового документа, является ли он папкой и его псевдоним
		$docParent =
			isset($docData->fieldsData['parent']) ?
			$docData->fieldsData['parent'] :
			0
		;
		$docIsFolder =
			isset($docData->fieldsData['isfolder']) ?
			$docData->fieldsData['isfolder'] :
			0
		;
		
		//Пусть созданного документа
		$docPath = '';
		
		//Собираем путь в зависимости от пути родителя
		if(isset(self::$modx->aliasListing[$docParent]['path'])){
			$docPath = self::$modx->aliasListing[$docParent]['path'];
			
			if(self::$modx->aliasListing[$docParent]['alias'] != ''){
				$docPath .= '/' . self::$modx->aliasListing[$docParent]['alias'];
			}else{
				$docPath .= '/' . self::$modx->aliasListing[$docParent]['id'];
			}
		}
		
		//Добавляем в массивы documentMap и aliasListing информацию о новом документе
		self::$modx->documentMap[] = [$docParent => $docId];
		self::$modx->aliasListing[$docId] = [
			'id' => $docId,
			'alias' => $docAlias,
			'path' => $docPath,
			'parent' => $docParent,
			'isfolder' => $docIsFolder
		];
		
		//Добавляем в documentListing
		if(self::$modx->aliasListing[$docId]['path'] !== ''){
			self::$modx->documentListing[
				self::$modx->aliasListing[$docId]['path'] . '/' .
				(
					self::$modx->aliasListing[$docId]['alias'] != ''?
					self::$modx->aliasListing[$docId]['alias'] :
					self::$modx->aliasListing[$docId]['id']
				)
			] = $docId;
		}
		
		return $docId;
	}
	
	/**
	 * updateDocument
	 * @version 1.5 (2021-03-15)
	 * 
	 * @desc Update document(s). Cache of the updated docs and their parents will be cleared.
	 * 
	 * @note $docId and/or $where are required.
	 * 
	 * @param $docId {integer|array} — Document id(s) to update. @required
	 * @param $docData {stdClass|arrayAssociative} — Array of document fields or TVs to update. Key — name, value — value. @required
	 * @param $where {string} — SQL WHERE string. Default: ''.
	 * 
	 * @return {boolean} — true — если всё хорошо, или false — если такого документа нет, или ещё что-то пошло не так.
	 */
	public static function updateDocument(
		$docId = 0,
		$docData = [],
		$where = ''
	){
		//Required parameters
		if (
			$docId == 0 &&
			trim($where) == ''
		){
			return false;
		}
		
		$docData = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				(object) [
					//Если не передана дата изменения документа, ставим текущую
					'editedon' => time(),
					//Если не передано, кем документ изменён, ставим 1
					'editedby' => 1
				],
				$docData
			],
			'overwriteWithEmpty' => false
		]);
		
		$whereSql = '';
		
		if (
			is_array($docId) &&
			count($docId)
		){
			//Обрабатываем массив id
			$whereSql .=
				'`id` IN ("' .
				implode(
					'","',
					$docId
				) .
				'")'
			;
		}elseif (
			is_numeric($docId) &&
			$docId != 0
		){
			//Обрабатываем числовой id
			$whereSql .= '`id`="' . $docId . '"';
		}
		
		//Добавляем дополнительное условие
		if ($where != ''){
			$whereSql .=
				(
					$whereSql != '' ?
					' AND ' :
					''
				) .
				$where
			;
		}
		
		//Получаем id документов для обновления
		$docIdsToUpdate_dbRes = self::$modx->db->select(
			'id',
			self::$tables['site_content'],
			$whereSql
		);
		
		if (self::$modx->db->getRecordCount($docIdsToUpdate_dbRes)){
			$docIdsToUpdate = [];
			while ($doc = self::$modx->db->getRow($docIdsToUpdate_dbRes)){
				$docIdsToUpdate[] = $doc['id'];
			}
			
			foreach (
				$docData as
				$fieldName =>
				$fieldValue
			){
				$docData->{$fieldName} = self::$modx->db->escape($fieldValue);
			}
			
			//Разбиваем на поля документа и TV
			$docData = self::prepareDocData([
				'data' => $docData,
				'tvAdditionalFieldsToGet' => [
					'id',
					'type'
				]
			]);
			
			//Обновляем информацию по документу
			if (count($docData->fieldsData) > 0){
				self::$modx->db->update(
					$docData->fieldsData,
					self::$tables['site_content'],
					$whereSql
				);
			}
			
			//Если есть хоть одна TV
			if (count($docData->tvsAdditionalData) > 0){
				//Обновляем TV всех найденых документов
				foreach (
					$docIdsToUpdate as
					$docId
				){
					//Перебираем массив существующих TV
					foreach (
						$docData->tvsAdditionalData as
						$tvName =>
						$tvData
					){
						if (
							//Если это дата
							$tvData['type'] == 'date' &&
							//И она задана как Unixtime
							is_numeric($docData->tvsData[$tvName])
						){
							//Приведём её к формату системы
							$docData->tvsData[$tvName] = self::$modx->toDateFormat($docData->tvsData[$tvName]);
						}
						
						//Пробуем обновить значение нужной TV
						self::$modx->db->update(
							'`value` = "' . $docData->tvsData[$tvName] . '"',
							self::$tables['site_tmplvar_contentvalues'],
							'`tmplvarid` = ' . $tvData['id'] . ' AND `contentid` = ' . $docId
						);
						
						//Проверяем сколько строк нашлось при обновлении
						//Если используется mysqli
						if(is_a(
							self::$modx->db->conn,
							'mysqli'
						)){
							preg_match(
								'/Rows matched: (\d+)/',
								mysqli_info(self::$modx->db->conn),
								$updatedRows
							);
						}else{
							//Если self::$modx->db->conn не является экземпляром mysqli, то пробуем через устаревший mysql_info
							preg_match(
								'/Rows matched: (\d+)/',
								mysql_info(),
								$updatedRows
							);
						}
						
						//Если ничего не обновилось (не нашлось)
						if ($updatedRows[1] == 0){
							//Добавляем значение нужной TV в базу
							self::$modx->db->insert(
								[
									'value' => $docData->tvsData[$tvName],
									'tmplvarid' => $tvData['id'],
									'contentid' => $docId
								],
								self::$tables['site_tmplvar_contentvalues']
							);
						}
					}
				}
			}
			
			//Clear cache of updated docs
			self::clearCache([
				'docIds' => $docIdsToUpdate
			]);
			
			return true;
		}
		
		//Нечего обновлять
		return false;
	}
	
	/**
	 * getDocuments
	 * @version 1.2.8 (2020-02-11)
	 * 
	 * @desc Returns required documents (documents fields).
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— $published parameter can be set as ==='all' to retrieve the documents regardless of their publication status.
	 * 	— $deleted parameter can be set as ==='all' to retrieve the documents regardless of their removal status.
	 * 
	 * @param $ids {array} — Documents Ids to get. @required
	 * @param $published {'all'|0|1} — Documents publication status which does not matter if published === 'all'. Default: 'all'.
	 * @param $deleted {'all'|0|1} — Documents removal status which does not matter if deleted === 'all'. Default: 0.
	 * @param $fields {stringCommaSeparated|'*'} — Documents fields to get. Default: '*'.
	 * @param $where {string} — SQL WHERE clause. Default: ''.
	 * @param $sort {string} — A field to sort by. Default: 'menuindex'.
	 * @param $dir {'ASC'|'DESC'} — Sorting direction. Default: 'ASC'.
	 * @param $limit {string} — SQL LIMIT (without 'LIMIT'). Default: ''.
	 * 
	 * @return {array|false}
	 */
	public static function getDocuments(
		$ids = [],
		$published = 'all',
		$deleted = 0,
		$fields = '*',
		$where = '',
		$sort = 'menuindex',
		$dir = 'ASC',
		$limit = ''
	){
		//Проверка на устаревшее значение $published
		if($published === false){
			$published = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $published parameter.</p><p>False is no longer allowed as a value for the $published parameter. Use “all” instead.</p>'
			]);
		}
		
		//Проверка на устаревшее значение $deleted === false
		if($deleted === false){
			$deleted = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $deleted parameter.</p><p>False is no longer allowed as a value for the $deleted parameter. Use “all” instead.</p>'
			]);
		}
		
		if(is_string($ids)){
			if(strpos(
				$ids,
				','
			) !== false){
				$ids = array_filter(array_map(
					'intval',
					explode(
						',',
						$ids
					)
				));
			}else{
				$ids = [$ids];
			}
		}
		
		if (count($ids) == 0){
			return false;
		}else{
			// modify field names to use sc. table reference
			$fields =
				'sc.' .
				implode(
					',sc.',
					array_filter(array_map(
						'trim',
						explode(
							',',
							$fields
						)
					))
				)
			;
			$sort =
				$sort == '' ?
				'' :
				(
					'sc.' .
					implode(
						',sc.',
						array_filter(array_map(
							'trim',
							explode(
								',',
								$sort
							)
						))
					)
				)
			;
			if ($where != ''){
				$where = 'AND ' . $where;
			}
			
			$published =
				$published !== 'all' ?
				"AND sc.published = '{$published}'" :
				''
			;
			$deleted =
				$deleted !== 'all' ?
				"AND sc.deleted = '{$deleted}'" :
				''
			;
			
			$result = self::$modx->db->select(
				//Fields
				'DISTINCT ' . $fields,
				//From
				self::$tables['site_content'] . ' sc
					LEFT JOIN ' . self::$tables['document_groups'] . ' dg
						ON dg.document = sc.id
				',
				//Where
				(
					'(sc.id IN (' .
					implode(
						',',
						$ids
					) .
					') ' .
					$published .
					' ' .
					$deleted .
					' ' .
					$where .
					') GROUP BY sc.id'
				),
				//Order
				(
					$sort ?
					$sort . ' ' . $dir :
					''
				),
				//Limit
				$limit
			);
			
			$resourceArray = self::$modx->db->makeArray($result);
			
			return $resourceArray;
		}
	}
	
	/**
	 * getDocument
	 * @version 1.1.6 (2018-06-17)
	 * 
	 * @desc Returns required data of a document (document fields).
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— $published parameter can be set as === 'all' to retrieve the documents regardless of their publication status.
	 * 	— $deleted parameter can be set as === 'all' to retrieve the documents regardless of their removal status.
	 * 
	 * @param $id {integer} — Id of a document which data is being got. @required
	 * @param $fields {stringCommaSeparated|'*'} — Documents fields to get. Default: '*'.
	 * @param $published {'all'|0|1} — Document publication status which does not matter if published === 'all'. Default: 'all'.
	 * @param $deleted {'all'|0|1} — Document removal status which does not matter if published === 'all'. Default: 0.
	 * 
	 * @return {array|false}
	 */
	public static function getDocument(
		$id = 0,
		$fields = '*',
		$published = 'all',
		$deleted = 0
	){
		//Проверка на устаревшее значение $published
		if($published === false){
			$published = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $published parameter.</p><p>False is no longer allowed as a value for the $published parameter. Use “all” instead.</p>'
			]);
		}
		
		//Проверка на устаревшее значение $deleted === false
		if($deleted === false){
			$deleted = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $deleted parameter.</p><p>False is no longer allowed as a value for the $deleted parameter. Use “all” instead.</p>'
			]);
		}
		
		if ($id == 0){
			return false;
		}else{
			$docs = self::getDocuments(
				[$id],
				$published,
				$deleted,
				$fields,
				'',
				'',
				'',
				1
			);
			
			if ($docs != false){
				return $docs[0];
			}else{
				return false;
			}
		}
	}
	
	/**
	 * getTemplateVars
	 * @version 1.3.10 (2021-02-24)
	 * 
	 * @desc Returns the TV and fields array of a document. 
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— $published parameter can be set as ==='all' to retrieve the documents regardless of their publication status.
	 * 
	 * @param $idnames {array|'*'} — Id, TVs names, or documents fields to get. @required
	 * @param $fields {stringCommaSeparated|'*'} — Fields names in the TV table of MODx database. Default: '*'.
	 * @param $docid {integer|''} — Id of a document to get. Default: Current document.
	 * @param $published {'all'|0|1} — Document publication status which does not matter if published === 'all'. Default: 'all'.
	 * @param $sort {stringCommaSeparated} — Fields of the TV table to sort by. Default: 'rank'.
	 * @param $dir {'ASC'|'DESC'} — Sorting direction. Default: 'ASC'.
	 * 
	 * @return {array|false}
	 */
	public static function getTemplateVars(
		$idnames = [],
		$fields = '*',
		$docid = '',
		$published = 'all',
		$sort = 'rank',
		$dir = 'ASC'
	){
		//Проверка на устаревшее значение $published
		if($published === false){
			$published = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $published parameter.</p><p>False is no longer allowed as a value for the $published parameter. Use “all” instead.</p>'
			]);
		}
		
		if (
			empty($idnames) ||
			(
				!is_array($idnames) &&
				$idnames != '*'
			)
		){
			return false;
		}else{
			// get document record
			if ($docid == ''){
				$docid = self::$modx->documentIdentifier;
				$docRow = self::$modx->documentObject;
			}else{
				$docRow = self::getDocument(
					$docid,
					'*',
					$published,
					'all'
				);
				
				if (!$docRow){
					return false;
				}
			}
			
			// get user defined template variables
			$fields =
				$fields == '' ?
				'tv.*' :
				(
					'tv.' .
					implode(
						',tv.',
						array_filter(array_map(
							'trim',
							explode(
								',',
								$fields
							)
						))
					)
				)
			;
			$sort =
				$sort == '' ?
				'' :
				(
					'tv.' .
					implode(
						',tv.',
						array_filter(array_map(
							'trim',
							explode(
								',',
								$sort
							)
						))
					)
				)
			;
			
			if ($idnames == '*'){
				$query = 'tv.id<>0';
			}else{
				$query =
					(
						is_numeric($idnames[0]) ?
						'tv.id' :
						'tv.name'
					) .
					' IN ("' .
					implode(
						'","',
						$idnames
					) .
					'")'
				;
			}
			
			$rs = self::$modx->db->select(
				//Fields
				(
					$fields .
					', IF(tvc.value != "", tvc.value, tv.default_text) as value'
				),
				//From
				self::$tables['site_tmplvars'] . ' tv
					INNER JOIN ' . self::$tables['site_tmplvar_templates'] . ' tvtpl
						ON tvtpl.tmplvarid = tv.id
					LEFT JOIN ' . self::$tables['site_tmplvar_contentvalues'] . ' tvc
						ON tvc.tmplvarid=tv.id AND tvc.contentid = "' . $docid . '"
				',
				//Where
				(
					$query .
					' AND tvtpl.templateid = "' .
					$docRow['template'] .
					'"'
				),
				//Order
				(
					$sort ?
					$sort . ' ' . $dir :
					''
				)
			);
			
			$result = self::$modx->db->makeArray($rs);
			
			// get default/built-in template variables
			ksort($docRow);
			
			foreach (
				$docRow as
				$key =>
				$value
			){
				if (
					$idnames == '*' ||
					in_array(
						$key,
						$idnames
					)
				){
					array_push(
						$result,
						[
							'name' => $key,
							'value' => $value
						]
					);
				}
			}
			
			return $result;
		}
	}
	
	/**
	 * getTemplateVarOutput
	 * @version 1.1.9 (2021-02-24)
	 * 
	 * @desc Returns the associative array of fields and TVs of a document.
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— $published parameter can be set as ==='all' to retrieve the documents regardless of their publication status.
	 * 
	 * @param $idnames {array|'*'} — Id, TVs names, or documents fields to get. @required
	 * @param $docid {integer|''} — Id of a document to get. Default: Current document.
	 * @param $published {'all'|0|1} — Document publication status which does not matter if published === 'all'. Default: 'all'.
	 * @param $sep {string} — Separator that is used while concatenating in getTVDisplayFormat(). Default: ''.
	 * 
	 * @return {array|false}
	 */
	public static function getTemplateVarOutput(
		$idnames = [],
		$docid = '',
		$published = 'all',
		$sep = ''
	){
		//Проверка на устаревшее значение $published
		if($published === false){
			$published = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $published parameter.</p><p>False is no longer allowed as a value for the $published parameter. Use “all” instead.</p>'
			]);
		}
		
		if (
			empty($idnames) ||
			(
				!is_array($idnames) &&
				$idnames != '*'
			)
		){
			return false;
		}else{
			$output = [];
			$vars =
				(
					$idnames == '*' ||
					is_array($idnames)
				) ?
				$idnames :
				[$idnames]
			;
			
			$docid =
				intval($docid) ?
				intval($docid) :
				self::$modx->documentIdentifier
			;
			// remove sort for speed
			$result = self::getTemplateVars(
				$vars,
				'*',
				$docid,
				$published,
				'',
				''
			);
			
			if ($result == false){
				return false;
			}else{
				$baspath =
					MODX_MANAGER_PATH .
					'includes'
				;
				
				include_once(
					$baspath .
					'/tmplvars.format.inc.php'
				);
				include_once(
					$baspath .
					'/tmplvars.commands.inc.php'
				);
				
				for (
					$i= 0;
					$i < count($result);
					$i++
				){
					$row = $result[$i];
					
					if (!isset($row['id'])){
						$output[$row['name']] = $row['value'];
					}else{
						$output[$row['name']] = getTVDisplayFormat(
							$row['name'],
							$row['value'],
							$row['display'],
							$row['display_params'],
							$row['type'],
							$docid,
							$sep
						);
					}
				}
				
				return $output;
			}
		}
	}
	
	/**
	 * getDocumentChildren
	 * @version 1.2.7 (2020-02-11)
	 * 
	 * @desc Returns the associative array of a document fields.
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— $published parameter can be set as ==='all' to retrieve the documents regardless of their publication status.
	 * 	— $deleted parameter can be set as ==='all' to retrieve the documents regardless of their removal status.
	 * 
	 * @param $parentid {integer} — Id of parent document. Default: 0.
	 * @param $published {'all'|0|1} — Documents publication status which does not matter if published === 'all'. Default: 1.
	 * @param $deleted {'all'|0|1} — Documents removal status which does not matter if deleted === 'all'. Default: 0.
	 * @param $fields {stringCommaSeparated} — Documents fields to get. Default: '*'.
	 * @param $where {string} — SQL WHERE clause. Default: ''.
	 * @param $sort {string|stringCommaSeparated} — Transfer a few conditions separated with comma (like SQL) to multiple sort, but param “sortDir” must be '' in this case. Default: 'menuindex'.
	 * @param $dir {'ASC'|'DESC'|''} — Direction for sort. Default: 'ASC'.
	 * @param $limit {string} — SQL LIMIT (without 'LIMIT'). Default: ''.
	 * 
	 * @return {array|false} — Массив документов или false, если что-то не так.
	 */
	public static function getDocumentChildren(
		$parentid = 0,
		$published = 1,
		$deleted = 0,
		$fields = '*',
		$where = '',
		$sort = 'menuindex',
		$dir = 'ASC',
		$limit = ''
	){
		//Проверка на устаревшее значение $published
		if($published === false){
			$published = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $published parameter.</p><p>False is no longer allowed as a value for the $published parameter. Use “all” instead.</p>'
			]);
		}
		
		//Проверка на устаревшее значение $deleted === false
		if($deleted === false){
			$deleted = 'all';
			
			self::logEvent([
				'message' => '<p>Deprecated use of the $deleted parameter.</p><p>False is no longer allowed as a value for the $deleted parameter. Use “all” instead.</p>'
			]);
		}
		
		$published =
			$published !== 'all' ?
			'AND sc.published = ' . $published :
			''
		;
		$deleted =
			$deleted !== 'all' ?
			'AND sc.deleted = ' . $deleted :
			''
		;
		
		if ($where != ''){
			$where = 'AND ' . $where;
		}
		
		// modify field names to use sc. table reference
		$fields =
			'sc.' .
			implode(
				',sc.',
				array_filter(array_map(
					'trim',
					explode(
						',',
						$fields
					)
				))
			)
		;
		$sort =
			$sort == '' ?
			'' :
			(
				'sc.' .
				implode(
					',sc.',
					array_filter(array_map(
						'trim',
						explode(
							',',
							$sort
						)
					))
				)
			)
		;
		
		// get document groups for current user
		if ($docgrp = self::$modx->getUserDocGroups()){
			$docgrp = implode(
				',',
				$docgrp
			);
		}
		
		// build query
		$access =
			(
				self::$modx->isFrontend() ?
				'sc.privateweb=0' :
				'1="' . $_SESSION['mgrRole'] . '" OR sc.privatemgr=0'
			) .
			(
				!$docgrp ?
				'' :
				' OR dg.document_group IN (' . $docgrp . ')'
			)
		;
		
		$result = self::$modx->db->select(
			//Fields
			'DISTINCT ' . $fields,
			//From
			self::$tables['site_content'] . ' sc
				LEFT JOIN '.self::$tables['document_groups'] . ' dg
					ON dg.document = sc.id
			',
			//Where
			(
				'sc.parent = "' .
				$parentid .
				'" ' .
				$published .
				' ' .
				$deleted .
				' ' .
				$where .
				' AND (' .
				$access .
				') GROUP BY sc.id'
			),
			//Order
			(
				$sort ?
				$sort . ' ' . $dir :
				''
			),
			//Limit
			$limit
		);
		
		$resourceArray = self::$modx->db->makeArray($result);
		
		return $resourceArray;
	}
	
	/**
	 * getDocumentChildrenTVarOutput
	 * @version 1.3.5 (2021-03-09)
	 * 
	 * @desc Get necessary children of document.
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— The parameter $where that allows an sql where condition to be set (only the fields of a required document can be used).
	 * 	— The parameter $resultKey that allows result array keys to be set as values of one of the document fields.
	 * 	— $modx->getDocumentChildren receives only IDs, other data is received later.
	 * 	— The $published parameter can be set as ==='all' so documents data can be retrieved regardless of their publication status.
	 * 
	 * @param $parentid {integer} — Id of parent document. Default: 0.
	 * @param $tvidnames {array} — Array of document fields or TVs to get. Default: [$resultKey].
	 * @param $published {'all'|0|1} — Documents publication status which does not matter if published === 'all'. Default: 1.
	 * @param $sortBy {string|stringCommaSeparated} — Transfer a few conditions separated with comma (like SQL) to multiple sort, but param “sortDir” must be '' in this case. Default: 'menuindex'.
	 * @param $sortDir {'ASC'|'DESC'|''} — Direction for sort. Default: 'ASC'.
	 * @param $where {string} — SQL WHERE condition (use only document fields, not TV). Default: ''.
	 * @param $resultKey {string|false} — Field, which values are keys into result array. Use the “false”, that result array keys just will be numbered. Default: 'id'.
	 * 
	 * @return {array|false} — Массив документов или false, если что-то не так.
	 */
	public static function getDocumentChildrenTVarOutput(
		$parentid = 0,
		$tvidnames = [],
		$published = 1,
		$sortBy = 'menuindex',
		$sortDir = 'ASC',
		$where = '',
		$resultKey = 'id'
	){
		//Получаем всех детей
		$docs = self::getDocumentChildren(
			$parentid,
			$published,
			0,
			'id',
			$where,
			$sortBy,
			$sortDir
		);
		
		//Если ничего не получили, выкидываем
		if (!$docs){
			return false;
		}else{
			$result = [];
			
			$unsetResultKey = false;
			
			if ($resultKey !== false){
				if (is_array($tvidnames)){
					if (
						count($tvidnames) != 0 &&
						!in_array(
							$resultKey,
							$tvidnames
						)
					){
						$tvidnames[] = $resultKey;
						$unsetResultKey = true;
					}
				}elseif (
					$tvidnames != '*' &&
					$tvidnames != $resultKey
				){
					$tvidnames = [
						$tvidnames,
						$resultKey
					];
					$unsetResultKey = true;
				}
			}
			
			//Перебираем все документы
			for (
				$i = 0;
				$i < count($docs);
				$i++
			){
				$tvs = self::getTemplateVarOutput(
					$tvidnames,
					$docs[$i]['id'],
					$published
				);
				
				//Если что-то есть
				if ($tvs){
					//Если нужно в качестве ключа использовать не индекс и такое поле есть
					if (
						$resultKey !== false &&
						array_key_exists(
							$resultKey,
							$tvs
						)
					){
						//Записываем результат с соответствующим ключом
						$result[$tvs[$resultKey]] = $tvs;
						
						if ($unsetResultKey){
							unset($result[$tvs[$resultKey]][$resultKey]);
						}
					}else{
						//Просто накидываем по индексу
						$result[] = $tvs;
					}
				}
			}
			
			return $result;
		}
	}
	
	/**
	 * regEmptyClientScript
	 * @version 1.1.3 (2019-06-22)
	 * 
	 * @desc Adds a required JS-file into a required MODX inner list according to its version and name. The method is used to register the scripts, that has already been connected manually.
	 * Be advised that the method does not add script code, but register its name and version to avoid future connections with $modx->regClientScript and $modx->regClientStartupScript, and the script code will be deleted if the script had been connected with $modx->regClientScript or $modx->regClientStartupScript.
	 * 
	 * @see ddRegJsCssLinks snippet (http://code.divandesign.biz/modx/ddregjscsslinks), предназначенный для «правильного» подключения js и css. Даже при «ручном» подключении сниппет регистрирует то, что подключил, используя данный метод.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->name {string} — Script name. @required
	 * @param $params->version {string} — Script version. Default: '0'.
	 * @param $params->startup {boolean} — Is the script connected in the <head>? Default: false.
	 * 
	 * @return $result {arrayAssociative|''} — empty string if $name is not set or an array of:
	 * @return $result['name'] {string} — Script name.
	 * @return $result['version'] {string} — Script version (если был ранее подключен более поздняя версия, вернётся она).
	 * @return $result['useThisVer'] {boolean} — Использовалась ли та версия, что передали.
	 * @return $result['startup'] {boolean} — Подключён ли скрипт в <head>?.
	 * @return $result['pos'] {integer} — Ключ зарегистрированного скрипта в соответствующем внутреннем массиве MODX.
	 */
	public static function regEmptyClientScript($params = []){
		//Defaults
		$params = (object) array_merge(
			[
				'name' => '',
				'version' => '0',
				'startup' => false
			],
			(array) $params
		);
		
		//Required params
		if (empty($params->name)){
			return '';
		}
		
		//Приведём имя к нижнему регистру (чтоб сравнивать потом проще было, ведь нам пофиг)
		$name = strtolower($params->name);
		//Если версия не задана, будет нулевая (полезно дальше при сравнении version_compare)
		$version =
			isset($params->version) ?
			strtolower($params->version) :
			'0'
		;
		//Куда подключён скрипт: перед </head>, или перед </body>
		$startup =
			isset($params->startup) ?
			$params->startup :
			false
		;
		//Ну мало ли
		unset($overwritepos);
		
		//По дефолту юзаем эту версию
		$useThisVer = true;
		
		//Если такой скрипт ужебыл подключён
		if (isset(self::$modx->loadedjscripts[$name])){
			//Если он подключался в <header>
			if (self::$modx->loadedjscripts[$name]['startup']){
				//Этот пусть будет так же
				$startup = true;
			}
			
			//Сравниваем версию раннее подключённого скрипта с текущей: если старая меньше новой, надо юзать новую, иначе — старую
			$useThisVer = version_compare(
				self::$modx->loadedjscripts[$name]['version'],
				$version,
				'<'
			);
			
			//Если надо юзать старую версию
			if (!$useThisVer){
				//Запомним версию как старую. Здесь нам пофиг на его код, ведь новый код будет подключен мануально.
				$version = self::$modx->loadedjscripts[$name]['version'];
			}
			
			//Если новая версия должна подключаться в <header>, а старая подключалась перед </body>
			if (
				$startup == true &&
				self::$modx->loadedjscripts[$name]['startup'] == false
			){
				//Снесём старый скрипт из массива подключения перед </body> (ведь новая подключится в <head>). Здесь нам пофиг на его код, ведь новый код будет подключен мануально.
				unset(self::$modx->jscripts[self::$modx->loadedjscripts[$name]['pos']]);
				//Если новая версия должна подключаться перед </body> или старая уже подключалась перед </head>. На самом деле, сработает только если обе перед </body> или обе перед </head>, т.к. если старая была перед </head>, то новая выставится также кодом выше.
			}else{
				//Запомним позицию старого скрипта (порядок подключения может быть важен для зависимых скриптов), на новую пофиг. Дальше код старой просто перетрётся в соответсвтии с позицией.
				$overwritepos = self::$modx->loadedjscripts[$name]['pos'];
			}
		}
		
		//Если надо подключить перед </head>
		if ($startup){
			//Позиция такова: либо старая (уже вычислена), либо максимальное значение между нолём и одним из ключей массива подключённых скриптов + 1 (это, чтобы заполнить возможные дыры)
			$pos =
				isset($overwritepos) ?
				$overwritepos :
				max(array_merge(
					[0],
					array_keys(self::$modx->sjscripts)
				)) + 1
			;
			if ($useThisVer){
				//Запоминаем пустую строку подключения в нужный массив, т.к. подключаем мануально.
				self::$modx->sjscripts[$pos] = '';
			}
		//Если надо подключить перед </body>, то всё по аналогии, только массив другой
		}else{
			$pos =
				isset($overwritepos) ?
				$overwritepos :
				max(array_merge(
					[0],
					array_keys(self::$modx->jscripts)
				)) + 1
			;
			if ($useThisVer){
				self::$modx->jscripts[$pos] = '';
			}
		}
		
		//Запомним новоиспечённый скрипт для последующих обработок
		self::$modx->loadedjscripts[$name]['version'] = $version;
		self::$modx->loadedjscripts[$name]['startup'] = $startup;
		self::$modx->loadedjscripts[$name]['pos'] = $pos;
		
		return [
			'name' => $name,
			'version' => $version,
			'useThisVer' => $useThisVer,
			'startup' => $startup,
			'pos' => $pos
		];
	}
	
	/**
	 * getDocumentParentIds
	 * @version 1.0.1 (2021-03-09)
	 * 
	 * @desc Gets the parent ID(s) of the required level.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. Default: —.
	 * @param $params->docId {integer} — Document Id. Default: $modx->documentIdentifier.
	 * @param $params->level {integer} — Parent level (1 — the immediate parent; 2 — the parent of the immediate parent; -1 — the last parent; -2 — the parent before the last; etc). Default: 1.
	 * @param $params->totalResults {integer|'all'} — The number of parents that will be returned. Default: 'all'.
	 * 
	 * @return $result {array} — Document parent IDs.
	 * @return $result[i] {integer} — A parent ID.
	 */
	public static function getDocumentParentIds($params){
		//Defaults
		$params = (object) array_merge(
			[
				'docId' => self::$modx->documentIdentifier,
				'level' => 1,
				'totalResults' => 'all'
			],
			(array) $params
		);
		
		//Получаем всех родителей (на самом деле максимум 10, но да ладно)
		$result = self::$modx->getParentIds($params->docId);
		$resultLen = count($result);
		
		//Если родители вообще есть
		if ($resultLen > 0){
			//Если уровень задали больше, чем в принципе есть родителей, считаем, что нужен последний
			if ($params->level > $resultLen){
				$params->level = -1;
			}
			
			//Если уровень задаётся от начала (не от конца), то его надо бы декриминировать (т.к. самого себя в массиве $result не будет)
			if ($params->level > 0){
				$params->level--;
			}
			
			//Количество возвращаемых родителей
			if ($params->totalResults == 'all'){
				//All parents
				$params->totalResults = $resultLen;
			}elseif (isset($params->totalResults)){
				//Needed number
				$params->totalResults = intval($params->totalResults);
			}else{
				//Immediate
				$params->totalResults = 1;
			}
			
			//Получаем необходимых родителей
			$result = array_slice(
				$result,
				$params->level,
				$params->totalResults
			);
			
			$result = array_reverse($result);
		}else{
			$result = [$params->docId];
		}
		
		return $result;
	}
	
	/**
	 * getDocumentIdByUrl
	 * @version 1.2.1 (2021-03-09)
	 * 
	 * @desc Gets id of a document by its url.
	 * 
	 * @param $url {string} — Document URL. @required
	 * 
	 * @return {integer|0} — Document ID.
	 */
	public static function getDocumentIdByUrl($url){
		$url = parse_url($url);
		$path = $url['path'];
		
		//Если в адресе не было хоста, значит он относительный
		if (empty($url['host'])){
			//Получаем хост из конфига
			$siteHost = parse_url(self::$modx->getConfig('site_url'));
			
			//For domains in IDNA ASCII-compatible format
			$siteHost['host'] =
				function_exists('idn_to_utf8') ?
				idn_to_utf8($siteHost['host']) :
				$siteHost['host']
			;
			
			//На всякий случай вышережем host из адреса (а то вдруг url просто без http:// передали) + лишние слэши по краям
			$path = trim(
				$path,
				$siteHost['host'] . '/'
			);
		}else{
			//Просто убираем лишние слэши по краям
			$path = trim(
				$url['path'],
				'/'
			);
		}
		
		//Если путь пустой, то мы в корне
		if ($path == ''){
			return self::$modx->getConfig('site_start');
		//Если документ с таким путём есть
		}elseif (!empty(self::$modx->documentListing[$path])){
			//Возвращаем его id
			return self::$modx->documentListing[$path];
		//В противном случае возвращаем 0
		}else{
			return 0;
		}
	}
	
	/**
	 * verifyRenamedParams
	 * @version 1.7.1 (2021-03-09)
	 * 
	 * @see README.md
	 */
	public static function verifyRenamedParams($params){
		//Backward compatibility
		if (func_num_args() > 1){
			//Convert ordered list of params to named
			$params = self::orderedParamsToNamed([
				'paramsList' => func_get_args(),
				'compliance' => [
					'params',
					'compliance'
				]
			]);
		}
		
		$params = \DDTools\ObjectTools::extend([
			'objects' => [
				//Defaults
				(object) [
					'returnCorrectedOnly' => true,
					'writeToLog' => true
				],
				$params
			]
		]);
		
		$isParamsObject = is_object($params->params);
		
		$params->params = (array) $params->params;
		
		$result = [];
		$logMessageItems = [];
		
		$params_names = array_keys($params->params);
		
		//Перебираем таблицу соответствия
		foreach (
			$params->compliance as
			$newName =>
			$oldNames
		){
			//Если параметр с новым именем не задан
			if (!isset($params->params[$newName])){
				//Если старое имя только одно, всё равно приведём к массиву для удобства
				if (!is_array($oldNames)){
					$oldNames = [$oldNames];
				}
				
				//Находим все старые, которые используются
				$oldNames = array_values(array_intersect(
					$params_names,
					$oldNames
				));
				
				//Если что-то нашлось
				if (count($oldNames) > 0){
					//Зададим (берём значение первого попавшегося)
					$result[$newName] = $params->params[$oldNames[0]];
					//If need to write to the CMS event log
					if ($params->writeToLog){
						$logMessageItems[] .=
							'<li><code>' .
							implode(
								'</code>, <code>',
								$oldNames
							) .
							'</code> must be renamed as <code>' .
							$newName .
							'</code>;</li>'
						;
					}
				}
			//If we must return all parameters
			}elseif (!$params->returnCorrectedOnly){
				$result[$newName] = $params->params[$newName];
			}
		}
		
		//If we must return all parameters
		if (!$params->returnCorrectedOnly){
			$result = array_merge(
				//Get input params which are absent in compliance
				array_diff_key(
					$params->params,
					$params->compliance
				),
				$result
			);
		}
		
		//If there is something to write to the CMS event log
		if (count($logMessageItems) > 0){
			self::logEvent([
				'message' =>
					'<p>Some of the snippet parameters have been renamed. Please, correct the following parameters:</p><ul>' .
					implode(
						'',
						$logMessageItems
					) .
					'</ul>'
			]);
		}
		
		if ($isParamsObject){
			$result = (object) $result;
		}
		
		return $result;
	}
	
	/**
	 * sendMail
	 * @version 3.0.3 (2019-06-22)
	 * 
	 * @desc Method for sending e-mails.
	 * 
	 * @param $params {stdClass|arrayAssociative} — Parameters, the pass-by-name style is used. @required
	 * @param $params->to {array} — Addresses to mail. @required
	 * @param $params->to[i] {string_email} — An address. @required
	 * @param $params->text {string} — E-mail text. @required
	 * @param $params->from {string} — Mailer address. Default: $modx->getConfig('emailsender').
	 * @param $params->subject {string} — E-mail subject. Default: 'Mail from '.$modx->config['site_url'].
	 * @param $params->fileInputNames {array} — “input” tags names from which accepted files are taken. Default: [].
	 * @param $params->fileInputNames[i] {string} — Input name. @required
	 * 
	 * @return $result {array} — Returns the array of email statuses.
	 * @return $result[i] {0|1} — Status.
	 */
	public static function sendMail($params){
		//For backward compatibility
		if (func_num_args() > 1){
			//Convert ordered list of params to named
			$params = self::orderedParamsToNamed([
				'paramsList' => func_get_args(),
				'compliance' => [
					'to',
					'text',
					'from',
					'subject',
					'fileInputNames'
				]
			]);
		}
		
		//Defaults
		$params = (object) array_merge(
			[
				'from' => self::$modx->getConfig('emailsender'),
				'subject' => 'Mail from ' . self::$modx->config['site_url'],
				'fileInputNames' => []
			],
			(array) $params
		);
		
		//Добавлеям текст в сообщения
		$message = trim($params->text);
		
		if(!empty($params->fileInputNames)){
			$attachFiles = [];
			
			//Перебираем имена полей с файлами
			foreach(
				$params->fileInputNames as
				$value
			){
				//Проверяем находится ли в POST массив
				if(is_array($_FILES[$value]['name'])){
					//Если массив пустой обрываем итерацию
					if(!$_FILES[$value]['tmp_name'][0]){break;}
					
					//Перебираем пост
					foreach(
						$_FILES[$value]['name'] as
						$key =>
						$name
					){
						//Если нет ошибок
						if ($_FILES[$value]['error'][$key] == 0){
							//Добавляем в массив файлы
							$attachFiles[] = [
								'path' => $_FILES[$value]['tmp_name'][$key],
								'name' => $_FILES[$value]['name'][$key],
							];
						}
					}
				}else{
					//Если массив пустой обрываем итерацию
					if(!$_FILES[$value]['tmp_name']){break;}
					//Если нет ошибок
					if ($_FILES[$value]['error'] == 0){
						//Если не массив, то добавляем один файл
						$attachFiles[] = [
							'path' => $_FILES[$value]['tmp_name'],
							'name' => $_FILES[$value]['name'],
						];
					}
				}
			}
		}
		
		$result = [];
		
		foreach (
			$params->to as
			$val
		){
			//Если адрес валидный
			if (filter_var(
				$val,
				FILTER_VALIDATE_EMAIL
			)){
				self::$modx->loadExtension('MODxMailer');
				
				self::$modx->mail->AddAddress($val);
				self::$modx->mail->From = $params->from;
		        self::$modx->mail->FromName = self::$modx->config['site_name'];
		        self::$modx->mail->Subject = $params->subject;
		        self::$modx->mail->Body = $message;
				
				//Перебираем присоединяемые файлы
				if(!empty($attachFiles)){
					foreach(
						$attachFiles as
						$value
					){
						//добавить еще парамет name
						self::$modx->mail->AddAttachment(
							$value['path'],
							$value['name']
						);
					}
				}
				
				//Отправляем письмо
				if(self::$modx->mail->send()){
					$result[] = 1;
				}else{
					$result[] = 0;
				}
			}
		}
		
		return $result;
	}
	
	/**
	 * getResponse
	 * @version 2.0 (2021-03-09)
	 * 
	 * @desc Returns a proper instance of the “Response” class recommended to be used as response to an HTTP request.
	 * 
	 * @return {DDTools\Response}
	 */
	public static function getResponse(){
		return new \DDTools\Response();
	}
	
	/**
	 * screening
	 * @deprecated Use ddTools::escapeForJS.
	 */
	public static function screening($str){
		self::logEvent([
			'message' => '<p>The “ddTools::screening” method is deprecated, use “ddTools::escapeForJS” instead.</p>'
		]);
		
		return self::escapeForJS($str);
	}
	
	/**
	 * explodeFieldsArr
	 * @deprecated Use ddTools::prepareDocData.
	 * 
	 * @desc Explode associative array of fields and TVs in two individual arrays.
	 * 
	 * @param $fields {arrayAssociative} — Array of document fields (from table `site_content`) or TVs with values. @required
	 * @param $fields[key] {mixed} — Field value (optional), when key is field name. The method use only keys, values just will be returned without changes. @required
	 * 
	 * @return $result {array}
	 * @return $result[0] {arrayAssociative} — Document fields (like 'id', 'pagetitle', etc).
	 * @return $result[0][key] {mixed} — Field value, when key is field name.
	 * @return $result[1] {arrayAssociative} — TVs.
	 * @return $result[1][key] {arrayAssociative} — TV, when key is TV name.
	 * @return $result[1][key]['id'] {integer} — TV id.
	 * @return $result[1][key]['val'] {mixed} — TV value.
	 */
	public static function explodeFieldsArr($fields = []){
		$result = [
			[],
			[]
		];
		
		self::logEvent([
			'message' => '<p>The “ddTools::explodeFieldsArr” method is deprecated, use “ddTools::prepareDocData” instead.</p>'
		]);
		
		//Prepare data
		$docData = self::prepareDocData([
			'data' => $fields,
			'tvAdditionalFieldsToGet' => ['id']
		]);
		
		//Save fields
		$result[0] = $docData->fieldsData;
		//And TVs
		foreach (
			$docData->tvsData as
			$tvName =>
			$tvValue
		){
			$result[1][$tvName] = ['val' => $tvValue];
			
			if (isset($docData->tvsAdditionalData[$tvName])){
				$result[1][$tvName]['id'] = $docData->tvsAdditionalData[$tvName]['id'];
			}
		}
		
		return $result;
	}
}
}

ddTools::getInstance();
?>
<?php
/**
 * EvolutionCMS.libraries.ddTools
 * @version 0.24.1 (2019-01-23)
 * 
 * @uses PHP >= 5.4.
 * @uses (MODX)EvolutionCMS >= 1.0.10 {@link https://github.com/evolution-cms/evolution }.
 * @uses phpThumb lib 1.7.13-201406261000 (included) {@link http://phpthumb.sourceforge.net }.
 * 
 * @link http://code.divandesign.biz/modx/ddtools/0.24.1
 * 
 * @copyright 2012–2019 DivanDesign {@link http://www.DivanDesign.biz }
 */

global $modx;

if (!class_exists('ddTools')){
class ddTools {
	public static $modx;
	
	//Contains names of document fields (`site_content`)
	public static $documentFields = [
		//For MODX > 1.0.11
		//alias_visible,
		'id',
		'type',
		'contentType',
		'pagetitle',
		'longtitle',
		'description',
		'alias',
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
	];
	
	//Contains full names of db tables
	public static $tables = [
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
	];
	
	private static $instance;
	
	/**
	 * __construct
	 * @version 1.0.1 (2018-10-02)
	 */
	private function __construct(){
		global $modx;
		
		self::$modx = $modx;
		
		//Init full table names
		foreach (
			self::$tables as
			$tableAlias => $tableFullName
		){
			self::$tables[$tableAlias] = self::$modx->getFullTableName($tableAlias);
		}
		
		if (method_exists(
			self::$modx,
			'getVersionData'
		)){
			//В новом MODX в метод можно просто передать 'version' и сразу получить нужный элемент, но не в старом
			$modxVersionData = self::$modx->getVersionData();
			
			//If version of MODX > 1.0.11
			if (version_compare(
				$modxVersionData['version'],
				'1.0.11',
				'>'
			)){
				self::$documentFields[] = 'alias_visible';
			}
		}
		
		//We need to include required files if Composer is not used
		if(!class_exists('\DDTools\FilesTools')){
			require_once __DIR__.DIRECTORY_SEPARATOR.'require.php';
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
	 * @version 1.1.5 (2018-09-28)
	 * 
	 * @desc Convert list of ordered parameters to named. Method is public, but be advised that this is beta-version!
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['paramsList'] {array} — Parameters in ordered list (func_get_args). @required
	 * @param $params['compliance'] {array} — The order of parameters. @required
	 * 
	 * @return {array_associative}
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
			$index => $name
		){
			//Если параметр задан
			if (isset($params->paramsList[$index])){
				//Сохраним его
				$result[$name] = $params->paramsList[$index];
			}
			
			$logData->message[] = "'".$name."' => $".$name;
		}
		
		$logData->backtraceArray = debug_backtrace();
		//Remove this method
		array_shift($logData->backtraceArray);
		$caller = $logData->backtraceArray[0];
		$caller = (isset($caller['class']) ? $caller['class'].'->' : '').$caller['function'];
		
		//General info with code example
		$logData->message = '<p>Deprecated ordered parameters.</p><p>Ordered list of parameters is no longer allowed, use the “<a href="https://en.wikipedia.org/wiki/Named_parameter" target="_blank">pass-by-name</a>” style.</p>
		<pre><code>//Old style
'.$caller.'($'.implode(
	', $',
	$params->compliance
).');
//Pass-by-name
'.$caller.'([
	'.implode(
	','.PHP_EOL."\t",
	$logData->message
).'
]);
		</code></pre>';
		
		self::logEvent($logData);
		
		return $result;
	}
	
	/**
	 * explodeAssoc
	 * @version 1.1.4 (2018-09-28)
	 * 
	 * @desc Splits string on two separators in the associative array.
	 * 
	 * @param $inputString {string_separated} — String to explode. @required
	 * @param $itemDelimiter {string} — Separator between pairs of key-value. Default: '||'.
	 * @param $keyValDelimiter {string} — Separator between key and value. Default: '::'.
	 * 
	 * @return {array_associative}
	 */
	public static function explodeAssoc(
		$inputString,
		$itemDelimiter = '||',
		$keyValDelimiter = '::'
	){
		$result = [];
		
		//Если строка пустая, выкидываем сразу
		if ($inputString == ''){return $result;}
		
		//Разбиваем по парам
		$inputString = explode(
			$itemDelimiter,
			$inputString
		);
		
		foreach ($inputString as $item){
			//Разбиваем на ключ-значение
			$item = explode(
				$keyValDelimiter,
				$item
			);
			
			$result[$item[0]] = isset($item[1]) ? $item[1] : '';
		}
		
		return $result;
	}
	
	/**
	 * unfoldArray
	 * @version 1.0.4 (2018-06-26)
	 * 
	 * @desc Converts a multidimensional array into an one-dimensional one joining the keys with '.'. It can be helpful while using placeholders like [+size.width+].
	 * @example [
	 * 	'a': '',
	 * 	'b': [
	 * 		'b1': '',
	 * 		'b2': [
	 * 			'b21': '',
	 * 			'b22': ''
	 * 		]
	 * 	],
	 * 	'c': ''
	 * ] turns into [
	 * 	'a': '',
	 * 	'b.b1': '',
	 * 	'b.b2.b21': '',
	 * 	'b.b2.b22': '',
	 * 	'c': ''
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
			$key => $val
		){
			//Если значение является массивом
			if (is_array($val)){
				//Запускаем рекурсию дальше
				$result = array_merge(
					$result,
					self::unfoldArray(
						$val,
						$keyPrefix.$key.'.'
					)
				);
			//Если значение — не массив
			}else{
				//Запоминаем (в соответствии с ключом родителя)
				$result[$keyPrefix.$key] = $val;
			}
		}
		
		return $result;
	}
	
	/**
	 * sort2dArray
	 * @version 1.1.4 (2018-06-17)
	 * 
	 * @desc Sorts 2-dimensional array by multiple columns (like in SQL) using Hoare's method, also referred to as quicksort. The sorting is stable.
	 * 
	 * @param $array {array} — Array to sort. @required
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
		$tek = $array[0][$sortBy[$i]];
		$tekIsNumeric = is_numeric($tek);
		
		$arrLeft = [];
		$arrRight = [];
		$arrCent = [];
		
		//Перебираем массив
		foreach ($array as $val){
			//Если эталон и текущее значение — числа
			if (
				$tekIsNumeric &&
				is_numeric($val[$sortBy[$i]])
			){
				//Получаем нужную циферку
				$cmpRes = ($val[$sortBy[$i]] == $tek) ? 0 : (($val[$sortBy[$i]] > $tek) ? 1 : -1);
				//Если они строки
			}else{
				//Сравниваем текущее значение со значением эталонного
				$cmpRes = strcmp(
					$val[$sortBy[$i]],
					$tek
				);
			}
			
			//Если меньше эталона, отбрасываем в массив меньших
			if ($cmpRes * $sortDir < 0){
				$arrLeft[] = $val;
			//Если больше — в массив больших
			}else if ($cmpRes * $sortDir > 0){
				$arrRight[] = $val;
			//Если раво — в центральный
			}else{
				$arrCent[] = $val;
			}
		}
		
		//Массивы меньших и массивы больших прогоняем по тому же алгоритму (если в них что-то есть)
		$arrLeft = (count($arrLeft) > 1) ? self::sort2dArray(
			$arrLeft,
			$sortBy,
			$sortDir,
			$i
		) : $arrLeft;
		$arrRight = (count($arrRight) > 1) ? self::sort2dArray(
			$arrRight,
			$sortBy,
			$sortDir,
			$i
		) : $arrRight;
		//Массив одинаковых прогоняем по следующему условию сортировки (если есть условие и есть что сортировать)
		$arrCent = ((count($arrCent) > 1) && $sortBy[$i + 1]) ? self::sort2dArray(
			$arrCent,
			$sortBy,
			$sortDir,
			$i + 1
		) : $arrCent;
		
		//Склеиваем отсортированные меньшие, средние и большие
		return array_merge(
			$arrLeft,
			$arrCent,
			$arrRight
		);
	}
	
	/**
	 * parseFileNameVersion
	 * @version 1.1.2 (2017-12-09)
	 * 
	 * @desc Parses a file path and gets its name, version & extension.
	 * 
	 * @param $file {string|array} — String of file path or result array of pathinfo() function. @required
	 * 
	 * @return $result {array_associative} — File data.
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
			$file = $fileinfo['dirname'].'/'.$fileinfo['basename'];
			//Если передали строку
		}else{
			//Получаем необходимые данные
			$fileinfo = pathinfo($file);
		}
		
		//Fail by default
		$result = [
			'name' => strtolower($file),
			'version' => '0',
			'extension' => !$fileinfo['extension'] ? '' : $fileinfo['extension']
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
	 * @version 1.1.1 (2017-07-06)
	 * 
	 * @desc Escaping chars in string for JS.
	 * 
	 * @param $str {string} — String to escaping. @required
	 * 
	 * @return {string}
	 */
	public static function escapeForJS($str){
		//Backslach escaping (see issue #1)
		$str = str_replace('\\', '\\\\', $str);
		//Line breaks
		$str = str_replace("\r\n", ' ', $str);
		$str = str_replace("\n", ' ', $str);
		$str = str_replace("\r", ' ', $str);
		//Tabs
		$str = str_replace(chr(9), ' ', $str);
		$str = str_replace('  ', ' ', $str);
		//MODX placeholders
		$str = str_replace('[+', '\[\+', $str);
		$str = str_replace('+]', '\+\]', $str);
		//Quotes
		$str = str_replace("'", "\'", $str);
		$str = str_replace('"', '\"', $str);
		
		return $str;
	}
	
	/**
	 * encodedStringToArray
	 * @version 1.0.3 (2018-06-26)
	 * 
	 * @desc Converts encoded strings to arrays.
	 * Supported formats:
	 * — JSON (https://en.wikipedia.org/wiki/JSON);
	 * — Query string (https://en.wikipedia.org/wiki/Query_string).
	 * 
	 * @param $inputString {string} — Input string. @required
	 * 
	 * @return {array}
	 */
	public static function encodedStringToArray($inputString){
		$result = [];
		
		if (!empty($inputString)){
			//JSON (first letter is “{” or “[”)
			if (in_array(
				substr(
					$inputString,
					0,
					1
				),
				[
					'{',
					'['
				]
			)){
				try {
					$result = json_decode(
						$inputString,
						true
					);
				}catch (\Exception $e){
					//Flag
					$result = [];
				}
			}
			
			//Not JSON
			if (empty($result)){
				//Query string (has the “=” sign)
				if (strpos(
					$inputString,
					'='
				) !== false){
					parse_str(
						$inputString,
						$result
					);
				//The old deprecated format where string is separated by '||' and '::'
				}else{
					$result = self::explodeAssoc($inputString);
					
					self::logEvent([
						'message' => '<p>Strings separated by “::” && “||” in parameters are deprecated. Use <a href="https://en.wikipedia.org/wiki/JSON" target="_blank">JSON</a> or <a href="https://en.wikipedia.org/wiki/Query_string" target="_blank">Query string</a> instead.</p>'
					]);
				}
			}
		}
		
		return $result;
	}

	/**
	 * getPlaceholdersFromText
	 * @version 1.0 (2017-07-06)
	 * 
	 * @desc Finds all placeholders' names and returns them as an array.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['text'] {string} — Source string. @required
	 * @param $params['placeholderPrefix'] {string} — Placeholders prefix. Default: '[+'.
	 * @param $params['placeholderSuffix'] {string} — Placeholders suffix. Default: '+]'.
	 * 
	 * @return {array}
	 */
	public static function getPlaceholdersFromText($params = []){
		//Defaults
		$params = (object) array_merge([
			'text' => '',
			'placeholderPrefix' => '[+',
			'placeholderSuffix' => '+]'
		], (array) $params);
		
		$params->placeholderPrefix = preg_quote($params->placeholderPrefix);
		$params->placeholderSuffix = preg_quote($params->placeholderSuffix);
		
		$result = [];
		
		preg_match_all(
			'/'.$params->placeholderPrefix.'(.*?)'.$params->placeholderSuffix.'/',
			$params->text,
			$result
		);
		
		$result = array_unique($result[1]);
		
		return $result;
	}
	
	/**
	 * logEvent
	 * @version 1.0.1 (2018-06-17)
	 * 
	 * @desc Add an alert message to the system event log with debug info (backtrace, snippet name, document id, etc).
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['message'] {string} — Message to be logged. Default: ''.
	 * @param $params['source'] {string} — Source of the event (module, snippet name, etc). Default: $modx->currentSnippet || caller.
	 * @param $params['eventId'] {integer} — Event ID. Default: 1.
	 * @param $params['eventType'] {'information'|'warning'|'error'} — Event type. Default: 'warning'.
	 * @param $params['backtraceArray'] {array} — Backtrace (if default is not suitable). See http://php.net/manual/en/function.debug-backtrace.php. Default: debug_backtrace().
	 * 
	 * @return {void}
	 */
	public static function logEvent($params){
		//Defaults
		$params = (object) array_merge([
			'message' => '',
			'source' => '',
			//TODO: Why “1”, what does it mean?
			'eventId' => 1,
			'eventType' => 'warning',
// 			'backtraceArray' => debug_backtrace(),
		], (array) $params);
		
		
		//Prepare backtrace and caller
		if (!isset($params->backtraceArray)){
			$params->backtraceArray = debug_backtrace();
			//Remove this method
			array_shift($params->backtraceArray);
		}
		$caller = $params->backtraceArray[0];
		$caller = (isset($caller['class']) ? $caller['class'].'->' : '').$caller['function'];
		
		
		$debugInfo = [];
		
		//Add current document Id to debug info
		if (!empty(self::$modx->documentIdentifier)){
			$debugInfo[] = '<li>Document id: “'.self::$modx->documentIdentifier.'”;</li>';
		}
		
		//Is the code being run in the snippet?
		if (!empty(self::$modx->currentSnippet)){
			//Empty source
			if ($params->source == ''){
				//Set as source
				$params->source = self::$modx->currentSnippet;
			}else{
				//Add to debug info
				$debugInfo[] = '<li>Snippet: “'.self::$modx->currentSnippet.'”;</li>';
			}
		}
		
		if ($params->source == ''){$params->source = $caller;}
		
		
		//Add debug info to the message
		$params->message .= '<h3>Debug info</h3>';
		
		if (!empty($debugInfo)){
			$params->message .= '<ul>'.implode(
				'',
				$debugInfo
			).'</ul>';
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
			case 'i': $params->eventType = 1; break;
			//Warning
			case 'w': $params->eventType = 2; break;
			//Error
			case 'e': $params->eventType = 3; break;
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
	 * @version 1.5.1 (2018-06-26)
	 * 
	 * @desc Similar to $modx->parseChunk, but takes a text.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['text'] {string} — String to parse. @required
	 * @param $params['data'] {array_associative|stdClass} — Array of values. Nested arrays are supported too: “['stringPlaceholder' = > 'one', 'arrayPlaceholder' => ['a' => 'one', 'b' => 'two']]” => “[+stringPlaceholder+]”, “[+arrayPlaceholder.a+]”, “[+arrayPlaceholder.b+]”. Default: [].
	 * @param $params['data'][key] {string|array_associative|stdClass} — Key — placeholder name, value — value.
	 * @param $params['placeholderPrefix'] {string} — Placeholders prefix. Default: '[+'.
	 * @param $params['placeholderSuffix'] {string} — Placeholders suffix. Default: '+]'.
	 * @param $params['removeEmptyPlaceholders'] {boolean} — Do you need to remove empty placeholders? Default: false.
	 * @param $params['mergeAll'] {boolean} — Additional parsing the document fields, settings, chunks. Default: true.
	 * 
	 * @return {string}
	 */
	public static function parseText($params = []){
		//For backward compatibility
		if (func_num_args() > 1){
			//Convert ordered list of params to named
			$params = self::orderedParamsToNamed([
				'paramsList' => func_get_args(),
				'compliance' => ['text', 'data', 'placeholderPrefix', 'placeholderSuffix', 'mergeAll']
			]);
		}
		
		//Defaults
		$params = (object) array_merge([
			'text' => '',
			'data' => [],
			'placeholderPrefix' => '[+',
			'placeholderSuffix' => '+]',
			'removeEmptyPlaceholders' => false,
			'mergeAll' => true
		], (array) $params);
		
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
				$key => $value
			){
				$result = str_replace(
					$params->placeholderPrefix.$key.$params->placeholderSuffix,
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
	 * prepareDocData
	 * @version 2.0.1 (2018-06-26)
	 * 
	 * @desc Prepare document data from single array of fields and TVs: separate them and get TV IDs if needed.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['data'] {array_associative} — Array of document fields (from table `site_content`) or TVs with values. @required
	 * @param $params['data'][key] {mixed} — Field value (optional), when key is field name. The method use only keys, values just will be returned without changes. @required
	 * @param $params['tvAdditionalFieldsToGet'] {array} — Fields of TVs to get if needed (e. g. 'id', 'type'). Default: [].
	 * @param $params['tvAdditionalFieldsToGet'][i] {string} — TV field.
	 * 
	 * @return $result {stdClass}
	 * @return $result->fieldsData {array_associative} — Document fields data (like 'id', 'pagetitle', etc). @required
	 * @return $result->fieldsData[key] {mixed} — Field value, when key is field name.
	 * @return $result->tvsData {array_associative} — TVs values. @required
	 * @return $result->tvsData[key] {mixed} — TV value, when key is TV name.
	 * @return $result->tvsAdditionalData {array_associative} — TVs additional data, when key is TV name. @required
	 * @return $result->tvsAdditionalData[key] {array_associative} — TV data, when key is TV name.
	 * @return $result->tvsAdditionalData[key][item] {string} — TV data.
	 */
	public static function prepareDocData($params){
		//Defaults
		$params = (object) array_merge([
			'tvAdditionalFieldsToGet' => []
		], (array) $params);
		
		$result = (object) [
			'fieldsData' => [],
			'tvsData' => [],
			'tvsAdditionalData' => []
		];
		
		//Перебираем поля, раскидываем на поля документа и TV
		foreach (
			$params->data as
			$data_itemFieldName => $data_itemFieldValue
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
				'`'.implode(
					'`, `',
					$params->tvAdditionalFieldsToGet
				).'`',
				//From
				self::$tables['site_tmplvars'],
				//Where
				"`name` IN ('".implode(
					"','",
					array_keys($result->tvsData)
				)."')"
			);
			
			while ($row = self::$modx->db->getRow($dbRes)){
				$result->tvsAdditionalData[$row['name']] = $row;
			}
		}
		
		return $result;
	}
	
	/**
	 * createDocument
	 * @version 1.2.1 (2018-06-26)
	 * 
	 * @desc Create a new document.
	 * 
	 * @param $docData {array_associative} — Array of document fields or TVs. Key — name, value — value. @required
	 * @param $docData['pagetitle'] {string} — Document pagetitle. @required
	 * @param $docGroups {array} — Array of document groups id.
	 * 
	 * @return {integer|false} — ID нового документа или false, если что-то не так.
	 */
	public static function createDocument(
		$docData = [],
		$docGroups = false
	){
		//Если нет хотя бы заголовка, выкидываем
		if (!$docData['pagetitle']){return false;}
		
		//Если не передана дата создания документа, ставим текущую
		if (!$docData['createdon']){$docData['createdon'] = time();}
		
		//Если не передано, кем документ создан, ставим 1
		if (!$docData['createdby']){$docData['createdby'] = 1;}
		
		//Если группы заданы, то это приватный документ
		if ($docGroups){$docData['privatemgr'] = 1;}
		
		//Если надо публиковать, поставим дату публикации текущей
		if ($docData['published'] == 1){$docData['pub_date'] = $docData['createdon'];}
		
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
		
		if (!$docId){return false;}
		
		//Если есть хоть одна существующая TV
		if (count($docData->tvsAdditionalData) > 0){
			//Перебираем массив TV с ID
			foreach (
				$docData->tvsAdditionalData as
				$tvName => $tvData
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
					[
						'value' => $docData->tvsData[$tvName],
						'tmplvarid' => $tvData['id'],
						'contentid' => $docId
					],
					self::$tables['site_tmplvar_contentvalues']
				);
			}
		}
		
		//Если заданы группы (и на всякий проверим ID)
		if ($docGroups){
			//Перебираем все группы
			foreach ($docGroups as $docGroupId){
				self::$modx->db->insert(
					[
						'document_group' => $docGroupId,
						'document' => $docId
					],
					self::$tables['document_groups']
				);
			}
		}
		
		//Смотрим родителя нового документа, является ли он папкой и его псевдоним
		$docParent = isset($docData->fieldsData['parent']) ? $docData->fieldsData['parent'] : 0;
		$docIsFolder = isset($docData->fieldsData['isfolder']) ? $docData->fieldsData['isfolder'] : 0;
		$docAlias = isset($docData->fieldsData['alias']) ? $docData->fieldsData['alias'] : '';
		
		//Пусть созданного документа
		$docPath = '';
		
		//Собираем путь в зависимости от пути родителя
		if(isset(self::$modx->aliasListing[$docParent]['path'])){
			$docPath = self::$modx->aliasListing[$docParent]['path'];
			
			if(self::$modx->aliasListing[$docParent]['alias'] != ''){
				$docPath .= '/'.self::$modx->aliasListing[$docParent]['alias'];
			}else{
				$docPath .= '/'.self::$modx->aliasListing[$docParent]['id'];
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
				self::$modx->aliasListing[$docId]['path'].'/'.
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
	 * @version 1.3.1 (2018-06-26)
	 * 
	 * @desc Update a document.
	 * 
	 * @note $docId and/or $where are required.
	 * 
	 * @param $docId {integer|array} — Document id(s) to update. @required
	 * @param $docData {array_associative} — Array of document fields or TVs to update. Key — name, value — value. @required
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
		
		$whereSql = '';
		
		if (
			is_array($docId) &&
			count($docId)
		){
			//Обрабатываем массив id
			$whereSql .= '`id` IN ("'.implode(
				'","',
				$docId
			).'")';
		}else if (
			is_numeric($docId) &&
			$docId != 0
		){
			//Обрабатываем числовой id
			$whereSql .= '`id`="'.$docId.'"';
		}
		
		//Добавляем дополнительное условие
		if ($where != ''){
			$whereSql .= ($whereSql != '' ? ' AND ' : '').$where;
		}
		
		//Получаем id документов для обновления
		$docIdsToUpdate_dbRes = self::$modx->db->select(
			'id',
			self::$tables['site_content'],
			$whereSql
		);
		
		if (self::$modx->db->getRecordCount($docIdsToUpdate_dbRes)){
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
				while ($doc = self::$modx->db->getRow($docIdsToUpdate_dbRes)){
					//Перебираем массив существующих TV
					foreach (
						$docData->tvsAdditionalData as
						$tvName => $tvData
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
							'`value` = "'.$docData->tvsData[$tvName].'"',
							self::$tables['site_tmplvar_contentvalues'],
							'`tmplvarid` = '.$tvData['id'].' AND `contentid` = '.$doc['id']
						);
						
						//Проверяем сколько строк нашлось при обновлении
						//Если используется mysqli
						if(is_a(self::$modx->db->conn, 'mysqli')){
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
									'contentid' => $doc['id']
								],
								self::$tables['site_tmplvar_contentvalues']
							);
						}
					}
				}
			}
			
			return true;
		}
		
		//Нечего обновлять
		return false;
	}
	
	/**
	 * getDocuments
	 * @version 1.2.6 (2018-06-17)
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
	 * @param $fields {string_commaSeparated|'*'} — Documents fields to get. Default: '*'.
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
			$fields = 'sc.'.implode(
				',sc.',
				array_filter(array_map(
					'trim',
					explode(
						',',
						$fields
					)
				))
			);
			$sort = ($sort == '') ? '' : 'sc.'.implode(
				',sc.',
				array_filter(array_map(
					'trim',
					explode(
						',',
						$sort
					)
				))
			);
			if ($where != ''){
				$where = 'AND '.$where;
			}
			
			$published = ($published !== 'all') ? "AND sc.published = '{$published}'" : '';
			$deleted = ($deleted !== 'all') ? "AND sc.deleted = '{$deleted}'" : '';
			
			$result = self::$modx->db->select(
				'DISTINCT '.$fields,
				self::$tables['site_content'].' sc
					LEFT JOIN '.self::$tables['document_groups'].' dg
						ON dg.document = sc.id
				',
				'(sc.id IN ('.implode(',', $ids).') '.$published.' '.$deleted.' '.$where.') GROUP BY sc.id',
				($sort ? $sort.' '.$dir : ''),
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
	 * @param $fields {string_commaSeparated|'*'} — Documents fields to get. Default: '*'.
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
	 * @version 1.3.7 (2018-06-26)
	 * 
	 * @desc Returns the TV and fields array of a document. 
	 * 
	 * @note
	 * Differences from the native method:
	 * 	— $published parameter can be set as ==='all' to retrieve the documents regardless of their publication status.
	 * 
	 * @param $idnames {array|'*'} — Id, TVs names, or documents fields to get. @required
	 * @param $fields {string_commaSeparated|'*'} — Fields names in the TV table of MODx database. Default: '*'.
	 * @param $docid {integer|''} — Id of a document to get. Default: Current document.
	 * @param $published {'all'|0|1} — Document publication status which does not matter if published === 'all'. Default: 'all'.
	 * @param $sort {string_commaSeparated} — Fields of the TV table to sort by. Default: 'rank'.
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
			(
				$idnames != '*' &&
				!is_array($idnames)
			) ||
			count($idnames) == 0
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
			$fields = ($fields == '') ? 'tv.*' : 'tv.'.implode(
				',tv.',
				array_filter(array_map(
					'trim',
					explode(
						',',
						$fields
					)
				))
			);
			$sort = ($sort == '') ? '' : 'tv.'.implode(
				',tv.',
				array_filter(array_map(
					'trim',
					explode(
						',',
						$sort
					)
				))
			);
			
			if ($idnames == '*'){
				$query = 'tv.id<>0';
			}else{
				$query = (is_numeric($idnames[0]) ? 'tv.id' : 'tv.name').' IN ("'.implode(
					'","',
					$idnames
				).'")';
			}
			
			$rs = self::$modx->db->select(
				$fields.', IF(tvc.value != "", tvc.value, tv.default_text) as value',
				self::$tables['site_tmplvars'].' tv
					INNER JOIN '.self::$tables['site_tmplvar_templates'].' tvtpl
						ON tvtpl.tmplvarid = tv.id
					LEFT JOIN '.self::$tables['site_tmplvar_contentvalues'].' tvc
						ON tvc.tmplvarid=tv.id AND tvc.contentid = "'.$docid.'"
				',
				$query.' AND tvtpl.templateid = "'.$docRow['template'].'"',
				($sort ? $sort.' '.$dir : '')
			);
			
			$result = self::$modx->db->makeArray($rs);
			
			// get default/built-in template variables
			ksort($docRow);
			
			foreach (
				$docRow as
				$key => $value
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
	 * @version 1.1.6 (2018-06-17)
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
		
		if (count($idnames) == 0){
			return false;
		}else{
			$output = [];
			$vars = ($idnames == '*' || is_array($idnames)) ? $idnames : [$idnames];
			
			$docid = intval($docid) ? intval($docid) : self::$modx->documentIdentifier;
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
				$baspath = MODX_MANAGER_PATH.'includes';
				include_once $baspath.'/tmplvars.format.inc.php';
				include_once $baspath.'/tmplvars.commands.inc.php';
				
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
	 * @version 1.2.5 (2018-06-17)
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
	 * @param $fields {string_commaSeparated} — Documents fields to get. Default: '*'.
	 * @param $where {string} — SQL WHERE clause. Default: ''.
	 * @param $sort {string|string_commaSeparated} — Transfer a few conditions separated with comma (like SQL) to multiple sort, but param “sortDir” must be '' in this case. Default: 'menuindex'.
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
		
		$published = ($published !== 'all') ? 'AND sc.published = '.$published : '';
		$deleted = ($deleted !== 'all') ? 'AND sc.deleted = '.$deleted : '';
		
		if ($where != ''){
			$where = 'AND '.$where;
		}
		
		// modify field names to use sc. table reference
		$fields = 'sc.' . implode(
			',sc.',
			array_filter(array_map(
				'trim',
				explode(
					',',
					$fields
				)
			))
		);
		$sort = ($sort == '') ? '' : 'sc.' . implode(
			',sc.',
			array_filter(array_map(
				'trim',
				explode(
					',',
					$sort
				)
			))
		);
		
		// get document groups for current user
		if ($docgrp = self::$modx->getUserDocGroups()){
			$docgrp = implode(
				',',
				$docgrp
			);
		}
		
		// build query
		$access = (self::$modx->isFrontend() ? 'sc.privateweb=0' : '1="'.$_SESSION['mgrRole'].'" OR sc.privatemgr=0').(!$docgrp ? '' : ' OR dg.document_group IN ('.$docgrp.')');
		
		$result = self::$modx->db->select(
			'DISTINCT '.$fields,
			self::$tables['site_content'].' sc
				LEFT JOIN '.self::$tables['document_groups'].' dg
					ON dg.document = sc.id
			',
			'sc.parent = "'.$parentid.'" '.$published.' '.$deleted.' '.$where.' AND ('.$access.') GROUP BY sc.id',
			($sort ? $sort.' '.$dir : ''),
			$limit
		);
		
		$resourceArray = self::$modx->db->makeArray($result);
		
		return $resourceArray;
	}
	
	/**
	 * getDocumentChildrenTVarOutput
	 * @version 1.3.4 (2018-06-17)
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
	 * @param $sortBy {string|string_commaSeparated} — Transfer a few conditions separated with comma (like SQL) to multiple sort, but param “sortDir” must be '' in this case. Default: 'menuindex'.
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
				}else if (
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
	 * @version 1.1.2 (2018-06-17)
	 * 
	 * @desc Adds a required JS-file into a required MODX inner list according to its version and name. The method is used to register the scripts, that has already been connected manually.
	 * Be advised that the method does not add script code, but register its name and version to avoid future connections with $modx->regClientScript and $modx->regClientStartupScript, and the script code will be deleted if the script had been connected with $modx->regClientScript or $modx->regClientStartupScript.
	 * 
	 * @see ddRegJsCssLinks snippet (http://code.divandesign.biz/modx/ddregjscsslinks), предназначенный для «правильного» подключения js и css. Даже при «ручном» подключении сниппет регистрирует то, что подключил, используя данный метод.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['name'] {string} — Script name. @required
	 * @param $params['version'] {string} — Script version. Default: '0'.
	 * @param $params['startup'] {boolean} — Is the script connected in the <head>? Default: false.
	 * 
	 * @return $result {array_associative|''} — empty string if $name is not set or an array of:
	 * @return $result['name'] {string} — Script name.
	 * @return $result['version'] {string} — Script version (если был ранее подключен более поздняя версия, вернётся она).
	 * @return $result['useThisVer'] {boolean} — Использовалась ли та версия, что передали.
	 * @return $result['startup'] {boolean} — Подключён ли скрипт в <head>?.
	 * @return $result['pos'] {integer} — Ключ зарегистрированного скрипта в соответствующем внутреннем массиве MODX.
	 */
	public static function regEmptyClientScript($params = []){
		//Defaults
		$params = (object) array_merge([
			'name' => '',
			'version' => '0',
			'startup' => false
		], (array) $params);
		
		//Required params
		if (empty($params->name)){
			return '';
		}
		
		//Приведём имя к нижнему регистру (чтоб сравнивать потом проще было, ведь нам пофиг)
		$name = strtolower($params->name);
		//Если версия не задана, будет нулевая (полезно дальше при сравнении version_compare)
		$version = isset($params->version) ? strtolower($params->version) : '0';
		//Куда подключён скрипт: перед </head>, или перед </body>
		$startup = isset($params->startup) ? $params->startup : false;
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
			$pos = isset($overwritepos) ? $overwritepos : max(array_merge(
				[0],
				array_keys(self::$modx->sjscripts)
			)) + 1;
			if ($useThisVer){
				//Запоминаем пустую строку подключения в нужный массив, т.к. подключаем мануально.
				self::$modx->sjscripts[$pos] = '';
			}
		//Если надо подключить перед </body>, то всё по аналогии, только массив другой
		}else{
			$pos = isset($overwritepos) ? $overwritepos : max(array_merge(
				[0],
				array_keys(self::$modx->jscripts)
			)) + 1;
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
	 * getDocumentIdByUrl
	 * @version 1.1.2 (2017-12-09)
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
			
			//На всякий случай вышережем host из адреса (а то вдруг url просто без http:// передали) + лишние слэши по краям
			$path = trim(
				$path,
				$siteHost['host'].'/'
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
		}else if (!empty(self::$modx->documentListing[$path])){
			//Возвращаем его id
			return self::$modx->documentListing[$path];
		//В противном случае возвращаем 0
		}else{
			return 0;
		}
	}
	
	/**
	 * verifyRenamedParams
	 * @version 1.1.7 (2018-06-26)
	 * 
	 * @desc The method checks an array for deprecated parameters and writes warning messages into the MODX event log. It returns an associative array, in which the correct parameter names are the keys and the parameter values are the values. You can use the “exctract” function to turn the array into variables of the current symbol table.
	 * 
	 * @param $params {array} — The associative array of the parameters of a snippet, in which the parameter names are the keys and the parameter values are the values. You can directly pass here the “$params” variable if you call the method inside of a snippet. @required
	 * @param $compliance {array} — An array of correspondence between new parameter names and old ones, in which the new names are the keys and the old names are the values. @required
	 * @param $compliance[i] {string|array} — The old name(s). Use a string for a single name or an array for multiple. @required
	 * 
	 * @example ```php
	 * exctract(ddTools::verifyRenamedParams(
	 * 	//We called the method inside of a snippet, so its parameters are contained in the “$params” variable (MODX feature)
	 * 	$params,
	 * 	//Complience
	 * 	[
	 * 		//“docId” is the new name, “param1Name” — the old name
	 * 		'docId' => 'param1Name',
	 * 		//Multiple old names are supported too
	 * 		'docField' => ['param2Name', 'getId']
	 * 	]
	 * ));
	 * //After extraction we can safaly use the variables “$docId” and “docField”
	 * ```
	 * 
	 * @return {array_associative} — An array, in which the correct parameter names are the keys and the parameter values are the values.
	 */
	public static function verifyRenamedParams(
		$params,
		$compliance
	){
		$result = [];
		$message = [];
		
		$params_names = array_keys($params);
		
		//Перебираем таблицу соответствия
		foreach (
			$compliance as
			$newName => $oldNames
		){
			//Если параметр с новым именем не задан
			if (!isset($params[$newName])){
				//Если старое имя только одно, всё равно приведём к массиву для удобства
				if (!is_array($oldNames)){$oldNames = [$oldNames];}
				
				//Находим все старые, которые используются
				$oldNames = array_values(array_intersect(
					$params_names,
					$oldNames
				));
				
				//Если что-то нашлось
				if (count($oldNames) > 0){
					//Зададим (берём значение первого попавшегося)
					$result[$newName] = $params[$oldNames[0]];
					$message[] .= '<li>“'.implode(
						'”, “',
						$oldNames
					).'” must be renamed as “'.$newName.'”;</li>';
				}
			}
		}
		
		if (count($result) > 0){
			self::logEvent([
				'message' => '<p>Some of the snippet parameters have been renamed. Please, correct the following parameters:</p><ul>'.implode(
					'',
					$message
				).'</ul>'
			]);
		}
		
		return $result;
	}
	
	/**
	 * sendMail
	 * @version 3.0.2 (2018-06-26)
	 * 
	 * @desc Method for sending e-mails.
	 * 
	 * @param $params {array_associative|stdClass} — The object of params. @required
	 * @param $params['to'] {array} — Addresses to mail. @required
	 * @param $params['to'][i] {string_email} — An address. @required
	 * @param $params['text'] {string} — E-mail text. @required
	 * @param $params['from'] {string} — Mailer address. Default: $modx->getConfig('emailsender').
	 * @param $params['subject'] {string} — E-mail subject. Default: 'Mail from '.$modx->config['site_url'].
	 * @param $params['fileInputNames'] {array} — “input” tags names from which accepted files are taken. Default: [].
	 * @param $params['fileInputNames'][i] {string} — Input name. @required
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
				'compliance' => ['to', 'text', 'from', 'subject', 'fileInputNames']
			]);
		}
		
		//Defaults
		$params = (object) array_merge([
			'from' => self::$modx->getConfig('emailsender'),
			'subject' => 'Mail from '.self::$modx->config['site_url'],
			'fileInputNames' => []
		], (array) $params);
		
		//Добавлеям текст в сообщения
		$message = trim($params->text);
		
		if(!empty($params->fileInputNames)){
			$attachFiles = [];
			
			//Перебираем имена полей с файлами
			foreach($params->fileInputNames as $value){
				//Проверяем находится ли в POST массив
				if(is_array($_FILES[$value]['name'])){
					//Если массив пустой обрываем итерацию
					if(!$_FILES[$value]['tmp_name'][0]){break;}
					
					//Перебираем пост
					foreach(
						$_FILES[$value]['name'] as
						$key => $name
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
		
		foreach ($params->to as $val){
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
					foreach($attachFiles as $value){
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
	 * @version 1.0.5 (2018-06-26)
	 * 
	 * @desc Returns a proper instance of the “Response” class recommended to be used as response to an HTTP request.
	 * 
	 * @param $version {string} — The required version of Response. Default: '0.2'.
	 * 
	 * @return {DDTools\Response}
	 */
	public static function getResponse($version = '0.2'){
		$responseClass = \DDTools\Response::includeResponseByVersion($version);
		
		$result = new $responseClass;
		
		return $result;
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
	 * @param $fields {array_associative} — Array of document fields (from table `site_content`) or TVs with values. @required
	 * @param $fields[key] {mixed} — Field value (optional), when key is field name. The method use only keys, values just will be returned without changes. @required
	 * 
	 * @return $result {array}
	 * @return $result[0] {array_associative} — Document fields (like 'id', 'pagetitle', etc).
	 * @return $result[0][key] {mixed} — Field value, when key is field name.
	 * @return $result[1] {array_associative} — TVs.
	 * @return $result[1][key] {array_associative} — TV, when key is TV name.
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
			$tvName => $tvValue
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
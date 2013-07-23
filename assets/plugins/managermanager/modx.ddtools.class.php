<?php
/**
 * modx ddTools class
 * @version: 0.8.1 (2013-07-11)
 *
 * @uses modx 1.0.10 (Evo)
 *
 * @link http://code.divandesign.biz/modx/ddtools/0.8.1
 *
 * @copyright Copyright 2013, DivanDesign
 * http://www.DivanDesign.biz
 */

if (!class_exists('ddTools')){
class ddTools {
	//Список полей документа (в таблице `site_content`)
	public static $documentFields = array(
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
	);

	//Полные имена таблиц MODx
	public static $tables;

	/**
	 * screening
	 * @version 1.0 (2012-03-21)
	 *
	 * Осуществляет экранирование символов в строке.
	 *
	 * @param $str {string} - Строка для обработки.
	 *
	 * @return {string} - Экранированная строка.
	 */
	public static function screening($str){
		$str = str_replace("\r\n", ' ', $str);
		$str = str_replace("\n", ' ', $str);
		$str = str_replace("\r", ' ', $str);
		$str = str_replace(chr(9), ' ', $str);
		$str = str_replace('  ', ' ', $str);
		$str = str_replace('[+', '\[\+', $str);
		$str = str_replace('+]', '\+\]', $str);
		$str = str_replace("'", "\'", $str);
		$str = str_replace('"', '\"', $str);

		return $str;
	}

	/**
	 * explodeAssoc
	 * @version 1.1.1 (2013-07-11)
	 *
	 * Разбивает строку по двум разделителям в ассоциативный массив.
	 *
	 * @param $str {separated string} - Строка для обработки
	 * @param $splY {string} - Разделитель между значениями (парами ключ-значение). По умолчанию: '||'.
	 * @param $splX {string} - Разделитель между ключём и значением. По умолчанию: '::'.
	 *
	 * @return {array: associative}
	 */
	public static function explodeAssoc($str, $splY = '||', $splX = '::'){
		$result = array();
		
		//Если строка пустая, выкидываем сразу
		if ($str == ''){return $result;}
		
		//Разбиваем по парам
		$str = explode($splY, $str);

		foreach ($str as $val){
			//Разбиваем на ключ-значение
			$val = explode($splX, $val);
			$result[$val[0]] = isset($val[1]) ? $val[1] : '';
		}

		return $result;
	}

	/**
	 * parseText
	 * @version 1.1 (2012-03-21)
	 *
	 * Аналог модексовского parseChunk, только принимает текст.
	 *
	 * @param $chunk {string} - Строка, которую нужно парсить.
	 * @param $chunkArr {array} - Ассоциативный массив значений.
	 * @param $prefix {string} - Префикс плэйсхолдеров.
	 * @param $suffix {string} - Суффикс плэйсхолдеров.
	 * @param $mergeAll {boolean} - Надо ли делать дополнительно обрабатывать поля документа, настроек, чанков.
	 *
	 * @return {string}
	 */
	public static function parseText($chunk, $chunkArr, $prefix= '[+', $suffix= '+]', $mergeAll = true){
		global $modx;

		//Если значения для парсинга не переданы, ничего не делаем
		if (!is_array($chunkArr)){
			return $chunk;
		}

		if ($mergeAll){
			$chunk = $modx->mergeDocumentContent($chunk);
			$chunk = $modx->mergeSettingsContent($chunk);
			$chunk = $modx->mergeChunkContent($chunk);
		}

		foreach ($chunkArr as $key => $value) {
			$chunk = str_replace($prefix.$key.$suffix, $value, $chunk);
		}

		return $chunk;
	}

	/**
	 * parseSource
	 * @version 1.0 (2012-02-13)
	 *
	 * Парсит ресурс.
	 *
	 * @param $sourse {string}
	 *
	 * @return {string}
	 */
	public static function parseSource($source){
		global $modx;

		return $modx->rewriteUrls($modx->parseDocumentSource($source));
	}

	/**
	 * explodeFieldsArr
	 * @version 1.0 (2012-03-20)
	 *
	 * Разбивает ассоциативный массив полей и TV документа на два отдельных массива.
	 *
	 * @param $fields {array} - Ассоциативный массив значений полей документа (в таблице `site_content`) и/или TV.
	 *
	 * @return {array} - Массив из двух элементов, где первый — поля документа, второй — TV. Элементами массива TV являются ассоциативные массивы, в которых хранятся 'id' и 'val'.
	 */
	public static function explodeFieldsArr($fields = array()){
		global $modx;

		$tvs = array();
		//Перебираем поля, раскидываем на поля документа и TV
		foreach ($fields as $key => $val){
			//Если это не поле документа
			if (!in_array($key, self::$documentFields)){
				//Запоминаем как TV`шку
				$tvs[$key] = array('val' => $val);
				//Удаляем из полей
				unset($fields[$key]);
			}
		}

		//Если есть хоть одна TV
		if (count($tvs) > 0){
			//Получаем id всех необходимых TV
			$dbRes = $modx->db->select(
				"`name`, `id`",
				self::$tables['site_tmplvars'],
				"`name` IN ('".implode("','", array_keys($tvs))."')"
			);

			while ($row = $modx->db->getRow($dbRes)){
				$tvs[$row['name']]['id'] = $row['id'];
			}
		}

		return array($fields, $tvs);
	}

	/**
	 * createDocument
	 * @version 1.1 (2012-03-20)
	 *
	 * Создаёт новый документ.
	 *
	 * @param $fields {array} - Ассоциативный массив значений полей документа (в таблице `site_content`) и/или TV.
	 * @param $groups {array} - Индексированный массив id групп, к которым должен принадлежать документ.
	 *
	 * @return {mixed} - ID нового документа или false, если что-то не так.
	 */
	public static function createDocument($fields = array(), $groups = false){
		global $modx;

		//Если нет хотя бы заголовка, выкидываем
		if (!$fields['pagetitle']) return false;

		//Если не передана дата создания документа, ставим текущую
		if (!$fields['createdon']) $fields['createdon'] = time();

		//Если не передано, кем документ создан, ставим 1
		if (!$fields['createdby']) $fields['createdby'] = 1;

		//Если группы заданы, то это приватный документ
		if ($groups) $fields['privatemgr'] = 1;

		//Если надо публиковать, поставим дату публикации текущей
		if ($fields['published'] == 1) $fields['pub_date'] = $fields['createdon'];

		$fields = self::explodeFieldsArr($fields);

		//Вставляем новый документ в базу, получаем id, если что-то пошло не так, выкидываем
		$id = $modx->db->insert($fields[0], self::$tables['site_content']);

		if (!$id) return false;

		//Если есть хоть одна TV
		if (count($fields[1]) > 0){
			//Перебираем массив TV
			foreach ($fields[1] as $key => $val){
				//Проверим, что id существует (а то ведь могли и именем ошибиться)
				if (isset($val['id'])){
					//Добавляем значение TV в базу
					$modx->db->insert(
						array('value' => $val['val'], 'tmplvarid' => $val['id'], 'contentid' => $id),
						self::$tables['site_tmplvar_contentvalues']
					);
				}
			}
		}

		//Если заданы группы (и на всякий проверим ID)
		if ($groups){
			//Перебираем все группы
			foreach ($groups as $gr){
				$modx->db->insert(array('document_group' => $gr, 'document' => $id), self::$tables['document_groups']);
			}
		}

		return $id;
	}

	/**
	 * updateDocument
	 * @version 1.2 (2012-10-26)
	 *
	 * Обновляет информацию по документу.
	 *
	 * @desc $id и/или $where должны быть переданы
	 *
	 * @param $id {integer; array} - ID документа (или массив ID), который необхоидмо отредактировать.
	 * @param $update {array} - Ассоциативный массив значений полей документа (в таблице `site_content`) и/или TV.
	 * @param $where {string} - SQL условие WHERE.
	 *
	 * @return {boolean} - true — если всё хорошо, или false — если такого документа нет, или ещё что-то пошло не так.
	 */
	public static function updateDocument($id = 0, $update = array(), $where = ''){
		global $modx;

		if ($id == 0 && trim($where) == '') return false;

		$where_sql = '';

		if (is_array($id) && count($id)){
			//Обрабатываем массив id
			$where_sql .= "`id` IN ('".implode("','", $id)."')";

		}else if (is_numeric($id) && $id != 0){
			//Обрабатываем числовой id
			$where_sql .= "`id`='$id'";
		}

		//Добавляем дополнительное условие
		if ($where != ''){
			$where_sql .= ($where_sql != '' ? ' AND ' : '').$where;
		}

		//Получаем id документов для обновления
		$update_ids_res = $modx->db->select('id', self::$tables['site_content'], $where_sql);

		if ($modx->db->getRecordCount($update_ids_res)){
			//Разбиваем на поля документа и TV
			$update = self::explodeFieldsArr($update);

			//Обновляем информацию по документу
			if (count($update[0])){
				$modx->db->update($update[0], self::$tables['site_content'], $where_sql);
			}

			//Если есть хоть одна TV
			if (count($update[1]) > 0){
				//Обновляем TV всех найденых документов
				while ($doc = $modx->db->getRow($update_ids_res)){
					//Перебираем массив TV
					foreach ($update[1] as $val){
						//Проверим, что id существует (а то ведь могли и именем ошибиться)
						if (isset($val['id'])){
							//Пробуем обновить значение нужной TV
							$modx->db->update(
								"`value` = '{$val['val']}'",
								self::$tables['site_tmplvar_contentvalues'],
								"`tmplvarid` = {$val['id']} AND `contentid` = {$doc['id']}"
							);

							//Проверяем сколько строк нашлось при обновлении
							preg_match('/Rows matched: (\d+)/', mysql_info(), $updatedRows);

							//Если ничего не обновилось (не нашлось)
							if ($updatedRows[1] == 0){
								//Добавляем значение нужной TV в базу
								$modx->db->insert(
									array('value' => $val['val'], 'tmplvarid' => $val['id'], 'contentid' => $doc['id']),
									self::$tables['site_tmplvar_contentvalues']
								);
							}
						}
					}
				}
			}
			return true;
		}else{
			//Нечего обновлять
			return false;
		}
	}
	
	/**
	 * getDocuments
	 * @version 1.0 (2013-03-16)
	 *
	 * @description Получает необходимые документы (поля документов).
	 *
	 * @note
	 * Отличие от родного метода:
	 * 	— Параметр $published может принимать false, в этом случае будут получены и опубликованные и неопубликованные документы.
	 * 	— Параметр $deleted может принимать false, в этом случае будут получены и удалённые и неудалённые документы.
	 *
	 * @param $ids {array} - Id документов, которые надо получить. @required
	 * @param $published {false; 0; 1} - Опубликованы ли документы, которые надо получить. При значении === false — без разницы. По умолчанию: false.
	 * @param $deleted {false; 0; 1} - Удалены ли документы, которые надо получить. При значении === false — без разницы. По умолчанию: 0.
	 * @param $fields {comma separated string; '*'} - Поля документа, которые надо получить. По умолчанию: '*'.
	 * @param $where {string} - Условие WHERE SQL-запроса для получения документов. По умолчанию: ''.
	 * @param $sort {string} - Поле документа, по которому необходимо сортировать результаты. По умолчанию: 'menuindex'.
	 * @param $dir {'ASC'; 'DESC'} - Направление сортировки результатов. По умолчанию: 'ASC'.
	 * @param $limit {string} - SQL LIMIT (слово LIMIT включать не надо). По умолчанию: ''.
	 *
	 * @return {mixed} - Массив документов или false, если что-то не так.
	 */
	public static function getDocuments($ids = array(), $published = false, $deleted = 0, $fields = "*", $where = '', $sort = "menuindex", $dir = "ASC", $limit = ""){
		global $modx;
		
		if (count($ids) == 0){
			return false;
		}else{
			$limit = ($limit != "") ? "LIMIT $limit" : ""; // LIMIT capabilities - rad14701
			// modify field names to use sc. table reference
			$fields = 'sc.' . implode(',sc.', preg_replace("/^\s/i", "", explode(',', $fields)));
			$sort = ($sort == "") ? "" : 'sc.' . implode(',sc.', preg_replace("/^\s/i", "", explode(',', $sort)));
			
			if ($where != ''){
				$where = 'AND '.$where;
			}
			
			$published = ($published !== false) ? 'AND sc.published = '.$published : '';
			$deleted = ($deleted !== false) ? 'AND sc.deleted = '.$deleted : '';
			
			// get document groups for current user
			if ($docgrp = $modx->getUserDocGroups()){
				$docgrp = implode(",", $docgrp);
			}
			
			$access = ($modx->isFrontend() ? "sc.privateweb=0" : "1='".$_SESSION['mgrRole']."' OR sc.privatemgr=0").(!$docgrp ? "" : " OR dg.document_group IN ($docgrp)");
			
			$sql = "
				SELECT DISTINCT $fields FROM ".self::$tables['site_content']." sc
				LEFT JOIN ".self::$tables['document_groups']." dg on dg.document = sc.id
				WHERE (sc.id IN (".implode(",", $ids).") $published $deleted $where) AND ($access)
				GROUP BY sc.id ".($sort ? " ORDER BY $sort $dir" : "")." $limit 
			";
			
			$result = $modx->db->query($sql);
			$resourceArray = array();
			
			for ($i= 0; $i < @ $modx->db->getRecordCount($result); $i++){
				array_push($resourceArray, @ $modx->db->getRow($result));
			}
			
			return $resourceArray;
		}
	}
	
	/**
	 * getDocument
	 * @version 1.0 (2013-03-16)
	 *
	 * @description Получает данные о необходимом документе (поля документа).
	 *
	 * @note
	 * Отличие от родного метода:
	 * 	— Параметр $published может принимать false, в этом случае без разницы, опубликован ли документ, он всё равно будет получен.
	 * 	— Параметр $deleted может принимать false, в этом случае без разницы, удалён ли документ, он всё равно будет получен.
	 *
	 * @param $id {integer} - Id документа, данные которого надо получить. @required
	 * @param $fields {comma separated string; '*'} - Поля документа, которые надо получить. По умолчанию: '*'.
	 * @param $published {false; 0; 1} - Опубликован ли документ, данные которого надо получить. При значении === false — без разницы. По умолчанию: false.
	 * @param $deleted {false; 0; 1} - Удален ли документ, данные которого надо получить. При значении === false — без разницы. По умолчанию: 0.
	 *
	 * @return {mixed} - Массив данных документа или false, если что-то не так.
	 */
	public static function getDocument($id = 0, $fields = "*", $published = false, $deleted = 0){
		if ($id == 0){
			return false;
		}else{
			$docs = self::getDocuments(array($id), $published, $deleted, $fields, "", "", "", 1);
			
			if ($docs != false){
				return $docs[0];
			}else{
				return false;
			}
		}
	}
	
	/**
	 * getTemplateVars
	 * @version 1.0 (2013-03-16)
	 *
	 * @description Получает массив TV и полей заданного документа.
	 *
	 * @note
	 * Отличие от родного метода:
	 * 	— Параметр $published может принимать false, в этом случае будут получены и опубликованные и неопубликованные документы.
	 *
	 * @param $idnames {array; '*'} - Id или имена TV или имена полей документа, которые надо получить. @required
	 * @param $fields {comma separated string; '*'} - Поля базы данных таблицы TV, которые надо получать. По умолчанию: '*'.
	 * @param $docid {integer; ''} - Id документа, данные которого надо получить. По умолчанию: Текущий документ.
	 * @param $published {false; 0; 1} - Опубликован ли документ, данные которого надо получить. При значении === false — без разницы. По умолчанию: false.
	 * @param $sort {comma separated string} - Поля базы данных таблицы TV, по которым необходимо сортировать результаты. По умолчанию: 'rank'.
	 * @param $dir {'ASC'; 'DESC'} - Направление сортировки результатов. По умолчанию: 'ASC'.
	 *
	 * @return {mixed} - Массив TV или false, если что-то не так.
	 */
	public static function getTemplateVars($idnames = array(), $fields = "*", $docid = "", $published = false, $sort = "rank", $dir = "ASC"){
		global $modx;
		
		if (($idnames != '*' && !is_array($idnames)) || count($idnames) == 0){
			return false;
		}else{
			$result = array();
	
			// get document record
			if ($docid == ""){
				$docid = $modx->documentIdentifier;
				$docRow = $modx->documentObject;
			}else{
				$docRow = self::getDocument($docid, '*', $published);
				
				if (!$docRow){
					return false;
				}
			}
	
			// get user defined template variables
			$fields = ($fields == "") ? "tv.*" : 'tv.'.implode(',tv.', preg_replace("/^\s/i", "", explode(',', $fields)));
			$sort = ($sort == "") ? "" : 'tv.'.implode(',tv.', preg_replace("/^\s/i", "", explode(',', $sort)));
			
			if ($idnames == "*"){
				$query = "tv.id<>0";
			}else{
				$query = (is_numeric($idnames[0]) ? "tv.id" : "tv.name") . " IN ('" . implode("','", $idnames) . "')";
			}
			
			if ($docgrp= $modx->getUserDocGroups()){
				$docgrp= implode(",", $docgrp);
			}
			
			$sql= "SELECT $fields, IF(tvc.value!='',tvc.value,tv.default_text) as value ";
			$sql .= "FROM ".self::$tables['site_tmplvars']." tv ";
			$sql .= "INNER JOIN ".self::$tables['site_tmplvar_templates']." tvtpl ON tvtpl.tmplvarid = tv.id ";
			$sql .= "LEFT JOIN ".self::$tables['site_tmplvar_contentvalues']." tvc ON tvc.tmplvarid=tv.id AND tvc.contentid = '" . $docid . "' ";
			$sql .= "WHERE ".$query." AND tvtpl.templateid = ".$docRow['template'];
			
			if ($sort){
				$sql .= " ORDER BY $sort $dir ";
			}
			
			$rs = $modx->db->query($sql);
			
			for ($i= 0; $i < @ $modx->db->getRecordCount($rs); $i++){
				array_push($result, @ $modx->db->getRow($rs));
			}
	
			// get default/built-in template variables
			ksort($docRow);
			
			foreach ($docRow as $key => $value){
				if ($idnames == "*" || in_array($key, $idnames)){
					array_push($result, array (
						"name" => $key,
						"value" => $value
					));
				}
			}
	
			return $result;
		}
	}

	/**
	 * getTemplateVarOutput
	 * @version 1.0 (2013-03-16)
	 *
	 * @description Получает ассоциативный массив значений TV и полей заданного документа.
	 *
	 * @note
	 * Отличие от родного метода:
	 * 	— Параметр $published может принимать false, в этом случае будут получены и опубликованные и неопубликованные документы.
	 *
	 * @param $idnames {array; '*'} - Id или имена TV или имена полей документа, которые надо получить. @required
	 * @param $docid {integer; ''} - Id документа, данные которого получить. По умолчанию: Текущий документ.
	 * @param $published {false; 0; 1} - Опубликован ли документ, данные которого надо получить. При значении === false — без разницы. По умолчанию: false.
	 * @param $sep {string} - Разделитель, используемый при склейке в getTVDisplayFormat(). По умолчанию: ''.
	 *
	 * @return {mixed} - Массив TV или false, если что-то не так.
	 */
	public static function getTemplateVarOutput($idnames = array(), $docid = "", $published = false, $sep = ''){
		global $modx;
		
		if (count($idnames) == 0){
			return false;
		}else{
			$output = array();
			$vars = ($idnames == '*' || is_array($idnames)) ? $idnames : array($idnames);
			
			$docid = intval($docid) ? intval($docid) : $modx->documentIdentifier;
			
			$result = self::getTemplateVars($vars, '*', $docid, $published, '', ''); // remove sort for speed
			
			if ($result == false){
				return false;
			}else{
				$baspath = $modx->config['base_path'].'manager/includes';
				include_once $baspath.'/tmplvars.format.inc.php';
				include_once $baspath.'/tmplvars.commands.inc.php';
				
				for ($i= 0; $i < count($result); $i++){
					$row = $result[$i];
					if (!$row['id']){
						$output[$row['name']] = $row['value'];
					}else{
						$output[$row['name']] = getTVDisplayFormat($row['name'], $row['value'], $row['display'], $row['display_params'], $row['type'], $docid, $sep);
					}
				}
				
				return $output;
			}
		}
	}

	/**
	 * getDocumentChildren
	 * @version 1.0 (2013-05-15)
	 *
	 * @description Получает необходимые дочерние документы (значения их полей).
	 *
	 * @note
	 * Отличие от родного метода:
	 * 	— Параметр $published может принимать false, в этом случае будут получены и опубликованные и неопубликованные документы.
	 * 	— Параметр $deleted может принимать false, в этом случае будут получены и удалённые и неудалённые документы.
	 *
	 * @param $parentid {integer} - Id родителя, дочерние документы которого необходимо получить. По умолчанию: 0.
	 * @param $published {false; 0; 1} - Опубликованы ли документы? При значении === false — без разницы. По умолчанию: 1.
	 * @param $deleted {false; 0; 1} - Удалены ли документы, которые надо получить. При значении === false — без разницы. По умолчанию: 0.
	 * @param $fields {comma separated string} - Названия полей документа, которые нужно получить. При значении == '*' — все поля. По умолчанию: '*'.
	 * @param $where {string} - Условие WHERE SQL-запроса для получения документов (в условии могут участвовать только поля документа). По умолчанию: ''.
	 * @param $sortBy {string; comma separated string} - По какому полю сортировать документы. Для множественной сортировки можно передавать несколько с указанием направления через запятую (как в sql), в этом случае $sortDir следует передать как пустую строку. По умолчанию: 'menuindex'.
	 * @param $sortDir {'ASC'; 'DESC'; ''} - Направление сортировки документов. По умолчанию: 'ASC'.
	 * @param $limit {string} - SQL LIMIT (слово LIMIT включать не надо). По умолчанию: ''.
	 *
	 * @return {mixed} - Массив документов или false, если что-то не так.
	 */
	public static function getDocumentChildren($parentid = 0, $published = 1, $deleted = 0, $fields = '*', $where = '', $sortBy = 'menuindex', $sortDir = 'ASC', $limit = ''){
		global $modx;
		
		$published = ($published !== false) ? 'AND sc.published = '.$published : '';
		$deleted = ($deleted !== false) ? 'AND sc.deleted = '.$deleted : '';

		if ($where != ''){
			$where = 'AND '.$where;
		}
		
		$limit = ($limit != '') ? 'LIMIT '.$limit : '';
		
		// modify field names to use sc. table reference
		$fields = 'sc.'.implode(',sc.', preg_replace("/^\s/i", "", explode(',', $fields)));
		$sortBy = ($sortBy == "") ? "" : 'sc.'.implode(',sc.', preg_replace("/^\s/i", "", explode(',', $sortBy)));
		
		// get document groups for current user
		if ($docgrp = $modx->getUserDocGroups()){
			$docgrp = implode(",", $docgrp);
		}
		
		// build query
		$access = ($modx->isFrontend() ? "sc.privateweb=0" : "1='".$_SESSION['mgrRole']."' OR sc.privatemgr=0").(!$docgrp ? "" : " OR dg.document_group IN ($docgrp)");
		
		$sql = "SELECT DISTINCT $fields
				FROM ".self::$tables['site_content']." sc
				LEFT JOIN ".self::$tables['document_groups']." dg on dg.document = sc.id
				WHERE sc.parent = '$parentid' $published $deleted $where AND ($access)
				GROUP BY sc.id ".($sortBy ? " ORDER BY $sortBy $sortDir " : "")." $limit ";
		
		$result = $modx->db->query($sql);
		$resourceArray = array();
		
		for ($i = 0; $i < @$modx->db->getRecordCount($result); $i++){
			array_push($resourceArray, @$modx->db->getRow($result));
		}
		
		return $resourceArray;
	}
	
	/**
	 * getDocumentChildrenTVarOutput
	 * @version 1.1 (2013-05-15)
	 *
	 * @description Получает необходимые дочерние документы (значения их полей и TV).
	 *
	 * @note
	 * Отличие от родного метода:
	 * 	— Добавлен параметр $where, который позволяет указать условие WHERE SQL-запроса для получения документов (в условии могут участвовать только поля документа).
	 * 	— Добавлен параметр $resultKey, который позволяет определить, значение какого поля будет ключами результирующего массива.
	 * 	— В $modx->getDocumentChildren получается только id (ибо зачем всё остальное, дальше ведь всё равно получается).
	 * 	— Параметр $published может принимать false, в этом случае будут получены и опубликованные и неопубликованные документы.
	 *
	 * @param $parentid {integer} - Id родителя, дочерние документы которого необходимо получить. По умолчанию: 0.
	 * @param $fields {array} - Массив названий полей документа и/или TV, которые нужно получить.
	 * @param $published {false; 0; 1} - Опубликованны ли документы? При значении === false — без разницы. По умолчанию: 1.
	 * @param $sortBy {string; comma separated string} - По какому полю сортировать документы. Для множественной сортировки можно передавать несколько с указанием направления через запятую (как в sql), в этом случае $sortDir следует передать как пустую строку.
	 * @param $sortDir {'ASC'; 'DESC'; ''} - Направление сортировки документов.
	 * @param $where {string} - Условие WHERE SQL-запроса для получения документов (в условии могут участвовать только поля документа).
	 * @param $resultKey {string; false} - Значение какого поля должно быть ключами результирующего массива? Если передать false, то ключи будут просто по порядку.
	 *
	 * @return {mixed} - Массив документов или false, если что-то не так.
	 */
	public static function getDocumentChildrenTVarOutput($parentid = 0, $fields = array(), $published = 1, $sortBy = 'menuindex', $sortDir = 'ASC', $where = '', $resultKey = 'id'){
		//Получаем всех детей
		$docs = self::getDocumentChildren($parentid, $published, 0, 'id', $where, $sortBy, $sortDir);
	
		//Если ничего не получили, выкидываем
		if (!$docs){
			return false;
		}else{
			$result = array();
	
			//Если указано поле ключя результирующего массива, добавим это поле (если ещё нету конечно)
			if ($resultKey !== false && !in_array($resultKey, $fields)) $fields[] = $resultKey;
	
			//Перебираем все документы
			for ($i = 0; $i < count($docs); $i++){
				//Получаем необходимые TV  и поля документа
				$tvs = self::getTemplateVarOutput($fields, $docs[$i]['id'], $published);
	
				//Если что-то есть
				if ($tvs){
					//Если нужно в качестве ключа использовать не индекс и такое поле есть
					if ($resultKey !== false && array_key_exists($resultKey, $tvs)){
						//Записываем результат с соответствующим ключом
						$result[$tvs[$resultKey]] = $tvs;
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
	 * parseFileNameVersion
	 * @version 1.0 (2013-07-06)
	 * 
	 * @desc Разбирает строку файла, получая из неё его имя версию.
	 * 
	 * @param $file {string; array} - Строка пути к файлу или распаршенный при помощи pathinfo() путь к файлу.
	 * 
	 * @return {array: associative} - Массив, элементы которого: 'name' {string} => Имя файла; 'version' => Версия файла.
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
		$result = array('name' => strtolower($file), 'version' => '0');
		
		//Try to get file version [0 — full name, 1 — script name, 2 — version, 3 — all chars after version]
		preg_match('/(\D*?)-?(\d(?:\.\d+)*(?:-?[A-Za-z])*)(.*)/', $fileinfo['basename'], $match);
		
		//If not fail
		if (count($match) >= 4){
			$result['name'] = strtolower($match[1]);
			$result['version'] = strtolower($match[2]);
		}
		
		return $result;
	}
	
	/**
	 * regEmptyClientScript
	 * @version 1.0.1 (2013-03-12)
	 *
	 * Добавляет необходимый файл JavaScript в нужный внутренний список MODx в соответствии с его именем и версией. Предназначен для регистрации скриптов, которые уже были подключены в ручную.
	 * Внимание! Метод не добавляет код скрипта, только регистрирует его имя и версию, чтобы дальнейшие вызовы $modx->regClientScript или $modx->regClientStartupScript не приводили к повторному подключению того, что уже было подключено руками. Более того, если скрипт был ранее подключен при помощи $modx->regClientScript или $modx->regClientStartupScript, его код будет очищен, т.к. предполагается, что вы его подключили в ручную.
	 *
	 * @see Сниппет ddRegJsCssLinks (http://code.divandesign.biz/modx/ddregjscsslinks), предназначенный для «правильного» подключения js и css. Даже при «ручном» подключении сниппет регистрирует то, что подключил, используя данный метод.
	 *
	 * Параметры передаются в виде ассоциативного массива, где:
	 * @param name {string} - Имя скрипта. @required
	 * @param version {string} - Версия скрипта. По мумолчанию: '0'.
	 * @param startup {boolean} - Подключён ли скрипт в <head>? По умолчанию: false.
	 *
	 * @return {array: associative} - Массив, элементы которого: 'name' {string} => Имя скрипта; 'version' {string} => Версия скрипта (если был ранее подключен более поздняя версия, вернётся она); 'useThisVer' {boolean} => Использовалась ли та версия, что передали; 'startup' {boolean} => Подключён ли скрипт в <head>?; 'pos' {integer} => Ключ зарегистрированного скрипта в соответствующем внутреннем массиве MODx.
	 */
	public static function regEmptyClientScript($options = array('name' => '', 'version' => '0', 'startup' => false)){
		global $modx;
	
		//Если ничего не передали или не передали хотя бы имя
		if (!is_array($options) || !isset($options['name']) || empty($options['name'])){
			//С пляжу
			return '';
		}
	
		//Приведём имя к нижнему регистру (чтоб сравнивать потом проще было, ведь нам пофиг)
		$name = strtolower($options['name']);
		//Если версия не задана, будет нулевая (полезно дальше при сравнении version_compare)
		$version = isset($options['version']) ? strtolower($options['version']) : '0';
		//Куда подключён скрипт: перед </head>, или перед </body>
		$startup = isset($options['startup']) ? $options['startup'] : false;
		//Ну мало ли
		unset($overwritepos);
	
		//По дефолту юзаем эту версию
		$useThisVer = true;
	
		//Если такой скрипт ужебыл подключён
		if (isset($modx->loadedjscripts[$name])){
			//Если он подключался в <header>
			if ($modx->loadedjscripts[$name]['startup']){
				//Этот пусть будет так же
				$startup = true;
			}
	
			//Сравниваем версию раннее подключённого скрипта с текущей: если старая меньше новой, надо юзать новую, иначе — старую
			$useThisVer = version_compare($modx->loadedjscripts[$name]['version'], $version, '<');
	
			//Если надо юзать старую версию
			if (!$useThisVer){
				//Запомним версию как старую. Здесь нам пофиг на его код, ведь новый код будет подключен мануально.
				$version = $modx->loadedjscripts[$name]['version'];
			}
	
			//Если новая версия должна подключаться в <header>, а старая подключалась перед </body>
			if ($startup == true && $modx->loadedjscripts[$name]['startup'] == false){
				//Снесём старый скрипт из массива подключения перед </body> (ведь новая подключится в <head>). Здесь нам пофиг на его код, ведь новый код будет подключен мануально.
				unset($modx->jscripts[$modx->loadedjscripts[$name]['pos']]);
				//Если новая версия должна подключаться перед </body> или старая уже подключалась перед </head>. На самом деле, сработает только если обе перед </body> или обе перед </head>, т.к. если старая была перед </head>, то новая выставится также кодом выше.
			}else{
				//Запомним позицию старого скрипта (порядок подключения может быть важен для зависимых скриптов), на новую пофиг. Дальше код старой просто перетрётся в соответсвтии с позицией.
				$overwritepos = $modx->loadedjscripts[$name]['pos'];
			}
		}
	
		//Если надо подключить перед </head>
		if ($startup){
			//Позиция такова: либо старая (уже вычислена), либо максимальное значение между нолём и одним из ключей массива подключённых скриптов + 1 (это, чтобы заполнить возможные дыры)
			$pos = isset($overwritepos) ? $overwritepos : max(array_merge(array(0), array_keys($modx->sjscripts))) + 1;
			if ($useThisVer){
				//Запоминаем пустую строку подключения в нужный массив, т.к. подключаем мануально.
				$modx->sjscripts[$pos] = '';
			}
		//Если надо подключить перед </body>, то всё по аналогии, только массив другой
		}else{
			$pos = isset($overwritepos) ? $overwritepos : max(array_merge(array(0), array_keys($modx->jscripts))) + 1;
			if ($useThisVer){
				$modx->jscripts[$pos] = '';
			}
		}
	
		//Запомним новоиспечённый скрипт для последующих обработок
		$modx->loadedjscripts[$name]['version'] = $version;
		$modx->loadedjscripts[$name]['startup'] = $startup;
		$modx->loadedjscripts[$name]['pos'] = $pos;
	
		return array(
				'name' => $name,
				'version' => $version,
				'useThisVer' => $useThisVer,
				'startup' => $startup,
				'pos' => $pos
		);
	}
	
	/**
	 * removeDir
	 * @version 1.0 (2013-03-09)
	 *
	 * Удаляет папку со всеми вложенными файлами и папками (рекурсивно).
	 *
	 * @param $dir {string} - Адрес папки. @required
	 *
	 * @return {boolean}
	 */
	public static function removeDir($dir){
		//Если не существует, ок
		if (!file_exists($dir)){return true;}
	
		//Получаем файлы в директории
		$files = array_diff(scandir($dir), array('.','..'));
	
		foreach ($files as $file){
			//Если это папка, обработаем её
			if (is_dir("$dir/$file")){
				self::removeDir("$dir/$file");
			}else{
				unlink("$dir/$file");
			}
		}
	
		return rmdir($dir);
	}

	/**
	 * generateRandomString
	 * @version 1.0 (2012-02-13)
	 *
	 * Генерация строки заданного размера.
	 *
	 * @param $length {integer} - Размер строки на выходе.
	 * @param $chars {string} - Символы для генерации.
	 *
	 * @return {string}
	 */
	public static function generateRandomString($length = 8, $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'){
		$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
		$numChars = strlen($chars);
		$string = '';
		for ($i = 0; $i < $length; $i++){
			$string .= substr($chars, rand(1, $numChars) - 1, 1);
		}
	
		return $string;
	}
}

//Решение спорное, но делать Синглтон очень не хотелось
ddTools::$tables = array(
	'site_content' => $modx->getFullTableName('site_content'),
	'site_tmplvars' => $modx->getFullTableName('site_tmplvars'),
	'site_tmplvar_templates' => $modx->getFullTableName('site_tmplvar_templates'),
	'site_tmplvar_contentvalues' => $modx->getFullTableName('site_tmplvar_contentvalues'),
	'document_groups' => $modx->getFullTableName('document_groups')
);
}
?>
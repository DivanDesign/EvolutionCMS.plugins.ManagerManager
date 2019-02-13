<?php
/**
 * makeArray
 * @version 1.1.1 (2018-11-10)
 * 
 * @desc Makes a commas separated list into an array.
 * 
 * @param $csv {array|string_commaSeparated} — List. @required
 * 
 * @return {array}
 */
function makeArray($csv){
	$result = [];
	
	// If we've already been supplied an array, just return it
	if (is_array($csv)){
		$result = $csv;
	}else{
		// Else if we have an not empty string
		if (trim($csv) != ''){
			// Otherwise, turn it into an array
			$result = explode(
				',',
				$csv
			);
			// Remove any whitespace
			array_walk(
				$result,
				create_function(
					'$v, $k',
					'return trim($v);'
				)
			);
		}
	}
	
	return $result;
}

/**
 * jsSafe
 * @version 1.0.2 (2018-11-10)
 * 
 * @desc Make an output JS safe.
 * 
 * @param $str {string} — String to prepare. @required
 * 
 * @return {string}
 */
function jsSafe($str){
	global $modx;
	
	return htmlentities(
		$str,
		ENT_QUOTES,
		$modx->getConfig('modx_charset'),
		false
	);
}

/**
 * tplUseTvs
 * @version 1.3.1 (2016-11-10)
 * 
 * @desc Does the specified template use the specified TVs?
 * 
 * @param $templateId {integer} — Template ID.
 * @param $tvs {string_commaSeparated|array} — TV names. Default: ''.
 * @param $types {string_commaSeparated|array} — TV types, e.g. image. Default: ''.
 * @param $dbFields {somma separated string} — DB fields which get from 'site_tmplvars' table. Default: 'id'.
 * @param $resultKey {string|false} — DB field, which values are keys of result array. Keys of result array will be numbered if the parameter equals false. Default: false.
 * 
 * @return {array|false}
 */
function tplUseTvs(
	$templateId,
	$tvs = '',
	$types = '',
	$dbFields = 'id',
	$resultKey = false
){
	$result = false;
	
	// If it's a blank template, it can't have TVs
	if($templateId != 0){
		global $modx;
		
		//Make the TVs, field types and DB fields into an array
		$fields = makeArray($tvs);
		$types = makeArray($types);
		$dbFields = makeArray($dbFields);
		
		//Add the result key in DB fields if return of an associative array is required & result key is absent there
		if (
			$resultKey !== false &&
			!in_array(
				$resultKey,
				$dbFields
			)
		){
			$dbFields[] = $resultKey;
		}
		
		$where = [];
		//Are we looking at specific TVs, or all?
		if (!empty($fields)){$where[] = 'tvs.name IN '.makeSqlList($fields);}
		
		//Are we looking at specific TV types, or all?
		if (!empty($types)){$where[] = 'type IN '.makeSqlList($types);}
		
		//Make the SQL for this template
		if (!empty($templateId)){$where[] = 'rel.templateid = '.$templateId;}
		
		//Execute the SQL query
		$dbResult = $modx->db->select(
			implode(
				',',
				$dbFields
			),
			ddTools::$tables['site_tmplvars'].' AS tvs LEFT JOIN '.ddTools::$tables['site_tmplvar_templates'].' AS rel ON rel.tmplvarid = tvs.id',
			implode(
				' AND ',
				$where
			)
		);
		
		$recordCount = $modx->db->getRecordCount($dbResult);
		
		// If we have results, return them, otherwise return false
		if ($recordCount > 0){
			//If return of an associative array is required
			if ($resultKey !== false){
				$rsArray = [];
				
				while ($row = $modx->db->getRow($dbResult)){
					//If result contains the result key
					if (array_key_exists(
						$resultKey,
						$row
					)){
						$rsArray[$row[$resultKey]] = $row;
					}else{
						$rsArray[] = $row;
					}
				}
				
				$result = $rsArray;
			}else{
				$result = $modx->db->makeArray($dbResult);
			}
		}
	}
	
	return $result;
}

/**
 * getTplMatchedFields
 * @version 1.1.1 (2016-11-10)
 * 
 * @desc Returns the array that contains only those of passed fields/TVs which are used in the template.
 * 
 * @param $fields {string_commaSeparated|array} — Document fields or TVs names. @required
 * @param $tvTypes {string_commaSeparated|array} — TVs types, e.g. image, text. Default: ''.
 * @param $tempaleId {integer} — Template ID. Default: $mm_current_page['template'].
 * 
 * @return {array|false}
 */
function getTplMatchedFields(
	$fields,
	$tvTypes = '',
	$tempaleId = ''
){
	$result = false;
	
	$fields = makeArray($fields);
	
	//$fields is required
	if (!empty($fields)){
		global $mm_fields;
		
		//Template of current document by default
		if (empty($tempaleId)){
			global $mm_current_page;
			
			$tempaleId = $mm_current_page['template'];
		}
		
		$docFields = [];
		
		//Only document fields
		foreach ($fields as $field){
			if (
				isset($mm_fields[$field]) &&
				!$mm_fields[$field]['tv']
			){
				$docFields[] = $field;
			}
		}
		
		//If $fields contains no TVs
		if (count($docFields) == count($fields)){
			$result = $docFields;
		}else{
			//Get specified TVs for this template
			$fields = tplUseTvs(
				$tempaleId,
				$fields,
				$tvTypes,
				'name',
				'name'
			);
			
			//If there are no appropriate TVs
			if ($fields == false){
				if (!empty($docFields)){
					$result = $docFields;
				}
			}else{
				$result = array_merge(
					array_keys($fields),
					$docFields
				);
			}
		}
	}
	
	return $result;
}

/**
 * makeSqlList
 * @version 1.0.4 (2016-11-10)
 * 
 * @desc Create a MySQL-safe list from an array.
 * 
 * @param $fieldsArray {array_associative|string_commaSeparated} — Values, key — name, value — value. @required
 * 
 * @return {string}
 */
function makeSqlList($fieldsArray){
	global $modx;
	
	$fieldsArray = makeArray($fieldsArray);
	
	foreach(
		$fieldsArray as
		$name => $value
	){
		//if (substr($value, 0, 2) == 'tv'){$value = substr($value, 2);}
		// Escape them for MySQL
		$fieldsArray[$name] = "'".$modx->db->escape($value)."'";
	}
	
	return " (".implode(
		',',
		$fieldsArray
	).") ";
}

/**
 * prepareTabId
 * @version 1.0.1 (2016-11-10)
 * 
 * @desc Prepare id of a tab.
 * 
 * @param $id {string} — Tab id. Default: 'general'.
 * 
 * @return {string} — Tab id.
 */
function prepareTabId($id){
	//General tab by default
	if ($id == ''){$id = 'general';}
	
	//If it's one of the default tabs, we need to get the capitalisation right
	switch ($id){
		case 'general':
		case 'settings':
		case 'access':
		// version 1.0.0 only, removed in 1.0.1
		case 'meta':
			$id = ucfirst($id);
		break;
	}
	
	return 'tab'.$id;
}

/**
 * prepareSectionId
 * @version 1.1 (2014-05-25)
 * 
 * @desc Prepare id of a section.
 * 
 * @param $id {string} — Section id.
 * 
 * @return {string} — Section id.
 */
function prepareSectionId($id){
	switch ($id){
		case 'content':
			$id = 'content';
		break;
		
		case 'tvs':
			$id = 'tv';
		break;
		
		default:
			$id = 'ddSection'.$id;
		break;
	}
	
	return $id;
}
?>
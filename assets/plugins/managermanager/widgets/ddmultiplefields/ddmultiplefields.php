<?php
/**
 * mm_ddMultipleFields
 * @version 4.7 (2016-11-19)
 * 
 * @desc Widget for plugin ManagerManager that allows you to add any number of fields values (TV) in one document (values is written as one with using separator symbols). For example: a few images.
 * 
 * @uses PHP >= 5.4.
 * @uses MODXEvo.plugin.ManagerManager >= 0.7.
 * 
 * @param $params {array_associative|stdClass} — The object of params. @required
 * @param $params['fields'] {string_commaSeparated} — Names of TV for which the widget is applying. @required
 * @param $params['columns'] {array} — Columns. Default: [ ['type' => 'text'] ].
 * @param $params['columns'][i] {array_associative} — Column. @required
 * @param $params['columns'][i]['type'] {'text'|'textarea'|'richtext'|'date'|'id'|'select'} — Column type: “text” — text type column; “textarea” — multiple lines column; “richtext” — column with rich text editor; “date” — date column; “id” — hidden column containing unique id; “select” — list with options (see “$params['columns'][i]['data']”). @required
 * @param $params['columns'][i]['title'] {string} — Column title. Default: ''.
 * @param $params['columns'][i]['width'] {integer} — Column width. Default: 180.
 * @param $params['columns'][i]['data'] {string_JSON_array} — Valid values (JSON array for the “select” type). Default: —.
 * if $params['columns'][i]['type'] == select
 * @param $params['columns'][i]['data'][i] {array_associative} — Item. @required
 * @param $params['columns'][i]['data'][i]['value'] {integer} — Value. @required
 * @param $params['columns'][i]['data'][i]['title'] {integer} — Value. Default: $params['columns'][i]['data'][i]['value'].
 * e. g. '[{"value": "Some value", "title": "Optional title"}, {"value": "Some value 2"}]' 
 * @param $params['minRowsNumber'] {integer} — Minimum number of strings. Default: 0.
 * @param $params['maxRowsNumber'] {integer} — Maximum number of strings. Default: 0 (без лимита).
 * @param $params['rowDelimiter'] {string} — Strings separator. Default: '||'.
 * @param $params['colDelimiter'] {string} — Columns separator. Default: '::'.
 * @param $params['previewWidth'] {integer} — Maximum value of image preview width. Default: 300.
 * @param $params['previewHeight'] {integer} — Maximum value of image preview height. Default: 100.
 * @param $params['roles'] {string_commaSeparated} — The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $params['templates'] {string_commaSeparated} — Templates IDs for which the widget is applying (empty value means the widget is applying to all templates). Default: ''.
 * 
 * @event OnDocFormPrerender
 * @event OnDocFormRender
 * 
 * @link http://code.divandesign.biz/modx/mm_ddmultiplefields/4.7
 * 
 * @copyright 2012–2016 DivanDesign {@link http://www.DivanDesign.biz }
 */

function mm_ddMultipleFields($params){
	//For backward compatibility
	if (
		!is_array($params) &&
		!is_object($params)
	){
		//Convert ordered list of params to named
		$params = ddTools::orderedParamsToNamed([
			'paramsList' => func_get_args(),
			'compliance' => [
				'fields',
				'roles',
				'templates',
				'columns',
				'columnsTitles',
				'columnsWidth',
				'rowDelimiter',
				'colDelimiter',
				'previewWidth',
				'previewHeight',
				'minRowsNumber',
				'maxRowsNumber',
				'columnsData'
			]
		]);
	}
	
	//Defaults
	$params = (object) array_merge([
		'fields' => '',
		'columns' => [
			[
				'type' => 'text'
			]
		],
		'minRowsNumber' => 0,
		'maxRowsNumber' => 0,
		'rowDelimiter' => '||',
		'colDelimiter' => '::',
		'previewWidth' => 300,
		'previewHeight' => 100,
		'roles' => '',
		'templates' => '',
		//Deprecated
		'columnsTitles' => '',
		'columnsWidth' => '180',
		'columnsData' => ''
	], (array) $params);
	
	if (!useThisRule($params->roles, $params->templates)){return;}
	
	global $modx;
	$e = &$modx->Event;
	
	$output = '';
	
	$site = $modx->config['site_url'];
	$widgetDir = $site.'assets/plugins/managermanager/widgets/ddmultiplefields/';
	
	if ($e->name == 'OnDocFormPrerender'){
		global $_lang;
		
		$output .= includeJsCss($site.'assets/plugins/managermanager/js/jquery-ui-1.10.3.min.js', 'html', 'jquery-ui', '1.10.3');
		$output .= includeJsCss($widgetDir.'ddmultiplefields.css', 'html');
		$output .= includeJsCss($widgetDir.'jQuery.ddMM.mm_ddMultipleFields.js', 'html', 'jQuery.ddMM.mm_ddMultipleFields', '2.1.2');
		
		$output .= includeJsCss('$j.ddMM.lang.edit = "'.$_lang['edit'].'";', 'html', 'mm_ddMultipleFields_plain', '1', true, 'js');
		
		$e->output($output);
	}else if ($e->name == 'OnDocFormRender'){
		global $mm_current_page;
		
		$params->fields = tplUseTvs($mm_current_page['template'], $params->fields, 'image,file,text,email,textarea', 'type,name');
		if ($params->fields == false){return;}
		
		//Колонки, заданные как «field», теперь их нужно будет заменить на «image» и «file» соответственно
		$columns_fieldKeyIndex = [];
		
		//Old columns format backward compatibility
		if (!is_array($params->columns)){
			$columnsTemp = makeArray($params->columns);
			$params->columnsTitles = makeArray($params->columnsTitles);
			$params->columnsWidth = makeArray($params->columnsWidth);
			//Prepare data
			if ($params->columnsData){
				$columnsDataTemp = explode('||', $params->columnsData);
				$params->columnsData = [];
				
				foreach ($columnsDataTemp as $dataItem){
					//Евалим знение и записываем результат или исходное значени
					$eval = @eval($dataItem);
					$dataItem = $eval ? json_encode($eval) : $dataItem;
					
					//For backward compatibility '[{"Value 1", "Title 1"}, {"Value 2"}]' → '[{"value" => "Value 1", "title" => "Title 1"}, {"value" => "Value 2"}]'
					if ($dataItem != ''){
						$dataItemTemp = json_decode($dataItem, true);
						$dataItem = [];
						
						//Build list
						foreach ($dataItemTemp as $dataItem_item_index => $dataItem_item_value){
							$dataItem[$dataItem_item_index] = [];
							$dataItem[$dataItem_item_index]['value'] = $dataItem_item_value[0];
							//Title
							if (isset($dataItem_item_value[1])){
								$dataItem[$dataItem_item_index]['title'] = $dataItem_item_value[1];
							}
						}
						
						$dataItem = json_encode($dataItem);
					}
					
					$params->columnsData[] = $dataItem;
				}
			}else{
				$params->columnsData = [];
			}
			
			$params->columns = [];
			
			foreach ($columnsTemp as $index => $value){
				//“field” value compatibility
				if ($value == 'field'){
					$columns_fieldKeyIndex[] = $index;
				}
				
				$value = ['type' => $value];
				
				if (isset($params->columnsTitles[$index])){
					$value['title'] = $params->columnsTitles[$index];
				}
				if (isset($params->columnsWidth[$index])){
					$value['width'] = $params->columnsWidth[$index];
				}
				if (isset($params->columnsData[$index])){
					$value['data'] = $params->columnsData[$index];
				}
				
				$params->columns[] = $value;
			}
		}
		
		//Default value for columns
		if (empty($params->columns)){
			$params->columns = [
				['type' => 'text']
			];
		}
		
		//Стиль превью изображения
		$previewStyle = 'max-width:'.$params->previewWidth.'px; max-height:'.$params->previewHeight.'px; margin: 4px 0; cursor: pointer;';
		
		$output .= '//---------- mm_ddMultipleFields :: Begin -----'.PHP_EOL;
		
		foreach ($params->fields as $field){
			//For backward compatibility
			if (
				$field['type'] == 'image' ||
				$field['type'] == 'file'
			){
				//Проходимся по всем колонкам «field» и заменяем на соответствующий тип
				foreach($columns_fieldKeyIndex as $index){
					$params->columns[$index]['type'] = $field['type'];
				}
			}
			
			$output .=
'
$j.ddMM.fields.'.$field['name'].'.$elem.mm_ddMultipleFields({
	rowDelimiter: "'.$params->rowDelimiter.'",
	colDelimiter: "'.$params->colDelimiter.'",
	columns: '.json_encode($params->columns, JSON_UNESCAPED_UNICODE).',
	previewStyle: "'.$previewStyle.'",
	minRowsNumber: "'.$params->minRowsNumber.'",
	maxRowsNumber: "'.$params->maxRowsNumber.'"
});
';
		}
		
		//Поругаемся
		if (!empty($columns_fieldKeyIndex)){
			$modx->logEvent(1, 2, '<p>You are currently using the deprecated column type “field”. Please, replace it with “image” or “file” respectively.</p><p>The plugin has been called in the document with template id '.$mm_current_page['template'].'.</p>', 'ManagerManager: mm_ddMultipleFields');
		}
		
		$output .= '//---------- mm_ddMultipleFields :: End -----'.PHP_EOL;
		
		$e->output($output);
	}
}
?>
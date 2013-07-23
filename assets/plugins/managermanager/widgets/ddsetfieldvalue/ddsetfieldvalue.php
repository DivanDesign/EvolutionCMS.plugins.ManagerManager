<?php
/** 
 * ddSetFieldValue
 * @version 1.0.4 (2013-02-22)
 * 
 * Жёстко выставляет необходимые значения заданному полю
 * 
 * @uses ManagerManager plugin 0.4.
 * 
 * @todo Основан на mm_default
 * 
 * @param field {string} - Имя поля, для которого необходимо установить значение.
 * @param value {string} - Значение, которое необходимо установить.
 * @param roles {comma separated string} - Id ролей. По умолчанию: для всех ролей.
 * @param templates {comma separated string} - Id шаблонов. По умолчанию: для всех шаблонов.
 * 
 * @link http://code.divandesign.biz/modx/mm_ddsetfieldvalue/1.0.4
 * 
 * @copyright 2013, DivanDesign
 * http://www.DivanDesign.biz
 */

function mm_ddSetFieldValue($field, $value = '', $roles = '', $templates = ''){
	global $modx, $content, $mm_fields;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates)){
		
		$output = " // ----------- mm_ddSetFieldValue :: Begin -------------- \n";
		
		//Подбираем правильный формат даты в соответствии с конфигурацией
		switch($modx->config['datetime_format']){
			case 'dd-mm-YYYY':
				$date_format = 'd-m-Y';
			break;
			case 'mm/dd/YYYY':
				$date_format = 'm/d/Y';
			break;
			case 'YYYY/mm/dd':
				$date_format = 'Y/m/d';
			break;
		}
		
		//Смотрим, что за поле надо изменить
		switch ($field){
			//Дата публикации
			case 'pub_date':
				$value = ($value == '') ? date("$date_format H:i:s") : $value;
				$output .= '$j("input[name=pub_date]").val("'.jsSafe($value).'"); '."\n";
			break;
			
			//Дата отмены публикации
			case 'unpub_date':
				$value = ($value=='') ? date("$date_format H:i:s") : $value;
				$output .= '$j("input[name=unpub_date]").val("'.jsSafe($value).'"); '."\n";
			break;
			
			//Признак публикации
			case 'published':
				if ($value == '1'){
					$output .= '$j("input[name=publishedcheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '$j("input[name=publishedcheck]").removeAttr("checked"); '."\n";
				}
				
				$output .= '$j("input[name=published]").val("'.$value.'"); '."\n";
			break;
			
			//Признак отображения в меню
			case 'show_in_menu':
				if ($value == '1'){
					$output .= '$j("input[name=hidemenucheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '$j("input[name=hidemenucheck]").removeAttr("checked"); '."\n";
				}
								
				$output .= '$j("input[name=hidemenu]").val("'.(($value == '1') ? '0' : '1').'"); '."\n"; // Note these are reversed from what you'd think
			break;
			
			//Признак скрытия из меню (аналогично show_in_menu, только наоборот)
			case 'hide_menu':
				if ($value == '0'){
					$output .= '$j("input[name=hidemenucheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '1';
					$output .= '$j("input[name=hidemenucheck]").removeAttr("checked"); '."\n";
				}
				
				$output .= '$j("input[name=hidemenu]").val("'.$value.'"); '."\n";
			break;
					
			//Признак доступности для поиска
			case 'searchable':
				if ($value == '1'){
					$output .= '$j("input[name=searchablecheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '$j("input[name=searchablecheck]").removeAttr("checked"); '."\n";
				}
				
				$output .= '$j("input[name=searchable]").val("'.$value.'"); '."\n";
			break;
			
			//Признак кэширования
			case 'cacheable':
				if ($value == '1'){
					$output .= '$j("input[name=cacheablecheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '$j("input[name=cacheablecheck]").removeAttr("checked"); '."\n";
				}
				
				$output .= '$j("input[name=cacheable]").val("'.$value.'"); '."\n";
			break;
			
			//Признак очистки кэша
			case 'clear_cache':
				if ($value == '1'){
					$output .= '$j("input[name=syncsitecheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '$j("input[name=syncsitecheck]").removeAttr("checked"); '."\n";
				}

				$output .= '$j("input[name=syncsite]").val("'.$value.'"); '."\n";
			break;

			//Признак папки
			case 'is_folder':
				if ($value == '1'){
					$output .= '$j("input[name=isfoldercheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '$j("input[name=isfoldercheck]").removeAttr("checked"); '."\n";
				}
			break;

			//Признак использованшия визуального редактора
			case 'is_richtext':
				$output .= 'var originalRichtextValue = $j("#which_editor:first").val(); '."\n";
				
				if ($value == '1'){
					$output .= '$j("input[name=richtextcheck]").attr("checked", "checked"); '."\n";
				}else{
					$value = '0';
					$output .= '
								$j("input[name=richtextcheck]").removeAttr("checked");
								// Make the RTE displayed match the default value that has been set here
								if (originalRichtextValue != "none"){
									$j("#which_editor").val("none");
									changeRTE();
								}
										
								';
					$output .= ''."\n";
				}

				$output .= '$j("input[name=richtext]").val("'.$value.'"); '."\n";
			break;
			
			//Признак логирования
			case 'log':
				//Note these are reversed from what you'd think
				$value = ($value) ? '0' : '1';
				
				if ($value == '1'){
					$output .= '$j("input[name=donthitcheck]").attr("checked", "checked"); '."\n";
				}else{
					$output .= '$j("input[name=donthitcheck]").removeAttr("checked"); '."\n";
				}
				
				$output .= '$j("input[name=donthit]").val("'.$value.'"); '."\n";
			break;
			
			//Тип содержимого
			case 'content_type':
				$output .= '$j("select[name=contentType]").val("'.$value.'");' . "\n";
			break;
			
			//Аттрибуты ссылки
			case 'link_attributes':
				//Обработаем кавычки
				$value = str_replace(array("'", '"'), '\"', $value);
				$output .= '$j("input[name=link_attributes]").val("'.$value.'"); '."\n";
			break;
			
			//TV
			default:
				// Which template is this page using?
				if (isset($content['template'])){
					$page_template = $content['template'];
				}else{
					// If no content is set, it's likely we're adding a new page at top level.
					// So use the site default template. This may need some work as it might interfere with a default template set by MM?
					$page_template = $modx->config['default_template'];
				}
				
				$tvsMas = tplUseTvs($page_template, $field);
				
				if ($tvsMas){
					$output .= '$j("#tv'.$tvsMas[0]['id'].'").val("'.$value.'");' . "\n";
				}
			break;
		}
		
		$output .= "\n// ---------------- mm_ddSetFieldValue :: End -------------";
		
		$e->output($output . "\n");
	} 
}
?>
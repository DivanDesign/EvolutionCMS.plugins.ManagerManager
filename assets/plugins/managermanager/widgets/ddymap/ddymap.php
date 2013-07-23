<?php
/**
 * mm_ddYMap
 * @version 1.3.1 (2013-06-08)
 * 
 * Позволяет интегрировать карту Yandex Maps для получения координат.
 * 
 * @uses ManagerManager plugin 0.5.
 * 
 * @param $tvs {string; comma separated string} - Имя TV, для которой необходимо применить виджет.
 * @param $roles {string; comma separated string} - Роли, для которых необходимо применить виждет, пустое значение — все роли. По умолчанию: ''.
 * @param $templates {string; comma separated string} - Шаблоны, для которых необходимо применить виджет, пустое значение — все шаблоны. По умолчанию: ''.
 * @param $w {string; integer} - Ширина контейнера с картой. По умолчанию: 'auto'.
 * @param $h {integer} - Высота контейнера с картой. По умолчанию: 400.
 * @param $hideField {boolean} - Необходимо ли скрывать оригинальное текстовое поле с координатами. По умолчанию: true.
 * 
 * @link http://code.divandesign.biz/modx/mm_ddymap/1.3.1
 * 
 * @copyright 2013, DivanDesign
 * http://www.DivanDesign.biz
 */

function mm_ddYMap($tvs, $roles = '', $templates = '', $w = 'auto', $h = '400', $hideField = true){
	global $modx, $content, $mm_fields;
	$e = &$modx->Event;
	
	if ($e->name == 'OnDocFormRender' && useThisRule($roles, $templates)){
		$output = '';
		
		// if we've been supplied with a string, convert it into an array 
		$tvs = makeArray($tvs);
		
		// Which template is this page using?
		if (isset($content['template'])){
			$page_template = $content['template'];
		}else{
			// If no content is set, it's likely we're adding a new page at top level.
			// So use the site default template. This may need some work as it might interfere with a default template set by MM?
			$page_template = $modx->config['default_template'];
		}
		
		$tvs = tplUseTvs($page_template, $tvs);
		if ($tvs == false){
			return;
		}
		
		$style = 'width: '.$w.'px; height: '.$h.'px; position: relative; border: 1px solid #c3c3c3;';
		// We always put a JS comment, which makes debugging much easier
		$output .= "//  -------------- mm_ddYMap :: Begin ------------- \n";
		
		// We have functions to include JS or CSS external files you might need
		// The standard ModX API methods don't work here
		//$output .= includeJs('http://maps.google.com/maps/api/js?sensor=false');
		
		// Do something for each of the fields supplied
		foreach ($tvs as $tv){
			// If it's a TV, we may need to map the field name, to what it's ID is.
			// This can be obtained from the mm_fields array
			$tv_id = 'tv'.$tv['id'];
			$output .= '
//TV с координатами
var coordFieldId = "'.$tv_id.'", $coordinatesField = $j("#" + coordFieldId);
//Координаты
var ddLatLng = $coordinatesField.val();

//Родитель
var $coordFieldParent = $coordinatesField.parents("tr:first");
//Запоминаем название поля
var sectionName = $coordFieldParent.find(".warning").text();

//Скрываем родителя и разделитель
$coordFieldParent.hide().prev("tr").hide();

//Контейнер для карты
var $sectionConteiner = $j("<div class=\"sectionHeader\">"+sectionName+"</div><div class=\"sectionBody tmplvars\"><div id=\"ddYMap" + coordFieldId + "\" style=\"'.$style.'\"></div></div>"),
	$YMap = $sectionConteiner.find("#ddYMap" + coordFieldId);
//Добавляем контейнер
$coordinatesField.parents(".tab-page:first").append($sectionConteiner);

//Если скрывать не надо, засовываем перед картой
if (!'.intval($hideField).'){
 	$coordinatesField.insertBefore($YMap);
}

//Если координаты не заданны, то задаём дефолт
if ($j.trim(ddLatLng) == ""){
	ddLatLng = "55.17725339420589,61.29035648102616";
}

ddLatLng = ddLatLng.split(",");

window.ddYmap_init = function(){
	//Создаём карту
	var map = new ymaps.Map("ddYMap" + coordFieldId, {
	 			center: [ddLatLng[0], ddLatLng[1]],
				zoom: 15,
			}
		),
		//Контрол поиска
		serachControl = new ymaps.control.SearchControl({useMapBounds: true, noPlacemark: true, width: 400}),
		//Флаг сабмита поиска
		submitSerach = false,
		//Создаём метку
		marker = new ymaps.Placemark(
			[ddLatLng[0], ddLatLng[1]],
			{},
			{draggable: true}
		);
	
	//При сабмите поиска
	serachControl.events.add("submit", function(){
		//Укажем это
		submitSerach = true;
	});
	
	//При выборе результата поиска
	serachControl.events.add("resultselect", function(event){
		var coords = event.originalEvent.target.getResultsArray()[0].geometry.getCoordinates();
		
		//Переместим куда надо маркер
		marker.geometry.setCoordinates(coords);
		
		$coordinatesField.val(coords[0] + "," + coords[1]);
	});
	
	//Самбмит главной формы
	$j("#mutate").on("submit", function(){
		//Если до этого был сабмит поиска
		if (submitSerach){
			//Сбросим защёлку
			submitSerach = false;
			//Выкидываем осечку
			return false;
		}
	});
	
	//Добавляем контролы
	map.controls
		.add("zoomControl")
		.add("typeSelector")
		.add("scaleLine")
		.add("mapTools")
		.add(serachControl);
	
	//При клике по карте меняем координаты метки
	map.events.add("click", function(event){
		var coords = event.get("coordPosition");
		
		marker.geometry.setCoordinates([coords[0], coords[1]]);
		$coordinatesField.val(coords[0] + "," + coords[1]);
	});
	
	//Перетаскивание метки
	marker.events.add("dragend", function(event){
		var markerCoord = marker.geometry.getCoordinates();
		
		$coordinatesField.val(markerCoord[0] + "," + markerCoord[1]);
	});
	
	//Добавляем метку на карту
	map.geoObjects.add(marker);
};

//Подключаем карту
$j("head").append("<script src=\"http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU&onload=ddYmap_init\" type=\"text/javascript\"></scr"+"ipt>");
';
		}
		$output .= "//  -------------- mm_ddYMap :: End ------------- \n";
		
		$e->output($output . "\n");	// Send the output to the browser
	}
}
?>
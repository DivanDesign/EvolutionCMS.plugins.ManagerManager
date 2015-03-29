/**
 * jQuery ddMM.mm_ddMultipleFields Plugin
 * @version 1.2 (2014-10-23)
 * 
 * @uses jQuery 1.9.1
 * @uses $.ddTools 1.8.1
 * @uses $.ddMM 1.1.2
 * 
 * @copyright 2014, DivanDesign
 * http://www.DivanDesign.biz
 */

(function($){
$.ddMM.mm_ddMultipleFields = {
	defaults: {
		//Разделитель строк
		splY: '||',
		//Разделитель колонок
		splX: '::',
		//Колонки
		coloumns: 'field',
		//Заголовки колонок
		coloumnsTitle: '',
		//Данные колонок
		coloumnsData: '',
		//Ширины колонок
		colWidth: '180',
		//Стиль превьюшек
		imageStyle: '',
		//Минимальное количество строк
		minRow: 0,
		//Максимальное количество строк
		maxRow: 0
	},
//	Все экземпляры (TV). Структура: {
//		'id': {
//			currentField,
//			$addButton,
//			+Всё, что передано параметрально (см. this.defaults)
//		}
//	}
	instances: {},
	richtextWindow: null,
	//Обновляет мульти-поле, берёт значение из оригинального поля
	updateField: function(id){
		var _inst = this.instances[id];
		//Если есть текущее поле
		if (_inst.currentField){
			//Задаём значение текущему полю (берём у оригинального поля), запускаем событие изменения
			_inst.currentField.val($.trim($('#' + id).val())).trigger('change.ddEvents');
			//Забываем текущее поле (ибо уже обработали)
			_inst.currentField = false;
		}
	},
	//Обновляет оригинальное поле TV, собирая данные по мульти-полям
	updateTv: function(id){
		var _inst = this.instances[id],
			masRows = new Array();
		
		//Перебираем все строки
		$('#' + id + 'ddMultipleField .ddFieldBlock').each(function(){
			var $this = $(this),
				masCol = new Array(),
				id_field = {
					index: false,
					val: false,
					$field: false
				};
			
			//Перебираем все колонки, закидываем значения в массив
			$this.find('.ddField').each(function(index){
				//Если поле с типом id TODO: Какой смысл по всех этих манипуляциях?
				if (_inst.coloumns[index] == 'id'){
					id_field.index = index;
					id_field.$field = $(this);
					
					//Сохраняем значение поля
					id_field.val = id_field.$field.val();
					//Если значение пустое, то генерим
					if (id_field.val == ''){id_field.val = (new Date).getTime();}
					
					//Обнуляем значение
					id_field.$field.val('');
				}
				
				//Если колонка типа richtext
				if (_inst.coloumns[index] == 'richtext'){
					//Собираем значения строки в массив
					masCol.push($.trim($(this).html()));
				}else{
					//Собираем значения строки в массив
					masCol.push($.trim($(this).val()));
				}
			});
			
			//Склеиваем значения колонок через разделитель
			var col = masCol.join(_inst.splX);
			
			//Если значение было хоть в одной колонке из всех в этой строке
			if (col.length != ((masCol.length - 1) * _inst.splX.length)){
				//Проверяем было ли поле с id
				if (id_field.index !== false){
					//Записываем значение в поле
					id_field.$field.val(id_field.val);
					//Обновляем значение в массиве
					masCol[id_field.index] = id_field.val;
					//Пересобираем строку
					col = masCol.join(_inst.splX);
				}
				
				masRows.push(col);
			}
		});
		
		//Записываем значение в оригинальное поле
		$('#' + id).val(masRows.join(_inst.splY));
	},
	//Инициализация
	//Принимает id оригинального поля, его значения и родителя поля
	init: function(id, val, target){
		var _this = this,
			_inst = _this.instances[id],
			//Блок для общих управляющих элементов
			$ddMultipleFieldControl = $('<div class="ddMultipleField Control" id="' + id + 'ddMultipleFieldControl"></div>').appendTo(target),
			//Делаем таблицу мульти-полей, вешаем на таблицу функцию обновления оригинального поля
			$ddMultipleField = $('<table class="ddMultipleField" id="' + id + 'ddMultipleField"></table>').appendTo(target)/*.on('change.ddEvents', function(){_this.updateTv(id);})*/;

		//Кнопка очистки
	 	$('<input type="button" value="×" title="'+$.ddMM.lang.confirm_delete_record+'"/>').appendTo($ddMultipleFieldControl).on("click",function(e){
		 e.preventDefault();
		 $(".ddDeleteButton",$ddMultipleField).click();
		});

		//Если есть хоть один заголовок
		if (_inst.coloumnsTitle.length > 0){
			var text = '';
			
			//Создадим шапку (перебираем именно колонки!)
			$.each(_inst.coloumns, function(key, val){
				//Если это колонка с id
				if (val == 'id'){
					//Вставим пустое значение в массив с заголовками
					_inst.coloumnsTitle.splice(key, 0, '');
					
					text += '<th style="display: none;"></th>';
				}else{
					//Если такого значения нет — сделаем
					if (!_inst.coloumnsTitle[key]){
						_inst.coloumnsTitle[key] = '';
					}
					
					text += '<th>' + (_inst.coloumnsTitle[key]) + '</th>';
				}
			});
			
			$('<tr><th></th>' + text + '<th></th></tr>').appendTo($ddMultipleField);
		}
		
		//Делаем новые мульти-поля
		var arr = val.split(_inst.splY);

		//Проверяем на максимальное и минимальное количество строк
		if (_inst.maxRow && arr.length > _inst.maxRow){
			arr.length = _inst.maxRow;
		}else if (_inst.minRow && arr.length < _inst.minRow){
			arr.length = _inst.minRow;
		}
		
		//Создаём кнопку +
		_inst.$addButton = _this.makeAddButton(id);
		
		for (var i = 0, len = arr.length; i < len; i++){
			//В случае, если размер массива был увеличен по minRow, значением будет undefined, вот и замечательно - то что нужно
			_this.makeFieldRow(id, arr[i]);
		}
		
		//Втыкаем кнопку + куда надо
		_this.moveAddButton(id);
		
		//Добавляем возможность перетаскивания
		$ddMultipleField.sortable({
			items: 'tr:has(td)',
			handle: '.ddSortHandle',
			cursor: 'n-resize',
			axis: 'y',
			placeholder: 'ui-state-highlight',
			start: function(event, ui){
				ui.placeholder.html('<td colspan="' + (_inst.coloumns.length + 2) + '"><div></div></td>').find('div').css('height', ui.item.height());
			},
			stop: function(event, ui){
				//Находим родителя таблицы, вызываем функцию обновления поля
				_this.moveAddButton(id);
			}
		});
	 	// Возможность пакетного заполнения
		var batchFields = ["image","file"];
		for (var k=0;k < _inst.coloumns.length; k++) 
			if ($.inArray(_inst.coloumns[k],batchFields)!=-1) {
				_inst.batch={"type":this.instances[id].coloumns[k],"col":k};
				//Пока только для первого найденного
				break;
			}
		if (_inst.batch) {
		 var BrowseServerMultiple = function (ctrl,type) {
		  type = (type!=('image'||'file')?"image":type)+"s";
		  lastImageCtrl = ctrl;
		  var w = screen.width * 0.5;
		  var h = screen.height * 0.5;
		  OpenServerBrowser('media/browser/mcpuk/browse.php?opener=ddMultipleField&type='+type, w, h);
		 };
			$("<input type='button' title='' value='Пакетное заполнение' />").appendTo($ddMultipleFieldControl).click(function(e){
				e.preventDefault();
				window.KCFinder = {
					callBackMultiple: function (files) {
						window.KCFinder = null;
						for (var i = 0; i < files.length; i++) {
							var arr = [];
							arr.length = _inst.coloumns.length;
							arr[_inst.batch.col] = files[i];
							_this.makeFieldRow(id, arr.join(_inst.splX));
						}
						_this.moveAddButton(id);
						var checkEmpty = "";
						$(".ddFieldBlock:first input.ddField", $ddMultipleField).each(function () {
							checkEmpty += $(this).val()
						});
						if (!checkEmpty) $(".ddFieldBlock:first .ddDeleteButton", $ddMultipleField).click();
					},
					callBack: function (url) {
						window.KCFinder.callBackMultiple([url])
					}
				};
				BrowseServerMultiple(id,_inst.batch.type);
			});
		}
	},
	//Функция создания строки
	//Принимает id и данные строки
	makeFieldRow: function(id, val){
		var _this = this;
		var _inst = _this.instances[id];
		
		//Если задано максимальное количество строк
		if (_inst.maxRow){
			//Общее количество строк на данный момент
			var fieldBlocksLen = $('#' + id + 'ddMultipleField .ddFieldBlock').length;
			
			//Проверяем превышает ли уже количество строк максимальное
			if (_inst.maxRow && fieldBlocksLen >= _inst.maxRow){
				return;
			//Если будет равно максимуму при создании этого поля
			}else if (_inst.maxRow && fieldBlocksLen + 1 == _inst.maxRow){
				_inst.$addButton.attr('disabled', true);
				$(".ddCloneButton",'#' + id + 'ddMultipleField').attr("disabled",true);
			}
		}
		
		var $fieldBlock = $('<tr class="ddFieldBlock ' + id + 'ddFieldBlock"><td class="ddSortHandle"><div></div></td></tr>').appendTo($('#' + id + 'ddMultipleField'));
		
		//Разбиваем переданное значение на колонки
		val = val ? val.split(_inst.splX):[];
		
		var $field;
		
		//Перебираем колонки
		$.each(_inst.coloumns, function(key){
			if (typeof val[key]=='undefined'){
				//Значение по умолчанию. для  JSON, искать флаг в 3-м элементе, или первое значение
				if (val[key] = _inst.coloumnsData[key] || '' )
					try {
						var valDef = val[key] = $.parseJSON(val[key]);
						while($.isArray(valDef)) valDef=valDef.shift();
						$.each(val[key], function(k,v){
							if (v[2]) {
								valDef = v[0];	
								return false;
							}
						});
						val[key] = valDef;
					} catch (e) {}
			}
			if (!_inst.coloumnsTitle[key]){_inst.coloumnsTitle[key] = '';}
			if (!_inst.colWidth[key] || _inst.colWidth[key] == ''){_inst.colWidth[key] = _inst.colWidth[key - 1];}
			
			var $col = _this.makeFieldCol($fieldBlock);
			
			//Если текущая колонка является изображением
			switch(_inst.coloumns[key]) {
				case 'image' : 
				$field = _this.makeText(val[key], _inst.coloumnsTitle[key], _inst.colWidth[key], $col);
				
				_this.makeImage(id, $col);
				
				//Create Attach browse button
				$('<input class="ddAttachButton" type="button" value="Вставить" />').insertAfter($field).on('click', function(){
					_inst.currentField = $(this).siblings('.ddField');
					BrowseServer(id);
				});
				break;
			//Если текущая колонка является файлом
				case 'file':
				$field = _this.makeText(val[key], _inst.coloumnsTitle[key], _inst.colWidth[key], $col);
				
				//Create Attach browse button
				$('<input class="ddAttachButton" type="button" value="Вставить" />').insertAfter($field).on('click', function(){
					_inst.currentField = $(this).siblings('.ddField');
					BrowseFileServer(id);
				});	
				break;
			//Если id
				case 'id':
				$field = _this.makeText(val[key], '', 0, $col);
				
				if (!($field.val())){
					$field.val((new Date).getTime());
				}
				
				$col.hide();
				break;
			//Если селект
				case 'select':
				_this.makeSelect(val[key], _inst.coloumnsTitle[key], _inst.coloumnsData[key], _inst.colWidth[key], $col);
				break;
			//Если дата
				case 'date':
				_this.makeDate(val[key], _inst.coloumnsTitle[key], $col);
				break;
			//Если textarea
				case 'textarea':
				_this.makeTextarea(val[key], _inst.coloumnsTitle[key], _inst.colWidth[key], $col);
			//Если richtext
				break;
				case 'richtext':
				_this.makeRichtext(val[key], _inst.coloumnsTitle[key], _inst.colWidth[key], $col);
				break;
				case 'number':
				_this.makeNumber(val[key], _inst.coloumnsTitle[key], _inst.colWidth[key], $col);
				break;
			//По дефолту делаем текстовое поле
				default:
				_this.makeText(val[key], _inst.coloumnsTitle[key], _inst.colWidth[key], $col);
			}
		});
		
		//Create DeleteButton
		_this.makeDeleteButton(id, _this.makeFieldCol($fieldBlock));

		//Создаём кнопку copy
		_this.makeCopyButton(id).appendTo($('#' + id + 'ddMultipleField .ddFieldCol:last'));

		//Специально для полей, содержащих изображения необходимо инициализировать
		$('.ddFieldCol:has(.ddField_image) .ddField', $fieldBlock).trigger('change.ddEvents');
		
		return $fieldBlock;
	},
	//Создание колонки поля
	makeFieldCol: function($fieldRow){
		return $('<td class="ddFieldCol"></td>').appendTo($fieldRow);
	},
	//Make delete button
	makeDeleteButton: function(id, $fieldCol){
		var _this = this;
		var _inst = _this.instances[id];
		
		$('<input class="ddDeleteButton" type="button" value="×" />').appendTo($fieldCol).on('click', function(){
			//Проверяем на минимальное количество строк
			if (_inst.minRow && $('#' + id + 'ddMultipleField .ddFieldBlock').length <= _inst.minRow){
				return;
			}
			
			var $this = $(this),
				$par = $this.parents('.ddFieldBlock:first')/*,
				$table = $this.parents('.ddMultipleField:first')*/;
			
				$par.fadeOut(300, function(){
					var $siblingsL = $par.siblings('.ddFieldBlock').length;
					//Если контейнер имеет кнопку добалвения, перенесём её
					if ($par.find('.ddAddButton').length > 0){
						_this.moveAddButton(id, $par.prev('.ddFieldBlock'));
					}
					
					//Сносим
					$par.remove();
					
					//При любом удалении показываем кнопку добавления
					_inst.$addButton.removeAttr('disabled');
					$(".ddCloneButton",'#' + id + 'ddMultipleField').removeAttr("disabled");
					
				//Если было меньше одной строки, созданем новую строчку
				if (!$siblingsL){
					_inst.$addButton = _this.makeAddButton(id);
					_this.makeFieldRow(id);
					_this.moveAddButton(id);
				}
					return;
				});
		});
	},
	//Функция создания кнопки +, вызывается при инициализации
	makeAddButton: function(id){
		var _this = this;
		
		return $('<input class=\"ddAddButton\" type=\"button\" value=\"+\" />').on('click', function(){
			//Вешаем на кнопку создание новой строки
			$(this).appendTo(_this.makeFieldRow(id).find('.ddFieldCol:last'));
		});
	},
	//Функция создания кнопки +, вызывается при инициализации
	makeCopyButton: function (id) {
			//Вешаем на кнопку создание дубликата текущей строки
		var _this = this;
		var fieldBlocks = $('#' + id + 'ddMultipleField .ddFieldBlock');
		var fieldBlocksLen = fieldBlocks.size();
		var _inst = _this.instances[id];
		return $('<input/>').attr({
			"class": "ddCloneButton",
			"type": "button",
			"value": "©",
			"title": "Copy row",
			"disabled": (_inst.maxRow && fieldBlocksLen == _inst.maxRow) ? "disabled" : false
		}).on('click', function () {
			var _parent = $(this).closest("tr");
			if ($(this).attr("disabled")) return false;
			_parent.clone(true, true).find(".ddAddButton").remove().end().insertAfter(_parent);
			_this.moveAddButton(id);
			if (_inst.maxRow && fieldBlocksLen + 1 == _inst.maxRow) {
				$(".ddCloneButton,.ddAddButton", '#' + id + 'ddMultipleField').attr("disabled", true)
			}
		});
	},
	//Перемещение кнопки +
	moveAddButton: function(id, $target){
		var _inst = this.instances[id];
		
		//Если не передали, куда вставлять, вставляем в самый конец
		if (!$target){
			$target = $('#' + id + 'ddMultipleField .ddFieldBlock:last');
		}
		
		//Находим кнопку добавления и переносим куда надо
		_inst.$addButton.appendTo($target.find('.ddFieldCol:last'));
	},
	//Checking size values. Make it universal 
	_united:function(v,out){
		if (!v) return v; 
		v = v+($.isNumeric(v)?"px":"");
		return (/\%s/.test(out)?out.replace("%s",v):v);
	},
	//Make text field
	makeText: function(value, title, width, $fieldCol){
		var $field = $('<input type="text" title="' + title + '" style="' + this._united(width,"width: %s") + '" class="ddField" />');
		
		return $field.val(value).appendTo($fieldCol);
	},
	makeNumber: function(value, title, width, $fieldCol){
		return $('<input type="number" onkeyup="this.value=this.value.replace(/[^\\d-,.+]/,\'\')" value="' + value + '" title="' + title + '" style="' + this._united(width,"width: %s") + '" class="ddField" />').appendTo($fieldCol);
	},
	//Make date field
	makeDate: function(value, title, $fieldCol){
		//name нужен для DatePicker`а
		var $field = $('<input type="text" title="' + title + '" class="ddField DatePicker" name="ddMultipleDate" />').val(value).appendTo($fieldCol);

		new DatePicker($field.get(0), {
			'yearOffset': $.ddMM.config.datepicker_offset,
			'format': $.ddMM.config.datetime_format + ' hh:mm:00'
		});
		
		return $field;
	},
	//Make textarea field
	makeTextarea: function(value, title, width, $fieldCol){
		return $('<textarea title="' + title + '" style="' + this._united(width,"width: %s") + '" class="ddField">' + value + '</textarea>').appendTo($fieldCol);
	},
	//Make richtext field
	makeRichtext: function(value, title, width, $fieldCol){
		var _this = this,
			$field = $('<div title="' + title + '" style="' + this._united(width,"width: %s") + '" class="ddField">' + value + '</div>').appendTo($fieldCol);
		
		$('<div class="ddFieldCol_edit"><a class="false" href="#">' + $.ddMM.lang.edit + '</a></div>').appendTo($fieldCol).find('a').on('click', function(event){
			_this.richtextWindow = window.open($.ddMM.config.site_url + $.ddMM.urls.mm + 'widgets/ddmultiplefields/richtext/index.php', 'mm_ddMultipleFields_richtext', new Array(
				'width=600',
				'height=550',
				'left=' + (($.ddTools.windowWidth - 600) / 2),
				'top=' + (($.ddTools.windowHeight - 550) / 2),
				'menubar=no',
				'toolbar=no',
				'location=no',
				'status=no',
				'resizable=no',
				'scrollbars=yes'
			).join(','));
			
			if (_this.richtextWindow != null){
				_this.richtextWindow.$ddField = $field;
			}
			
			event.preventDefault();
		});
		
		return $field;
	},
	//Make image field
	makeImage: function(id, $fieldCol){
		var _this = this;
		var _inst = _this.instances[id];
		// Create a new preview and Attach a browse event to the picture, so it can trigger too
		$('<div class="ddField_image"><img src="" style="' + _inst.imageStyle + '" /></div>').appendTo($fieldCol).hide().find('img').on('click', function(){
			$fieldCol.find('.ddAttachButton').trigger('click');
		}).on('load.ddEvents', function(){
			//Удаление дерьма, блеать (превьюшка, оставленная от виджета showimagetvs)
			$('#' + id + 'PreviewContainer').remove();
		});
		
		//Находим поле, привязываем события
		$('.ddField', $fieldCol).on('change.ddEvents load.ddEvents', function(){
			var $this = $(this), url = $this.val();
			
			url = (url != '' && url.search(/http:\/\//i) == -1) ? ($.ddMM.config.site_url + url) : url;
			
			//If field not empty
			if (url != ''){
				//Show preview
				$this.siblings('.ddField_image').show().find('img').attr('src', url);
			}else{
				//Hide preview
				$this.siblings('.ddField_image').hide();
			}
		});
	},
	//Функция создания списка
	makeSelect: function(value, title, data, width, $fieldCol){
		var $select = $('<select class="ddField">');
		
		if (data){
			var dataMas = $.parseJSON(data),
				options = '';
			
			$.each(dataMas, function(index){
				options += '<option value="'+ dataMas[index][0] +'">' + (dataMas[index][1] ? dataMas[index][1] : dataMas[index][0]) +'</option>';
			});
			
			$select.append(options);
		}
		
		if (value){$select.val(value);}
		
		return $select.appendTo($fieldCol);
	},
	//Функция ничего не делает
	makeNull: function(id, $fieldCol){return false;}
};

/**
 * jQuery.fn.mm_ddMultipleFields Plugin
 * @version 1.0.2 (2014-10-23)
 * 
 * @description Делает мультиполя.
 * 
 * Параметры передаются в виде plain object.
 * @param splY {string} - Разделитель строк. Default: '||'.
 * @param splX {string} - Разделитель колонок. Default: '::'.
 * @param coloumns {comma separated string; array} - Колонки. Default: 'field'.
 * @param coloumnsTitle {comma separated string; array} - Заголовки колонок. Default: ''.
 * @param coloumnsData {separated string; array} - Данные колонок. Default: ''.
 * @param colWidth {comma separated string} - Ширины колонок. Default: '180'.
 * @param imageStyle {string} - Стиль превьюшек. Default: ''.
 * @param minRow {integer} - Минимальное количество строк. Default: 0.
 * @param maxRow {integer} - Максимальное количество строк. Default: 0.
 * 
 * @copyright 2014, DivanDesign
 * http://www.DivanDesign.biz
 */
$.fn.mm_ddMultipleFields = function(params){
	var _this = $.ddMM.mm_ddMultipleFields;
	
	//Обрабатываем параметры
	params = $.extend({}, _this.defaults, params || {});
	
	params.coloumns = $.ddMM.makeArray(params.coloumns);
	params.coloumnsTitle = $.ddMM.makeArray(params.coloumnsTitle);
	params.coloumnsData = $.ddMM.makeArray(params.coloumnsData, '\\|\\|');
	params.colWidth = $.ddMM.makeArray(params.colWidth);
	params.minRow = parseInt(params.minRow, 10);
	params.maxRow = parseInt(params.maxRow, 10);
	
	return $(this).each(function(){
		//Attach new load event
		$(this).on('load.ddEvents', function(event){
			//Оригинальное поле
			var $this = $(this),
				//id оригинального поля
				id = $this.attr('id');
			
			//Проверим на существование (возникали какие-то непонятные варианты, при которых два раза вызов был)
			if (!_this.instances[id]){
				//Инициализация текущего объекта с правилами
				_this.instances[id] = $.extend({}, params);
				
				//Скрываем оригинальное поле
				$this.removeClass('imageField').off('.mm_widget_showimagetvs').addClass('originalField').hide();
				
				//Назначаем обработчик события при изменении (необходимо для того, чтобы после загрузки фотки адрес вставлялся в нужное место)
				$this.on('change.ddEvents', function(){
					//Обновляем текущее мульти-поле
					_this.updateField($this.attr('id'));
				});
				
				//Если это файл или изображение, cкрываем оригинальную кнопку
				$this.next('input[type=button]').hide();
				
				//Создаём мульти-поле
				_this.init(id, $this.val(), $this.parent());
			}
		}).trigger('load');
	});
};

//On document.ready
$(function(){
	if (typeof(SetUrl) == 'undefined'){
		lastImageCtrl = '';
		lastFileCtrl = '';
		
		OpenServerBrowser = function(url, width, height){
			var iLeft = (screen.width  - width) / 2;
			var iTop  = (screen.height - height) / 2;
			
			var sOptions = 'toolbar=no,status=no,resizable=yes,dependent=yes';
			
			sOptions += ',width=' + width;
			sOptions += ',height=' + height;
			sOptions += ',left=' + iLeft;
			sOptions += ',top=' + iTop;
			
			window.open(url, 'FCKBrowseWindow', sOptions);
		};
		
		BrowseServer = function(ctrl){
			lastImageCtrl = ctrl;
			
			var w = screen.width * 0.5;
			var h = screen.height * 0.5;
			
			OpenServerBrowser($.ddMM.urls.manager + 'media/browser/mcpuk/browser.php?Type=images', w, h);
		};
		
		BrowseFileServer = function(ctrl){
			lastFileCtrl = ctrl;
			
			var w = screen.width * 0.5;
			var h = screen.height * 0.5;
			
			OpenServerBrowser($.ddMM.urls.manager + 'media/browser/mcpuk/browser.php?Type=files', w, h);
		};
		
		SetUrlChange = function(el){
			if ('createEvent' in document){
				var evt = document.createEvent('HTMLEvents');
				
				evt.initEvent('change', false, true);
				el.dispatchEvent(evt);
			}else{
				el.fireEvent('onchange');
			}
		};
		
		SetUrl = function(url, width, height, alt){
			if(lastFileCtrl){
				var c = document.getElementById(lastFileCtrl);
				
				if(c && c.value != url){
				    c.value = url;
					SetUrlChange(c);
				}
				
				lastFileCtrl = '';
			}else if(lastImageCtrl){
				var c = document.getElementById(lastImageCtrl);
				
				if(c && c.value != url){
				    c.value = url;
					SetUrlChange(c);
				}
				
				lastImageCtrl = '';
			}else{
				return;
			}
		};
	}else{
		//For old MODX versions
		if (typeof(SetUrlChange) == 'undefined'){
			//Copy the existing Image browser SetUrl function
			var oldSetUrl = SetUrl;
			
			//Redefine it to also tell the preview to update
			SetUrl = function(url, width, height, alt){
				var $field = $();
				
				if(lastFileCtrl){
					$field = $(document.mutate[lastFileCtrl]);
				}else if(lastImageCtrl){
					$field = $(document.mutate[lastImageCtrl]);
				}
				
				oldSetUrl(url, width, height, alt);
				
				$field.trigger('change');
			};
		}
	}
	
	//Сабмит главной формы
	$.ddMM.$mutate.on('submit', function(){
		$.each($.ddMM.mm_ddMultipleFields.instances, function(key){
			$.ddMM.mm_ddMultipleFields.updateTv(key);
		});
	});
});
})(jQuery);
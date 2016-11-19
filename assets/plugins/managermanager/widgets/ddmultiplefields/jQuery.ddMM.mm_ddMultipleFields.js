/**
 * jQuery.ddMM.mm_ddMultipleFields
 * @version 2.1.2 (2016-11-18)
 * 
 * @uses jQuery 1.9.1
 * @uses jQuery.ddTools 1.8.1
 * @uses jQuery.ddMM 1.1.2
 * 
 * @copyright 2013–2014 [DivanDesign]{@link http://www.DivanDesign.biz }
 */

(function($){
$.ddMM.mm_ddMultipleFields = {
	defaults: {
		//Разделитель строк
		rowDelimiter: '||',
		//Разделитель колонок
		colDelimiter: '::',
		//Колонки
		columns: [
			{type: 'text'}
		],
		//Стиль превьюшек
		previewStyle: '',
		//Минимальное количество строк
		minRowsNumber: 0,
		//Максимальное количество строк
		maxRowsNumber: 0
	},
	/**
	 * @prop instances {object_plain} — All instances.
	 * @prop instances[item] {object_plain} — Item, when key — TV id.
	 * @prop instances[item].id {string} — Unique TV id (similar to key).
	 * @prop instances[item].rowDelimiter {string} — Разделитель строк.
	 * @prop instances[item].colDelimiter {string} — Разделитель колонок.
	 * @prop instances[item].columns {array} — Колонки. Default: 'field'.
	 * @prop instances[item].columns[i] {object_plain} — Колонка.
	 * @prop instances[item].columns[i].type {'text'|'textarea'|'richtext'|'date'|'id'|'select'} — Тип.
	 * @prop instances[item].columns[i].title {string} — Заголовок.
	 * @prop instances[item].columns[i].width {string} — Ширина.
	 * @prop instances[item].columns[i].data {string_JSON_array} — Данные (для type == 'select').
	 * @prop instances[item].previewStyle {string} — Стиль превьюшек.
	 * @prop instances[item].minRowsNumber {integer} — Минимальное количество строк.
	 * @prop instances[item].maxRowsNumber {integer} — Максимальное количество строк.
	 * @prop instances[item].$parent {jQuery} — TV field DOM parent.
	 * @prop instances[item].$originalField {jQuery} — TV field.
	 * @prop instances[item].$table {jQuery} — Multiple field table.
	 * @prop instances[item].$addButtons {jQuery} — New row adding buttons.
	 * @prop instances[item].$currentField {jQuery} — Current field from table.
	 */
	instances: {},
	richtextWindow: null,
	
	/**
	 * @method updateField
	 * @version 2.0.1 (2016-11-17)
	 * 
	 * @desc Обновляет мульти-поле, берёт значение из оригинального поля.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * 
	 * @returns {void}
	 */
	updateField: function(params){
		var _this = this;
		
		//Если есть текущее поле
		if (_this.instances[params.id].$currentField){
			//Задаём значение текущему полю (берём у оригинального поля), запускаем событие изменения
			_this.instances[params.id].$currentField.val($.trim(_this.instances[params.id].$originalField.val())).trigger('change.ddEvents');
			//Забываем текущее поле (ибо уже обработали)
			_this.instances[params.id].$currentField = false;
		}
	},
	
	/**
	 * @method updateTv
	 * @version 2.0.2 (2016-11-17)
	 * 
	 * @desc Обновляет оригинальное поле TV, собирая данные по мульти-полям.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * 
	 * @returns {void}
	 */
	updateTv: function(params){
		var _this = this,
			masRows = new Array();
		
		//Перебираем все строки
		_this.instances[params.id].$table.find('.ddFieldBlock').each(function(){
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
				if (_this.instances[params.id].columns[index].type == 'id'){
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
				if (_this.instances[params.id].columns[index].type == 'richtext'){
					//Собираем значения строки в массив
					masCol.push($.trim($(this).html()));
				}else{
					//Собираем значения строки в массив
					masCol.push($.trim($(this).val()));
				}
			});
			
			//Склеиваем значения колонок через разделитель
			var col = masCol.join(_this.instances[params.id].colDelimiter);
			
			//Если значение было хоть в одной колонке из всех в этой строке
			if (col.length != ((masCol.length - 1) * _this.instances[params.id].colDelimiter.length)){
				//Проверяем было ли поле с id
				if (id_field.index !== false){
					//Записываем значение в поле
					id_field.$field.val(id_field.val);
					//Обновляем значение в массиве
					masCol[id_field.index] = id_field.val;
					//Пересобираем строку
					col = masCol.join(_this.instances[params.id].colDelimiter);
				}
				
				masRows.push(col);
			}
		});
		
		//Записываем значение в оригинальное поле
		_this.instances[params.id].$originalField.val(masRows.join(_this.instances[params.id].rowDelimiter));
	},
	
	/**
	 * @method init
	 * @version 4.1 (2016-11-18)
	 * 
	 * @desc Инициализация.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * @param params.value {string} — TV value.
	 * @param params.$parent {jQuery} — TV parent.
	 * @param params.$originalField {jQuery} — TV.
	 * @param params.rowDelimiter {string} — Разделитель строк.
	 * @param params.colDelimiter {string} — Разделитель колонок.
	 * @param params.columns {string_commaSeparated|array} — Колонки.
	 * @param params.columns[i] {object_plain} — Колонка.
	 * @param params.columns[i].type {'text'|'textarea'|'richtext'|'date'|'id'|'select'} — Тип.
	 * @param [params.columns[i].title=''] {string} — Заголовок.
	 * @param [params.columns[i].width=180] {integer} — Ширина.
	 * @param [params.columns[i].data=''] {integer} — Данные (для type == 'select').
	 * @param params.previewStyle {string} — Стиль превьюшек.
	 * @param params.minRowsNumber {integer} — Минимальное количество строк.
	 * @param params.maxRowsNumber {integer} — Максимальное количество строк.
	 * 
	 * @returns {void}
	 */
	init: function(instance){
		var _this = this;
		
		//Разбиваем значение по строкам
		var value = instance.value.split(instance.rowDelimiter);
		//Это поле нужно было только для инициализации
		delete instance.value;
		//Инициализируем кнопки +
		instance.$addButtons = $();
		
		//Сохраняем экземпляр текущего объекта с правилами
		_this.instances[instance.id] = instance;
		
		//Делаем таблицу мульти-поля
		instance.$table = $('<table class="ddMultipleField" id="' + instance.id + 'ddMultipleField"></table>').appendTo(instance.$parent);
		
		//Шапка таблицы
		var tableHeaderHtml = '',
			//По умолчанию без шапки
			showTableHeader = false;
		
		//Перебираем колонки
		$.each(instance.columns, function(key, val){
			//Defaults
			if (!val.title){
				instance.columns[key].title = '';
			}else{
				showTableHeader = true;
			}
			if (!val.width){
				if (key > 0){
					//Take from preverious column
					instance.columns[key].width = instance.columns[key - 1].width;
				}else{
					//Or by default
					instance.columns[key].width = 180;
				}
			}
			if (!val.data){
				instance.columns[key].data = '';
			}
			
			//Если это колонка с id
			if (val.type == 'id'){
				tableHeaderHtml += '<th style="display: none;"></th>';
			}else{
				tableHeaderHtml += '<th>' + val.title + '</th>';
			}
		});
		
		if (showTableHeader){
			$('<tr><th></th>' + tableHeaderHtml + '<th></th></tr>').appendTo(instance.$table);
		}
		
		//Проверяем на максимальное и минимальное количество строк
		if (
			instance.maxRowsNumber &&
			value.length > instance.maxRowsNumber
		){
			value.length = instance.maxRowsNumber;
		}else if (
			instance.minRowsNumber &&
			value.length < instance.minRowsNumber
		){
			value.length = instance.minRowsNumber;
		}
		
		for (
			var i = 0, len = value.length;
			i < len;
			i++
		){
			//В случае, если размер массива был увеличен по minRowsNumber, значением будет undefined, посему зафигачим пустую строку
			_this.makeFieldRow({
				id: instance.id,
				value: value[i] || ''
			});
		}
		
		//Добавляем возможность перетаскивания
		instance.$table.sortable({
			items: 'tr:has(td)',
			handle: '.ddSortHandle',
			cursor: 'n-resize',
			axis: 'y',
			placeholder: 'ui-state-highlight',
			start: function(event, ui){
				ui.placeholder.html('<td colspan="' + (instance.columns.length + 2) + '"><div></div></td>').find('div').css('height', ui.item.height());
			}
		});
	},
	
	/**
	 * @method makeFieldRow
	 * @version 2.1 (2016-11-18)
	 * 
	 * @desc Функция создания строки.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * @param [params.value=''] {string} — Row value.
	 * @param [params.$insertAfter=''] {string} — Row value.
	 * 
	 * @returns {jQuery}
	 */
	makeFieldRow: function(params){
		//Defaults
		params = $.extend({
			value: ''
		}, params);
		
		var _this = this;
		
		//Общее количество строк на данный момент
		var fieldBlocksLen = _this.instances[params.id].$table.find('.ddFieldBlock').length;
		
		if (
			//Если задано максимальное количество строк
			_this.instances[params.id].maxRowsNumber &&
			//Проверяем превышает ли уже количество строк максимальное
			fieldBlocksLen >= _this.instances[params.id].maxRowsNumber
		){
			return;
		}
		
		var $fieldBlock = $('<tr class="ddFieldBlock ' + params.id + 'ddFieldBlock"><td class="ddSortHandle"><div></div></td></tr>');
		
		if (params.$insertAfter){
			$fieldBlock.insertAfter(params.$insertAfter);
		}else{
			$fieldBlock.appendTo(_this.instances[params.id].$table);
		}
		
		//Разбиваем переданное значение на колонки
		params.value = params.value.split(_this.instances[params.id].colDelimiter);
		
		var $field;
		
		//Перебираем колонки
		$.each(_this.instances[params.id].columns, function(key){
			if (!params.value[key]){params.value[key] = '';}
			
			var $col = _this.makeFieldCol({$fieldRow: $fieldBlock});
			
			//Если текущая колонка является изображением
			if(_this.instances[params.id].columns[key].type == 'image'){
				$field = _this.makeText({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					width: _this.instances[params.id].columns[key].width,
					$fieldCol: $col
				});
				
				_this.makeImage({
					id: params.id,
					$fieldCol: $col
				});
				
				//Create Attach browse button
				$('<input class="ddAttachButton" type="button" value="Вставить" />').insertAfter($field).on('click', function(){
					_this.instances[params.id].$currentField = $(this).siblings('.ddField');
					BrowseServer(params.id);
				});
			//Если текущая колонка является файлом
			}else if(_this.instances[params.id].columns[key].type == 'file'){
				$field = _this.makeText({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					width: _this.instances[params.id].columns[key].width,
					$fieldCol: $col
				});
				
				//Create Attach browse button
				$('<input class="ddAttachButton" type="button" value="Вставить" />').insertAfter($field).on('click', function(){
					_this.instances[params.id].$currentField = $(this).siblings('.ddField');
					BrowseFileServer(params.id);
				});	
			//Если id
			}else if (_this.instances[params.id].columns[key].type == 'id'){
				$field = _this.makeText({
					value: params.value[key],
					title: '',
					width: 0,
					$fieldCol: $col
				});
				
				if (!($field.val())){
					$field.val((new Date).getTime());
				}
				
				$col.hide();
			//Если селект
			}else if(_this.instances[params.id].columns[key].type == 'select'){
				_this.makeSelect({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					data: _this.instances[params.id].columns[key].data,
					width: _this.instances[params.id].columns[key].width,
					$fieldCol: $col
				});
			//Если дата
			}else if(_this.instances[params.id].columns[key].type == 'date'){
				_this.makeDate({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					$fieldCol: $col
				});
			//Если textarea
			}else if(_this.instances[params.id].columns[key].type == 'textarea'){
				_this.makeTextarea({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					width: _this.instances[params.id].columns[key].width,
					$fieldCol: $col
				});
			//Если richtext
			}else if(_this.instances[params.id].columns[key].type == 'richtext'){
				_this.makeRichtext({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					width: _this.instances[params.id].columns[key].width,
					$fieldCol: $col
				});
			//По дефолту делаем текстовое поле
			}else{
				_this.makeText({
					value: params.value[key],
					title: _this.instances[params.id].columns[key].title,
					width: _this.instances[params.id].columns[key].width,
					$fieldCol: $col
				});
			}
		});
		
		var $lastCol = _this.makeFieldCol({$fieldRow: $fieldBlock});
		
		//Create DeleteButton
		_this.makeDeleteButton({
			id: params.id,
			$fieldCol: $lastCol
		});
		
		//Create addButton
		_this.makeAddButton({
			id: params.id,
			$fieldCol: $lastCol
		});
		
		if (
			//Если задано максимальное количество строк
			_this.instances[params.id].maxRowsNumber &&
			//Если будет равно максимуму при создании этого поля
			fieldBlocksLen + 1 == _this.instances[params.id].maxRowsNumber
		){
			_this.instances[params.id].$addButtons.attr('disabled', true);
		}
		
		//Специально для полей, содержащих изображения необходимо инициализировать
		$('.ddFieldCol:has(.ddField_image) .ddField', $fieldBlock).trigger('change.ddEvents');
		
		return $fieldBlock;
	},
	
	/**
	 * @method makeFieldCol
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Создание колонки поля.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.$fieldRow {jQuery} — Target container.
	 * 
	 * @returns {jQuery}
	 */
	makeFieldCol: function(params){
		return $('<td class="ddFieldCol"></td>').appendTo(params.$fieldRow);
	},
	
	/**
	 * @method makeDeleteButton
	 * @version 2.0.2 (2016-11-18)
	 * 
	 * @desc Makes delete button.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {void}
	 */
	makeDeleteButton: function(params){
		var _this = this;
		
		$('<input class="ddDeleteButton" type="button" value="×" />').appendTo(params.$fieldCol).on('click', function(){
			//Проверяем на минимальное количество строк
			if (
				_this.instances[params.id].minRowsNumber &&
				_this.instances[params.id].$table.find('.ddFieldBlock').length <= _this.instances[params.id].minRowsNumber
			){
				return;
			}
			
			var $this = $(this),
				$par = $this.parents('.ddFieldBlock:first')/*,
				$table = $this.parents('.ddMultipleField:first')*/;
			
			//Отчистим значения полей
			$par.find('.ddField').val('');
			
			//Если больше одной строки, то можно удалить текущую строчку
			if ($par.siblings('.ddFieldBlock').length > 0){
				$par.animate({opacity: 0}, 300, function(){
					//Сносим
					$par.remove();
					
					//При любом удалении показываем кнопки добавления
					_this.instances[params.id].$addButtons.removeAttr('disabled');
					
					return;
				});
			}
		});
	},
	
	/**
	 * @method makeAddButton
	 * @version 3.0 (2016-11-18)
	 * 
	 * @desc Функция создания кнопки +, вызывается при инициализации.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {void}
	 */
	makeAddButton: function(params){
		var _this = this,
			//Вешаем на кнопку создание новой строки
			$button = $('<input class="ddAddButton" type="button" value="+" />').appendTo(params.$fieldCol).on('click', function(){
				_this.makeFieldRow({
					id: params.id,
					$insertAfter: $(this).parents('.ddFieldBlock:first')
				}).css({opacity: 0}).animate({opacity: 1}, 300);
			});
		
		//Сохраняем в коллекцию
		_this.instances[params.id].$addButtons = _this.instances[params.id].$addButtons.add($button);
	},
	
	/**
	 * @method makeText
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Make text field.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.value {string} — Field value.
	 * @param params.title {string} — Field title.
	 * @param params.width {integer} — Field width.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {jQuery}
	 */
	makeText: function(params){
		var $field = $('<input type="text" title="' + params.title + '" style="width:' + params.width + 'px;" class="ddField" />');
		
		return $field.val(params.value).appendTo(params.$fieldCol);
	},
	
	/**
	 * @method makeDate
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Make date field.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.value {string} — Field value.
	 * @param params.title {string} — Field title.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {jQuery}
	 */
	makeDate: function(params){
		//name нужен для DatePicker`а
		var $field = $('<input type="text" title="' + params.title + '" class="ddField DatePicker" name="ddMultipleDate" />').val(params.value).appendTo(params.$fieldCol);
		
		new DatePicker($field.get(0), {
			'yearOffset': $.ddMM.config.datepicker_offset,
			'format': $.ddMM.config.datetime_format + ' hh:mm:00'
		});
		
		return $field;
	},
	
	/**
	 * @method makeTextarea
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Make textarea field.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.value {string} — Field value.
	 * @param params.title {string} — Field title.
	 * @param params.width {integer} — Field width.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {jQuery}
	 */
	makeTextarea: function(params){
		return $('<textarea title="' + params.title + '" style="width:' + params.width + 'px;" class="ddField">' + params.value + '</textarea>').appendTo(params.$fieldCol);
	},
	
	/**
	 * @method makeRichtext
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Make richtext field.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.value {string} — Field value.
	 * @param params.title {string} — Field title.
	 * @param params.width {integer} — Field width.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {jQuery}
	 */
	makeRichtext: function(params){
		var _this = this,
			$field = $('<div title="' + params.title + '" style="width:' + params.width + 'px;" class="ddField">' + params.value + '</div>').appendTo(params.$fieldCol);
		
		$('<div class="ddFieldCol_edit"><a class="false" href="#">' + $.ddMM.lang.edit + '</a></div>').appendTo(params.$fieldCol).find('a').on('click', function(event){
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
	
	/**
	 * @method makeImage
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Make image field.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.id {string} — TV id.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {void}
	 */
	makeImage: function(params){
		var _this = this;
		
		// Create a new preview and Attach a browse event to the picture, so it can trigger too
		$('<div class="ddField_image"><img src="" style="' + _this.instances[params.id].previewStyle + '" /></div>').appendTo(params.$fieldCol).hide().find('img').on('click', function(){
			params.$fieldCol.find('.ddAttachButton').trigger('click');
		}).on('load.ddEvents', function(){
			//Удаление дерьма, блеать (превьюшка, оставленная от виджета showimagetvs)
			$('#' + params.id + 'PreviewContainer').remove();
		});
		
		//Находим поле, привязываем события
		$('.ddField', params.$fieldCol).on('change.ddEvents load.ddEvents', function(){
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
	
	/**
	 * @method makeSelect
	 * @version 3.0 (2016-11-17)
	 * 
	 * @desc Функция создания списка.
	 * 
	 * @param params {object_plain} — The parameters.
	 * @param params.value {string} — Field value.
	 * @param params.title {string} — Field title.
	 * @param [params.data] {sring_JSON_array} — Field data.
	 * @param params.data[i] {object_plain} — Item.
	 * @param params.data[i].value {string} — Item value.
	 * @param [params.data[i].title=data[i].value] {string} — Item title.
	 * @param params.width {integer} — Field width.
	 * @param params.$fieldCol {jQuery} — Target container.
	 * 
	 * @returns {jQuery}
	 */
	makeSelect: function(params){
		var $select = $('<select class="ddField">');
		
		if (params.data){
			var options = '';
			
			params.data = $.parseJSON(params.data);
			
			$.each(params.data, function(index, item){
				if (!item.title){
					item.title = item.value;
				}
				
				options += '<option value="'+ item.value +'">' + item.title +'</option>';
			});
			
			$select.append(options);
		}
		
		if (params.value){$select.val(params.value);}
		
		return $select.appendTo(params.$fieldCol);
	},
	
	/**
	 * @method makeNull
	 * @version 2.0 (2016-11-16)
	 * 
	 * @desc Функция ничего не делает.
	 * 
	 * @param params {object_plain} — The parameters.
	 * 
	 * @returns {false}
	 */
	makeNull: function(params){return false;}
};

/**
 * jQuery.fn.mm_ddMultipleFields
 * @version 2.0.3 (2016-11-17)
 * 
 * @desc Делает мультиполя.
 * 
 * @param [params] {object_plain} — The parameters.
 * @param [params.rowDelimiter='||'] {string} — Разделитель строк.
 * @param [params.colDelimiter='::'] {string} — Разделитель колонок.
 * @param [params.columns='field'] {string_commaSeparated|array} — Колонки.
 * @param [params.previewStyle=''] {string} — Стиль превьюшек.
 * @param [params.minRowsNumber=0] {integer} — Минимальное количество строк.
 * @param [params.maxRowsNumber=0] {integer} — Максимальное количество строк.
 * 
 * @copyright 2013–2014 [DivanDesign]{@link http://www.DivanDesign.biz }
 */
$.fn.mm_ddMultipleFields = function(params){
	var _this = $.ddMM.mm_ddMultipleFields;
	
	//Обрабатываем параметры
	params = $.extend({}, _this.defaults, params || {});
	
	params.minRowsNumber = parseInt(params.minRowsNumber, 10);
	params.maxRowsNumber = parseInt(params.maxRowsNumber, 10);
	
	return $(this).each(function(){
		//Attach new load event
		$(this).on('load.ddEvents', function(event){
			//Оригинальное поле
			var $this = $(this),
				//id оригинального поля
				id = $this.attr('id');
			
			//Проверим на существование (возникали какие-то непонятные варианты, при которых два раза вызов был)
			if (!_this.instances[id]){
				//Скрываем оригинальное поле
				$this.removeClass('imageField').off('.mm_widget_showimagetvs').addClass('originalField').hide();
				
				//Назначаем обработчик события при изменении (необходимо для того, чтобы после загрузки фотки адрес вставлялся в нужное место)
				$this.on('change.ddEvents', function(){
					//Обновляем текущее мульти-поле
					_this.updateField({id: $this.attr('id')});
				});
				
				//Если это файл или изображение, cкрываем оригинальную кнопку
				$this.next('input[type=button]').hide();
				
				//Создаём мульти-поле
				_this.init($.extend({
					id: id,
					value: $this.val(),
					$parent: $this.parent(),
					$originalField: $this
				}, params));
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
			var iLeft = (screen.width - width) / 2,
				iTop = (screen.height - height) / 2;
			
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
			$.ddMM.mm_ddMultipleFields.updateTv({id: key});
		});
	});
});
})(jQuery);
/**
 * jQuery ddMM Plugin
 * @version 1.5 (2024-01-04)
 * 
 * @uses jQuery 1.9.1
 * 
 * @copyright 2013–2024 [DD Group]{@link https://DivanDesign.biz }
 */

(function($){
$.ddMM = {
	config: {
		site_url: '',
		datetime_format: '',
		datepicker_offset: 0
	},
	
	dateNowFormatted: '',
	
	urls: {
		manager: 'manager/',
		mm: 'assets/plugins/managermanager/'
	},
	
	/**
	 * fields {objectPlain} — All document fields (include tvs).
	 * fields[item] {objectPlain} — A field.
	 * fields[item].fieldtype {string} — Field type.
	 * fields[item].fieldname {string} — Field name.
	 * fields[item].dbname {string} — Field db name.
	 * fields[item].tv {boolean} — Is the field a tv?
	 * fields[item].$elem {jQuery} — Field jQuery element.
	 * fields[item].getValue {function} — Returns the field value.
	 */
	fields: {},
	
	/**
	 * lang {objectPlain} — $_lang.
	 * lang.dp_dayNames {array} — Datepicker day names.
	 * lang.dp_monthNames {array} — Datepicker months names.
	 * lang.dp_startDay {integer} — Datepicker start day (1 = starts on Monday, 7 = week starts on Sunday).
	 * lang.edit {string} — 
	 */
	lang: {
		dp_dayNames: [
			'Sunday',
			'Monday',
			'Tuesday',
			'Wednesday',
			'Thursday',
			'Friday',
			'Saturday'
		],
		dp_monthNames: [
			'January',
			'February',
			'March',
			'April',
			'May',
			'June',
			'July',
			'August',
			'September',
			'October',
			'November',
			'December'
		],
		dp_startDay: '1',
		edit: 'Edit'
	},
	$mutate: $(),
	
	/**
	 * @method makeArray
	 * @version 1.1.1 (2020-10-28)
	 * 
	 * @desc Makes a commas separated list into an array.
	 * 
	 * @param csv {stringCommaSeparated} — List.
	 * @param [splitter=','] {string} — Splitter.
	 * 
	 * @returns {array}
	 */
	makeArray: function(
		csv,
		splitter
	){
		var result = new Array();
		
		//If we've already been supplied an array, just return it
		if ($.isArray(csv)){
			result = csv;
		}else{
			//Else if we have an not empty string
			if ($.trim(csv) != ''){
				if (
					$.type(splitter) != 'string' ||
					splitter.length == 0
				){
					splitter = ',';
				}
				
				//Turn it into an array
				result = csv.split(new RegExp('\\s*' + splitter + '\\s*'));
			}
		}
		
		return result;
	},
	
	/**
	 * @method getFieldElems
	 * @version 1.0.1 (2020-10-28)
	 * 
	 * @desс Gets dom elements of needed fields.
	 * 
	 * @param params {objectPlain} — The parameters.
	 * @param params.fields {array|stringCommaSeparated} — The name(s) of the document fields (or TVs).
	 * @param params.fields[i] {string} — Field name.
	 * 
	 * @returns {jQuery}
	 */
	getFieldElems: function(params){
		var
			_this = this,
			$result = $()
		;
		
		params.fields = _this.makeArray(params.fields);
		
		$.each(
			params.fields,
			function(){
				//If the field exists
				if ($.isPlainObject(_this.fields[this])){
					$result = $result.add(_this.fields[this].$elem);
				}
			}
		);
		
		return $result;
	},
	
	/**
	 * @method getFieldParentWithSplElements
	 * @version 1.0 (2024-01-03)
	 * 
	 * @desс Returns DOM elements of field parent and its splitter.
	 * 
	 * @param params {objectPlain} — The parameters.
	 * @param params.fieldName {string} — The name of the document field (or TV).
	 * 
	 * @returns result {objectPlain}
	 * @returns result.$parent {jQuery}
	 * @returns result.$splitter {jQuery}
	 * @returns result.$both {jQuery}
	 */
	getFieldParentWithSplElements: function(params){
		var
			_this = this,
			result = {
				//Field parent
				$parent: $(),
				//Splitter after parent
				$splitter: $(),
				$both: $(),
			}
		;
		
		//If field exist
		if ($.isPlainObject(_this.fields[params.fieldName])){
			result.$parent =
				_this.fields[params.fieldName]
					.$elem
					.parents('tr:first')
			;
			
			result.$splitter =
				result.$parent
					.next('tr')
					.find('td[colspan=2]')
					.parent('tr')
			;
		}
		
		//Exceptions
		if (
			params.fieldName == 'keywords' ||
			params.fieldName == 'metatags'
		){
			result.$parent = $('select[name*="' + params.fieldName + '"]').parent('td');
		}else if (params.fieldName == 'which_editor'){
			result.$parent = $('select#which_editor').prev('span.warning');
			result.$parent = result.$parent.add($('select#which_editor'));
		}else if (params.fieldName == 'content'){
			//For new MODX versions
			if (result.$parent.length > 0){
				//We don't need all in one TD
				result.$parent
					.find('td[colspan]')
					.removeAttr('colspan')
				;
				
				//Richtext editor must be placed below title
				result.$parent
					.find('.float-right')
					.removeClass('float-right')
				;
				
				//Move field to standalone TD
				if (result.$parent.find('td').length < 2){
					var $newTd = $('<td></td>')
					
					$newTd.appendTo(result.$parent);
					
					$newTd.append($('#content_body'));
				}
			//For old MODX versions
			}else{
				//Create a new standard parent
				result.$parent = $('<tr><td valign="top"><span class="warning"></span></td><td></td></tr>');
				
				var $parent_title = result.$parent.find('td:first .warning');
				
				//Move title
				$parent_title
					.append(
						$('#content_header').find('> *')
					)
				;
				
				//Move field
				result.$parent
					.find('td:last')
					.append(
						$('#content_body').find('> *')
					)
				;
				
				//Move standard parent to a content section in any case
				$('#content_body').append(result.$parent);
				
				//We don't like this section in any case
				$('#content_header').hide();
			}
			
			//Always remove excessive line
			result.$parent.find('hr').remove();
		}else if (
			params.fieldName == 'pub_date' ||
			params.fieldName == 'unpub_date'
		){
			result.$splitter = result.$parent.next('tr');
		}
		
		//Create splitter if not exist (just for less fragility)
		if (result.$splitter.length == 0){
			result.$splitter = $('<tr><td colspan="2"><div class="split"></div></td></tr>');
			result.$splitter.insertAfter(result.$parent);
		}
		
		result.$both = result.$parent.add(result.$splitter);
		
		return result;
	},
	
	/**
	 * @method moveFields
	 * @version 1.1.4 (2024-01-03)
	 * 
	 * @desс Move a fields to some target (e.g. tab or section).
	 * 
	 * @param fields {array|stringCommaSeparated} — The name(s) of the document fields (or TVs) this should apply to.
	 * @param fields[i] {string} — Field name.
	 * @param targetId {string} — The ID of the target which the fields should be moved to.
	 * 
	 * @returns {void}
	 */
	moveFields: function(
		fields,
		targetId
	){
		var
			_this = this,
			$target = $('#' + targetId)
		;
		
		fields = _this.makeArray(fields);
		
		if (
			$target.length > 0 &&
			fields.length > 0
		){
			$.each(
				fields,
				function(){
					//We can't move these fields because they belong in a particular place
					if (
						this == 'keywords' ||
						this == 'metatags' ||
						this == 'which_editor'
					){
						return;
					}
					
					var fieldParentWithSpl = _this.getFieldParentWithSplElements({fieldName: this});					
					
					if (this == 'content'){
						//Если перемещаем не в секцию
						if (!$target.hasClass('sectionBody')){
							$('#content_body').appendTo($target);
						}
					}else{
						fieldParentWithSpl.$parent
							.find('script')
							.remove()
						;
					}
					
					if (fieldParentWithSpl.$parent.length > 0){
						//Move the table row
						$target
							.find('> table:first')
							.append(fieldParentWithSpl.$both)
						;
						
						//Remove widths from label column
						//movedTV.find("td[width]").attr("width","");
						//This prevents an IE6/7 bug where the moved field would not be visible until you switched tabs
						_this.fields[this]
							.$elem
							.parents('td')
							.removeAttr('style')
						;
					}
				}
			);
		}
	},
	
	/**
	 * @method hideFields
	 * @version 1.0.3 (2024-01-03)
	 * 
	 * @desc Hide fields.
	 * 
	 * @param fields {array|stringCommaSeparated} — The name(s) of the document fields (or TVs) this should apply to.
	 * @param fields[i] {string} — Field name.
	 * 
	 * @returns {void}
	 */
	hideFields: function(fields){
		var _this = this;
		
		fields = _this.makeArray(fields);
		
		$.each(
			fields,
			function(){
				_this.getFieldParentWithSplElements({fieldName: this})
					.$both
					.hide()
				;
				
				//Exceptions
				if (this == 'content'){
					$('#content_body').hide();
				}
			}
		);
	}
};

//On document.ready
$(function(){
	$.ddMM.$mutate = $('#mutate');
	
	//Initialization of the corresponding jQuery element for each document field
	for (
		var field
		in $.ddMM.fields
	){
		$.ddMM.fields[field].$elem = $(
			'[name="' +
			$.ddMM.fields[field].fieldname +
			'"]'
		);
		
		if (field == 'published'){
			$.ddMM.fields[field].getValue = function(){
				return (
					this.$elem.prop('checked') ?
					'1' :
					'0'
				);
			};
		}else{
			$.ddMM.fields[field].getValue = function(){
				return this.$elem.val();
			};
		}
	}
});
})(jQuery);
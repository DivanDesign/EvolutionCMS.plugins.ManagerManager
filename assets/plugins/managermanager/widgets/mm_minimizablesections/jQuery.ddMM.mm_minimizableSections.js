/**
 * jQuery.ddMM.mm_minimizableSections
 * @version 1.1.2 (2023-06-06)
 * 
 * @copyright 2016–2023
 */

(function($){
$.ddMM.mm_minimizableSections = {
	defaults: {
		classNames: {
			header: 'mm_minimizableSections_header',
			minimized: 'mm_minimizableSections_minimized'
		}
	},
	
	inited: false,
	
	/**
	 * @method init
	 * @version 1.0.1 (2023-06-05)
	 * 
	 * @desc Initialization.
	 * 
	 * @param params {object_plain} — Parameters passed as plain object.
	 * @param params.minimizedByDefault {string} — Minimized by default sections.
	 * 
	 * @returns {void}
	 */
	init: function(params){
		var _this = this;
		
		if (!_this.inited){
			//Minimize by default
			$('.' + _this.defaults.classNames.header)
				.filter(params.minimizedByDefault)
				.addClass(_this.defaults.classNames.minimized)
				.next()
				.hide()
			;
		}
	}
};

/**
 * jQuery.fn.mm_minimizableSections
 * @version 1.1.2 (2023-06-06)
 * 
 * @uses jQuery.ddMM.mm_minimizableSections
 * 
 * @copyright 2016
 */
$.fn.mm_minimizableSections = function(params){
	var
		_this = $.ddMM.mm_minimizableSections,
		$this = $(this)
	;
	
	$this.each(function(){
		let $this = $(this);
		
		//If the widget was not applied for this section before
		if (!$this.hasClass(_this.defaults.classNames.header)){
			$this
				.addClass(_this.defaults.classNames.header)
				.append('<div class="mm_minimizableSections_header_icon"><i class="far fa-minus-square"></i><i class="far fa-plus-square"></i></div>')
				.on(
					'click',
					function(){
						var $this = $(this);
						
						$this
							.next()
							.slideToggle(
								400,
								function(){
									$this.toggleClass(_this.defaults.classNames.minimized);
								}
							)
						;
					}
				)
			;
		}
	});
	
	_this.init(params);
	
	return $this;
};
})(jQuery);
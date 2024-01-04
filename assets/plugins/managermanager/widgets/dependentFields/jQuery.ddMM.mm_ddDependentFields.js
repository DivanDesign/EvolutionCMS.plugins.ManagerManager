/**
 * jQuery.ddMM.mm_ddDependentFields
 * @version 1.0 (2024-01-04)
 * 
 * @copyright 2024 Ronef {@link https://Ronef.ru }
 */

(function($){
$.ddMM.mm_ddDependentFields = function(params){
	var
		theMasterField = $.ddMM.fields[params.masterFieldName],
		theDependentField = $.ddMM.fields[params.dependentFieldName],
		masterParentWithSpl = $j.ddMM.getFieldParentWithSplElements({fieldName: params.masterFieldName}),
		dependentParentWithSpl = $j.ddMM.getFieldParentWithSplElements({fieldName: params.dependentFieldName}),
		isDependentUsed = false,
		tuneDependent = function(){
			//Show Dependent
			if (theMasterField.getValue() == params.masterFieldValue){
				dependentParentWithSpl.$both.ddSlideDown();
				isDependentUsed = true;
			//Hide Dependent
			}else{
				dependentParentWithSpl.$both.ddSlideUp();
				isDependentUsed = false;
			}
		}
	;
	
	//Move Dependent after Master
	dependentParentWithSpl
		.$both
		.insertAfter(masterParentWithSpl.$splitter)
	;
	
	//Published status is so special
	if (
		params.masterFieldName == 'published' &&
		params.dependentFieldName == 'pub_date'
	){
		//If pub date is set
		if (!$.ddTools.isEmpty(theDependentField.getValue())){
			//Check published even if date is in the future
			theMasterField.$elem.prop(
				'checked',
				true
			);
		}
	}
	
	theMasterField.$elem.on(
		//When value of the master will changed
		'change',
		tuneDependent
	);
	
	tuneDependent();
	
	$.ddMM.$mutate.on(
		'submit',
		function(){
			if (isDependentUsed){
				//The page should be published but date is not filled
				if (
					params.masterFieldName == 'published' &&
					params.dependentFieldName == 'pub_date' &&
					$.ddTools.isEmpty(theDependentField.getValue())
				){
					theDependentField.$elem.val($j.ddMM.dateNowFormatted);
				}
			//Clear dependent value if it is not used
			}else{
				theDependentField.$elem.val('');
			}
		}
	);
};
})(jQuery);
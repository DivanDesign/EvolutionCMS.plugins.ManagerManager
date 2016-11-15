<?php
/**
 * mm_ddMaxLength
 * @version 1.2 (2016-11-16)
 * 
 * @desc Widget for ManagerManager plugin allowing number limitation of chars inputing in fields (or TVs).
 * 
 * @uses PHP >= 5.4.
 * @uses MODXEvo.plugin.ManagerManager >= 0.7.
 * 
 * @param $params {array_associative|stdClass} — The object of params. @required
 * @param $params['fields'] {string_commaSeparated} — The name(s) of the document fields (or TVs) which the widget is applied to. @required
 * @param $params['length'] {integer} — Maximum number of inputing chars. Default: 150.
 * @param $params['roles'] {string_commaSeparated} — The roles that the widget is applied to (when this parameter is empty then widget is applied to the all roles). Default: ''.
 * @param $params['templates'] {string_commaSeparated} — Id of the templates to which this widget is applied. Default: ''.
 * 
 * @event OnDocFormPrerender
 * @event OnDocFormRender
 * 
 * @link http://code.divandesign.biz/modx/mm_ddmaxlength/1.2
 * 
 * @copyright 2012–2016 DivanDesign {@link http://www.DivanDesign.biz }
 */

function mm_ddMaxLength($params){
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
				'length'
			]
		]);
	}
	
	//Defaults
	$params = (object) array_merge([
		'fields' => '',
		'length' => 150,
		'roles' => '',
		'templates' => ''
	], (array) $params);
	
	if (!useThisRule($params->roles, $params->templates)){return;}
	
	global $modx;
	$e = &$modx->Event;
	
	$output = '';
	
	if ($e->name == 'OnDocFormPrerender'){
		$widgetDir = $modx->config['site_url'].'assets/plugins/managermanager/widgets/ddmaxlength/';
		
		$output .= includeJsCss($widgetDir.'ddmaxlength.css', 'html');
		$output .= includeJsCss($widgetDir.'jQuery.ddMM.mm_ddMaxLength.js', 'html', 'jQuery.ddMM.mm_ddMaxLength', '1.0');
		
		$e->output($output);
	}else if ($e->name == 'OnDocFormRender'){
		$params->fields = getTplMatchedFields($params->fields, 'text,textarea');
		if ($params->fields == false){return;}
		
		$output .= '//---------- mm_ddMaxLength :: Begin -----'.PHP_EOL;
		
		foreach ($params->fields as $field){
			$output .=
'
$j.ddMM.fields.'.$field.'.$elem.addClass("ddMaxLengthField").each(function(){
	$j(this).parent().append("<div class=\"ddMaxLengthCount\"><span></span></div>");
}).ddMaxLength({
	max: '.$length.',
	containerSelector: "div.ddMaxLengthCount span",
	warningClass: "maxLengthWarning"
});
';
		}
		
		$output .= '//---------- mm_ddMaxLength :: End -----'.PHP_EOL;
		
		$e->output($output);
	}
}
?>
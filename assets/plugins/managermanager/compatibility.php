<?php
function mm_compatibility_init($params){
	$params = (object) $params;
	
	//Backward compatibility
	global
		$ManagerManagerCore_currentPage,
		$mm_pluginDir,
		$mm_version,
		$mm_current_page,
		$mm_fields,
		$mm_includedJsCss,
		$e
	;
	
	$ManagerManagerCore_currentPage = $params->currentPage;
	
	$mm_version = \ManagerManager\Core::$pluginVersion;
	$mm_pluginDir = \ManagerManager\Core::getPluginPaths()->resource;
	$mm_fields = \ManagerManager\Core::getDocFields();
	
	
	$mm_current_page = $ManagerManagerCore_currentPage->toArray();
	
	
	$mm_includedJsCss = (array) $ManagerManagerCore_currentPage->includedJsCss_get();
	foreach (
		$mm_includedJsCss as
		$name =>
		$value
	){
		$mm_includedJsCss[$name] = (array) $value;
	}
	
	$e = &$modx->Event;
}

/**
 * @deprecated, use ManagerManager\Page::isRuleMatched()
 */
function useThisRule(
	$roles = '',
	$templates = '',
	$additionalInfo = ''
){
	global
		$ManagerManagerCore_currentPage
	;
	
	$result = false;
	
	if (is_object($ManagerManagerCore_currentPage)){
		$result = $ManagerManagerCore_currentPage->isRuleMatched([
			'roles' => $roles,
			'templates' => $templates
		]);
	}
	
	return $result;
}

/**
 * @deprecated, use ManagerManager\Page::includeJsCss()
 */
function includeJsCss(
	$source,
	$outputType = 'js',
	$name = '',
	$version = '',
	$isPlaintext = false,
	$extension = ''
){
	global
		$ManagerManagerCore_currentPage
	;
	
	return $ManagerManagerCore_currentPage->includeJsCss([
		'source' => $source,
		'outputType' => $outputType,
		'isPlaintext' => $isPlaintext,
		'name' => $name,
		'version' => $version,
		'extension' => $extension
	]);
}

/**
 * @deprecated, use ManagerManager\Page::includeJsCss()
 */
function includeJs($url, $outputType = 'js', $name = '', $version = ''){
	return includeJsCss($url, $outputType, $name, $version);
}

/**
 * @deprecated, use ManagerManager\Page::includeJsCss()
 */
function includeCss($url, $outputType = 'js'){
	return includeJsCss($url, $outputType);
}
?>
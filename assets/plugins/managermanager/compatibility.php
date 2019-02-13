<?php
//Backward compatibility
global
	$ManagerManagerCore,
	$mm_pluginDir,
	$mm_version,
	$mm_current_page,
	$mm_fields,
	$mm_includedJsCss,
	$e;

$mm_version = \ManagerManager\Core::$pluginVersion;
$mm_pluginDir = $ManagerManagerCore->getPluginPath();
$mm_fields = $ManagerManagerCore->getDocFields();


$mm_current_page = $ManagerManagerCore->currentPage->toArray();


$mm_includedJsCss = (array) $ManagerManagerCore->currentPage->includedJsCss_get();
foreach (
	$mm_includedJsCss as
	$name => $value
){
	$mm_includedJsCss[$name] = (array) $value;
}

$e = $ManagerManagerCore->currentPage->event;

/**
 * @deprecated, use ManagerManager\Page::isRuleMatched()
 */
function useThisRule(
	$roles = '',
	$templates = ''
){
	global $ManagerManagerCore;
	
	return $ManagerManagerCore->currentPage->isRuleMatched([
		'roles' => $roles,
		'templates' => $templates
	]);
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
	global $ManagerManagerCore;
	
	return $ManagerManagerCore->currentPage->includeJsCss([
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
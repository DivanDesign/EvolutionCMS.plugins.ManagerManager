<?php
//Kill them all
$_GET = $_POST = $_REQUEST = [];

//Root dir
$richtextIncludeDirectory = '../../../../../../';

//Define MGR_DIR
if (file_exists($richtextIncludeDirectory.'assets/cache/siteManager.php')){include_once($richtextIncludeDirectory.'assets/cache/siteManager.php');}
if (!defined('MGR_DIR')){define('MGR_DIR', 'manager');}

$richtextIncludeDirectory .= MGR_DIR.'/';

//Config
$_SERVER['PHP_SELF'] = $_SERVER['SCRIPT_NAME'] = '/';
require_once($richtextIncludeDirectory.'includes/protect.inc.php');
require_once($richtextIncludeDirectory.'includes/config.inc.php');
startCMSSession();

if ($_SESSION['mgrValidated']){
	define('IN_MANAGER_MODE', true);
	//Setup the MODx API
	define('MODX_API_MODE', true);
	//Initiate a new document parser
	require_once($richtextIncludeDirectory.'includes/document.parser.class.inc.php');
	$modx = new DocumentParser;
	
	//Provide the MODx DBAPI
	$modx->db->connect();
	//Provide the $modx->documentMap and user settings
	$modx->getSettings();
	
	$mmDir = 'assets/plugins/managermanager/';
	$windowDir = $mmDir.'widgets/ddmultiplefields/richtext/';
	
	//Include the ddTools library
	require_once($modx->config['base_path'].$mmDir.'modx.ddtools.class.php');
	
	$temp = $modx->invokeEvent('OnRichTextEditorInit', [
		'editor' => 'TinyMCE',
		'elements' => ['ddMultipleFields_richtext']
	]);
	
	echo ddTools::parseText([
		'text' => file_get_contents($modx->config['base_path'].$windowDir.'template.html'),
		'data' => [
			'site_url' => $modx->config['site_url'],
			'mmDir' => $mmDir,
			'windowDir' => $windowDir,
			'charset' => '<meta charset="'.$modx->config['modx_charset'].'" />',
			'style' => MODX_MANAGER_URL.'media/style/'.$modx->config['manager_theme'].'/style.css',
			'tinyMCE' => $temp[0]
		],
		'mergeAll' => false
	]);
}else{
	echo file_get_contents(dirname(__FILE__).'/index.html');
}
?>
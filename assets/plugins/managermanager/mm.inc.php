<?php
/**
 * ManagerManager
 * @version 0.6.2 (2014-05-28)
 * 
 * @desc Used to manipulate the display of document fields in the manager.
 * 
 * @uses PHP >= 5.4.
 * @uses (MODX)EvolutionCMS >= 1.1 {@link https://github.com/evolution-cms/evolution }
 * @uses (MODX)EvolutionCMS.libraries.ddTools >= 0.24.1 (included) {@link https://code.divandesign.biz/modx/ddtools }
 * 
 * @author DivanDesign studio {@link DivanDesign.biz }
 * @author Nick Crossland {@link rckt.co.uk }
 * 
 * @inspiration HideEditor plugin by Timon Reinhard and Gildas; HideManagerFields by Brett @ The Man Can!
 * 
 * @license Released under the GNU General Public License: http://creativecommons.org/licenses/GPL/2.0/
 * 
 * @link https://code.divandesign.biz/modx/managermanager
 * 
 * @copyright 2012–2016
 */

namespace ManagerManager;

//Include needed files
if(!class_exists('Core')){
	require_once(
		MODX_BASE_PATH .
		'assets/plugins/managermanager/require.php'
	);
}

//Install required resources if needed and include ddTools
new Installer();

//Include (MODX)EvolutionCMS.libraries.ddTools
require_once(
	MODX_BASE_PATH .
	'assets/libs/ddTools/modx.ddtools.class.php'
);

if (!Core::isPluginUsed()){
	return;
}

global
	$ManagerManagerCore
;

if (is_object($ManagerManagerCore)){
	//Fire event
	$ManagerManagerCore->currentPage->fireCurrentEvent();
}else{
	$ManagerManagerCore = new Core([
		'copmatibility' => mm_compatibility_init
	]);
}
?>
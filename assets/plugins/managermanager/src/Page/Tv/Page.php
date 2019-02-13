<?php
namespace ManagerManager\Page\Tv;

use ManagerManager\Core;

class Page extends \ManagerManager\Page\Page {
	protected
		$injectedHTML = [
			'OnTVFormRender' => [
				[
					'name' => 'script',
					'data' => [
						'content' => '
$j("select[name="type"] option").each(function(){
	var $this = $j(this);
	
	if(!($this.text().match("deprecated") == null)){
		$this.remove();
	}
});
						'
					]
				]
			]
		]
	;
	
	/**
	 * fireCurrentEvent
	 * @version 1.0.1 (2019-02-12)
	 *
	 * @return {void}
	 */
	public function fireCurrentEvent(){
		if (
			//If need to inject some HTML elements on this event
			isset($this->injectedHTML->{$this->event->name}) &&
			//Should we remove deprecated Template variable types from the TV creation list?
			$this->event->params['remove_deprecated_tv_types_pref'] == 'yes'
		){
			parent::fireCurrentEvent();
		}
	}
}
?>
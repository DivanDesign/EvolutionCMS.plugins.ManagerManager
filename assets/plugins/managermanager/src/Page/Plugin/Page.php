<?php
namespace ManagerManager\Page\Plugin;

use ManagerManager\Core;

class Page extends \ManagerManager\Page\Page {
	protected
		$injectedHTML = [
			'OnPluginFormRender' => []
		]
	;
	
	/**
	 * fireCurrentEvent
	 * @version 1.0.1 (2020-05-20)
	 * 
	 * @return {void}
	 */
	public function fireCurrentEvent(){
		if (
			//If need to inject some HTML elements on this event
			isset($this->injectedHTML->{$this->event->name})
		){
			$editingPluginName = \ddTools::$modx->db->getValue(\ddTools::$modx->db->select(
				'name',
				\ddTools::$tables['site_plugins'],
				// The ID of the plugin we're editing
				'id=' . $this->event->params['id']
			));
			
			//if it's the right plugin
			if (strtolower($editingPluginName) == 'managermanager'){
				//TODO: It must be revised in the future, using “$this->event->output” is undesirable. All injected HTML must be injected through “$this->injectedHTML”.
				$tableChildElementsData = [
					'th' => [
						'attrs.class' => 'gridHeader'
					],
					'td' => [
						//TODO 'gridAltItem' is flexed now
						'attrs.class' => 'gridItem'
					]
				];
				
				$output_resourceTablesTab = \ManagerManager\Element\Element::create([
					'name' => 'p',
					'params' => [
						'data' => [
							'content' => 'These are the IDs for current templates, tvs and roles in your site.'
						]
					]
				])->render();
				
				//Render templates table
				$output_resourceTablesTab .= \ManagerManager\Element\Element::create([
					'name' => 'h3',
					'params' => [
						'data' => [
							'content' => 'Templates'
						]
					]
				])->render();
				$output_resourceTablesTab .= \ManagerManager\Element\Element::create([
					'name' => 'table',
					'params' => [
						'headerCellsContent' => [
							'Template name',
							'Template description',
							'ID'
						],
						'bodyCellsContent' => \ddTools::$modx->db->makeArray(\ddTools::$modx->db->select(
							'templatename, description, id',
							\ddTools::$tables['site_templates'],
							'',
							//Sort by first column
							'templatename ASC'
						)),
						'childElementsData' => $tableChildElementsData
					]
				])->render();
				
				//Render tvs table
				$output_resourceTablesTab .= \ManagerManager\Element\Element::create([
					'name' => 'h3',
					'params' => [
						'data' => [
							'content' => 'TVs'
						]
					]
				])->render();
				$output_resourceTablesTab .= \ManagerManager\Element\Element::create([
					'name' => 'table',
					'params' => [
						'headerCellsContent' => [
							'TV name',
							'TV caption',
							'ID'
						],
						'bodyCellsContent' => \ddTools::$modx->db->makeArray(\ddTools::$modx->db->select(
							'name, caption, id',
							\ddTools::$tables['site_tmplvars'],
							'',
							//Sort by first column
							'name ASC'
						)),
						'childElementsData' => $tableChildElementsData
					]
				])->render();
				
				//Render roles table
				$output_resourceTablesTab .= \ManagerManager\Element\Element::create([
					'name' => 'h3',
					'params' => [
						'data' => [
							'content' => 'Roles'
						]
					]
				])->render();
				$output_resourceTablesTab .= \ManagerManager\Element\Element::create([
					'name' => 'table',
					'params' => [
						'headerCellsContent' => [
							'Role name',
							'ID'
						],
						'bodyCellsContent' => \ddTools::$modx->db->makeArray(\ddTools::$modx->db->select(
							'name, id',
							\ddTools::$tables['user_roles'],
							'',
							//Sort by first column
							'name ASC'
						)),
						'childElementsData' => $tableChildElementsData
					]
				])->render();
				
				//Script element is needed for calling `$this->injectedHTML_addJsCssInit`
				$this->injectedHTML->{$this->event->name} = [
					(object) [
						'name' => 'script',
						'data' => [
							'content' => 'window.mm_lastTab = "tabEvents";'
						]
					]
				];
				
				parent::fireCurrentEvent();
				
				$this->event->output(
					'<script type="text/javascript">' .
					PHP_EOL
				);
				
				mm_createTab(
					'Templates, TVs &amp; Roles',
					'rolestemplates',
					'',
					'',
					$output_resourceTablesTab
				);
				
				$this->event->output('</script>');
			}
		}
	}
}
?>
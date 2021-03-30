<?php
namespace ManagerManager\Element\Table;

use ManagerManager\Core;

class Element extends \ManagerManager\Element\Element {
	private
		/**
		 * @var $headerCellsContent {array} — Table header content.
		 * @var $headerCellsContent[i] {string} — Cell.
		 */
		$headerCellsContent = [],
		/**
		 * @var $bodyCellsContent {array} — Table body content.
		 * @var $bodyCellsContent[i] {array} — Row.
		 * @var $bodyCellsContent[i][i] {string} — Cell.
		 */
		$bodyCellsContent = [],
		
		$columnNumber = 0,
		
		/**
		 * @var $childElementsData {stdClass}
		 * @var $childElementsData->{elementName} {arrayAssociative}
		 * @var $childElementsData->{elementName}[placeholderName] {string}
		 */
		$childElementsData = [
			'tr' => [],
			'th' => [],
			'td' => []
		]
	;
	
	/**
	 * __construct
	 * @version 1.0 (2019-01-24)
	 * 
	 * @param $params {arrayAssociative|stdClass} — The object of params. See parent class.
	 * @param $params->bodyCellsContent {array} — Table rows data. Default: —.
	 * @param $params->bodyCellsContent[i] {array} — Row.
	 * @param $params->bodyCellsContent[i][i] {string} — Cell.
	 * @param $params->headerCellsContent {array} — Table column headers. Default: —.
	 * @param $params->headerCellsContent[i] {string} — Content. Default: —.
	 * @param $params->childElementsData {arrayAssociative|stdClass} — Elements data for tr, th and td. Default: —.
	 * @param $params->childElementsData->tr {arrayAssociative} — . Default: [].
	 * @param $params->childElementsData->th {arrayAssociative} — . Default: [].
	 * @param $params->childElementsData->td {arrayAssociative} — . Default: [].
	 */
	public function __construct($params = []){
		parent::__construct($params);
		
		if (isset($params->headerCellsContent)){
			$this->headerCellsContent = $params->headerCellsContent;
		}
		
		if (isset($params->bodyCellsContent)){
			$this->bodyCellsContent = $params->bodyCellsContent;
		}
		
		if (isset($params->childElementsData)){
			$this->childElementsData = $params->childElementsData;
		}
		
		$this->childElementsData = (object) $this->childElementsData;
	}
	
	/**
	 * render_header
	 * @version 1.0 (2019-02-02)
	 * 
	 * @return {string}
	 */
	private function render_header(){
		$result = '';
		
		foreach (
			$headerCellsContent as
			$cell
		){
			$result .= parent::create([
				'name' => 'th',
				'params' => [
					'data' => array_merge(
						$this->childElementsData->th,
						[
							'content' => $cell
						]
					)
				]
			])->render();
		}
		
		if ($result != ''){
			//Create row
			$result .= parent::create([
				'name' => 'tr',
				'params' => [
					'data' => array_merge(
						$this->childElementsData->tr,
						[
							'content' => $result
						]
					)
				]
			])->render();
		}
		
		return $result;
	}
	
	/**
	 * render_body
	 * @version 1.0 (2019-02-01)
	 * 
	 * @return {string}
	 */
	private function render_body(){
		$result = '';
		
		foreach (
			$this->bodyCellsContent as
			$row
		){
			$rowContent = '';
			
			foreach (
				$row as
				$cell
			){
				$rowContent .= parent::create([
					'name' => 'td',
					'params' => [
						'data' => array_merge(
							$this->childElementsData->td,
							[
								'content' => $cell
							]
						)
					]
				])->render();
			}
			
			//Create row
			$result .= parent::create([
				'name' => 'tr',
				'params' => [
					'data' => array_merge(
						$this->childElementsData->tr,
						[
							'content' => $rowContent
						]
					)
				]
			])->render();
		}
		
		return $result;
	}
	
	/**
	 * render
	 * @version 1.0.1 (2020-05-20)
	 * 
	 * @return {string}
	 */
	public function render(){
		$this->data['content'] =
			$this->render_header() .
			$this->render_body()
		;
		
		return parent::render();
	}
}
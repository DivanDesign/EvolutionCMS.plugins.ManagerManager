<?php
/**
 * mm_ddFillMenuindex
 * @version 1.1.1 (2016-07-01)
 * 
 * @desc A widget for the ManagerManager plugin that was made to keep “menuindex” in order:
 * 1. “menuindex” of a new document is set equal to a free minimal value within its parent (“menuindex”, by default, used to be the number of siblings which was not always preferred).
 * 2. “menuindex” is incremented automatically by 1 on document duplicate.
 * 
 * @uses ManagerManager plugin 0.5.
 * 
 * @param $parentId {integer|''} - Id of parent document. Default: '' (all parents).
 * 
 * @link http://code.divandesign.biz/modx/mm_ddfillmenuindex/1.1.1
 * 
 * @copyright 2013–2016 DivanDesign {@link http://www.DivanDesign.biz }
 */

function mm_ddFillMenuindex($parentId = ''){
	global $modx, $content;
	$e = &$modx->Event;
	$siteContentTable = ddTools::$tables['site_content'];
	
	//Если у нас правильное событие и это создание документа
	if ($e->name == 'OnDocFormPrerender' && $_REQUEST['a'] == 4){
		$documentParentId = intval($_REQUEST['pid']);
		
		//Если задан конкретный родитель, для которого должен работать виджет и он не совпадает с тем, что сейчас
		if ($parentId !== '' && $parentId != $documentParentId){
			//Давай, до свидания!
			return;
		}
		
		//Получаем наименьший свободный menuindex у документов данного родителя. Кхэм, запрос писался глубокой ночью, так что за его оптимальность отвечать сложно ;-)
		$freeMenuIndex = $modx->db->getValue('
			SELECT
				min(`sc`.`menuindex`)
			FROM '.$siteContentTable.' AS `sc`
				LEFT JOIN (
					SELECT `sc1`.`menuindex`
					FROM '.$siteContentTable.' AS `sc1`, '.$siteContentTable.' AS `sc2`
					WHERE `sc1`.`menuindex` + 1 = `sc2`.`menuindex` AND `sc1`.`parent` = '.$documentParentId.' AND `sc2`.`parent` = '.$documentParentId.'
				) AS `z`
				ON `sc`.`menuindex` = `z`.`menuindex`
			WHERE
				`z`.`menuindex` IS NULL AND
				`sc`.`parent` = '.$documentParentId.'
		');
		
		//Если такового нет (дочерних вообще нет). P.S.: Если он пуст, то переопределять нет смысла, там всё хорошо и так поставится.
		if (!is_null($freeMenuIndex)){
			//Задаём следующим
			$content['menuindex'] = $freeMenuIndex + 1;
		}
	}else if ($e->name == 'OnDocDuplicate'){
		//Инкрементируем menuindex при копировании
		$modx->db->query('
			UPDATE
				'.$siteContentTable.'
			SET
				`menuindex` = `menuindex` + 1
			WHERE
				`id` = '.$e->params['new_id'].'
		');
	}
}
?>

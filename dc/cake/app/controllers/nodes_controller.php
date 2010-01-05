<?php
class NodesController extends AppController {

	var $name = 'Nodes';
	var $uses = array('Node', 'ContentTypeDcc', 'LegacySurveyResponse', 'LegacySurveyCustom');
	var $scaffold;
	
	
	function export(){
		$this->autoRender = false;
		$input = $this->import();
/* 		debug($input); */
		$now = time();
		foreach($input as $value){
			$legacy_url = $value['Node']['url'];
			$node_id = $value['Node']['nid'];
			$output[] = "INSERT INTO `drupal_path_redirect` (`rid`, `source`, `redirect`, `query`, `fragment`, `language`, `type`, `last_used`) VALUES ('', '$legacy_url', 'node/$node_id', '', '', '', 301, $now);\r";

		}
		echo('<pre>'.implode('', $output).'</pre>');
	}
	
	function import(){
		$this->autoRender = false;
		$urls = array(
			46 => 'alamedabrakewheel.html', 
			55 => 'alamedadrymaster.html', 
			56 => 'contracostasobotka.html', 
			57 => 'contracostawalnutcreek.html', 
			62 => 'contracostaorindamotor.html', 
			66 => 'alamedasuperior.html', 
			74 => 'alamedahummer.html', 
			77 => 'contracostarobertselectrical.html', 
			78 => 'contracostawolfeflooring.html', 
			79 => 'alamedaabbey.html', 
			81 => 'scengineeredsoil.html', 
			90 => 'alamedamollymaid.html', 
			93 => 'alamedaverbrugge.html', 
			99 => 'alamedafishman.html', 
			103 => 'contracostaj_dpainting.html', 
			110 => 'alamedapacificplumbing.html', 
			112 => 'contracostapooldoc.html', 
			115 => 'alamedageneralroofing.html', 
			118 => 'marinsureshred.html', 
			123 => 'contracostaantiochvet.html', 
			125 => 'contracostacustomexterior.html', 
			126 => 'alamedalarsen.html', 
			127 => 'alamedaqualitywindows.html', 
			128 => 'contracostadraperiesbysusan.html', 
			142 => 'contracostapauldaviskb.html', 
			165 => 'alamedamarcoroofing.html', 
			191 => 'marin_marinfence.html', 
			204 => 'marinmiketesta.html', 
			208 => 'marincascade.html', 
			211 => 'sanmateoamericanhomerenewalincwindow.html', 		
		);
		$nodes = array_keys($urls);
	//	sort($urls);
	//	debug($nodes);
	$abs_urls = null;
		foreach($urls as $url){
			$abs_urls.= 'http://diamond.nu-designs.us/'.$url."\r\n";
		}
		//debug($abs_urls);
		$items = $this->Node->findAll(array('nid' => $nodes), 'nid, title');
		$count = 0;
		foreach($items as $item){
			$items[$count]['Node']['url'] =  $urls[$item['Node']['nid']];
		$count++;

		}
				//return($items);
				debug($items);
	}
	
	
	function export_surveys(){
		$this->autoRender = false;
		$urls = array(
			'alamedaabbey_comments.html' => 'survey/abbey-flooring-center-of-livermore', 
			'alamedabrakewheel_comments.html' => 'survey/brake-wheel-center', 
			'alamedadrymaster_comments.html' => 'survey/dry-master-carpet-care', 
			'alamedafishman_commemts.html' => 'survey/fishman-financial-group-inc', 
			'alamedagenroofing_comments.html' => 'survey/general-roofing-company', 
			'alamedahummer_comments.html' => 'survey/william-r-hummer-dds', 
			'alamedalarsen_comments.html' => 'survey/larsen-construction', 
			'alamedamarcoroofing_comments.html' => 'survey/marco-roofing', 
			'alamedamollymaid_comments.html' => 'survey/molly-maid-of-east-bay-hills',
			'alamedapacificplumbing_comments.html' => 'survey/molly-maid-of-east-bay-hills', 
			'alamedaqualitywindow_comments.html' => 'survey/quality-windows-doors-inc', 
			'alamedasuperior_comments.html' => 'survey/superior-builders-remodelers', 
			'alamedaverbrugge_comments.html' => 'survey/michael-ver-brugge-construction', 
			'contracostaantiochvet_comments.html' => 'survey/antioch-veterinary-hospital-clinic', 
			'contracostacustomexterior_comments.html' => 'survey/custom-exteriors-inc', 
			'contracostadraperiesbysusan_comments.html' => 'survey/draperies-by-susan-inc', 
			'contracostaj_dpainting_comments.html' => 'survey/j-d-painting', 
			'contracostaorindamotor_comments.html' => 'survey/orinda-motors-inc', 
			'contracostapauldaviskb_comments.html' => 'survey/paul-davis-restoration-remodeling', 
			'contracostapooldoc_comments.html' => 'survey/the-pool-doctor', 
			'contracostarobertselectrical_comments.html' => 'survey/roberts-electric-company-inc', 
			'contracostasobotka_comments.html' => 'survey/sobotka-air-systems', 
			'contracostawalnutcreek_comments.html' => 'survey/walnut-creek-sheet-metal-furnace-air-conditioning-inc', 
			'contracostawolfeflooring_comments.html' => 'survey/wolfes-floor-covering', 
			'marin_marinfence_comments.html' => 'survey/marin-fence-company', 
			'marincascade_comments.html' => 'survey/cascade-roofing-company', 
			'marinmiketesta_comments.html' => 'survey/mike-testa-plumbing-inc', 
			'marinsureshred_comments.html' => 'survey/sureshred', 
			'sanmateoamericanhomerenewalincwindow_comments.html' => 'survey/american-home-renewal-inc', 
			'scengine_soil_com.html' => 'survey/engineered-soil-repairs-inc', 
		);
			$now = time();
			foreach($urls as $key => $value){
				$legacy_url = $key;
				$dest = $value;
				$output[] = "INSERT INTO `drupal_path_redirect` (`rid`, `source`, `redirect`, `query`, `fragment`, `language`, `type`, `last_used`) VALUES ('', '$legacy_url', '$dest', '', '', '', 301, $now);\r";
	
			}
			echo('<pre>'.implode('', $output).'</pre>');

		
		
	}
	
}
?>
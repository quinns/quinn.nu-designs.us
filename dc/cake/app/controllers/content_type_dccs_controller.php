<?php
class ContentTypeDccsController extends AppController {

	var $name = 'ContentTypeDccs';
	var $helpers = array('Html', 'Form');
	
	var $uses = array('ContentTypeDcc', 'CompaniesRegion');


	function export(){
		Configure::write('debug', 1);
		$this->autoRender = false;
		$this->ContentTypeDcc->recursive = 2;
		$items = $this->ContentTypeDcc->findAll("CompaniesRegion.legacy_url <> ''", 'DISTINCT CompaniesRegion.legacy_url, field_legacy_company_id_value, nid',  'legacy_url', 0);
		$now = time();
		$consumed_urls = array();
		foreach($items as $item){
			$legacy_url =  $item['CompaniesRegion']['legacy_url'];
			$node_id = $item['ContentTypeDcc']['nid'];
				if(!in_array($item['CompaniesRegion']['legacy_url'], $consumed_urls)){
						$output[] = "INSERT INTO `drupal_path_redirect` (`rid`, `source`, `redirect`, `query`, `fragment`, `language`, `type`, `last_used`) VALUES ('', '$legacy_url', 'node/$node_id', '', '', '', 301, $now);\r";
				} 
				$consumed_urls[] = $item['CompaniesRegion']['legacy_url'];
		}
		$output = implode("\n", $output);
		echo "<pre>$output</pre>";
	}


}
 ?>
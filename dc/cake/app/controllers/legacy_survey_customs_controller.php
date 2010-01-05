<?php
class LegacySurveyCustomsController extends AppController {

	var $name = 'LegacySurveyCustoms';
	var $uses = array('LegacySurveyCustom', 'Redirect', 'Survey', 'Alias');
	function index(){
		Configure::write('debug', 1);
		$now = time();
		$this->autoRender = false;
		$surveys = $this->LegacySurveyCustom->findAll('LegacySurveyCustom.url <> ""', 'url, CompaniesRegion.legacy_url, id, company_id, CompaniesRegion.legacy_url', null, 0);
		$count = 0;
		foreach($surveys as $survey){
			$redirect =  $this->Redirect->read(null, $survey['CompaniesRegion']['legacy_url']);
			$alias = $this->Alias->read(null, $redirect['Redirect']['redirect']);
			$output[$count]['survey'] = $survey;
			$output[$count]['redirect'] = $redirect;
			$output[$count]['alias'] = $alias;
			$count++;
		}
		$string = null;
		foreach($output as $value){
			$source = $value['survey']['LegacySurveyCustom']['url'];
			$dest = $value['alias']['Alias']['dst'];
			$dest = str_ireplace('report/', 'survey/', $dest);
			$redirects[$source] = $dest;			
			$string[] = "$source\t$dest \r";
			}
		$redirects = array_unique($redirects);
		ksort($redirects);
		return($redirects);
	}
}
?>
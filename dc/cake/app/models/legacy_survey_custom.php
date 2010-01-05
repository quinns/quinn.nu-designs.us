<?php
class LegacySurveyCustom extends AppModel {

	var $name = 'LegacySurveyCustom';
	var $useTable = 'legacy_survey_response_custom_urls';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'CompaniesRegion' => array(
			'className' => 'CompaniesRegion',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),


	);
	



}
?>
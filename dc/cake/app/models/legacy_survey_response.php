<?php
class LegacySurveyResponse extends AppModel {

	var $name = 'LegacySurveyResponse';

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
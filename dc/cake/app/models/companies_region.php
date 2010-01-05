<?php
class CompaniesRegion extends AppModel {

	var $name = 'CompaniesRegion';
	var $useTable = 'legacy_companies_regions';
	var $primaryKey = 'company_id';
	
		var $belongsTo = array(
	        'Node' => array(
	            'className'    => 'Node',
	            'foreignKey'    => 'nid',
	            'fields' => array(
	            	'title',
	            ),
	        ),
/*
	        'CompaniesRegion' => array (
	        	'className' => 'CompaniesRegion',
	        	'foreignKey' => 'field_legacy_company_id_value',
	            'fields' => array(
	            	'DISTINCT legacy_url',
	            ),

	        ),
*/
	    ); 
	    
}
?>
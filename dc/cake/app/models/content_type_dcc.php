<?php
class ContentTypeDcc extends AppModel {

	var $name = 'ContentTypeDcc';
	var $useTable = 'content_type_dcc';
	var $primaryKey = 'nid';

	var $belongsTo = array(
	        'Node' => array(
	            'className'    => 'Node',
	            'foreignKey'    => 'nid',
	            'fields' => array(
	            	'title',
	            ),
	        ),
	        'CompaniesRegion' => array (
	        	'className' => 'CompaniesRegion',
	        	'foreignKey' => 'field_legacy_company_id_value',
	            'fields' => array(
	            	'DISTINCT legacy_url',
	            ),

	        ),
	    );  

}
?>

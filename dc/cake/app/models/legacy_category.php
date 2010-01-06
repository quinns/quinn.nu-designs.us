<?php
class LegacyCategory extends AppModel {

	var $name = 'LegacyCategory';
	var $belongsTo = array(
	        'TermData' => array(
	            'className'    => 'TermData',
	            'foreignKey'    => 'title',
	        ),

	 ); 
}
?>
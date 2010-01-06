<?php
class LegacyRegion extends AppModel {

	var $name = 'LegacyRegion';
	var $belongsTo = array(
	        'TermData' => array(
	            'className'    => 'TermData',
	            'foreignKey'    => 'abbreviation_2',
	        ),

	 ); 
}
?>
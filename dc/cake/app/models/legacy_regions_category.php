<?php
class LegacyRegionsCategory extends AppModel {

	var $name = 'LegacyRegionsCategory';
	var $belongsTo = array(
	

	        
	        'LegacyRegion' => array(
	            'className'    => 'LegacyRegion',
	            'foreignKey'    => 'region_id',
	        ),
	         'LegacyCategory' => array(
	            'className'    => 'LegacyCategory',
	            'foreignKey'    => 'category_id',
	        ),
	        
	       


	        
	        
	 ); 
	    
}
?>
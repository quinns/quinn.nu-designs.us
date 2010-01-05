<?php 
/* SVN FILE: $Id$ */
/* CompaniesRegion Fixture generated on: 2009-12-30 17:16:24 : 1262222184*/

class CompaniesRegionFixture extends CakeTestFixture {
	var $name = 'CompaniesRegion';
	var $table = 'companies_regions';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'company_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'region_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'category_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'legacy_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'return_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'comments_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'redirect_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'status_id' => array('type'=>'integer', 'null' => true, 'default' => '1'),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'meta_keywords' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'company_id'  => 1,
		'region_id'  => 1,
		'category_id'  => 1,
		'legacy_url'  => 'Lorem ipsum dolor sit amet',
		'return_url'  => 'Lorem ipsum dolor sit amet',
		'comments_url'  => 'Lorem ipsum dolor sit amet',
		'redirect_url'  => 'Lorem ipsum dolor sit amet',
		'status_id'  => 1,
		'created'  => '2009-12-30 17:16:24',
		'modified'  => '2009-12-30 17:16:24',
		'meta_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
	));
}
?>
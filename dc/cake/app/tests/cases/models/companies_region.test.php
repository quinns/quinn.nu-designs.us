<?php 
/* SVN FILE: $Id$ */
/* CompaniesRegion Test cases generated on: 2009-12-30 17:16:24 : 1262222184*/
App::import('Model', 'CompaniesRegion');

class CompaniesRegionTestCase extends CakeTestCase {
	var $CompaniesRegion = null;
	var $fixtures = array('app.companies_region');

	function startTest() {
		$this->CompaniesRegion =& ClassRegistry::init('CompaniesRegion');
	}

	function testCompaniesRegionInstance() {
		$this->assertTrue(is_a($this->CompaniesRegion, 'CompaniesRegion'));
	}

	function testCompaniesRegionFind() {
		$this->CompaniesRegion->recursive = -1;
		$results = $this->CompaniesRegion->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('CompaniesRegion' => array(
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
		$this->assertEqual($results, $expected);
	}
}
?>
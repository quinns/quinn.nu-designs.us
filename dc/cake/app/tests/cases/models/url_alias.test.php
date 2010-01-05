<?php 
/* SVN FILE: $Id$ */
/* UrlAlias Test cases generated on: 2009-12-30 17:03:37 : 1262221417*/
App::import('Model', 'UrlAlias');

class UrlAliasTestCase extends CakeTestCase {
	var $UrlAlias = null;
	var $fixtures = array('app.url_alias');

	function startTest() {
		$this->UrlAlias =& ClassRegistry::init('UrlAlias');
	}

	function testUrlAliasInstance() {
		$this->assertTrue(is_a($this->UrlAlias, 'UrlAlias'));
	}

	function testUrlAliasFind() {
		$this->UrlAlias->recursive = -1;
		$results = $this->UrlAlias->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('UrlAlias' => array(
			'pid'  => 1,
			'src'  => 'Lorem ipsum dolor sit amet',
			'dst'  => 'Lorem ipsum dolor sit amet',
			'language'  => 'Lorem ipsu'
		));
		$this->assertEqual($results, $expected);
	}
}
?>
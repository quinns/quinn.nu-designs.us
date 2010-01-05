<?php 
/* SVN FILE: $Id$ */
/* LegacyCompaniesRegionsController Test cases generated on: 2009-12-31 13:38:20 : 1262295500*/
App::import('Controller', 'LegacyCompaniesRegions');

class TestLegacyCompaniesRegions extends LegacyCompaniesRegionsController {
	var $autoRender = false;
}

class LegacyCompaniesRegionsControllerTest extends CakeTestCase {
	var $LegacyCompaniesRegions = null;

	function startTest() {
		$this->LegacyCompaniesRegions = new TestLegacyCompaniesRegions();
		$this->LegacyCompaniesRegions->constructClasses();
	}

	function testLegacyCompaniesRegionsControllerInstance() {
		$this->assertTrue(is_a($this->LegacyCompaniesRegions, 'LegacyCompaniesRegionsController'));
	}

	function endTest() {
		unset($this->LegacyCompaniesRegions);
	}
}
?>
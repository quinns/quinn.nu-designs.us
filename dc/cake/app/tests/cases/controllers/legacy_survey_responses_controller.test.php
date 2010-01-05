<?php 
/* SVN FILE: $Id$ */
/* LegacySurveyResponsesController Test cases generated on: 2009-12-31 13:35:17 : 1262295317*/
App::import('Controller', 'LegacySurveyResponses');

class TestLegacySurveyResponses extends LegacySurveyResponsesController {
	var $autoRender = false;
}

class LegacySurveyResponsesControllerTest extends CakeTestCase {
	var $LegacySurveyResponses = null;

	function startTest() {
		$this->LegacySurveyResponses = new TestLegacySurveyResponses();
		$this->LegacySurveyResponses->constructClasses();
	}

	function testLegacySurveyResponsesControllerInstance() {
		$this->assertTrue(is_a($this->LegacySurveyResponses, 'LegacySurveyResponsesController'));
	}

	function endTest() {
		unset($this->LegacySurveyResponses);
	}
}
?>
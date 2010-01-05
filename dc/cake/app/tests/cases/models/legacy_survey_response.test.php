<?php 
/* SVN FILE: $Id$ */
/* LegacySurveyResponse Test cases generated on: 2009-12-31 13:34:53 : 1262295293*/
App::import('Model', 'LegacySurveyResponse');

class LegacySurveyResponseTestCase extends CakeTestCase {
	var $LegacySurveyResponse = null;
	var $fixtures = array('app.legacy_survey_response', 'app.company', 'app.region', 'app.category');

	function startTest() {
		$this->LegacySurveyResponse =& ClassRegistry::init('LegacySurveyResponse');
	}

	function testLegacySurveyResponseInstance() {
		$this->assertTrue(is_a($this->LegacySurveyResponse, 'LegacySurveyResponse'));
	}

	function testLegacySurveyResponseFind() {
		$this->LegacySurveyResponse->recursive = -1;
		$results = $this->LegacySurveyResponse->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('LegacySurveyResponse' => array(
			'id'  => 1,
			'responses'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'company_id'  => 1,
			'survey_start_date'  => 'Lorem ipsum dolor sit amet',
			'survey_end_date'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2009-12-31 13:34:53',
			'modified'  => '2009-12-31 13:34:53',
			'legacy_url'  => 'Lorem ipsum dolor sit amet',
			'meta_keywords'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'region_id'  => 1,
			'category_id'  => 1,
			'profile_override_url'  => 'Lorem ipsum dolor sit amet',
			'status_id'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>
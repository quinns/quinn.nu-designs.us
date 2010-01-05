<?php 
/* SVN FILE: $Id$ */
/* LegacySurveyResponse Fixture generated on: 2009-12-31 13:34:53 : 1262295293*/

class LegacySurveyResponseFixture extends CakeTestFixture {
	var $name = 'LegacySurveyResponse';
	var $table = 'legacy_survey_responses';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'responses' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'company_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'survey_start_date' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'survey_end_date' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'created' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type'=>'datetime', 'null' => true, 'default' => NULL),
		'legacy_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'meta_keywords' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'region_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'category_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'profile_override_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'status_id' => array('type'=>'integer', 'null' => true, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
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
}
?>
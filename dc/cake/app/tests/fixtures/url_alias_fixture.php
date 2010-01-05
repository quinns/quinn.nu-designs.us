<?php 
/* SVN FILE: $Id$ */
/* UrlAlias Fixture generated on: 2009-12-30 17:03:37 : 1262221417*/

class UrlAliasFixture extends CakeTestFixture {
	var $name = 'UrlAlias';
	var $table = 'url_alias';
	var $fields = array(
		'pid' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'src' => array('type'=>'string', 'null' => false, 'length' => 128, 'key' => 'index'),
		'dst' => array('type'=>'string', 'null' => false, 'length' => 128, 'key' => 'index'),
		'language' => array('type'=>'string', 'null' => false, 'length' => 12),
		'indexes' => array('PRIMARY' => array('column' => 'pid', 'unique' => 1), 'dst_language' => array('column' => array('dst', 'language'), 'unique' => 1), 'src_language' => array('column' => array('src', 'language'), 'unique' => 0))
	);
	var $records = array(array(
		'pid'  => 1,
		'src'  => 'Lorem ipsum dolor sit amet',
		'dst'  => 'Lorem ipsum dolor sit amet',
		'language'  => 'Lorem ipsu'
	));
}
?>
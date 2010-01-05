<?php 
/* SVN FILE: $Id$ */
/* NodesController Test cases generated on: 2009-12-30 16:57:11 : 1262221031*/
App::import('Controller', 'Nodes');

class TestNodes extends NodesController {
	var $autoRender = false;
}

class NodesControllerTest extends CakeTestCase {
	var $Nodes = null;

	function startTest() {
		$this->Nodes = new TestNodes();
		$this->Nodes->constructClasses();
	}

	function testNodesControllerInstance() {
		$this->assertTrue(is_a($this->Nodes, 'NodesController'));
	}

	function endTest() {
		unset($this->Nodes);
	}
}
?>
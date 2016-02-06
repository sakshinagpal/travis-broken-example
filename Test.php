<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
		$this->assertEquals(1+1,3);
		$this->assertEquals(1+1,2);
		$this->assertEquals(1+1,2);
  	}
}

?>

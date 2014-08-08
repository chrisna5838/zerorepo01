<?php
class testoperasibilangan extends PHPUnit_Framework_TestCase
{
	 //test penambahan...
	private $a;
	private $b;
	private $hsl;

	public function testTambah()
	{
		$this->assertEquals(10,6+4);
	}
	//test pengurangan...
	public function testPengurangan()
	{
		$this->assertEquals(3,8-5);
	}
}
?>
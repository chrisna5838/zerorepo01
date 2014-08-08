<?php
include 'user.php';

class UserTest extends PHPUnit_Framework_TestCase{
	public function setUp(){
		$this->objUser = new User();
	}

	public function testBerhasilTambahUser(){
		$this->objUser->tambahUser('krisna');
		$user = $this->objUser->getUser();
		$this->assertEquals('krisna', $user);
	}
	
	public function testInsertUserKosong(){
		$this->objUser->tambahUser('');
		$pesan =$this->objUser->getPesan();
		$this->assertEquals('nama tidak boleh kosong', $pesan);
	}
}
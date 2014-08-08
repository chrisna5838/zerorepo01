<?php
class User{
	private $_user;
	private $_pesan;
	
	public function tambahUser($user){
		if($user=='') {
			$this->setPesan('nama tidak boleh kosong');
		}else{
			$this->_user = $user;
		}
	}

	public function getUser(){
		return $this->_user;
	}

	public function setPesan($pesan){
		$this->_pesan = $pesan;
	}

	public function getPesan(){
		return $this->_pesan;
	}
}
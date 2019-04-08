<?php 

class M_login extends CI_Model{	
	function cek_login($username,$password){		
		if (($username=='admin')&&($password=='123456') ){
			$hasil =  true;
		}else{
			$hasil = false;
		}
		return $hasil;

	}	
}
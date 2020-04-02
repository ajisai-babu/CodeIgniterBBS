<?php

class MY_Controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$res = $this->check_login();
		if(!$res){
			echo "login before";
			die();
		}
	}


	public function check_login(){
		$user = $this->session->userdata('login_st');
		return $user['login_me'];
	}

}
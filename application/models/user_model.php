<?php

class User_model extends CI_Model{

	public function loginaction(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		

		$captcha = $this->input->post('captcha');
		$cap = $this->session->userdata('captcha');
		

		if($captcha == $cap['cap']){
			$res = $this->db->select('password')->from('admin')->where('username =',$username)->get();
			//echo $this->db->last_query();
			$result = $res->row_array();
			$res_pass = $result['password'];
			return $password == $res_pass;
		}else{
			return false;
		}


	}
}
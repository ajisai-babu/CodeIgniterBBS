<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('User_model','user');

	}

	public function login(){

		$this->load->helper('captcha');
		$this->load->helper('url');
		$config = array(
			'img_path' => './captcha/', //此目录需要手动创建
			'img_url'=> base_url().'captcha/',
			'img_width'=>'100',
			'img_height' =>30,
			'word_length' =>4,
			'expiration' =>60*10, //过期时间，会自动删除图片

		);
		$cap = create_captcha($config);
		$this->session->set_userdata('captcha',array('cap'=>$cap['word']));
		$this->load->view('admin_login',array('cap'=>$cap['image']));


	}

	public function login_action(){

		if($this->input->post() != NULL){
			if($this->user->loginaction()){
				$this->login_success();
			}else{
				$this->login_error();
			}
		}
	}

	public function login_success(){
		$res = $this->user->loginaction();
		$sess = array('login_me'=>$res);
		$this->session->set_userdata('login_st',$sess);
		$data['msg'] = '登录成功';
		$data['url'] = base_url('adminlist/comment');
		$data['time'] = 1;
		$this->load->view('login_success',$data);
	}

	public function login_error(){
		$data['msg'] = '登录失败，请检查用户名或密码';
		$data['url'] = base_url('admin/login');
		$data['time'] = 1;
		$this->load->view('login_error',$data);
	}

	public function logout(){
		$this->session->unset_userdata('login_st');
		$this->session->sess_destroy();
		$data['msg'] = '已登出';
		$data['url'] = base_url('guestbook/index');
		$data['time'] = 1;
		$this->load->view('login_error',$data);
	}

}
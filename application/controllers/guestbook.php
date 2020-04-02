<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guestbook extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Comment_model','comment');
	}

	public function index(){

		$this->load->library('pagination');

		$num = $this->comment->getRownum();
		
		if($this->uri->segment(3) == 'desc'){
			$config['uri_segment'] = 4;
			$config['base_url'] = base_url('guestbook/index/desc');
		}else{
			$config['base_url'] = base_url('guestbook/index');
		}
		//$pagel = $this->comment->getPage();

		$config['total_rows'] = $num;
		$config['per_page'] = 3;
		$config['cur_tag_open'] = '<a class="curr">';
		$config['cur_tag_close'] = '</a>';
		$config['first_link'] = '回到首页';
		$config['last_link'] = '跳到末页';
		//$config['attributes'] = array('class' => 'curr');
		$this->pagination->initialize($config);
		$pagel = $this->pagination->create_links();
		

		$result = $this->comment->getComment();
		
		$data['comment'] = $result;
		$data['num'] = $num;
		$data['pagel'] = $pagel;
		$this->load->view('comment_list',$data);

	}

	public function add_guestbook(){
		$res = $this->comment->addComment();
		$data['time'] = 0.5;
		$data['url'] = base_url('guestbook/index');
		if($res){
			$data['msg'] = '发表留言成功';
			$this->load->view('jump',$data);
		}else{
			$data['msg'] = '发表留言失败';
			$this->load->view('jump',$data);
		}
	}
}
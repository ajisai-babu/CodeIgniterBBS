<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlist extends MY_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('Comment_model','comment');
	}

	public function comment(){
		$this->load->library('pagination');

		$num = $this->comment->getRownum();
		$config['base_url'] = base_url('adminlist/comment');
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
		$this->load->view('admin_list',$data);
	}

	public function reply_action(){
		$res = $this->comment->getById();
		$data['res'] = $res;
		$this->load->view('admin_reply',$data);

	}

	public function reply_update(){
		$res = $this->comment->updateSave();
		if($res){
			$this->comment();
		}else{
			die('更新失败');
		}
	}

	public function delete_action(){
		$res = $this->comment->delComment();
		if($res){
			$data['msg'] = '删除成功';
			$data['time'] = 1;
			$data['url'] = base_url('adminlist/comment');
			$this->load->view('del_success',$data);
		}else{
			die('删除失败');
		}
	}


}
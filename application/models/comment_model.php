<?php

class Comment_model extends CI_Model{

	public function getComment(){

		$page_size = 3;
		$desc = $this->uri->segment(3);
		if($desc == 'desc'){

			$offset = intval($this->uri->segment(4));
			$res = $this->db->order_by('id desc')->limit($page_size,$offset)->get('comment');
		}else{
			
			$offset = intval($this->uri->segment(3));
			$res = $this->db->limit($page_size,$offset)->get('comment');
		}
		$result = $res->result_array();
		return $result;
	}

	public function addComment(){
		$data = array(
			'poster' => $this->input->post('poster'),
			'mail' => $this->input->post('mail'),
			'comment' => $this->input->post('comment'),
			'reply' => '',
			'date' => date('Y-m-d H:i:s'),
			'ip' => $this->input->server('REMOTE_ADDR')
		);

		$res = $this->db->insert('comment',$data);
		return $res;
	}

	public function getRownum(){
		return $this->db->get('comment')->num_rows();
	}

	/*
	public function getPage(){

		$config['base_url'] = base_url('guestbook/index');
		$config['total_rows'] = 200;
		$config['per_page'] = 3;
		$config['cur_tag_open'] = '<a class="curr">';
		$config['cur_tag_close'] = '</a>';
		$config['first_link'] = '回到首页';
		$config['last_link'] = '跳到末页';
		//$config['attributes'] = array('class' => 'curr');
		$this->pagination->initialize($config);
		$pagel = $this->pagination->create_links();
		return $pagel;
	}
	*/

	public function getById(){
		$id = intval($this->uri->segment(3));
		//$sql = "select poster,comment,reply,mail from comment where id=$id";
		$res = $this->db->select('poster,comment,reply,mail')->from('comment')->where('id =',$id)->get();
		$result = $res->row_array();
		return $result;

	}

	public function updateSave(){
		$data = array(

			'poster' => $this->input->post('poster'),
			'mail' => $this->input->post('mail'),
			'comment' => $this->input->post('comment'),
			'reply' => $this->input->post('reply')
		);

		$id = $this->input->post('id');
		/*
		$sql = "update comment set ";
		foreach($data as $k=>$v){
			$sql .= "$k =:$k,";
		}
		$sql = rtrim($sql,',');
		$sql .= " where id=$id";
		*/

		$res = $this->db->where('id =',$id)->update('comment',$data);
		return $res;
	}

	public function delComment(){
		$id = $this->uri->segment(3);
		$res = $this->db->where('id =',$id)->delete('comment');
		return $res;
	}
}
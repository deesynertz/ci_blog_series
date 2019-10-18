<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model{

	public function get_postall(){
		$query = $this->db->join('users', 'users.uID = post.cr_by');
		$query = $this->db->get('post');
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}


	public function creatpost(){

		$creater = 1;

		$createPost = array(
			'tittle' => $this->input->post('tittle'), 
			'description' => $this->input->post('description'),
			'cr_by' => $creater
		);

		$query = $this->db->insert('post', $createPost);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}
}
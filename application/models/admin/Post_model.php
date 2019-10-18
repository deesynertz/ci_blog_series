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


	public function creatpost($formArray){
		// INSERT INTO post(tittle,description,cr_by) VALUES(?,?,?);
		$query = $this->db->insert('post', $formArray); 

	}

	public function deletepost($postID)
	{
		// INSERT INTO post(tittle,description,cr_by) VALUES(?,?,?);
		$query = $this->db->where('pID', $postID);
		$query = $this->db->delete('post'); 

	}

	public function getPostID($postID)
	{
		$query = $this->db->where('pID', $postID);
		return $query = $this->db->get('post')->row_array();
	}

	public function updatepost($postID,$formArray){
		// INSERT INTO post(tittle,description,cr_by) VALUES(?,?,?);
		$query = $this->db->insert('post', $postID); 

	}
}

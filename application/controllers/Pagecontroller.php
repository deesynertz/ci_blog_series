<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagecontroller extends CI_Controller{

	public function __construct(){
		parent:: __construct();

		$this->load->model('admin/post_model', 'apmodel');
	}

	public function index(){

		$data['tittle'] = 'CIBlog';
		$data['heading'] = 'Post List';

		$data['allposts'] = $this->apmodel->get_postall();

		$this->load->view('templates/header',$data);
		$this->load->view('admin/Data_post', $data);
		$this->load->view('templates/footer');
	}

	public function addpost(){

		$data['tittle'] = 'CIBlog';
		$data['heading'] = 'Add Post';

		$this->load->view('templates/header',$data);
		$this->load->view('admin/addpost', $data);
		$this->load->view('templates/footer');
	}

	public function creatpost(){

		$feedback = $this->apmodel->creatpost();

		if ($feedback) {
			$this->session->set_flashdata('success_msg', 'Post created successful');
		}else{
			$this->session->set_flashdata('error_msg', 'Fail to created post');
		}

		redirect(base_url());
	}
}

?>
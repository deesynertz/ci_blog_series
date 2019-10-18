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

		$this->form_validation->set_rules('tittle','Tittle','required');
		$this->form_validation->set_rules('description','Description','required');

		if($this->form_validation->run() == false){
			$this->load->view('templates/header',$data);
			$this->load->view('admin/addpost', $data);
			$this->load->view('templates/footer');

		}else{

			//save post data
			$formArray = array();
			$formArray['tittle'] = $this->input->post('tittle');
			$formArray['description'] = $this->input->post('description');
			$formArray['cr_by'] = 1;

			$feedback = $this->apmodel->creatpost($formArray);
			$this->session->set_flashdata('success_msg', 'Post created successful');
			redirect(base_url());
		}

		
	}

	public function deletepost($postID){
		$feedback = $this->apmodel->deletepost($postID);
		$this->session->set_flashdata('success_msg', 'Post created successful');
		redirect(base_url());
	}

	public function updatepost($postID){
		$feedback = $this->apmodel->updatepost($postID);
		$this->session->set_flashdata('error_msg', 'Fail to created post');
	}
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{

		$this->load->view('login/view_login');  
		
	}
	public function admin_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','User Name','required|alpha');
		$this->form_validation->set_rules('password','password','required');
	
		if($this->form_validation->run() == true)
		{
		  $username = $this->input->post('username');
		  $password = $this->input->post('password');
		 //echo "validation successfull";
		 $this->load->model('login_model');
		 $login_id = $this->login_model->login_auth($username,$password);
   
			 if($login_id){
			 	$this->load->library('session');
			 	$this->session->set_userdata('user_id',$login_id);
			 	//$this->load->view('login/dashboard');
			 	return redirect('admin/dashboard');     //redirecting to admin controller and then dashboard.php 
			 	//echo "password match";
			 }
			 else
			 {
			 	echo "password does not match";
			 }
		}
		else{
			//redirect('login');
			 $this->load->view('login/view_login');
			}
	}

	
}

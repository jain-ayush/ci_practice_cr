<?php

class Admin extends CI_Controller{

	public function dashboard(){

		$this->load->view('login/dashboard');
	}

	public function carousel(){

		$this->load->model('carousel_model');
		$images = $this->carousel_model->carousel_images();
		$this->load->view('login/carousel',['images'=>$images]);
	}

	public function add_carousel(){

		$form_data = $this->input->post();
		// echo "<pre>";
		// print_r($title);
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = date('Y_m_d_H_i_s');
		
		$this->load->library('upload',$config);

		if( ! $this->upload->do_upload('file')){
			$this->session->set_userdata('error','not_added');
			redirect('admin/carousel'); 
			$error = array('error' => $this->upload->display_errors());
			//print_r($error);
		}
		else{
			
			$data = array('upload_data' => $this->upload->data());
			// echo "<pre>";
			// print_r($data);
			$file_name = $data['upload_data']['file_name'];
			//echo "$file_name";
			$file_path = $config['upload_path'].$file_name;
			$form_data['images'] = $file_path;

			$this->load->model('carousel_model');
			$add_image = $this->carousel_model->add_carousel_images($form_data);
			//echo $add_image;
			if($add_image)
			{
				
				$this->session->set_userdata('error','added');
				redirect('admin/carousel');

			} 

		}
	}

	public function update_carousel(){
		$update_data = $this->input->post();
		print_r($update_data);

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = date('Y_m_d_H_i_s');
		$this->load->library('upload',$config);
		if(! $this->upload->do_upload('file'))
		{
			
			redirect('admin/carousel');
		}
	}

}


?>
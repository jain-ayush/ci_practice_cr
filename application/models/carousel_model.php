<?php

class Carousel_model extends CI_Model{

	public function carousel_images(){

		$query = $this->db->select('c_id,images,title')
		->from('carousel')
		->get();

		return $query->result_array();
	}


	public function add_carousel_images($form_data){
		
		//print_r($form_data);
		// $title = $form_data['title'];
		// $file_name = $form_data['file_name'];
		$query = $this->db->insert('carousel', $form_data);

		if($this->db->affected_rows() > 0)
		{
		    return true;
		    //echo "string";
		}
		else{
			return false;
		}
	}

}


?>
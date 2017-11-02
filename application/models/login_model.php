<?php

class Login_model extends CI_Model{

	public function login_auth($username,$password){
		$q = $this->db->where(array('username'=>$username,'password'=>$password))
					->get('users');   // SELECT * FROM users WHERE username='$username' AND password ='$password';

		// echo $this->db->last_query($q);   		// print query
		// echo $r = $q->num_rows(); exit;    		// get number of rows
			if($q->num_rows())
			{
				return $q->row()->id;
			}
			else{
				return FALSE;
			}
	}
}


?>
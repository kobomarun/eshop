<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	function verify_user($email,$password)
	{

		 $query =  $this->db->get_where('all_users',array('email'=>$email, 'pwd'=>$password, 'status'=>1));
		 if($query->num_rows() == 1) {

		 	$row =  $query->row_array();
		 	return $row;
		 } else {

		 	return false;
		 }
	}

}

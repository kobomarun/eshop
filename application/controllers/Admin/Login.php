<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
	  $this->load->view('admin/login');
  }
  public function authentication() {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('email', 'Email','trim|required|max_length[20]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if($this->form_validation->run() == false)
    {
      $this->session->set_flashdata('error', validation_errors());
      redirect('admin/login');
    }
    else
    {
      //gets input
      $email = $this->input->post('email');
      $password = md5($this->input->post('password'));

      //verify user
      $query = $this->db->get_where('all_users',array('email'=>$email, 'pwd'=>$password, 'type'=>1));
      if($query->num_rows() == 1) {
        $row = $query->row_array();
          $userSessionData = array(
            'id' => $row['id'],
            'name' => $row['fname'],
            'email'=>$row['email'],
            'type' => $row['type'],
            'isLoggedIn' => true
          );

          $this->session->set_userdata($userSessionData);

          redirect('admin/admindash');

    } else {
      $this->session->set_flashdata('error', 'Invalid username or password');
      redirect('admin/login');
      }
    }
  }

}

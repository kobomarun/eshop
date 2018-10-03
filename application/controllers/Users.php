<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index() {
		$data['categories'] = $this->category_model->get_categories();
		if($this->session->userdata('isLoggedIn') == true) {
			$this->session->set_flashdata('success', 'Please login to view your account page');
			redirect(base_url()."myaccount");
		}

		$this->load->view('template/header',$data);
		$this->load->view('template/categories', $data);
		$this->load->view('login');
		$this->load->view('template/footer');

	}

	public function authenticate() {
		$this->load->model("Login_model");
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if($this->form_validation->run() == false)
			{
				redirect('users');
			}
			else
			{
				//gets input
				$email = $this->input->post('email');
				$password = md5($this->input->post('password'));

				//verify user

				$row= $this->Login_model->verify_user($email,$password);
				if($row == true)
					{
						$userSessionData = array(
							'id' => $row['id'],
							'fname' => $row['fname'],
							'email' => $row['email'],
							'isLoggedIn' => true
						);


					$user_id = $this->session->userdata('id');
					$datetime = date('Y-m-d-H:i:s');
					$data2 = array('last_login'=>$datetime);
					$this->db->where('id',$user_id);
					$this->db->update('all_users',$data2);
					$this->session->set_userdata($userSessionData);
					redirect(base_url()."myaccount");
				} else {

					$this->session->set_flashdata('error', 'Invalid email or password');
					redirect('users');
				}
			}

	}

	public function signout() {
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'You have successfully signed out');

		redirect('users');
	}



	public function register() {
		$data['categories'] = $this->category_model->get_categories();

		$this->load->view('template/header',$data);
		$this->load->view('template/categories', $data);
		$this->load->view('register');
		$this->load->view('template/footer');

	}
  public function registrationProcess() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'is_unique[all_users.email]');

		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata("error", "Email address Already Exist. Please use another email");
			redirect("users/register");
		} else {

		$fname = $this->input->post('fname');
		$email = $this->input->post('email');
		$pwd = md5($this->input->post('password'));

		$data = array(
			'fname'=>$fname,
			'pwd'=>$pwd,
			'email'=>$email,
			'status'=>1,
			'date'=> date("Y-m-d H:i:s"),
		);

		$insert = $this->db->insert('all_users', $data);
		if($insert) {
			$this->session->set_flashdata("success", "Your registration is successful. Please Login");
			redirect("users");
		} else {
			$this->session->set_flashdata("success", "AWWW!!!! Something Went Wrong.");
			redirect("users/register");
		}
	}
	}



}

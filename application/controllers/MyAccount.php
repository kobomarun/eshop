<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CI_Controller {

	function __construct() {
		parent::__construct();
		if($this->session->userdata('isLoggedIn') != true) {
			$this->session->set_flashdata('success', 'Please login to view your account page');
			redirect("users");
		}
	}
	public function index()
	{
		$data['categories'] = $this->category_model->get_categories();
		$this->load->view('template/header',$data);
		// $this->load->view('cart/index', $data);
		$this->load->view('template/profile-menu');
		$this->load->view('myaccount');
		$this->load->view('template/footer');
	}
}

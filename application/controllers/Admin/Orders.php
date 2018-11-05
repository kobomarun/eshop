<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')){
			$this->session->set_flashdata('error', 'Your session has expired. Please login again');
			redirect('login');
		}
	}

	public function index()
	{
		$data['pageName'] = "Dashboard/Orders";
		$data['view'] = $this->db->get('orders')->result();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav',$data);
		$this->load->view('admin/orders',$data);
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		$data['pageName'] = "Add New Product";
		$data['cat'] = $this->db->get('categories')->result();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav',$data);
		$this->load->view('admin/add-product',$data);
		$this->load->view('admin/template/footer');
	}


}

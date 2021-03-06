<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDash extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('isLoggedIn')){
			$this->session->set_flashdata('error', 'Your session has expired. Please login again');
			redirect('login');
		}
	}

	public function index()
	{
		$data['pageName'] = "Dashboard";
		// $this->db->where('month',date("m"));
		// $query = $this->db->get('shipment')->result();
		// $monthly_sum = 0;
		// foreach($query as $q) {
		// 	$monthly_sum += $q->price;
		// }
		// $data['monthly_total'] = $monthly_sum;
		//
		// //Overall Total made so far
		// $query = $this->db->get('shipment')->result();
		// $total_sum = 0;
		// foreach($query as $q) {
		// 	$total_sum += $q->price;
		// }
		// $data['total'] = $total_sum;
		// $this->db->where('pay_status',"Not Paid");
		// $data['customer_payment'] = $this->db->count_all_results('shipment');

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav',$data);
		$this->load->view('admin/admin-dash');
		$this->load->view('admin/template/footer');
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'You have successfully logged out');

		redirect('admin/login');
	}
}

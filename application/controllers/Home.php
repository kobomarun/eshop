<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['categories'] = $this->category_model->get_categories();
		$data['products'] = $this->product_model->get_products();
		$data['deals'] = $this->product_model->get_deals();

		

		$this->load->view('template/header', $data);
		$this->load->view('template/categories', $data);
		$this->load->view('home');	
		$this->load->view('template/products', $data);	
		$this->load->view('template/footer');

	}

	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['categories'] = $this->category_model->get_categories();
		$data['products'] = $this->product_model->get_products();
		$data['product1'] = $this->product_model->get_products_by_category_id(2);
		$data['product2'] = $this->product_model->get_products_by_category_id(6);
		$data['products'] = $this->billing_model->get_all();
		// $data['product12'] = $this->product_model->get_specific_products();

		

		$this->load->view('template/header', $data);
		$this->load->view('cart/index', $data);
		$this->load->view('template/categories', $data);
		$this->load->view('home');	
		$this->load->view('template/products', $data);	
		$this->load->view('template/footer');

	}

	public function products($id){
		// creating the title from the category id
		// $data['title'] = $this->category_model->get_category($id)->name;
		$data['categories'] = $this->category_model->get_categories();

		
		$data['products'] = $this->product_model->get_products_by_category_id($id);

		$data['deals'] = $this->product_model->get_deals();

		 // load the categories post view
		$this->load->view('template/header');
		$this->load->view('template/categories', $data);
		$this->load->view('home');	
		$this->load->view('template/products', $data);	
		$this->load->view('template/footer');
	}
	
}

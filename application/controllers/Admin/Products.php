<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

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
		$data['view'] = $this->db->get('products')->result();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav',$data);
		$this->load->view('admin/products',$data);
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

	public function addproduct() {

		$config['upload_path'] = './uploads/products';
		$config['allowed_types'] = 'jpeg|jpg|png';
		$config['overwrite']  = true;
		$config['remove_spaces']  = true;
		$config['max_size'] = '500';
		$config['image_width']  = '1200';
		$config['image_height']  = '1200';

		//print_r($config['upload_path']); exit;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload())
		{
			$pic_error = array('pic_error' => $this->upload->display_errors());

			$this->session->set_flashdata('error', $pic_error['pic_error']);
			redirect("admin/products/add");
		}

		else {
			$data1 = $this->upload->data();
			$data =array(
				'name'=>$this->input->post('name'),
				'description'=>$this->input->post('description'),
				'price'=>$this->input->post('price'),
				'category_id'=>$this->input->post('category'),
				'images' =>  $data1['file_name']
			);
			$row = $this->db->insert('products',$data);
			if($row) {

				$this->session->set_flashdata('success', 'Product Successfully Uploaded. ');
				redirect("admin/products");


			} else {

				echo "AWWW!!! Something went wrong!!!";

			}
		}
	}
}

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
		
		$data['product'] = $this->db->get('products')->result_array();

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

		$this->upload->initialize($config);
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

	public function edit($id){
    // check login before giving edit product access
    if(!$this->session->userdata('type')){
      redirect('admin/login');
    }

    // get the id from the database
    $data['product'] = $this->product_model->get_product($id);


		$data['categories'] = $this->category_model->get_categories();

		// $data['data1'] = $this->upload->data();

    // check if the is no product
    if(empty($data['product'])){
      show_404();
    }

    $data['pageName'] = 'Edit Product';

    // load edit post view
    $this->load->view('admin/template/header');
		$this->load->view('admin/template/nav',$data);
		$this->load->view('admin/edit-product',$data);
		$this->load->view('admin/template/footer');
	}
	
	public function updateproduct(){
    // check login before giving update product access
    if(!$this->session->userdata('type')){
      redirect('admin/login');
    }

    // passing the id parameter to the models update product function
    $this->product_model->update_product($id);

    // send message using session library
    $this->session->set_flashdata('post_updated', 'Your post has been updated');

    redirect('admin/products');
  }

	// delete each product
  public function delete($id){
    // check login before giving delete product access
    if(!$this->session->userdata('type')){
      redirect('admin/login');
    }

    // calls the model delete function
    $this->product_model->delete_product($id);

     // send message using session library
     $this->session->set_flashdata('product_deleted', 'Your product has been deleted');

    // load index view
    redirect('admin/products');
  }
}

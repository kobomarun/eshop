<?php  

class Products extends CI_Controller{ 

  public function index($offset = 0){
    // set the title
    $data['title'] = 'Products';

    // get the categories from the database in category table
    $data['categories'] = $this->category_model->get_categories();
    // $data['menu_items'] = $this->menu->get_title_and_url();
    // $data['current'] = $this->uri->uri_string();

    $config['base_url'] = base_url().'products/index/';
    $config['total_rows'] = $this->db->count_all('products');;
    $config['per_page'] = 16;
    $config['uri_segment'] = 3;
    // Produces: class="myclass"
    $config['attributes'] = array('class' => 'pagination-link');

    $this->pagination->initialize($config);

    $data['products'] = $this->product_model->get_products($config['per_page'], $offset);

    // load the cateories view
    $this->load->view('template/header', $data);
    // $this->load->view('cart/index');
    $this->load->view('products/index', $data);
    $this->load->view('template/footer');  


  }

  public function category($id){
		// creating the title from the category id
		// $data['title'] = $this->category_model->get_category($id)->name;
		$data['categories'] = $this->category_model->get_categories();

		// fetching the post id from Product model
		$data['products'] = $this->product_model->get_products_by_category_id($id);

		$data['deals'] = $this->product_model->get_deals();

		 // load the categories post view
    $this->load->view('template/header', $data);		
    // $this->load->view('cart/index');
		$this->load->view('products/index', $data);			
		$this->load->view('template/footer');
  }
	
}

?>

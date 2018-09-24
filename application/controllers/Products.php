<?php  

class Products extends CI_Controller{ 

  public function index($offset = 0){
    // set the title
    $data['title'] = 'Products';

    // get the categories from the database in category table
    $data['categories'] = $this->category_model->get_categories();

    $config['base_url'] = base_url().'products/index/';
    $config['total_rows'] = $this->db->count_all('products');;
    $config['per_page'] = 16;
    $config['uri_segment'] = 3;
    // Produces: class="myclass"
    $config['attributes'] = array('class' => 'pagination-link');

    $this->pagination->initialize($config);

    $data['products'] = $this->product_model->get_products($config['per_page'], $offset);

    // load the cateories view
    $this->load->view('template/header');
    $this->load->view('products/index', $data);
    $this->load->view('template/footer');  


  }

  public function view($page = 'products'){

     // creating the title from the category id
     $data['title'] = $this->product_model->get_products_by_category_id($id)->name;

    // check if path exists
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
      show_404();
    }

    // store page name in title with first caps first letter
    // $data['title'] = ucfirst($page);

    // load view
    $this->load->view('template/header');
    $this->load->view('pages/'.$page, $data);
    $this->load->view('template/footer');

  }
}

?>

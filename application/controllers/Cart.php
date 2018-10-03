<?php  

  class Cart extends CI_Controller{
    public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('billing_model');
    $this->load->library('cart');
	}

	public function index()
	{	
    //Get all data from database
		$data['products'] = $this->billing_model->get_all();
		$data['categories'] = $this->category_model->get_categories();
		// $data['products'] = $this->product_model->get_products();
		$data['product1'] = $this->product_model->get_products_by_category_id(2);
		$data['product2'] = $this->product_model->get_products_by_category_id(6);
		// $data['product12'] = $this->product_model->get_specific_products();

		
		//send all product data to "shopping_view", which fetch from database.
		$this->load->view('template/header', $data);
		$this->load->view('cart/index', $data);
		$this->load->view('template/categories', $data);
		$this->load->view('home');	
		$this->load->view('template/products', $data);	
		$this->load->view('template/footer');

    		
		// $this->load->view('cart/index', $data);
	}

	public function view(){
		//Get all data from database
		$data['products1'] = $this->billing_model->get_all();

		$this->load->view('cart/shopping_view', $data);
	}
	
	
	public function add()
	{
    // Set array for send data.
		$insert_data = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

    // This function add items into cart.
		$this->cart->insert($insert_data);
	      
    // This will show insert data in cart.
		redirect('cart');
  }
	
  function remove($rowid) {
    // Check rowid value.
		if ($rowid==="all"){
    // Destroy data which store in  session.
			$this->cart->destroy();
		}else{
    // Destroy selected rowid in session.
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);
      // Update cart data, after cancle.
			$this->cart->update($data);
		}
		
    // This will show cancle data in cart.
		redirect('cart');
	}
	
  function update_cart(){
              
    // Recieve post values,calcute them and update
    $cart_info =  $_POST['cart'] ;
    foreach( $cart_info as $id => $cart)
    {	
      $rowid = $cart['rowid'];
      $price = $cart['price'];
      $amount = $price * $cart['qty'];
      $qty = $cart['qty'];
      
      $data = array(
        'rowid'   => $rowid,
        'price'   => $price,
        'amount' =>  $amount,
        'qty'     => $qty
      );
            
      $this->cart->update($data);
    }
    redirect('cart');        
  }	
        function billing_view(){
                // Load "billing_view".
		$this->load->view('cart/billing_view');
        }
        
        	public function save_order()
	{
          // This will store all values which inserted  from user.
		$customer = array(
			'name' 		=> $this->input->post('name'),
			'email' 	=> $this->input->post('email'),
			'address' 	=> $this->input->post('address'),
			'phone' 	=> $this->input->post('phone')
		);		
                 // And store user imformation in database.
		$cust_id = $this->billing_model->insert_customer($customer);

		$order = array(
			'date' 			=> date('Y-m-d'),
			'customerid' 	=> $cust_id
		);		

		$ord_id = $this->billing_model->insert_order($order);
		
		if ($cart = $this->cart->contents()):
			foreach ($cart as $item):
				$order_detail = array(
					'orderid' 		=> $ord_id,
					'productid' 	=> $item['id'],
					'quantity' 		=> $item['qty'],
					'price' 		=> $item['price']
				);		

          // Insert product imformation with order detail, store in cart also store in database. 
              
            $cust_id = $this->billing_model->insert_order_detail($order_detail);
			endforeach;
		endif;
	      
      // After storing all imformation in database load "billing_success".
      $this->load->view('cart/billing_success');
	}
  }

?>
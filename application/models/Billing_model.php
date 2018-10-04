<?php 

  class billing_model extends CI_Model{

    // Get all details ehich store in "products" table in database.
    public function get_all()
    {
      $query = $this->db->get('products');
      return $query->result_array();
    }
      
      // Insert customer details in "customer" table in database.
    public function insert_customer($data)
    {
      $this->db->insert('customers', $data);
      $id = $this->db->insert_id();
      return (isset($id)) ? $id : FALSE;		
    }
    
          // Insert order date with customer id in "orders" table in database.
    public function insert_order($data)
    {
      $this->db->insert('orders', $data);
      $id = $this->db->insert_id();
      return (isset($id)) ? $id : FALSE;
    }
    
          // Insert ordered product detail in "order_detail" table in database.
    public function insert_order_detail($data)
    {
      $this->db->insert('order_detail', $data);
    }

    public function selectProductByProductId($product_id){  
      // get the data from the table and store in query
      $query = $this->db->get_where('products', array('id' => $product_id));
  
      // return the data as an array
      return $query->result_array();
    }
  }


?>
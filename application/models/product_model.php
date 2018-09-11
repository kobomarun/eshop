<?php

class product_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  
  public function get_products(){
    // order the categories table by name
    $this->db->order_by('id');

    $query = $this->db->get('products');

    return $query->result_array();
  }

  function get_products_by_category_id($id){
    // order the categories table by product id in descending order
    $this->db->order_by('products.id');

    // join/link the category table id to the post table category name
    $this->db->join('categories', 'categories.id = products.category_id');

    // get the data from the table and store in query
    $query = $this->db->get_where('products', array('category_id' => $id));

    // return the data as an array
    return $query->result_array();
  }
}

?>
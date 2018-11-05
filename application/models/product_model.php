<?php

class product_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  
  public function get_products($limit = FALSE, $offset = FALSE){

    // check for limit per page
    if ($limit) {
      $this->db->limit($limit, $offset);
    }  

    // order the products in descending order by product id
    $this->db->order_by('products.id','RANDOM');

    $query = $this->db->get('products');

    return $query->result_array();
  }


  public function get_products_by_category_id($id){
    // order the categories table by product id in descending order
    $this->db->order_by('products.id', 'DESC');

    // join/link the category table id to the product table category name
    $this->db->join('categories', 'categories.id = products.category_id');

    // get the data from the table and store in query
    $query = $this->db->get_where('products', array('category_id' => $id));

    // return the data as an array
    return $query->result_array();
  }

  public function get_product($id){

    $query = $this->db->get_where('products', array('id' => $id));
      return $query->row_array(); 
  }

  function update_product($id){
    // create array $data and pass in the parameters
    $data1 = $this->upload->data();
    $data = array(
      'name' => $this->input->post('name'),
      'descriptio' => $this->input->post('description'),
      'category_id' => $this->input->post('category_id'),
      'price' => $this->input->post('price'),
      'images' => $data1['file_name'],
    );

    // match the id recieved to the on in the database
    $this->db->where('id', $this->input->post('id'));

    // update the post with respective id if found
    $this->db->update('products', $data);
    return true;
  }

  function delete_product($id){
    // match the id recieved to the on in the database
    $this->db->where('id', $id);

    // delete the product with respective id if found
    $this->db->delete('products');
    return true;
  }

  public function get_deals(){
    $this->db->order_by('deals.id');

    $query = $this->db->get('deals');

    return $query->result_array();
  }

}

?>
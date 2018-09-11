<?php

class category_model extends CI_Model{
  
  public function get_categories(){
    // order the categories table by name
    $this->db->order_by('name');

    $query = $this->db->get('categories');

    return $query->result_array();
  }

  function get_category($id){

    // get the data from the table and store in query using id
    $query = $this->db->get_where('categories', array('id' => $id));

    // return the data as a row array
    return $query->row();
  }
}

?>
<?php
                        
  // Create form and send values in 'cart/add' function.
  echo form_open('cart/add');
  echo form_hidden('id', $id);
  echo form_hidden('name', $name);
  echo form_hidden('price', $price);
  ?> </div> 
  <div id='add_button'>
  <?php
  $btn = array(
      'class' => 'fg-button teal',
      'value' => 'Add to Cart',
      'name' => 'action'
  );

  // Submit Button.
  echo form_submit($btn);
  echo form_close();
  ?>
  </div>

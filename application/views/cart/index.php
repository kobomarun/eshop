                <div class="shopping_cart_wrap">
                  <?php  $cart_check = $this->cart->contents();
                        
                  // If cart is empty, this will show below message.
                  if(empty($cart_check)):  ?>
                  <button id="open_shopping_cart" class="" data-amount="0">
                    <b class="">My Cart</b>
                    
                    <b >No Product <br> in Cart</b>
                  </button>
                  <?php endif; ?>
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?>
                  <?php
                  // Create form and send all values in "cart/update_cart" function.
                  // echo form_open('cart/update_cart');
                  // $grand_total = 0;
                    $i = 0;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        // echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        // echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        // echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        // echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        // echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        <?php $i++; ?>
                        <?php endforeach; ?>
                        <?php if($this->session->userdata('isLoggedIn')== true) { ?>
                        
                        <a href="<?php echo base_url(); ?>cart/view" >
                        <button id="open_shopping_cart" class="" data-amount="<?php echo $i; ?>">
                          <b class="">My Cart</b>
                          
                          <b class="">View Cart</b>
                        </button></a>
                      <?php }else{ ?>
                      <button id="open_shopping_cart" class="" data-amount="<?php echo $i; ?>"  onclick="reg_user()">
                        <b class="">My Cart</b>
                        
                        <b class="">View Cart</b>
                      </button>
                      <?php } ?>
                    <?php endif; ?>
                
                
                    </div><!--/ .shopping_cart.dropdown-->
                    <!-- <php 
                      // cancle image.
                      // $path = "<img src='http://localhost/codeigniter_cart/images/cart_cross.jpg' width='25px' height='20px'>";
                      // echo anchor('cart/remove/' . $item['rowid'], $path); ?> -->
                            
                     <!-- <php endforeach; ?> -->

											<!-- - - - - - - - - - - - - - End of shopping cart - - - - - - - - - - - - - - - - -->
                      <!-- <php endif; ?> -->
											
										
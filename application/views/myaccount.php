<!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

</aside><!--/ [col]-->
						<main class="col-md-9 col-sm-8">

							<h1>My Dashboard</h1>

							<section class="theme_box">

								<h4>Welcome, <?php echo $this->session->userdata('fname'); ?></h4>

								<p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>

							</section><!--/ .theme_box -->

							<!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->

							<section class="theme_box">

								<h4>My Cart</h4>

								
								<div class="text">
              <?php  $cart_check = $this->cart->contents();
              
              // If cart is empty, this will show below message.
              if(empty($cart_check)) {
              echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
              }  ?>
								<br><br>
            </div>
								<div class="table_wrap">
            <?php
            // All values of cart store in "$cart". 
            if ($cart = $this->cart->contents()): ?>
							<table class="table_type_1 shopping_cart_table">

								<thead>

									<tr>
										<!-- <th class="product_image_col">Product Image</th> -->
										<th class="product_title_col">Product Name</th>
										<th>SKU</th>
										<th>Price</th>
										<th class="product_qty_col">Quantity</th>
										<th>Total</th>
										<th class="product_actions_col">Action</th>
									</tr>

								</thead>

								<tbody>
                  <?php
                    // Create form and send all values in "cart/update_cart" function.
                  echo form_open('cart/update_cart');
                  $grand_total = 0;
                  $i = 0;

                  foreach ($cart as $item):
                      //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                      //  Will produce the following output.
                      // <input type="hidden" name="cart[1][id]" value="1" />
                      
                      echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                      echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                      echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                      echo form_hidden('cart[' . $item['id'] . '][photo]', $item['photo']);
                      echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                      echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                      ?>
											<?php if ($i < 5) {  $i++ ?>
											
									<tr>

										<!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->
											
										<!-- <td class="product_image_col" data-title="Product Image"> -->
                      <!-- <php foreach($products as $product): ?>
                      <php if($product['id'] == $item['id']): ?> -->
											<!-- <a href="#"><img src="<php echo base_url(); ?>assets/images/<php echo $image; ?>" alt=""></a> -->
                  <!-- <php endif; ?>
                  <php endforeach;?> -->
										<!-- </td> -->

										<!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->

										<td data-title="Product Name">

											<a href="#" class="product_title"><?php echo $item['name']; ?></a>

											<ul class="sc_product_info">

												<li>Size: Big</li>
												<li>Color: Red</li>

											</ul>

										</td>

										<!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - SKU - - - - - - - - - - - - - - - - -->

										<td data-title="SKU">

											PS01

										</td>

										<!-- - - - - - - - - - - - - - End of SKU - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

										<td class="subtotal" data-title="Price">
											
											$<?php echo number_format($item['price'], 2); ?>

										</td>

										<!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

										<td data-title="Quantity">

											<div class="qty min clearfix">

												<button class="theme_button decrease" data-direction="minus"  >&#45;</button>
												<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right" class="qty"'); ?>
												<button class="theme_button increase" data-direction="plus"  >&#43;</button>

                      </div><!--/ .qty.min.clearfix-->
                      

										</td>

										<!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->
                    <?php $grand_total = $grand_total + $item['subtotal']; ?>
										<td class="total" data-title="Total">

											$<?php echo number_format($item['subtotal'], 2) ?>

										</td>

										<!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->

										<td data-title="Action" style="text-align: center;">

											<!-- <a href="#" class="button_dark_grey icon_btn edit_product"><i class="icon-pencil"></i></a> -->

											<a href="<?php echo 'remove/' . $item['rowid']; ?>" class="button_dark_grey icon_btn remove_product" ><i class="icon-cancel-2"></i></a>

										</td>

										<!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->

									</tr>
											<?php }   ?>
									<?php endforeach; ?>

								</tbody>

							</table>

            </div><!--/ .table_wrap -->
									<?php endif; ?>
									
							</section><!--/ .theme_box -->

              <section class="theme_box">

								<h4>My Orders</h4>

                <p>Product Name<br></p>
                <p>Product Name<br></p>


							</section><!--/ .theme_box -->


						</main><!--/ [col]-->

					</div>

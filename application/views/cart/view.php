
			
			<!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

			<div class="secondary_page_wrapper">

				<div class="container">

					<!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

					<ul class="breadcrumbs">

						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li>Shopping Cart</li>

					</ul>

					<section class="section_offset">

						<h1>Shopping Cart</h1>

            <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->
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
                  $i = 1;

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

												<!-- <button class="theme_button decrease" data-direction="minus"  >&#45;</button> -->
												<?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right" class="qty"'); ?>
												<!-- <button class="theme_button increase" data-direction="plus"  >&#43;</button> -->

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

									<?php endforeach; ?>

								</tbody>

							</table>

            </div><!--/ .table_wrap -->
            








						<footer class="bottom_box on_the_sides">

							<div class="left_side">

								<a href="#" class="button_blue middle_btn">Continue Shopping</a>

							</div>

							<div class="right_side">

								<a href="#" class="button_grey middle_btn" onclick="clear_cart()">Clear Shopping Cart</a>

							</div>

						</footer><!--/ .bottom_box -->

            <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->
            

          </section><!--/ .section_offset -->
          


					<div class="section_offset">

						<div class="row">

							<section class="col-sm-4">

								<h3>Discount Codes</h3>

								<div class="theme_box">

									<p class="form_caption">Enter your coupon code if you have one.</p>

									<form id="discount_code">

										<ul>

											<li class="row">

												<div class="col-xs-12">

													<input type="text" name="">

												</div>

											</li>

										</ul>

									</form>

								</div><!--/ .theme_box -->

								<footer class="bottom_box">

									<button type="submit" form="discount_code" class="button_grey middle_btn">Apply Coupon</button>

								</footer>

							</section><!--/ [col] -->

							<section class="col-sm-4">

								<h3>Estimate Shipping and Tax</h3>

								<div class="theme_box">

									<p class="form_caption">Enter your destination to get a shipping estimate.</p>

									<form id="estimate_shipping" class="type_2">

										<ul>

											<li class="row">
												
												<div class="col-xs-12">

													<label>Country</label>

													<div class="custom_select">

														<select>
															
															<option value="Australia">Australia</option>
															<option value="Austria">Austria</option>
															<option value="Argentina">Argentina</option>
															<option value="Canada">Canada</option>
															<option selected value="USA">USA</option>

														</select>

													</div>

												</div>

											</li>

											<li class="row">
												
												<div class="col-lg-7 col-md-6">

													<label>State/Province</label>

													<div class="custom_select">

														<select>

															<option value="Alabama">Alabama</option>
															<option value="Illinois">Illinois</option>
															<option value="Kansas">Kansas</option>

														</select>

													</div>

												</div><!--/ [col] -->

												<div class="col-lg-5 col-md-6">

													<label for="postal_code">Zip/Postal Code</label>
													<input type="text" name="" id="postal_code">

												</div><!--/ [col] -->

											</li>

										</ul>

									</form>

								</div><!--/ .theme_box -->

								<footer class="bottom_box">

									<button type="submit" form="estimate_shipping" class="button_grey middle_btn">Get a Quote</button>

								</footer><!--/ .bottom_box -->

							</section><!--/ [col] -->

							<section class="col-sm-4">

								<h3>Total</h3>

								<div class="table_wrap">

									<table class="zebra">

										<tfoot>

											<tr>
													
												<td>Subtotal</td>
												<td>$<?php 
                        
                        //Grand Total - tax in progress.
                        echo number_format($grand_total, 2); ?></td>

											</tr>

											<tr class="total">
													
												<td>Total</td>
												<td>$<?php 
                        
                        //Grand Total.
                        echo number_format($grand_total, 2); ?></td>

											</tr>

										</tfoot>

									</table>

								</div>
                <?php echo form_close(); ?>
								<footer class="bottom_box">

									<input type="" class="button_blue middle_btn" value="Proceed to Checkout" onclick="window.location = 'order'">

									<!-- <div class="single_link_wrap">

										<a href="#">Checkout with Multiple Addresses</a>

                  </div> -->
                  

								</footer>

							</section><!-- / [col] -->

						</div><!--/ .row -->

          </div><!--/ .section_offset -->
          <?php endif; ?>

					<section class="section_offset">

						<h3 class="offset_title">You Might Also Like</h3>

						<!-- - - - - - - - - - - - - - Carousel of you might also like - - - - - - - - - - - - - - - - -->

						<div class="owl_carousel six_items">
							
							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

								<div class="image_wrap">

									<img src="images/product_img_18.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_offer percentage">

									<div>30%</div>OFF

								</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

								<div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

								<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Metus nulla facilisi, Original 24 fl oz</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><s>$9.99</s> <b>$5.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_19.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Tincidunt ac viverra nam elit agna endrerit 29 ea</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><b>$14.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_20.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_new">New</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Lorem ipsum dolor sit amet...</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><b>$73.99</b></p>

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_21.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_offer percentage">

									<div>15%</div>OFF

								</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

								<div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

								<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Etiam cursus leo vel metus nulla facilisi...</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><s>$5.99</s> <b>$2.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li></li>
											<li></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_22.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Ut pharetra augue nec augue...</a></p>

									<div class="clearfix product_info">

										<p class="product_price alignleft"><b>$13.99</b></p>

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_23.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_hot">Hot</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Integer rutrum ante eu lacus vestibulum...</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><b>$21.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

								<div class="image_wrap">

									<img src="images/product_img_18.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_offer percentage">

									<div>30%</div>OFF

								</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

								<div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

								<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Metus nulla facilisi, Original 24 fl oz</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><s>$9.99</s> <b>$5.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_19.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Tincidunt ac viverra nam elit agna endrerit 29 ea</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><b>$14.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_20.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_new">New</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Lorem ipsum dolor sit amet...</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><b>$73.99</b></p>

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_21.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_offer percentage">

									<div>15%</div>OFF

								</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

								<div class="countdown" data-year="2016" data-month="1" data-day="31" data-hours="18" data-minutes="40" data-seconds="40"></div>

								<!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Etiam cursus leo vel metus nulla facilisi...</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><s>$5.99</s> <b>$2.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li></li>
											<li></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_22.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Ut pharetra augue nec augue...</a></p>

									<div class="clearfix product_info">

										<p class="product_price alignleft"><b>$13.99</b></p>

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

							<div class="product_item">

								<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->
								
								<div class="image_wrap">

									<img src="images/product_img_23.jpg" alt="">

									<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

									<div class="actions_wrap">

										<div class="centered_buttons">

											<a href="#" class="button_dark_grey quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

											<a href="#" class="button_blue add_to_cart">Add to Cart</a>

										</div><!--/ .centered_buttons -->

										<a href="#" class="button_dark_grey def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

										<a href="#" class="button_dark_grey def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

									</div><!--/ .actions_wrap-->
									
									<!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

								</div><!--/. image_wrap-->

								<!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

								<div class="label_hot">Hot</div>

								<!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

								<!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

								<div class="description">

									<p><a href="#">Integer rutrum ante eu lacus vestibulum...</a></p>

									<div class="clearfix product_info">

										<p class="product_price"><b>$21.99</b></p>

										<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

										<ul class="rating">

											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li class="active"></li>
											<li></li>

										</ul>

										<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

									</div><!--/ .clearfix.product_info-->

								</div>

								<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

							</div><!--/ .product_item-->
							
							<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

						</div><!--/ .owl_carousel-->
						
						<!-- - - - - - - - - - - - - - End of you might also like - - - - - - - - - - - - - - - - -->

					</section>

				</div><!--/ .container-->

			</div><!--/ .page_wrapper-->
			
			<!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

			<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->

			<footer id="footer">

				<div class="container">

					<!-- - - - - - - - - - - - - - Infoblocks - - - - - - - - - - - - - - - - -->

					<div class="infoblocks_container">

						<ul class="infoblocks_wrap">

							<li>
								<a href="#" class="infoblock type_1">

									<i class="icon-paper-plane"></i>
									<span class="caption"><b>Fast &amp; Free Delivery</b></span>

								</a><!--/ .infoblock-->
							</li>

							<li>
								<a href="#" class="infoblock type_1">

									<i class="icon-lock"></i>
									<span class="caption"><b>Safe &amp; Secure Payment</b></span>

								</a><!--/ .infoblock-->
							</li>

							<li>
								<a href="#" class="infoblock type_1">

									<i class="icon-money"></i>
									<span class="caption"><b>100% Money back Guaranted</b></span>

								</a><!--/ .infoblock-->
							</li>

						</ul><!--/ .infoblocks_wrap.section_offset.clearfix-->

					</div><!--/ .infoblocks_container -->
						
					<!-- - - - - - - - - - - - - - End of infoblocks - - - - - - - - - - - - - - - - -->

				</div><!--/ .container -->

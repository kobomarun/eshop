<!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->
			<br>
			<?php $count = 0; foreach($categories as $category):  ?>	
			<?php if ($count < 3) : ?>
						<section class="section_offset animated transparent" data-animation="fadeInDown"> 

						<h3 class="<?php echo $count == 0 ? 'section_title' : '' ; ?>"><?php echo $count == 0 ? 'Featured Products': $category['name'] ;  ?></h3>

						<div class="tabs type_2 products">

							<!-- site_url('home/products/'.$category['id']); -->
							<!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- <ul class="tabs_nav clearfix">
                
                  <li> <a href="tab-<  $count++; ?>"><  $cate?></a></li>                  
                
							</ul> -->

							<!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

							<!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

							<div class="tab_containers_wrap">
							
								<div id="tab-1" class="tab_container">
								
									<!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

									<div class="">
										
										<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

										<?php if ($count == 0): ?>
                    <?php $cnt = 0; foreach ($products as $product): ?>
										<?php if($cnt < 4) { ?>
										<div class="col-md-3">
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?php echo base_url(); ?>assets/images/<?php echo $product['photo'] ?>" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<div class="centered_buttons">

														<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
														
														 <?php
															
															// Create form and send values in 'cart/add' function.
															echo form_open('cart/add');
															echo form_hidden('id', $product['id']);
															echo form_hidden('name', $product['name']);
															echo form_hidden('price', $product['price']);
															?>  
															<div id='add_button'>
															<?php
															$btn = array(
																'class' => 'button_blue middle_btn add_to_cart',
																'value' => 'Add to Cart',
																'name' => 'action'
															);
														
															// Submit Button.
															echo form_submit($btn);
															echo form_close();
														?>
													</div>
											

													</div><!--/ .centered_buttons -->
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
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

												<p><a href="<?php echo site_url('#'.$product['name']); ?>"><?php echo $product['description'];  ?></a></p>

												<div class="clearfix product_info">

													<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

													<ul class="rating alignright">

														<?php for($i = 0; $i < $product['rating']; $i++ ): ?>
															<li class="active"></li>															
														<?php endfor; ?>
														<?php for($i = $product['rating']; $i < 5 ; $i++ ): ?>
															<li></li>															
														<?php endfor; ?>

													</ul>

													<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                          <!-- price low -->
                          <!-- <s>$9.99</s> -->
													<p class="product_price alignleft"> <b>&#8358;<?php echo $product['price'];  ?></b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										<br>
										</div>
											<?php $cnt++; }?>
										<?php endforeach; ?>
										<?php elseif ($count == 1): ?>
										<?php $cnt = 0; foreach ($product1 as $product): ?>
										<?php if($cnt < 4) { ?>
										<div class="col-md-3">
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?php echo base_url(); ?>assets/images/<?php echo $product['photo'] ?>" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<div class="centered_buttons">

														<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>
															<?php                        
																// Create form and send values in 'cart/add' function.
																echo form_open('cart/add');
																echo form_hidden('id', $product['id']);
																echo form_hidden('name', $product['name']);
																echo form_hidden('price', $product['price']);
																?>  
																<div id='add_button'>
																<?php
																$btn = array(
																	'class' => 'button_blue middle_btn add_to_cart',
																	'value' => 'Add to Cart',
																	'name' => 'action'
																);
															
																// Submit Button.
																echo form_submit($btn);
																echo form_close();
															?>
															</div>
													</div><!--/ .centered_buttons -->
													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>
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

												<p><a href="<?php echo site_url('#'.$product['name']); ?>"><?php echo $product['description'];  ?></a></p>

												<div class="clearfix product_info">

													<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

													<ul class="rating alignright">

														<?php for($i = 0; $i < $product['rating']; $i++ ): ?>
															<li class="active"></li>															
														<?php endfor; ?>
														<?php for($i = $product['rating']; $i < 5 ; $i++ ): ?>
															<li></li>															
														<?php endfor; ?>

													</ul>

													<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                          <!-- price low -->
                          <!-- <s>$9.99</s> -->
													<p class="product_price alignleft"> <b>&#8358;<?php echo $product['price'];  ?></b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										<br>
										</div>
											<?php $cnt++; } ?>
										<?php endforeach; ?>
										<?php else: ?>
										<?php $cnt = 0; foreach ($product2 as $product): ?>
										<?php if($cnt < 4) { ?>
										<div class="col-md-3">
										<div class="product_item">

											<!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

											<div class="image_wrap">

												<img src="<?php echo base_url(); ?>assets/images/<?php echo $product['photo'] ?>" alt="">

												<!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

												<div class="actions_wrap">

													<div class="centered_buttons">

														<a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

														<a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

													</div><!--/ .centered_buttons -->

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

													<a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

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

												<p><a href="<?php echo site_url('#'.$product['name']); ?>"><?php echo $product['description'];  ?></a></p>

												<div class="clearfix product_info">

													<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

													<ul class="rating alignright">

														<?php for($i = 0; $i < $product['rating']; $i++ ): ?>
															<li class="active"></li>															
														<?php endfor; ?>
														<?php for($i = $product['rating']; $i < 5 ; $i++ ): ?>
															<li></li>															
														<?php endfor; ?>

													</ul>

													<!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                          <!-- price low -->
                          <!-- <s>$9.99</s> -->
													<p class="product_price alignleft"> <b>&#8358;<?php echo $product['price'];  ?></b></p>

												</div><!--/ .clearfix.product_info-->

											</div>

											<!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

										</div><!--/ .product_item-->
										<br>
										</div>
										<?php $cnt++; }?>
										<?php endforeach; ?>
										<?php endif; ?>
										<!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

									

									</div><!--/ .owl_carousel-->
									
									<!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

								</div><!--/ #tab-1-->

							
							</div>

							<!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

						</div>

					<?php $count++; ?>
					</section><!--/ .section_offset-->
					<?php endif; ?>
				<?php endforeach; ?>
					<!-- - - - - - - - - - - - - - End of taday's deals - - - - - - - - - - - - - - - - -->
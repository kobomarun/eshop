<!doctype html> 
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>N8 Shop | Shopping Cart</title>
		<meta charset="utf-8">
		<meta name="author" content="">
		<meta name="description" content="">
		<meta name="keywords" content="">

		<!-- Mobile specific metas
		============================================ -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="images/fav_icon.ico">

		<!-- Google web fonts
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- Libs CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontello.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
		
		<!-- Theme CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

		<!-- JS Libs
		============================================ -->
    <script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>
    <script type="text/javascript">
      
    </script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
	</head>
	<body>

		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_6">

				<!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

				<div class="top_part">

					<div class="container">

						<div class="row">

							<div class="col-lg-6 col-md-7 col-sm-8">

								<!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->

								<!-- <p>Welcom visitor <a href="#" data-modal-url="modals/login.html">Login</a> or <a href="#">Register</a></p> -->

								<!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

							</div> <!--/ [col]-->

							<div class="col-lg-6 col-md-5 col-sm-4">

								<div class="clearfix">

									<!-- - - - - - - - - - - - - - Language change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings">

										<span class="current open_"><img src="<?php echo base_url(); ?>assets/images/flag_en.jpg" alt="">English</span>

										<ul class="dropdown site_setting_list language">

											<li class="animated_item"><a href="#"><img src="<?php echo base_url(); ?>assets/images/flag_en.jpg" alt=""> English</a></li>
											<li class="animated_item"><a href="#"><img src="<?php echo base_url(); ?>assets/images/flag_g.jpg" alt=""> German</a></li>
											<li class="animated_item"><a href="#"><img src="<?php echo base_url(); ?>assets/images/flag_s.jpg" alt=""> Spanish</a></li>

										</ul>

									</div><!--/ .alignright.site_settings-->

									<!-- - - - - - - - - - - - - - End of language change - - - - - - - - - - - - - - - - -->
									
									<!-- - - - - - - - - - - - - - Currency change - - - - - - - - - - - - - - - - -->

									<div class="alignright site_settings currency">

										<span class="current open_">USD</span>

										<ul class="dropdown site_setting_list">

											<li class="animated_item"><a href="#">USD</a></li>
											<li class="animated_item"><a href="#">EUR</a></li>
											<li class="animated_item"><a href="#">GBP</a></li>

										</ul>

									</div><!--/ .alignright.site_settings.currency-->

									<!-- - - - - - - - - - - - - - End of currency change - - - - - - - - - - - - - - - - -->

								</div><!--/ .clearfix-->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container -->

				</div><!--/ .top_part -->
				
				<!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

				<hr>

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="container">

						<div class="row">

							<div class="main_header_row">

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

									<a href="<?php echo base_url(); ?>">

										<img src="<?php echo base_url(); ?>assets/eshop.png" alt="" width="80px">

									</a>

									<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-3">

									<!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->

									<div class="call_us">

										<span>Call us toll free:</span> <b>+1888 234 5678</b>

									</div><!--/ .call_us-->

									<!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

								<div class="col-sm-6">

									<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

									<form class="clearfix search">

										<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">
										
										<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

										<div class="search_category alignleft">

											<div class="open_categories">All Categories</div>

											<ul class="categories_list dropdown">

                        <!-- <php include APPPATH.'views/template/categories.php';?> -->
                        <?php foreach ($categories as $category): ?>
                          <li class="animated_item">

                            <a href="<?php echo site_url('#'.$category['name']); ?>"><?php echo $category['name'];  ?></a>

                            
                          </li>


                        <?php endforeach; ?>

											</ul>

										</div><!--/ .search_category.alignleft-->

										<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

										<button class="button_blue def_icon_btn alignleft"></button>

									</form><!--/ #search-->
									
									<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

								</div><!--/ [col]-->

							</div><!--/ .main_header_row-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .bottom_part -->

				<!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

				<!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

				<div id="main_navigation_wrap">

					<div class="container">

						<div class="row">

							<div class="col-xs-12">

								<!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

								<div class="sticky_inner type_2">

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<button class="open_menu"></button>

										<!-- - - - - - - - - - - - - - Main navigation - - - - - - - - - - - - - - - - -->

										<ul class="theme_menu cats dropdown">
                    <?php foreach ($categories as $category): ?>
                      <li class="has_megamenu animated_item">

                        <a href="<?php echo site_url('#'.$category['name']); ?>"><?php echo $category['name'];  ?></a>

                        <!-- - - - - - - - - - - - - - End of main category - - - - - - - - - - - - - - - - -->

                      </li>

                    <?php endforeach; ?>

										</ul>

										<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item">

										<nav class="main_navigation">

											<ul>

												<li><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="<?php echo base_url(); ?>myaccount">My Account</a></li>
												<li><a href="<?php echo base_url(); ?>cart/view">Shopping Cart</a></li>
												<li><a href="<?php echo base_url(); ?>cart/orders">Checkout</a></li>
												
												

											</ul>

										</nav><!--/ .main_navigation-->

									</div>

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="#" class="wishlist_button" data-amount="7"></a>
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_4">

										<a href="#" class="compare_button" data-amount="3"></a>
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of main navigation - - - - - - - - - - - - - - - - -->

									<!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

									<div class="nav_item size_3">

										<?php include APPPATH. 'views/cart/index1.php';?>

										<!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

										<!--  -->
										
										<!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->
										
									</div><!--/ .nav_item-->

									<!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->

								</div><!--/ .sticky_inner -->

								<!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

							</div><!--/ [col]-->

						</div><!--/ .row-->

					</div><!--/ .container-->

				</div><!--/ .main_navigation_wrap-->

				<!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

			</header>
<!doctype html>
<html lang="en">
	<head>
		<!-- Basic page needs
		============================================ -->
		<title>N8 Shop | Home</title>
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
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/owlcarousel/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/arcticmodal/jquery.arcticmodal.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

		<!-- JS Libs
		============================================ -->
		<script src="<?php echo base_url(); ?>assets/js/modernizr.js"></script>

		<!-- Old IE stylesheet
		============================================ -->
		<!--[if lte IE 9]>
			<link rel="stylesheet" type="text/css" href="css/oldie.css">
		<![endif]-->
	</head>
	<body class="front_page">



		<!-- - - - - - - - - - - - - - Main Wrapper - - - - - - - - - - - - - - - - -->

		<div class="wide_layout">

			<!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

			<header id="header" class="type_2">

				<!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

				<div class="bottom_part">

					<div class="sticky_part">

						<div class="container">

							<div class="row">

								<div class="main_header_row">

									<div class="col-sm-3">

										<!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

										<a href="<?php echo base_url(); ?>" class="logo">

											<img src="<?php echo base_url(); ?>assets/eshop.png" alt="" width="80px">

										</a>

										<!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-6 col-md-5 col-sm-6">

										<!-- - - - - - - - - - - - - - Navigation of shop - - - - - - - - - - - - - - - - -->

										<nav>

											<ul class="topbar">

												<li><a href="<?php echo base_url(); ?>">Home</a></li>
												<li><a href="<?php echo base_url(); ?>myaccount">My Account</a></li>
												<?php if($this->session->userdata('isLoggedIn')== true) { ?>
												<li><a href="<?php echo base_url(); ?>users/signout">Logout</a></li>
											<?php } else { ?>
												<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
												<li><a href="<?php echo base_url(); ?>users">Login</a></li>
											<?php } ?>
											</ul>

										</nav>

										<!-- - - - - - - - - - - - - - End navigation of shop - - - - - - - - - - - - - - - - -->

										<!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

										<form class="clearfix search">

											<input type="text" name="" tabindex="1" placeholder="Search..." class="alignleft">

											<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

											<div class="search_category alignleft">

												<div class="open_categories">All Categories</div>

												<ul class="categories_list dropdown">

													<?php foreach ($categories as $category): ?>
														<li class="animated_item" > <a href="<?php echo site_url('#'.$category['name']);?>"><?php echo $category['name'];?></a></li>
													<?php endforeach; ?>

												</ul>

											</div><!--/ .search_category.alignleft-->

											<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

											<button class="button_blue def_icon_btn alignleft"></button>

										</form><!--/ #search-->

										<!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

									</div><!--/ [col]-->

									<div class="col-lg-3 col-md-4 col-sm-3">

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

										<div class="align_right v_centered">

											<!-- - - - - - - - - - - - - - Wishlist & compare counters - - - - - - - - - - - - - - - - -->

											<ul class="shop_links_list">

												<li>
													<a href="#" class="small_link"><i class="icon-heart-5"></i> Wishlist (7)</a>
												</li>
												<li>
													<a href="#" class="small_link"><i class="icon-resize-small"></i> Compare (2)</a>
												</li>

											</ul><!--/ .align_right.shop_links-->

											<!-- - - - - - - - - - - - - - End of wishlist & compare counters - - - - - - - - - - - - - - - - -->

											<!-- - - - - - - - - - - - - - Shopping cart - - - - - - - - - - - - - - - - -->

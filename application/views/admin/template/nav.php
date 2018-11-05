

<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">

            <li> <a href="<?php echo base_url();?>admin/admindash" class="waves-effect active"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard </span></a></li>
            <li><a href="javascript:void(0);" class="waves-effect"><i data-icon=")" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Orders<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url(); ?>admin/orders/">View All Orders</a></li>
                    <li> <a href="<?php echo base_url(); ?>admin/orders">View Pending Orders</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Products<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url(); ?>admin/products/add">Add Products</a></li>
                    <li> <a href="<?php echo base_url(); ?>admin/products">View All Products</a></li>
                    <li> <a href="<?php echo base_url(); ?>admin/products">Product Categories</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Settings<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url(); ?>settings/categ">Shipping Status</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/shippingprices">Shipping Prices</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/paymentmethod">Payment Method</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/shipmenttypes">Type of Shipment</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/offices">Create & View Office</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/shippingcompany">Create Shiping Company</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/staff">Create & View Staff</a></li>
                    <li> <a href="<?php echo base_url(); ?>settings/minimumbalance">Set Wallet Minimum Balance</a></li>
                </ul>
            </li>
            <li> <a href="<?php echo base_url();?>tracking/trackitems" class="waves-effect"><i data-icon="P" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Track Items</span></a> </li>
            <li><a href="javascript:void(0);" class="waves-effect"><i class="icon-people fa-fw"></i> <span class="hide-menu">Accounting<span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="<?php echo base_url(); ?>accounting">Dashboard</a></li>
                    <li> <a href="<?php echo base_url(); ?>users">Customer Payments</a></li>
                    <li> <a href="<?php echo base_url(); ?>accounting/fundwallet">Fund Customer Wallet</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title"><?php echo strtoupper($pageName); ?></h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="#">N8 Admin Portal</a></li>
                    <li class="active"> <?php echo "Welcome ". $this->session->userdata('name'); ?></li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>

<!-- Left navbar-header end -->

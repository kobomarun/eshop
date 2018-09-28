<aside class="col-md-3 has_mega_menu hidden-xs">

  <section class="animated transparent" data-animation="fadeInDown" data-animation-delay="200">

    <h3>Categories</h3>

    <ul class="theme_menu cats">
    <?php foreach ($categories as $category): ?>
      <li class="has_megamenu">

        <a href="<?php echo site_url('#'.$category['name']); ?>"><?php echo $category['name'];  ?></a>

        <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

      </li>


    <?php endforeach; ?>
  <li class="has_megamenu"><a href="<?php echo base_url(); ?>/products/index" class="all"><b>All Categories</b></a></li>
    </ul>

  </section><!--/ .animated.transparent-->

</aside><!--/ [col]-->

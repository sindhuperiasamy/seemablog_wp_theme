<?php /*?><div class="slidemenu">
  <?php dynamic_sidebar('sidebar'); ?>
</div><?php */?>
<div class="nav">
  <div class="nav_main">
    <div class="logo">
      <p>
        <?php dynamic_sidebar('header_logo'); ?>
      </p>
    </div>
    <div class="main_menu">
      <div id="cssmenu">
      <?php wp_nav_menu( array( 'theme_location' => 'primary_menu','container_class' => '','container' => '','menu_class'=>'sidebar-menu','menu_id' => '' ) ); ?>

      </div>
      <div class="socialIcons">
            <a href="https://www.instagram.com/seemskk/?hl=en" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
      		<a href="https://www.linkedin.com/in/seemakk" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
	  		<a href="https://www.flickr.com/photos/seemakk/" target="_blank"><i class="fa fa-flickr fa-2x" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <div id="overlay"></div>
</div>
<script type="text/javascript">
jQuery( document ).ready(function() {
	jQuery('.current-menu-ancestor').addClass('active');
	jQuery('.current-menu-ancestor .sub-menu').addClass('menu-open');
	jQuery('.current-menu-item').addClass('active');
});
</script>
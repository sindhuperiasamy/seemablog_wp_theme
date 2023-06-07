<?php get_header(); ?>
<body>
<?php get_sidebar(); ?>

<div id="content">
  <div class="container"> 
    <div class="assets">
    <?php
        $args_portfolio=array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => '4',
            'hierarchical' => false
        );
    
        $portfolio_query = null;
        $portfolio_query = new WP_Query($args_portfolio);
        $results_current_page =  $portfolio_query->post_count;
        
        if($portfolio_query->have_posts() ) {
          while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
          <div class="asset01">
            <div class="wrap">
              <div class="img">
              <img src="http://localhost/seemakk/wp-content/themes/images/02.jpg" alt="seemakk">
                <?php if (has_post_thumbnail()) { 
					$featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true); ?>
                	<p><a href="<?php echo get_permalink(); ?>"><img src="<?php echo $featured_img[0];?>" alt="seemakk" /></a></p>
                 <?php } ?>
              </div>
            </div>
          </div>
          <div class="asset01">
            <div class="wrap">
              <div class="txt">
                <h3>
                     <?php 
                    if(get_post_meta($post->ID, 'sub_title', true)){ 
                        echo get_post_meta($post->ID, 'sub_title', true);
                    }else{ 
                        the_title(); 
                    }?>
                </h3>
                <?php echo wpautop(get_post_meta($post->ID, 'featured_content', true)); ?>
              </div>
            </div>
          </div>
      	  <?php
		  endwhile;
		} ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
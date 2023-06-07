<?php 
/**
 * Template Name: Seema Blog
 *
 * @package WordPress
 * @subpackage Seema Blog
 * @since Seema Blog 1.0
 */

get_header(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<body>
<?php get_sidebar(); ?>

<div id="content">
  <div class="container"> 
    <div class="assets">
    <?php
        $args_portfolio=array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => '10',
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
                <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					<?php
					
                     the_excerpt();

					 $archive_year  = get_the_time( 'Y' );
					 $archive_month = get_the_time( 'm' );
					 $archive_day   = get_the_time( 'd' );
					 $month= get_the_date('M');
					?>
                    <div class="blog_btm">
                      <div class="blog_Row"><i class="icon fas fa-clock"></i><span class="posted-on"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); echo get_post_field( 'post_name', get_post() ); ?>"><?php echo $archive_day. "/".$month."/" .$archive_year; ?></a></span></div>
                      <div class="blog_Row"><i class="icon fas fa-tag"></i><span class="tags-links"><?php the_tags( '',' / ','' ); ?></span></div>
                      <div class="blog_Row"><i class="icon fas fa-comment"></i><span class="comments-link"><?php comments_popup_link( 'No Comments', '1 Comment', '% Comments »' ); ?></span></div>
                    </div>
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
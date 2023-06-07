<?php 
/**
 * Template Name: Vertical
 *
 * @package WordPress
 * @subpackage Seema Blog
 * @since Seema Blog 1.0
 */
?>
<?php get_header(); ?>
<body>
	<?php get_sidebar(); ?>
	<div id="content">
 	 <div class="container"> 
    <div class="assets">
        <?php
		$postfolioId = get_post_meta($post->ID, 'select_portfolio', true);
        if( have_rows('gallery',$postfolioId) ):
        while ( have_rows('gallery',$postfolioId) ) : the_row(); ?>
              <div class="asset01">
                <div class="wrap">
                  <div class="img">
                  	<?php 
					$selected_option =  get_sub_field('select_option',$postfolioId);
					if($selected_option=="Image"){
					     $add_image = get_sub_field('add_image',$postfolioId); 
						 if($add_image['url']){ ?>
							<p><img src="<?php echo $add_image['url']; ?>" alt="seemakk" /></p><?php   
						 } 
					 }else if($selected_option=="Video"){
					 	$add_video_url = get_sub_field('add_video_url',$postfolioId); ?>
                        
                        <iframe src="<?php echo $add_video_url; ?>"></iframe><?php
					 
					 }              
                     if(get_sub_field('add_highlight',$postfolioId)){ ?>
                        <p class="highlight"><?php echo get_sub_field('add_highlight',$postfolioId); ?></p><?php 
					 } ?>
                  </div>
                </div>
              </div>
               <div class="asset01">
                <div class="wrap">
                  <div class="txt">
                    
					<?php 
                    if(get_sub_field('add_title',$postfolioId)){ 
                       echo '<h3>'.get_sub_field('add_title',$postfolioId).'</h3>';
                    }
					echo wpautop(get_sub_field('add_content',$postfolioId)); ?>
                    
                  </div>
                </div>
              </div><?php
        endwhile;
        wp_reset_query();
        endif; ?>

    </div>
  </div>
	</div>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.2.min.js"></script> 
	<?php get_footer(); ?>
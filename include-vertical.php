<div id="content">
  <div class="container"> 
    <div class="assets">
        <?php
        if( have_rows('gallery') ):
        while ( have_rows('gallery') ) : the_row(); ?>
              <div class="asset01">
                <div class="wrap">
                  <div class="img">
                  	<?php 
					$selected_option =  get_sub_field('select_option');
					if($selected_option=="Image"){
					     $add_image = get_sub_field('add_image'); 
						 if($add_image['url']){ ?>
							<p><img src="<?php echo $add_image['url']; ?>" alt="seemakk" /></p><?php   
						 } 
					 }else if($selected_option=="Video"){
					 	$add_video_url = get_sub_field('add_video_url'); ?>
                        
                        <iframe src="<?php echo $add_video_url; ?>"></iframe><?php
					 
					 }              
                     if(get_sub_field('add_highlight')){ ?>
                        <p class="highlight"><?php echo wpautop(get_sub_field('add_highlight')); ?></p><?php 
					 } ?>
                  </div>
                </div>
              </div>
               <div class="asset01">
                <div class="wrap">
                  <div class="txt">
                    
					<?php 
                    if(get_sub_field('add_title')){ 
                       echo '<h3>'.get_sub_field('add_title').'</h3>';
                    }
					echo wpautop(get_sub_field('add_content')); ?>
                    
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
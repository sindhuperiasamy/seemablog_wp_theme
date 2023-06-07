<div id="content">
      <div class="container"> 
        <!-- ASSETS : START -->
        <div class="assets">
			<?php
            if( have_rows('gallery') ):
            while ( have_rows('gallery') ) : the_row();
            $add_image = get_sub_field('add_image'); ?>
            
              <div class="asset">
                <div class="wrap">
                  <div class="img">
						<?php 
                        $selected_option =  get_sub_field('select_option');
                        if($selected_option=="Image"){
                             $add_image = get_sub_field('add_image'); 
                             if($add_image['url']){ ?>
                                <p><img src="<?php echo get_bloginfo('template_url'); ?>/timthumb.php?src=<?php echo $add_image['url']; ?>&h=533&w=800&a=t"></p><?php   
                             } 
                         }else if($selected_option=="Video"){
                            $add_video_url = get_sub_field('add_video_url'); ?>
                            
                            <p><iframe src="<?php echo $add_video_url; ?>"></iframe></p><?php
                         
                         }              
                         if(get_sub_field('add_highlight')){ ?>
                            <p class="highlight"><?php echo get_sub_field('add_highlight'); ?></p><?php 
                         } ?>
                  </div>
                </div>
              </div>
			  	<?php if(get_sub_field('add_title')!="" || get_sub_field('add_content')!="" ){ ?>
				 <div class="asset asset_txt">
					<div class="wrap">
						 <div class="txt">
							<h3>
									 <?php 
									if(get_sub_field('add_title')){ 
										echo get_sub_field('add_title');
									}?>
							</h3>
							<?php echo wpautop(get_sub_field('add_content')); ?>
						  </div>
					</div>
				 </div><?php
				}?><?php 
			endwhile;
			wp_reset_query();
			endif; ?>
        </div>
        <!-- ASSETS : END --> 
      </div>
</div>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.2.min.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mousewheel.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/responsive.js"></script> 
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/theme.js"></script> 
<script type="text/javascript">
$(document).ready(function() {
	if($(window).width() >= 1024){
		var assetWidth = $('.assets').width()-750;
		$('.assets').width(assetWidth);
	}
});
</script>

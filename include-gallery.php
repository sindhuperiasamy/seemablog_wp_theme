<div class="se-pre-con"></div>
<div id="content">
      <div class="container"> 
        <!-- ASSETS : START -->
        <div class="assets">
        <h3><?php the_title(); ?></h3>
		<?php
		$count = count(get_field('add_gallery'));
		if($count>0){ ?>

		  <div id="gallery">
                <ul>
				 <?php
                 if( have_rows('add_gallery') ):
                    while ( have_rows('add_gallery') ) : the_row();
                    $add_image = get_sub_field('add_image'); ?>
                          <li>
                          	<a href="<?php echo $add_image['url']; ?>" rel="Seema" title="<?php echo get_sub_field('add_tagline'); ?>">
                            	<img src="<?php echo $add_image['url']; ?>" />
                            </a>
                          </li><?php 
                    endwhile;
                  endif; ?>
                </ul>
		  </div><?php 
		 } ?>
    	</div>
        <!-- ASSETS : END --> 
      </div>
</div>

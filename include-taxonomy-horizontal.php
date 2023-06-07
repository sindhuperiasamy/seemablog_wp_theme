<?php get_header(); ?>
<body class="gallery">
	<?php get_sidebar(); ?>
    <div id="content">
      <div class="container"> 
        <!-- ASSETS : START -->
        <div class="assets">
		<?php
        $args_portfolio=array(
            'post_type' => 'portfolio',
            'post_status' => 'publish',
			'tax_query' => array(
				array(
					'taxonomy' => 'portfolio_category',
					'field' => 'term_id',
					'terms' => get_queried_object_id(),
				)
			)
        );
        
        $portfolio_query = null;
        $portfolio_query = new WP_Query($args_portfolio);
        $results_current_page =  $portfolio_query->post_count;
        
        if($portfolio_query->have_posts() ) {
          while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); 
		  
                    $gallery = get_field('gallery');
                    $first_row = $gallery[0];
					$first_row_option = $first_row['select_option' ];
					
					if($first_row_option=="Image"){
					
						//Image with content
						$first_row_image_video = $first_row['add_image' ];
						$first_row_image_video_url = $first_row_image_video['url'];
						
						  if($first_row['add_title' ]!="" || $first_row['add_content' ]!=""){ ?>
                               <div class="asset asset_txt mb_none">
                                <div class="wrap">
                                  <div class="txt">
                                    <?php if($first_row['add_title' ]){ ?>
                                        <h3><?php echo $first_row['add_title' ]; ?></h3><?php
                                    } ?>
                                    <?php echo wpautop($first_row['add_content' ]); ?>
                                  </div>
                                </div>
                              </div><?php
						  } ?>
                        
                          <div class="asset">
                            <div class="wrap">
                              <div class="img">
                                 <?php if($first_row_image_video_url){ ?>
                                 <p><a href="<?php echo get_permalink(); ?>"><img src="<?php echo $first_row_image_video_url;?>" alt="seemakk" /></a></p>
                                 <?php }
                                 if($first_row['add_highlight' ]){ ?>
                                    <p class="highlight"><?php echo $first_row['add_highlight']; ?></p>
                                <?php } ?>
                              </div>
                            </div>
                          </div><?php 
					}else if($first_row_option=="Video"){
					
						  if($first_row['add_title' ]!="" || $first_row['add_content' ]!=""){ ?>
							   <div class="asset asset_txt mb_none">
								<div class="wrap">
								  <div class="txt">
									<?php if($first_row['add_title' ]){ ?>
										<h3><?php echo $first_row['add_title' ]; ?></h3><?php
									} ?>
									<?php echo wpautop($first_row['add_content' ]); ?>
								  </div>
								</div>
							  </div><?php
						  } ?>
						  <div class="asset">
							<div class="wrap">
							  <div class="img">
								 <?php if($first_row['add_video_url']){ ?>
								 	<p><iframe src="<?php echo $first_row['add_video_url']; ?>"></iframe></p>
								 <?php }
								 if($first_row['add_highlight' ]){ ?>
									<p class="highlight"><?php echo $first_row['add_highlight']; ?></p>
								<?php } ?>
							  </div>
							</div>
						  </div><?php
					}else if($first_row_option=="None"){
					
						if($first_row['add_title' ]!="" || $first_row['add_content' ]!=""){ ?>
							   <div class="asset asset_txt mb_none">
								<div class="wrap">
								  <div class="txt">
									<?php if($first_row['add_title' ]){ ?>
										<h3><?php echo $first_row['add_title' ]; ?></h3><?php
									} ?>
									<?php echo wpautop($first_row['add_content' ]); ?>
								  </div>
								</div>
							  </div><?php
						} 
					
					}
		  endwhile;
		} ?>
        </div>
        <!-- ASSETS : END --> 
      </div>
    </div>
<?php get_footer(); ?>
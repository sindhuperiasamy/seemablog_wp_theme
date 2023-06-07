<?php get_header(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<body>
<?php get_sidebar(); ?>

<div id="content">
  <div class="container"> 
    <div class="assets">
    <?php while ( have_posts() ) : the_post();  ?>
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
                    ?>
                    <div class="blog_btm">
                      <div class="blog_Row"><i class="icon fas fa-clock"></i><span class="posted-on"><a href="#"><?php the_time('j/m/Y') ?></a></span></div>
                      <div class="blog_Row"><i class="icon fas fa-tag"></i><span class="tags-links"><?php the_tags( '',' / ','' ); ?></span></div>
                      <div class="blog_Row"><i class="icon fas fa-comment"></i><span class="comments-link"><?php comments_popup_link( 'No Comments', '1 Comment', '% Comments »' ); ?></span></div>
                    </div>
              </div>
            </div>
          </div>
      	  <?php
		  endwhile;
		 ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
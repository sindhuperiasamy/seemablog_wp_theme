<?php get_header(); 
while ( have_posts() ) : the_post(); ?>
 <div class="nav">
  <div class="nav_main">
    <div class="logo">
      <p><?php dynamic_sidebar('header_logo'); ?></p>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <div id="overlay"></div>
</div>
<div id="content">
  <div class="container"> 
    <div class="assets">
      <?php if (has_post_thumbnail()) { ?>
     	 <div class="asset01">
            <div class="wrap">
              <div class="img">
                <?php $featured_img = wp_get_attachment_image_src(get_post_thumbnail_id(),'full', true); ?>
                	<p><img src="<?php echo $featured_img[0];?>" alt="seemakk" /></p>
              </div>
            </div>
          </div>
      <?php } ?>
      <div class="asset01">
        <div class="wrap">
          <div class="txt">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php endwhile;  ?>
<?php get_footer(); ?>
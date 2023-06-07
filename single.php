<?php get_header(); ?>
<body class="gallery">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"><?php

if (is_singular('post')) {

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
            <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

				
            <?php the_content(); ?>
            
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

            
            
			<?php $archive_year  = get_the_time( 'Y' );
            $archive_month = get_the_time( 'm' );
            $archive_day   = get_the_time( 'd' );
            $month= get_the_date('M'); ?>
            <div class="blog_btm">
					<div class="blog_Row"><i class="icon fas fa-clock"></i><span class="posted-on"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); echo get_post_field( 'post_name', get_post() ); ?>"><?php echo $archive_day. "/".$month."/" .$archive_year; ?></a></span></div>
					<div class="blog_Row"><i class="icon fas fa-tag"></i><span class="tags-links"><?php the_tags( '',' / ','' ); ?></span></div>
					<div class="blog_Row"><i class="icon fas fa-comment"></i><span class="comments-link"><?php comments_popup_link( 'No Comments', '1 Comment', '% Comments »' ); ?></span></div>
				</div> <br/>
            <?php comments_template(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
<?php endwhile; ?>
<?php }else{ ?>

<body class="gallery">

	<?php get_sidebar();
    
	while ( have_posts() ) : the_post(); 
	
			  if(get_post_meta($post->ID, 'layout', true)=="horizontal"){ 
			  	include('include-horizontal.php');
			  }else if(get_post_meta($post->ID, 'layout', true)=="vertical"){ 
			  	include('include-vertical.php');
			  }else if(get_post_meta($post->ID, 'layout', true)=="gallery"){ 
			  	include('include-gallery.php');
			  } 
			  
	endwhile;
}
get_footer(); ?>
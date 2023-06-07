<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/sidebar-menu.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/script.js"></script>
<script>
    $.sidebarMenu($('.sidebar-menu'))
</script>
  
<script src="https://example.com/fontawesome/v5.15.4/js/all.js" data-auto-a11y="true" ></script>
<?php if(is_page_template('page-horizontal.php')/*|| has_term( '', 'portfolio_category' )*/){ ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.mousewheel.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/responsive.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/theme.js"></script>
<?php }else if(get_post_meta($post->ID, 'layout', true)=="gallery" || is_singular('post')){  ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gallery1.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gallery2.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gallery3.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gallery4.js"></script>
<script type="text/javascript">
    $(function(){
        /* Enhance all image links, and internal (relative) links only */
        $('a[href$=".jpg"]').gallery(options={
            contentDefaultWidth: '50em', // for content
            contentDefaultHeight: '100%', // for content
            mediaMaxWidth: '100%', // for images
            mediaMaxHeight: '100%', // for images
            lightBoxMargin: '2em', // margin around screen (can be em, % or px)
            animateResize: true,
            preloadLoadingImage: '<?php echo esc_url( get_template_directory_uri() ); ?>/images/loading-black-on-white.gif',
            preloadGalleryControlsSprite: '<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-controls-sprite.png'
        });
    });
    </script>
<?php } ?>
<?php 
if(get_post_meta($post->ID, 'layout', true)=="gallery" || is_singular('post')){ ?>
<script>
	$(window).load(function() {
		$(".se-pre-con").fadeOut("slow");
	});
</script>
<?php } ?>

<script>

function getOrientation() {

    // if window.orientation is available...
    if( window.orientation && typeof window.orientation === 'number' ) {

        // ... and if the absolute value of orientation is 90...
        if( Math.abs( window.orientation ) == 90 ) {
              return 'landscape';

        } else {

              // ... otherwise it's portrait
              return 'portrait';

        }

    } else {

        return false; // window.orientation not available

    }

}
window.addEventListener("orientationchange", function() {
     // if orientation is landscape...
     if( getOrientation() === 'landscape' ) {

        $(".menu-ham").on('click', function () {
			$(".menu-ham").css('display','none');
			$(".close-menu").css('display','block');
			$(".slidemenu").animate({left: '0px'}, 100);
			$('.nav').animate({left: '250px'}, 100);
		});
		
		$(".close-menu").on('click', function () {
			$(".menu-ham").css('display','block');
			$(".close-menu").css('display','none');
			$(".slidemenu").animate({left: '-350px'}, 100);
			$('.nav').animate({left: '0px'}, 100);
		});

    }else{
	
		$(".menu-ham").click(function () {
			$(".menu-ham").css('display','none');
			$(".close-menu").css('display','block');
			$(".slidemenu").animate({left: '0px'}, 100);
			$('.nav').animate({left: '150px'}, 100);
		});
		
		$(".close-menu").click(function () {
			$(".menu-ham").css('display','block');
			$(".close-menu").css('display','none');
			$(".slidemenu").animate({left: '-250px'}, 100);
			$('.nav').animate({left: '0px'}, 100);
		});
	}

}, false);

</script>

	<p id="text"></p>
	<script type="text/javascript">
		var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		var element = document.getElementById('text');
		if (!isMobile) {
  			$(".menu-ham").click(function () {
				$(".menu-ham").css('display','none');
				$(".close-menu").css('display','block');
				$(".slidemenu").animate({left: '0px'}, 100);
				$('.nav').animate({left: '400px'}, 100);
			});
			
			$(".close-menu").click(function () {
				$(".menu-ham").css('display','block');
				$(".close-menu").css('display','none');
				$(".slidemenu").animate({left: '-400px'}, 100);
				$('.nav').animate({left: '0px'}, 100);
			});
		}else{
		
     if( getOrientation() === 'landscape' ) {

        $(".menu-ham").on('click', function () {
			$(".menu-ham").css('display','none');
			$(".close-menu").css('display','block');
			$(".slidemenu").animate({left: '0px'}, 100);
			$('.nav').animate({left: '250px'}, 100);
		});
		
		$(".close-menu").on('click', function () {
			$(".menu-ham").css('display','block');
			$(".close-menu").css('display','none');
			$(".slidemenu").animate({left: '-350px'}, 100);
			$('.nav').animate({left: '0px'}, 100);
		});

    }else{
	
		$(".menu-ham").click(function () {
			$(".menu-ham").css('display','none');
			$(".close-menu").css('display','block');
			$(".slidemenu").animate({left: '0px'}, 100);
			$('.nav').animate({left: '150px'}, 100);
		});
		
		$(".close-menu").click(function () {
			$(".menu-ham").css('display','block');
			$(".close-menu").css('display','none');
			$(".slidemenu").animate({left: '-250px'}, 100);
			$('.nav').animate({left: '0px'}, 100);
		});
	}
		}
	</script>
<?php wp_footer(); ?>
</body>
</html>

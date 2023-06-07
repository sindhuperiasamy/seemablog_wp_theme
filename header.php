<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<style type="text/css" media="screen, tv, projection">
@import "<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css";
@import "<?php echo esc_url( get_template_directory_uri() ); ?>/css/sidebar-menu.css";
@import "<?php echo esc_url( get_template_directory_uri() ); ?>/style.css";
@import "<?php echo esc_url( get_template_directory_uri() ); ?>/css/stylesheet.css";
<?php 
if(get_post_meta($post->ID, 'layout', true)=="gallery" || is_singular('post')){ ?>
	@import "<?php echo esc_url( get_template_directory_uri() ); ?>/css/gallery.css";
<?php } ?> 
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

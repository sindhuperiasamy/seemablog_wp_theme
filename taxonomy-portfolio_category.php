<?php 
// get the current taxonomy term
	if(get_field('select_template')=="horizontal"){
		include('include-taxonomy-horizontal.php');
	}else{
		include('include-taxonomy-vertical.php');
	}
?>

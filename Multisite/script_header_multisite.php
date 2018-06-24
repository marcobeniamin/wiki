<?php
	//Aggingere script nell'head su determinato blog multisite
	function my_custom_js_head() {
	global $blog_id;
	if ( $blog_id == 2) { 
			echo '<script src="# type="text/javascript"></script>';
		 } 	
	}
	// Aggiungi Hook nell'head (<head></head>)
	add_action('wp_head', 'my_custom_js_head');

?>
<?php
function add_this_script_footer(){
global $blog_id;
if ( $blog_id == 1) { ?>
		<script src="#"></script>
	<?php }	
}

add_action('wp_footer', 'add_this_script_footer'); 
?>
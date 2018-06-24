<?php

function shortcode_func(){
	return 'Testo shortcode';
}
add_shortcode( 'test_shortcode', 'shortcode_func' );
// [test_shortcode]

?>
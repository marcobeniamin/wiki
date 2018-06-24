<?php

//Rimuovere un'azione
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );


//Creare una funzione e poi aggiungerla in un'azione
function aggiungi_testo() {
	echo '<p>Testo</p>';
}
add_action( 'woocommerce_single_product_summary', 'aggiungi_testo', 5 );


?>
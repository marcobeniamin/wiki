<script type="text/javascript">
	//all'invio della mail
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		//Condizionale sull'id del form
			if ( '3736' == event.detail.contactFormId ) {
				//alert( "L'id del form è 3736" );
				
				//redirect su altra pagina
				location = '#';
			}
	}, false );
</script>
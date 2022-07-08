<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

// Save Category Edit Form Fields START
add_action( 'edited_category', 'peymanseo_save_category_fields', 10, 2 );
add_action( 'edited_product_cat', 'peymanseo_save_category_fields', 10, 2 );

function peymanseo_save_category_fields( $term_id ) {
    
	$peymanseo_add_schema_category_code = wp_kses(
		$_POST['peymanseo_add_schema_category_code'],
		array( 'script' => array() )
	);
    
	if ( isset( $peymanseo_add_schema_category_code ) ) 
	{
		update_term_meta( $term_id, 'peymanseo_schema_category', $peymanseo_add_schema_category_code );
	}
	if (  $peymanseo_add_schema_category_code == '') 
	{
		delete_term_meta( $term_id, 'peymanseo_schema_category');
	}
	elseif (strpos( $peymanseo_add_schema_category_code , 'schema.org') !== false) 
	{
		return ;
	}else{
		delete_term_meta( $term_id, 'peymanseo_schema_category');
	}
	
}
// Save Category Edit Form Fields END
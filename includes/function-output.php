<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

// function display category code START
function get_psascwp_schema_category(){

    $postID = get_queried_object_id();
    $get_peymanseo_schema_category = get_term_meta( $postID, 'peymanseo_schema_category', true );

    echo wp_kses( $get_peymanseo_schema_category, array( 'script' => array() ) );
}
// function display category code END

function peymanseo_output_script_end_content($content)
{

    $postID = get_queried_object_id();
    
    $peymanseo_output_script_end_content = 
    get_term_meta( $postID, 'peymanseo_schema_category', true );
    
    return $content.$peymanseo_output_script_end_content;
    
    if(is_product_category()){
        echo wp_kses( $peymanseo_output_script_end_content, array( 'script' => array() ) );
    }   
}

add_action( 'category_description' , 'peymanseo_output_script_end_content' );
add_action( 'the_archive_description' , 'peymanseo_output_script_end_content' );

function peymanseo_output_script_product_category($content)
{
    
    if(is_product_category()){
        
        $postID = get_queried_object_id();
        
        $peymanseo_output_script_end_content = 
        get_term_meta( $postID, 'peymanseo_schema_category', true );
        
        echo wp_kses( $peymanseo_output_script_end_content, array( 'script' => array() ) );
    }   
}  

add_action('woocommerce_archive_description' , 'peymanseo_output_script_product_category');
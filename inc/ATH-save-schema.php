<?php defined('ABSPATH') || exit('No see');

function ATH_SCHEMA()
{
    $get_peymanseo_schema_category = get_term_meta(get_queried_object_id(), 'peymanseo_schema_category', true);
    echo wp_kses($get_peymanseo_schema_category, array('script' => array()));
}

function peymanseo_output_script_end_content($content)
{
    return $content . get_term_meta(get_queried_object_id(), 'peymanseo_schema_category', true);
}

add_action('category_description', 'peymanseo_output_script_end_content');
add_action('the_archive_description', 'peymanseo_output_script_end_content');

if (!class_exists('WooCommerce')) {

    add_action('woocommerce_archive_description', function ($content) {

        if (is_product_category()) 
            echo wp_kses(get_term_meta(get_queried_object_id(), 'peymanseo_schema_category', true), array('script' => array()));
        
    });
}

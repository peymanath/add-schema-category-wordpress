<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }


function psascwp_peymanseo_menus(){
    add_menu_page(
        __( 'Add Schema Category', 'psascwp' ),
        __( 'Category Schema', 'psascwp' ),
        'manage_options',
        'psascwp_general',
        'psascwp_description',
        'dashicons-superhero'
    );
}
add_action('admin_menu','psascwp_peymanseo_menus');

function psascwp_description(){

    if(current_user_can('administrator')){
        
        //Function OutPut Display START
        include_once PSASCWP_INC_TPL . 'general.php';
        //Function OutPut Display END

    }

}
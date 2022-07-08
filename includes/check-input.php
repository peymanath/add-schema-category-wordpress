<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

	// Recieve category Code Schema START
	$peymanseo_schema_category_code = get_term_meta($term->term_id,'peymanseo_schema_category',true);
	// Recieve category Code Schema END


    if(strpos($peymanseo_schema_category_code , 'schema.org') !== false){
        
        $input_code_status_notic = "success";
        psascwp_notice_operation($input_code_status_notic);

    }else{

        $input_code_status_notic = "error";
        psascwp_notice_operation($input_code_status_notic);

    }

    function psascwp_notice_operation($status) {

        if($status == "success"){
            ?>
            <div class="notice notice-success is-dismissible">
                <p><?php _e( 'It was great, a new schema was added / updated!', 'psascwp' ); ?></p>
            </div>
            <?php
        }else{
            ?>
            <div class="notice notice-error is-dismissible">
                <p><?php _e( 'Error! The Written format of the schema code is incorrect.', 'psascwp' ); ?></p>
            </div>
            <?php
        }
    }
    add_action( 'admin_notices', 'psascwp_notice_operation' );
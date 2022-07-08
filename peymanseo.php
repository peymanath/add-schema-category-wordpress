<?php
/*
     * Plugin Name:       Add Schema Category
     * Plugin URI:        https://github.com/peymanseo/Add-Schema-Category-Wordpress
     * Description:       Using this plugin you can add and manage Schema codes to the WordPress category.
     * Version:           0.0.1
     * Requires at least: 5.9
     * Requires PHP:      7.2
     * Author:            Peyman Naderi
     * Author URI:        https://github.com/peymanseo/
     * License:           GPL v2 or later
     * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
     * Text Domain:       psascwp
     * Domain Path:       /languages/
     * Copyright 2022  Peyman Naderi (email : naderidefault.com)
        This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
        This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of Medical Design or Companies design FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software.
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define('PSASCWP_INC_DIR', plugin_dir_path(__FILE__));
define('PSASCWP_INC_URL', plugin_dir_url(__FILE__));
define('PSASCWP_INC_INC', PSASCWP_INC_DIR . 'includes/');
define('PSASCWP_INC_TPL', PSASCWP_INC_DIR . 'template/');
define('PSASCWP_INC_ASSET', PSASCWP_INC_URL . 'asset/');

//Function OutPut Display START
include_once PSASCWP_INC_INC . 'function-general.php';
//Function OutPut Display END

// Add Category Edit Form Fields START
function peymanseo_add_schema_category($term) {

	//Setting schema Plugin START
	include_once PSASCWP_INC_INC . 'check-input.php';
    //Setting schema Plugin END

	//Setting schema Plugin START
	include_once PSASCWP_INC_INC . 'setting-schema.php';
    //Setting schema Plugin END

    /* 
	* OutPut HTML Code to Edite Category START
    *
	* Add Fild /fild-add-new-schema.php
	* Add Fild /display-code-status.php
	* Add Fild /fild-status.php
	* Add Fild /help-u Use-plugin.php
	*
    */		
		include_once 'template/fild-status.php';

		include_once 'template/fild-add-new-schema.php';


	if( ! $peymanseo_schema_category_code == '' ){

		include_once 'template/display-code-status.php';
    }

		include_once 'template/help-use-plugin.php';	

}

add_action( 'category_edit_form_fields', 'peymanseo_add_schema_category', 10, 2 );
add_action( 'product_cat_edit_form_fields', 'peymanseo_add_schema_category', 10, 2 );

// Add Category Edit Form Fields END


//Save Data to Database KEY=peymanseo_schema_category START
include_once PSASCWP_INC_INC . 'function-save-category.php';
//Save Data to Database KEY=peymanseo_schema_category END

//Function OutPut Display START
include_once PSASCWP_INC_INC . 'function-output.php';
//Function OutPut Display END

//Add Style Admin START
function Peymanseo_admin_css() {

	wp_enqueue_style('admin-styles-Peymanseo',  PSASCWP_INC_ASSET . 'admin/admin-style.min.css' );

}

add_action('admin_enqueue_scripts', 'Peymanseo_admin_css');
//Add Style Admin END

//Add Translate Persian fa_IR START
if ( get_locale() == 'fa_IR' ) {

    load_textdomain( 'psascwp', plugin_dir_path( __FILE__ ) . 'languages/fa_IR.mo' );

}
//Add Translate Persian fa_IR END


//Add link to plugins row meta START
function add_link_plugin_page_peymanseo ($links, $file) {

	if ($file == plugin_basename(__FILE__)) {

		$links[] = '<a href="#" target="_blank">'. __('Project source GitHub', 'psascwp' ) .'</a>';

	}

	return $links;
}

add_filter('plugin_row_meta', 'add_link_plugin_page_peymanseo', 10, 2);
//Add link to plugins row meta END

//Add link to plugin action link START
function psascwp_settings_link( $links ) {

    $settings_link = array( '<a href="' . menu_page_url( 'psascwp_general', false ) . '">' . __( 'User Manual', 'psascwp' ) . '</a>' );

    return array_merge( $links, $settings_link );

}

add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'psascwp_settings_link');
//Add link to plugin action link END
<?php defined('ABSPATH') || exit('No see');

/**
 * Plugin Name:       Add Schema Categories
 * Plugin URI:        https://github.com/peymanath/Add-Schema-Category-Wordpress
 * Description:       Using this plugin you can add and manage Schema codes to the WordPress category.
 * Version:           2.0.0
 * Requires at least: 6.0.1
 * Requires PHP:      7.4
 * Author:            Peyman Naderi
 * Author URI:        https://github.com/peymanath/
 * Text Domain:       ATH
 * Domain Path:       /lang/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Copyright 2022  Peyman Naderi (email : naderidefault.com)
        This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
        This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of Medical Design or Companies design FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
        You should have received a copy of the GNU General Public License
        along with this program; if not, write to the Free Software.
 */

define('PSASCWP_INC_DIR', plugin_dir_path(__FILE__));
define('PSASCWP_INC_URL', plugin_dir_url(__FILE__));
define('PSASCWP_INC_INC', PSASCWP_INC_DIR . 'inc/');

// Add Category Edit Form Fields
function ATH_asc_handler($term)
{
    $ATH_SCHEMA_DB = get_term_meta($term->term_id, 'peymanseo_schema_category', true);
?>

    <tr class="form-field">
        <th scope="row" valign="top">
            <label>
                <?= __('Add a new schema', 'ATH') ?>
            </label>
        </th>
        <td>
            <textarea dir="ltr" name="peymanseo_add_schema_category_code" id="peymanseo_add-cat-schema" style="width:100%;" class="large-text" rows="7"><?= wp_kses($ATH_SCHEMA_DB, array('script' => array())); ?></textarea>
        </td>
    </tr>
<?php
}

add_action('category_edit_form_fields', 'ATH_asc_handler', 10, 2);

if (!class_exists('WooCommerce')) add_action('product_cat_edit_form_fields', 'ATH_asc_handler', 10, 2);

//Save Data to Database KEY=peymanseo_schema_category
include_once PSASCWP_INC_INC . 'ATH-save-schema.php';

//Function OutPut Display
include_once PSASCWP_INC_INC . 'ATH-output.php';

//Add Translate Persian fa_IR
if (get_locale() == 'fa_IR')
    load_textdomain('ATH', plugin_dir_path(__FILE__) . 'lang/fa_IR.mo');

//Add link to plugins row meta
add_filter('plugin_row_meta', function ($links, $file) {

    if ($file == plugin_basename(__FILE__))
        $links[] = '<a href="https://github.com/peymanath/Add-Schema-Category-Wordpress" target="_blank">' . __('Project source on GitHub', 'ATH') . '</a>';

    return $links;
}, 10, 2);

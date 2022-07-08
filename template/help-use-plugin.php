<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

$url_admin_DOHTUTP = menu_page_url( 'psascwp_general', false ) . '#dohtutp';

?>

<!-- Help Use Plugin START -->
<tr class="form-field">
    <th scope="row" valign="top"><label><?php _e('How to use the schema output', 'psascwp') ?></label></th>
    <td>
        <p class="<?php echo wp_kses( $class_style_schema_peymanseo_description , array( 'script' => array() ) ); ?>">
            <?php _e('By default, the output is displayed if the following functions are used.', 'psascwp') ?>
            <br>
            <br>
            <code>category_description();</code>
            <br>
            <code>get_the_archive_description();</code>
            <br>
            <code>woocommerce_archive_description();</code>
            <br>
            <br>
            <?php _e('If you do not use the desired functions, call the following functions in the desired location.', 'psascwp') ?>
            <br>
            <br>
            <code>get_psascwp_schema_category();</code>
            <br>
            <br>
            <?php echo sprintf(__('See <a href="%1$s">plugin settings</a> for more information.', 'psascwp') , $url_admin_DOHTUTP); ?>
        </p>


    </td>
</tr>
<!-- Help Use Plugin END -->
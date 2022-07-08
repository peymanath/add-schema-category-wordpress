<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

?>

<!-- Fild Add New Schema START -->
<tr class="form-field">
    <th scope="row" valign="top"><label><?php _e('Add a new schema', 'psascwp') ?></label></th>
    <td>
        <textarea dir="ltr" name="peymanseo_add_schema_category_code" id="peymanseo_add-cat-schema" style="width:100%;"
            class="large-text" rows="7"><?php echo wp_kses( $peymanseo_schema_category_code , array( 'script' => array() ) );; ?></textarea>
    </td>
</tr>
<!-- Fild Add New Schema END-->
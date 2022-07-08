<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }

?>

<!-- Display Code Status START -->
<tr class="form-field">
    <th scope="row" valign="top"><label><?php _e('Schema display code', 'psascwp') ?></label></th>
    <td>
        <pre dir="ltr" class="schema_peymanseo"><?php echo wp_kses(  $peymanseo_code_output_status_enable , array( 'script' => array() ) ); ?></pre>
    </td>
</tr>
<!-- Display Code Status END -->
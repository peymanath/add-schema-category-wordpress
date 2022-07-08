<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }
    
	// Check status category Code Schema START
	if ( ! isset( $_POST['peymanseo_add_schema_category_code'] ) && $peymanseo_schema_category_code == '') 
	{
		$status_input_schema =  __('No schema entered for this category.', 'psascwp');
		if(is_rtl()){
			$color_status_input_schema = "peymanseo_status_inactive_rtl";
		}else{
			$color_status_input_schema = "peymanseo_status_inactive";
		}
		
	}else{
		$status_input_schema = __('This category has an active schema.', 'psascwp');
		
		if(is_rtl()){
			$color_status_input_schema = "peymanseo_status_active_rtl";
		}else{
			$color_status_input_schema = "peymanseo_status_active";
		}
	}
	// Check status category Code Schema END

?>

<!-- Fild Status START -->
<tr class="form-field">
    <th scope="row" valign="top"><label><?php _e('Category Schema Status','psascwp'); ?></label></th>
    <td>
        <mark id="<?php echo esc_attr($color_status_input_schema) ?>"><?php echo esc_html($status_input_schema); ?></mark>
    </td>
</tr>
<!-- Fild Status END -->
<?php defined('ABSPATH') || exit('No see');

add_action('edited_category', 'ATH_SAVE_SCHEMA', 10, 2);
add_action('edited_product_cat', 'ATH_SAVE_SCHEMA', 10, 2);

function ATH_SAVE_SCHEMA($ID)
{

	$ATH_POST_META_SCHEMA = wp_kses(
		$_POST['peymanseo_add_schema_category_code'],
		array('script' => array())
	);

	if (strpos($ATH_POST_META_SCHEMA, 'schema.org') !== false) return;

	if (isset($ATH_POST_META_SCHEMA) || $ATH_POST_META_SCHEMA !== " ")
		update_term_meta($ID, 'peymanseo_schema_category', $ATH_POST_META_SCHEMA);
	else
		delete_term_meta($ID, 'peymanseo_schema_category');
}

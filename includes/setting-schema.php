<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }



	// Edite & Replace category Code Schema START
	$patterns_status_enable = array();
	$patterns_status_enable[0] = '/,/';
	$patterns_status_enable[1] = '/{/';
	$patterns_status_enable[2] = '/<script/';
	$patterns_status_enable[3] = '/<\/script>/';
	$replacements_status_enable = array();
	$replacements_status_enable[0] = ',	&#13;';	   
	$replacements_status_enable[1] = '{ 	&#13;';
	$replacements_status_enable[2] = '<span><</span><span>script</span>';
	$replacements_status_enable[3] = '<span><&#47;</span><span>script></span>';
	$peymanseo_code_output_status_enable = preg_replace($patterns_status_enable, $replacements_status_enable, $peymanseo_schema_category_code);
	// Edite & Replace category Code Schema END

	if(is_rtl()){
		$class_style_schema_peymanseo_description = "schema_peymanseo_description_rtl";
	}else{
		$class_style_schema_peymanseo_description = "schema_peymanseo_description";
	}
<?php

if ( ! defined( 'ABSPATH' ) ) { exit; }
    
	if(is_rtl()){
		$class_style_social = "social_rtl";
	}else{
		$class_style_social = "social";
	}
?>
<div class="wrapper">
    <div class="peymanseo-pannel-general">
        <div class="description-plugin-peymanseo">
            <h1><?php _e('Plugin add schema to category', 'psascwp' ) ?></h1>
            <table>
                <tbody>
                    <tr>
                        <th><?php _e('Title' , 'psascwp'); ?></th>
                        <th><?php _e('Description' , 'psascwp'); ?></th>
                    </tr>
                    <tr>
                        <td><?php _e('Plugin usages' , 'psascwp'); ?></td>
                        <td><?php _e('With this plugin you can add schema codes in the format < script type = "application / ld + json">. This.' , 'psascwp'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php _e('How to use' , 'psascwp'); ?></td>
                        <td>
                            <p>
                                <?php _e('By default, the output is displayed if the following functions are used.', 'psascwp') ?>
                                <br>
                                <code>category_description();</code>
                                <br>
                                <code>get_the_archive_description();</code>
                                <br>
                                <code>woocommerce_archive_description();</code>
                                <br>
                                <?php _e('If you do not use the desired functions, call the following functions in the desired location.', 'psascwp') ?>
                                <br>
                                <code>get_psascwp_schema_category();</code>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="description-use">
            <h1 id="dohtutp"><?php _e('Description of how to use the plugin', 'psascwp' ) ?></h1>
            <p><?php _e('1- To insert the Eskima code at the end of the category description, you must first refer to the product category or blog category.', 'psascwp' ) ?>
            <p><?php _e('2- Refer to the category editing section where you need to add the schema code. ', 'psascwp' ) ?>
            <p><?php _e('3- Now in the section for adding a new schema, you must enter your schema code and update the category. ', 'psascwp' ) ?>
            <p><?php _e('4- A new schema has been added. You can now see the output at the end of the category description. ', 'psascwp' ) ?>
            <p><?php _e('Note: The schema code is stored in the database. If the schema code is deleted, the record created in the database will be deleted. ', 'psascwp' ) ?>
            </p>
        </div>
        <div class="social-peymanseo">
            <h1><?php _e('Contact the plugin author', 'psascwp' ) ?></h1>
            <p class="social-p">
                <?php _e('You can contact the author of the plugin in the following ways.', 'psascwp' ) ?>
            </p>
            <span class="social-all dashicons dashicons-linkedin <?php echo esc_html($class_style_social); ?>"><a
                    href="https://www.linkedin.com/in/peymanseo/" target="_blank"
                    rel="nofollow"><?php _e('Communication via Linkdin', 'psascwp' ); ?></a></span>

            <span class="social-all dashicons dashicons-email-alt <?php echo esc_html($class_style_social); ?>"><a
                    href="mail:naderidefault@gmail.com" target="_blank"
                    rel="nofollow"><?php _e('Communication via E-Mail', 'psascwp' ); ?></a></span>

            <span class="social-all dashicons dashicons-instagram <?php echo esc_html($class_style_social); ?>"><a
                    href="https://instagram.com/peymanseo/" target="_blank"
                    rel="nofollow"><?php _e('Communication via Instagram', 'psascwp' ); ?></a></span>

            <span class="social-all dashicons dashicons-twitter <?php echo esc_html($class_style_social); ?>"><a
                    href="https://twitter.com/peyman_seo/" target="_blank"
                    rel="nofollow"><?php _e('Communication via Twitter', 'psascwp' ); ?></a></span>

            <span class="social-all dashicons dashicons-share <?php echo esc_html($class_style_social); ?>"><a
                    href="https://t.me/peymanseo" target="_blank"
                    rel="nofollow"><?php _e('Communication via Telegram', 'psascwp' ); ?></a></span>

            <span class="social-all dashicons dashicons-share <?php echo esc_html($class_style_social); ?>"><a
                    href="https://github.com/peymanseo/" target="_blank"
                    rel="nofollow"><?php _e('Communication via GitHub', 'psascwp' ); ?></a></span>
        </div>
    </div>
</div>
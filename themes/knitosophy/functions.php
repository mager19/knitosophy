<?php

/**
 * knitosophy First functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package knitosophy
 */


/** Setup **/
require('inc/setup.php');

/** Enqueue scripts and styles.**/
require('inc/scripts.php');

/** Shortcodes Theme **/
require('inc/shortcodes.php');

/**  Custom Pagination Function **/
require('inc/pagination.php');

/**  Social Shared Icons Function **/
require('inc/shared-social.php');

/** Author Fields **/
require('inc/author-fields.php');

/** Yoast Meta Description and page titles **/
require('inc/yoast-meta-description.php');

/** CTA'S post type **/
require('inc/cta-post-type.php');


if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'  => __('Theme Options'),
		'menu_title'  => __('Theme Options'),
		'redirect'    => false,
	));
}

/** ACF Custom functions **/
require('inc/functions/custom-functions.php');

add_theme_support('woocommerce');


// Wordpress Ajax: Get different cart items count
add_action('wp_ajax_nopriv_checking_cart_items', 'checking_cart_items');
add_action('wp_ajax_checking_cart_items', 'checking_cart_items');
function checking_cart_items()
{
	if (isset($_POST['added'])) {
		// For 2 different cart items
		echo json_encode(sizeof(WC()->cart->get_cart()));
	}
	die(); // To avoid server error 500
}

// The Jquery script
add_action('wp_footer', 'custom_popup_script');
function custom_popup_script()
{
?>
	<script src="https://unpkg.com/sweetalert2@8.8.1/dist/sweetalert2.all.min.js"></script>
	<script src="https://unpkg.com/promise-polyfill@8.1.0/dist/polyfill.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			// The Ajax function
			$(document.body).on('added_to_cart', function() {
				console.log('event');
				$.ajax({
					type: 'POST',
					url: wc_add_to_cart_params.ajax_url,
					data: {
						'action': 'checking_cart_items',
						'added': 'yes'
					},
					success: function(response) {
						if (response >= 2) {
							swal(
								'You added all the items!',
								'Proceed to checkout?',
								'success'
							);
						}
					}
				});
			});
		});
	</script>
<?php
}

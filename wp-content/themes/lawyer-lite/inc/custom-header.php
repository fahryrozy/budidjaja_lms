<?php
/**
 * @package lawyer-lite
 * @subpackage lawyer-lite
 * @since lawyer-lite 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses lawyer_lite_header_style()
*/

function lawyer_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'lawyer_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1355,
		'height'                 => 110,
    'flex-width'          => true,
    'flex-height'         => true,
		'wp-head-callback'       => 'lawyer_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'lawyer_lite_custom_header_setup' );

if ( ! function_exists( 'lawyer_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see lawyer_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'lawyer_lite_header_style' );
function lawyer_lite_header_style() {
  //Check if user has defined any header image.
  if ( get_header_image() ) :
  $lawyer_lite_custom_css = "
    .topbar{
      background-image:url('".esc_url(get_header_image())."');
      background-position: center top;
    }";
    wp_add_inline_style( 'lawyer-lite-basic-style', $lawyer_lite_custom_css );
  endif;
}
endif; // lawyer_lite_header_style
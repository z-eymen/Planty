<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );
	wp_enqueue_style('theme_style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . 'css/theme.css'));

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );
add_action('wpcf7_before_send_mail', 'add_separator_between_forms');

function add_separator_between_forms($contact_form) {
    // form seperator vertical
    $separator_html = '<div class="uagb-container-inner-blocks-wrap"></div>';
    
    
    $form_id_1 = 308; 
    $form_id_2 = 284; 

    
    if ($contact_form->id == $form_id_1 || $contact_form->id == $form_id_2) {
        echo $separator_html;
    }
}
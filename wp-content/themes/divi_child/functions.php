<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style'; 
    $theme = wp_get_theme();
    
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',array() , $theme->parent()->get('Version'));
    wp_enqueue_style( 'child-style', get_stylesheet_uri().'?v=sbj\ksn',array( $parenthandle ) ,$theme->get('Version'));


    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('child-script', get_stylesheet_directory_uri().'/js/script.js');

    wp_enqueue_script('font-awesome', "https://kit.fontawesome.com/c007291ff9.js");

}

function custom_add_cart_button () {
    add_action( 'woocommerce_after_shop_loop_item_title','woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'after_setup_theme', 'custom_add_cart_button' );

add_filter('woocommerce_product_single_add_to_cart_text','QL_customize_add_to_cart_button_woocommerce');
function QL_customize_add_to_cart_button_woocommerce(){
return __('Order Now', 'woocommerce');
}

add_filter( 'woocommerce_checkout_fields' , 'custom_mod_checkout_fields' ); function custom_mod_checkout_fields( $fields ) { unset($fields['billing']['billing_company']); return $fields; }
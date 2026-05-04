<?php
/**
 * Astra Child Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Enqueue child theme styles properly
 */
function astra_child_enqueue_styles() {
    // Enqueue the child theme's style.css, ensuring it loads after the parent's styles
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'astra-theme-css' ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'astra_child_enqueue_styles', 15 );

/**
 * Override the site logo with a custom image
 */
function flobites_custom_logo() {
    return '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">'
         . '<img src="' . esc_url( get_stylesheet_directory_uri() . '/images/main-logo.png' ) . '" class="custom-logo" alt="' . esc_attr( get_bloginfo( 'name' ) ) . '">'
         . '</a>';
}
add_filter( 'get_custom_logo', 'flobites_custom_logo' );

/**
 * PRIMARY NAV: centered links + right-aligned CTA group (Shop + Cart)
 */
add_filter( 'pre_wp_nav_menu', 'flobites_primary_nav', 10, 2 );
function flobites_primary_nav( $output, $args ) {
    if ( ! isset( $args->theme_location ) || $args->theme_location !== 'primary' ) {
        return $output; // null — lets other menus render normally
    }

    $links = [
        [ home_url( '/why-flo' ),      'Why Flo'       ],
        [ home_url( '/whats-in-flo' ), "What's in Flo" ],
        [ home_url( '/women-on-flo' ), 'Women on Flo'  ],
    ];

    $html = '<ul class="flobites-nav-list">';
    foreach ( $links as $link ) {
        $html .= '<li class="menu-item"><a href="' . esc_url( $link[0] ) . '">' . esc_html( $link[1] ) . '</a></li>';
    }

    // Shop button pushed to the right via CSS
    $html .= '<li class="menu-item flobites-shop-btn-item">'
           . '<a href="' . esc_url( home_url( '/shop' ) ) . '" class="flobites-shop-btn">Shop FloBites</a>'
           . '</li>';

    // Custom cart icon sitting directly next to the Shop button
    $cart_url        = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : home_url( '/cart/' );
    $cart_image_url  = 'http://flobites-local.local/wp-content/uploads/2026/05/cart.png';

    $html .= '<li class="menu-item flobites-custom-menu-cart">'
           . '<a href="' . esc_url( $cart_url ) . '">'
           . '<img src="' . esc_url( $cart_image_url ) . '" alt="Cart" class="flobites-custom-cart">'
           . '</a>'
           . '</li>';

    $html .= '</ul>';

    return $html; // non-null short-circuits wp_nav_menu()
}

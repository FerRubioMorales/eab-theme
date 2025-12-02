<?php
/**
 * Theme setup and assets.
 */

if ( ! function_exists( 'eab_theme_setup' ) ) {
    /**
     * Configure theme defaults and supports.
     */
    function eab_theme_setup() {
        load_theme_textdomain( 'eab-theme', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        add_theme_support( 'custom-logo', [
            'height'      => 80,
            'width'       => 80,
            'flex-width'  => true,
            'flex-height' => true,
        ] );

        register_nav_menus(
            [
                'primary' => __( 'Primary Menu', 'eab-theme' ),
                'footer'  => __( 'Footer Menu', 'eab-theme' ),
                'shop'    => __( 'Shop Menu', 'eab-theme' ),
            ]
        );

        add_theme_support(
            'html5',
            [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ]
        );

        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_editor_style( 'style.css' );
    }
}
add_action( 'after_setup_theme', 'eab_theme_setup' );

/**
 * Set a sensible content width for embeds and Elementor canvas.
 */
function eab_content_width() {
    $GLOBALS['content_width'] = 1200;
}
add_action( 'after_setup_theme', 'eab_content_width', 0 );

if ( ! function_exists( 'eab_enqueue_assets' ) ) {
    /**
     * Enqueue theme stylesheet and scripts.
     */
    function eab_enqueue_assets() {
        $theme_version = wp_get_theme()->get( 'Version' );

        wp_enqueue_style( 'eab-theme-style', get_stylesheet_uri(), [], $theme_version );

        wp_register_script(
            'eab-theme-script',
            get_template_directory_uri() . '/assets/js/theme.js',
            [],
            $theme_version,
            true
        );

        wp_enqueue_script( 'eab-theme-script' );
    }
}
add_action( 'wp_enqueue_scripts', 'eab_enqueue_assets' );

if ( ! function_exists( 'eab_widgets_init' ) ) {
    /**
     * Register widget areas.
     */
    function eab_widgets_init() {
        register_sidebar(
            [
                'name'          => __( 'Primary Sidebar', 'eab-theme' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Add widgets here to appear in your sidebar.', 'eab-theme' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            ]
        );
    }
}
add_action( 'widgets_init', 'eab_widgets_init' );

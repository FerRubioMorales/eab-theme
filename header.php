<?php
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'header' ) ) {
    return;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
    <div class="container site-branding">
        <div>
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            }
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </div>
        <nav aria-label="Primary" class="site-navigation">
            <button class="nav-toggle" aria-expanded="false" aria-controls="primary-menu">☰ <?php esc_html_e( 'Menu', 'eab-theme' ); ?></button>
            <?php
            wp_nav_menu(
                [
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'menu_class'     => 'primary-navigation',
                    'fallback_cb'    => '__return_false',
                ]
            );
            ?>
        </nav>
    </div>
</header>
<div class="container">

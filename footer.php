<?php
if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'footer' ) ) {
    return;
}
?>
</div>
<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div>
                <p class="footer-brand">&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
                <p class="footer-tagline"><?php esc_html_e( 'Moda y accesorios tiernos para bebés felices.', 'eab-theme' ); ?></p>
            </div>
            <div class="footer-nav-wrap">
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-navigation',
                        'fallback_cb'    => false,
                    ]
                );
                ?>
                <?php
                wp_nav_menu(
                    [
                        'theme_location' => 'shop',
                        'container'      => false,
                        'menu_class'     => 'footer-navigation shop-navigation',
                        'fallback_cb'    => false,
                    ]
                );
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

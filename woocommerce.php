<?php
get_header();
?>
<main class="woocommerce-layout">
    <section>
        <header class="shop-hero">
            <p class="eyebrow"><?php esc_html_e( 'Colección', 'eab-theme' ); ?></p>
            <h1><?php woocommerce_page_title(); ?></h1>
            <p class="shop-subtitle"><?php esc_html_e( 'Prendas suaves, colores naturales y envíos directos a tus clientes.', 'eab-theme' ); ?></p>
        </header>
        <?php woocommerce_content(); ?>
    </section>
    <aside class="sidebar" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>
    </aside>
</main>
<?php
get_footer();

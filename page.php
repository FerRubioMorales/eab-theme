<?php
get_header();

if ( function_exists( 'elementor_theme_do_location' ) && elementor_theme_do_location( 'single' ) ) {
    get_footer();
    return;
}
?>
<main>
    <section>
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                    <?php
                    wp_link_pages(
                        [
                            'before' => '<div class="page-links">' . __( 'Pages:', 'eab-theme' ),
                            'after'  => '</div>',
                        ]
                    );
                    ?>
                </article>
                <?php
            endwhile;
        endif;
        ?>
    </section>
    <aside class="sidebar" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>
    </aside>
</main>
<?php get_footer(); ?>

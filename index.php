<?php get_header(); ?>
<main>
    <section>
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-card' ); ?>>
                    <div class="eyebrow"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-meta">
                        <?php echo esc_html( get_the_date() ); ?> • <?php echo esc_html( get_the_author() ); ?>
                    </div>
                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <a class="read-more" href="<?php the_permalink(); ?>">
                        <?php esc_html_e( 'Seguir leyendo', 'eab-theme' ); ?>
                        <span aria-hidden="true">→</span>
                    </a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="article-card">
                <h2><?php esc_html_e( 'No hay entradas disponibles aún.', 'eab-theme' ); ?></h2>
            </article>
        <?php endif; ?>

        <div class="pagination">
            <?php
            the_posts_pagination(
                [
                    'mid_size'  => 2,
                    'prev_text' => __( 'Anterior', 'eab-theme' ),
                    'next_text' => __( 'Siguiente', 'eab-theme' ),
                ]
            );
            ?>
        </div>
    </section>
    <aside class="sidebar" role="complementary">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        <?php endif; ?>
    </aside>
</main>
<?php get_footer(); ?>

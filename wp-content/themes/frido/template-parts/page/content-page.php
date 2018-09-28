<?php
$title_class = (absint(fridominimal_get_metabox( get_the_ID(), 'osf_enable_page_heading', 1 )) != 0) ? '' : ' screen-reader-text';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title' . esc_attr($title_class) . '">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php
        the_content();
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'frido' ),
            'after'  => '</div>',
        ) );

        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->

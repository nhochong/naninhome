<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-inner">
        <?php if ('' !== get_the_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php if (!is_single()){ ?>
                <a href="<?php the_permalink(); ?>">
                    <?php } ?>
                    <?php the_post_thumbnail('fridominimal-featured-image-full'); ?>
                    <?php if (!is_single()){ ?>
                </a>
            <?php } ?>
            </div><!-- .post-thumbnail -->
        <?php endif; ?>
        <header class="entry-header">
            <?php
            the_category('');
            if ('post' === get_post_type()) {
                echo '<div class="entry-meta">';
                if (is_single()) {
                    fridominimal_posted_on();
                } else {
                    fridominimal_posted_on();

                };
                echo '</div><!-- .entry-meta -->';
            };

            if (is_single()) {
                the_title('<h1 class="entry-title">', '</h1>');
            } elseif (is_front_page() && is_home()) {
                the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
            } else {
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            }
            ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                __('Read more<span class="screen-reader-text"> "%s"</span>', 'frido'),
                get_the_title()
            ));

            wp_link_pages(array(
                'before'      => '<div class="page-links">' . __('Pages:', 'frido'),
                'after'       => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after'  => '</span>',
            ));
            ?>
        </div><!-- .entry-content -->

        <?php
        if (is_single()) {
            fridominimal_entry_footer();
        }
        ?>
    </div>
</article><!-- #post-## -->

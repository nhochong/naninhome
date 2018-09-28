<?php
get_header(); ?>
    <div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            /* Start the Loop */
            while (have_posts()) : the_post();

                get_template_part('template-parts/post/content', get_post_format());

                get_template_part('template-parts/common/author-bio', get_post_format());

                $prev_link = fridominimal_get_post_link('category', 'post')->previous_post;
                $next_link = fridominimal_get_post_link('category', 'post')->next_post;

                if (!empty($prev_link) || !empty($next_link)):
                    ?>
                    <div class="navigation">
                        <div class="previous-nav">
                            <?php if (!empty($prev_link)): ?>
                                <div class="thumbnail-nav"><?php echo get_the_post_thumbnail(fridominimal_get_post_link()->previous, 'thumbnail'); ?></div>
                                <div class="nav-content">
                                    <div class="nav-title"><?php esc_html_e('Previous Post', 'frido'); ?></div>
                                    <div class="nav-link"><?php echo wp_kses_post($prev_link); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="next-nav">
                            <?php if (!empty($next_link)): ?>
                                <div class="nav-content">
                                    <div class="nav-title"><?php esc_html_e('Next Post', 'frido'); ?></div>
                                    <div class="nav-link"><?php echo wp_kses_post($next_link); ?></div>
                                </div>
                                <div class="thumbnail-nav"><?php echo get_the_post_thumbnail(fridominimal_get_post_link()->next, 'thumbnail'); ?></div>
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endif;

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;


            endwhile; // End of the loop.
            ?>

        </main> <!-- #main -->
        </div> <!-- #primary -->
        <?php get_sidebar(); ?>
    </div><!-- .wrap -->

<?php get_footer();

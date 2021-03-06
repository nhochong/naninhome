<div class="column-item post-style-1">
    <div class="post-inner">
	    <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <a href="<?php the_permalink(); ?>">
				    <?php the_post_thumbnail('fridominimal-featured-image-large'); ?>
                </a>
            </div><!-- .post-thumbnail -->
	    <?php endif; ?>
        <div class="entry-header">
            <span class="entry-category ">
                <?php the_category(','); ?>
            </span>/
            <span class="post-date">
                <?php echo get_the_date(); ?>
            </span>
        </div>
        <div class="entry-content">
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
            <div class="link-more"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Read more', 'frido');?></a></div>
        </div>
    </div>
</div>
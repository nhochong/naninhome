<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comments_number = get_comments_number();
            if( $comments_number < 10){
                $comments_number = '0'.$comments_number;
            }

            printf( __('Comments( %s )','frido'), $comments_number );
            ?>
        </h2>
        <ol class="comment-list" data-opal-customizer="otf_comment_template">
            <?php
            wp_list_comments( array(
                'avatar_size' => 100,
                'style'       => 'ol',
                'short_ping'  => true,
                'reply_text'  => esc_html__( 'Reply', 'frido' ),
            ) );
            ?>
        </ol>

        <?php the_comments_pagination( array(
            'prev_text'          => '<span class="fa fa-arrow-left"></span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'frido' ) . '</span>',
            'next_text'          => '<span class="screen-reader-text">' . esc_html__( 'Next page', 'frido' ) . '</span><span class="fa fa-arrow-right"></span>',
        ) );

    endif; // Check for have_comments().

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' )) : ?>

        <p class="no-comments"><?php _e( 'Comments are closed.', 'frido' ); ?></p>
        <?php
    endif;
    comment_form();
    ?>

</div><!-- #comments -->

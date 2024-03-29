<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 *
 * @package Idolcorp
 * @since Idolcorp 1.0
 */
wp_reset_postdata();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header"> 
        <div class="entry-meta clearfix">
            <?php idolcorp_header_entry_meta(); ?>
            <?php
        if (! post_password_required() && ( comments_open() || get_comments_number() )) :
            echo '<div class="fa-comments-o comments-link">';
            comments_popup_link(__('Leave a comment', 'idolcorp'), __('1 Comment', 'idolcorp'), __('% Comments', 'idolcorp'));
            echo '</div>';
        endif;
        
        ?>
        </div>
    </header>
    <?php idolcorp_blog_content();?>
    <?php  idolcorp_entry_meta_tags();?>
</article>
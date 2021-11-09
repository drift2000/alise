<?php
/**
 * Template Name: Home Page
 *
 * This is the template that display sections in home page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
*
 */

get_header(); ?>
    <div id="main" class="site-main home">         
        <div class="container">
            <div class="row content-wrap">              
                <div id="content" class="page site-content"> 
                <section id="articlemain" class="post" role="main">
                    <?php
                    // Start the Loop.
                    while (have_posts()) :
                        the_post();

                    // Include the page content template.
                        get_template_part('page-templates/content', 'page');

                    endwhile;
                    ?>
                </section>
                </div>
                </div>                   
            </div>
        </div><!-- .container -->
    </div><!-- #main -->
</div><!-- Main div Close-->
<?php
get_footer();
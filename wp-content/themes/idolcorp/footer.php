<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 *
 * @package Idolcorp
 * @since Idolcorp 1.0
 */
?>

        <footer id="colophon" class="site-footer">
            <div class="widget-wrap">
                <div class="container">
                    <div class="row site-info">
                        <div class="soc-network col-3 col-md-6">
                            <a class="fa-twitter" href="#" title="Twitter" target="_blank"></a> &nbsp;
                            <a class="fa-linkedin" href="#" title="Linkedin" target="_blank"></a>
                        </div>
                        <div class="copy-right col-9 col-md-6">
                            <?php  do_action('idolcorp_copyright'); ?>
                        </div>
                    </div>
                </div>
                <div class="back-to-top">
                    <a href="#masthead" title="Go to Top" class="fa-angle-up"></a>
                </div>
            </div>
        </footer>
    </div>
</div> <!-- End of #fpage-->
<?php wp_footer(); ?>
</body>

</html>
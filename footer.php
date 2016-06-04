
<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #body div element.
 */
?>
    <footer class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h4 style="font-weight:bold;">AFA</h4>
                    <p>A firm based in Cirencester</p>
                </div>

                <div class="col-sm-3">
                    <h4 style="font-weight:bold;">Quick Links</h4>
                    <?php /* Primary navigation */
                        wp_nav_menu( array(
                          'menu' => 'top_menu',
                          'depth' => 2,
                          'container' => false,
                          'menu_class' => 'list-unstyled',
                          //Process nav menu using our custom nav walker
                          'walker' => new wp_bootstrap_navwalker())
                        );
                    ?>
                </div>
                <div class="col-sm-4 subscribe">
                    <h4 style="font-weight:bold;">Keep up to date with the latest news</h4>
                    <?php echo do_shortcode( '[contact-form-7 id="434" title="AFA Footer"]'); ?>
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->

        <!--/.footer-bottom-->
    </footer>
    <!-- end of footer section -->
    <div class="text-center copyright">Site by Blueprint Web Designs</a>
    </div>

	<?php wp_footer(); ?>
	
</body>
</html>

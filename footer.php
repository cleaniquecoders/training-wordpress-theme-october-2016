<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Product_Theme
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5>Mobile App © 2016</h5></div>
                <div class="col-sm-6 social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php
wp_enqueue_script(
    'bootstrap-js',
    get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js',
    array('jquery'),
    '3.3.7',
    true
);

?>

<?php wp_footer();?>

</body>
</html>

<?php get_header();?>
<style type="text/css">
    a:visited {
      color: white;
    }
</style>
	<div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup">
                    	<img
                    		src="<?php echo get_template_directory_uri() . '/assets/img/iphone.svg'; ?>"
                    		class="device">
                        <div class="screen"></div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1>Our Fantastic App</h1>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="#"><i class="fa fa-apple"></i> Available on the App Store</a><a class="btn btn-success btn-lg" role="button" href="#"><i class="fa fa-google"></i> Available on Google Play</a></p>
                </div>
            </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">People Love It!</h2>
        <blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            <footer>Famous tech website</footer>
        </blockquote>
    </section>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Fantastic Features</h2>
                    <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-cloud"></i>
                            <p>Cloud-ready </p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-piggy-bank"></i>
                            <p>Saves You Money</p>
                        </div>
                        <div class="col-xs-4 icon-feature"><i class="glyphicon glyphicon-fire"></i>
                            <p>Fire Proof</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- If have posts -->
    <?php if (have_posts()): ?>
    	<section class="posts">
    		<div class="container">
            	<div class="row">
		    		<?php while (have_posts()): the_post()?>
											<div class="col-md-3">
					                            <a href="<?php the_permalink();?>">
												<h3><?php echo the_title(); ?> <small><?php the_author();?></small></h3>
					                            </a>

											</div>
										<?php endwhile;?>
				</div>
			</div>
		</section>
	<?php endif;?>

<?php
get_footer();
?>
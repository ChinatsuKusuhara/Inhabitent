<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="contact">	
						<h3>Contact Info</h3>
						<i class="fa fa-envelope" aria-hidden="true"></i><p>info@inhabitent.com</p>
						<i class="fa fa-phone" aria-hidden="true"></i><p>778-456-7891</p>
							<div class="socialmedia">
							<i class="fa fa-facebook-square" aria-hidden="true"></i>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square" aria-hidden="true"></i>
							</div>
					</div>
					<div class-="business-hours">
						<h3>Business Hours</h3>
						<p><span class="bold">Monday-Friday:</span>9am to 5pm</p>
						<p><span class="bold">Saturday:</span>10am to 2pm</p>
						<p><span class="bold">Sunday:</span>Closed</p>
					</div>	
					<img src="<?php echo get_template_directory_uri(); ?>/asset/logos/inhabitent-logo-text-.svg" alt="Inhabitent Camping Supply Co.">
					<div class="copyright">Copyright © 2016 Inhabitent</div>	
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

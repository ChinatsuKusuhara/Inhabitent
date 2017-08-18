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
						<h3 class="uppercase contactInfo">Contact Info</h3>
							<div>
								<ul class="media-list">
									<li class="media">
										<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@inhabitent.com</a>
									</li>
									<li class="media">
										<a href="#"><i class="fa fa-phone" aria-hidden="true"></i>778-456-7891</a>
									</li>
									<li class="icon-media">
										<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
									</li>
								</ul>
							</div>	
					</div>
					<div class="business-hours">	
						<div class="hours">
							<h3 class="uppercase">Business Hours</h3>
							<div class="hour-info">
								<p class="weekly-hours"><span class="bold">Monday-Friday: </span>9am to 5pm</p>
								<p class="weekly-hours"><span class="bold">Saturday: </span>10am to 2pm</p>
								<p class="weekly-hours"><span class="bold">Sunday: </span>Closed</p>
							</div>
						</div>	
					</div>
				<img class="logo-text" src="<?php echo get_template_directory_uri(); ?>/asset/logos/inhabitent-logo-text.svg" alt="Inhabitent Camping Supply Co.">
				</div><!-- .site-info -->
				<div class="copyright">Copyright &copy; 2016 Inhabitent</div>	
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>

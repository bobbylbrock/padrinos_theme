<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Padrinos_Theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'padrinos_theme' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'padrinos_theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'padrinos_theme' ), 'Padrinos_Theme', '<a href="http://underscores.me/" rel="designer">Bobby Brock</a>' ); ?> -->


		<section class="footer-content">


			<?php padrinos_theme_social_menu (); ?>



			<!-- Begin MailChimp Signup Form -->
			<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
			<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
			</style>
			<div id="mc_embed_signup">
				<form action="//padrinospops.us9.list-manage.com/subscribe/post?u=bce82e8ece2a626ee900b88d7&amp;id=ce3cdf0336" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<h2>Stay up to date with Padrino's<h2>
						<h3>Get discounts, contests, and news in your inbox!</h3>
						<div class="mc-field-group">
							<label for="mce-FNAME">Name </label>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address </label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;"><input type="text" name="b_bce82e8ece2a626ee900b88d7_ce3cdf0336" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
			<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>


			<!--End mc_embed_signup-->



		</section>

		<div class="address">
			<a href="tel:+16156101833">
				<h2 class="heading">(615) 610-1833</h2>
			</a>
			<a href="http://maps.google.com/maps?saddr=&daddr=4002c%20Granny%20White,%20Nashville,%20TN">
				<h3 class="lead">4002c Granny White Nashville TN, 37204</h3>
			</a>
			<h3>Monday---Sunday: 12:00---5:00</h3>
		</div>


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

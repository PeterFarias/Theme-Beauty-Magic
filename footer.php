<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package beauty_magic
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<?php the_custom_logo(); ?>

					<div class="social-media pt-5">
						<div class="social-media-icons d-flex justify-content-center align-items-center me-3">
							<i class="bi bi-facebook"></i>
						</div>
						<div class="social-media-icons d-flex justify-content-center align-items-center me-3">
							<i class="bi bi-twitter"></i>
						</div>
						<div class="social-media-icons d-flex justify-content-center align-items-center">
							<i class="bi bi-instagram"></i>
						</div>
					</div>
				</div>

				<div class="col-4">
					<h2>Categorias</h2>
				</div>
				<div class="col-4">
					<h2>Legal</h2>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

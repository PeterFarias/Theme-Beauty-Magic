<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package beauty_magic
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="container pb-5 pt-5">
			<div id="carouselExampleControls" class="carousel slide overflow-hidden rounded" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="<?php echo get_template_directory_uri();?>/img/slider/1.png" loading="lazy" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri();?>/img/slider/2.png" loading="lazy" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
						<img src="<?php echo get_template_directory_uri();?>/img/slider/3.png" class="d-block w-100" alt="...">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>

		<section class="container">
			<h1 class="text-center">Productos Populares</h1>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode('[products colums=4 limit=8]'); ?>
			</div>
		</section>
	</main>

<?php
get_footer();
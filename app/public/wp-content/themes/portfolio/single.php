<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main project-single-page">
		<div class="single-container">
			<h1 class="hero-title"><?php echo get_the_title(); ?></h1>
			<div class="single-project-content">
				<?php echo the_content(); ?>
			</div>
		</div>

	</main><!-- #main -->

<?php
	get_footer();
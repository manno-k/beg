<?php
	/**
	 * The main template file
	 *
	 * This is the most generic template file in a WordPress theme
	 * and one of the two required files for a theme (the other being style.css).
	 * It is used to display a page when nothing more specific matches a query.
	 * E.g., it puts together the home page when no home.php file exists.
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<article class="l-front">
				<section class="l-front__story">
					<h2>OUR STORY</h2>
					<h3>blue-eyed girl</h3>
					<div class="l-front__story-content">
						<?php the_field('our_story') ?>
					</div>
					<a class="u-link-gold" href="<?php echo home_url('/salon'); ?>">
						MORE
					</a>
				</section>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();

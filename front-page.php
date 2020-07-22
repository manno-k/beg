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
			<header class="l-header-top">
				<?php
					$top_movie = get_field('top_movie');
					if ($top_movie) :
						?>
						<video id="js-bg_movie" controls loop autoplay muted width="" height="">
							<source src="<?php echo $top_movie['url']; ?>" type="video/mp4"/>
						</video>
					<?php endif; ?>
			</header>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();

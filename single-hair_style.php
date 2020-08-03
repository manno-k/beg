<?php
	/**
	 * The template for displaying all single posts
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package wordpress_template
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article class="p-archive__wrap">
				<header class="u-title u-title__catalog">
					<div class="u-title__wrap">
						<p class="u-title__text">Catalog</p>
					</div>
				</header>
				<?php
					while (have_posts()) : the_post();

						get_template_part('template-parts/content/content', 'catalog');

					endwhile; // End of the loop.
				?>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();

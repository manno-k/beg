<?php
	/**
	 * The template for displaying archive pages
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article class="p-blog__wrap">
				<header class="u-title u-title__blog">
					<div class="u-title__wrap">
						<h1 class="u-title__text">Lasted Post</h1>
					</div>
				</header>
				<nav class="p-blog__pager-top c-pager">
					<?php wp_pagenavi(); ?>
				</nav>
				<section class="p-blog__section">

				<?php
					if (have_posts()) : ?>


						<?php
						/* Start the Loop */
						while (have_posts()) : the_post();

							?>

							<?php get_template_part('template-parts/components/blog', 'card'); ?>


						<?php
						endwhile;

					else :

						get_template_part('template-parts/content', 'none');

					endif; ?>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
				</section>
				<nav class="c-pager p-blog__pager-bottom">
					<?php wp_pagenavi(); ?>
				</nav>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

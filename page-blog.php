<?php
	/**
	 * The template for displaying all pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site may use a
	 * different template.
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main p-archive">
			<article class="p-archive__wrap">
				<header class="u-title u-title__blog">
					<div class="u-title__wrap">
						<h1 class="u-title__text">Lasted Post</h1>
					</div>
				</header>

				<?php
					$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
					$my_query = new WP_Query(array(
						'paged'          => $paged,
						'posts_per_page' => 12
					));
				?>
				<nav class="p-archive__pager-top c-pager">
					<?php wp_pagenavi(array('query' => $my_query)); ?>
				</nav>

				<section class="p-archive__section">
					<?php if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post(); ?>
						<?php get_template_part('template-parts/components/blog', 'card'); ?>
					<?php endwhile;endif; ?>
					<div class="p-archive__card empty"></div>
					<div class="p-archive__card empty"></div>
					<div class="p-archive__card empty"></div>
					<div class="p-archive__card empty"></div>
					<div class="p-archive__card empty"></div>
				</section>
				<nav class="c-pager p-archive__pager-bottom">
					<?php wp_pagenavi(array('query' => $my_query)); ?>
				</nav>
				<?php wp_reset_postdata(); ?>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

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
		<main id="main" class="site-main p-blog">
			<article class="p-blog__wrap">
				<header class="u-title u-title__blog">
					<div class="u-title__wrap">
						<h1 class="u-title__text">Lasted Post</h1>
					</div>
				</header>

				<?php
					$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
					$my_query = new WP_Query(array(
						'paged'          => $paged,
						'posts_per_page' => 7
					));
				?>
				<nav class="p-blog__pager-top c-pager">
					<?php wp_pagenavi(array('query' => $my_query)); ?>
				</nav>

				<section class="p-blog__section">
					<?php if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post(); ?>
						<dl class="p-blog__card">
							<dt class="p-blog__card-thumb">
								<a href="<?php the_permalink(); ?>">
									<?php
										if (wp_is_mobile()) {
											$img_size = 'medium';
										} else {
											$img_size = 'large';
										}
										if (has_post_thumbnail()): ?>
											<?php the_post_thumbnail($img_size); ?>
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="no image">
										<?php endif; ?>
								</a>
							</dt>
							<dd class="p-blog__card-desc">
								<a href="<?php the_permalink(); ?>">
									<time><?php the_time('Y-m-d'); ?> </time>
									<h2><?php the_title(); ?></h2>
									<p>WRITTEN BY <?php the_author(); ?></p>
								</a>
							</dd>
						</dl>
					<?php endwhile;endif; ?>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
					<div class="p-blog__card empty"></div>
				</section>
				<nav class="c-pager p-blog__pager-bottom">
					<?php wp_pagenavi(array('query' => $my_query)); ?>
				</nav>
				<?php wp_reset_postdata(); ?>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

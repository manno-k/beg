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
					<div class="l-front__story-title">
						<h2>OUR STORY</h2>
						<h3>blue-eyed
							girl<a class="u-link-gold u-hidden-md-down" href="<?php echo home_url('/salon'); ?>">
								MORE
							</a>
						</h3>

					</div>
					<div class="l-front__story-content">
						<?php the_field('our_story') ?>
					</div>
					<a class="u-link-gold u-hidden-lg-up" href="<?php echo home_url('/salon'); ?>">
						MORE
					</a>
				</section>
				<section class="l-front__news">
					<div class="l-front__news-left empty"></div>
					<div class="l-front__news-right">
						<h2>Latest News</h2>
					</div>
					<?php
						$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
						$my_query = new WP_Query(array(
							'paged'          => $paged,
							'posts_per_page' => 4
						));
					?>
					<div class="l-front__news-left">
						<div class="js-news">
							<?php if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post(); ?>
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

							<?php endwhile;endif;
								wp_reset_postdata();
							?>
						</div>
					</div>
					<div class="l-front__news-right">
						<?php
							$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
							$my_query = new WP_Query(array(
								'paged'          => $paged,
								'posts_per_page' => 4
							));
						?>
						<?php if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post(); ?>
							<a class="post" href="<?php the_permalink(); ?>">
								<span class="cat">
									<?php
										$category = get_the_category();
										echo $category[0]->cat_name;
									?>
								</span>
								<time>
									<?php the_time('Y-m-d'); ?>
								</time>
								<h3>
									<?php
										if (wp_is_mobile()) {
											$title_length = 30;
										} else {
											$title_length = 13;
										}
										if (mb_strlen($post->post_title, 'UTF-8') > $title_length) {
											$title = mb_substr($post->post_title, 0, $title_length, 'UTF-8');
											echo $title . '…';
										} else {
											echo $post->post_title;
										}
									?>
								</h3>
							</a>
						<?php endwhile;endif;
							wp_reset_postdata();
						?>
						<a class="more" href="<?php echo home_url('/blog'); ?>">
							READ MORE
						</a>
						<div class="hr"></div>
					</div>
				</section>

			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();

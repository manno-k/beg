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

				<?php get_template_part('template-parts/components/front/front', 'nav'); ?>

				<?php
					$shop = get_field('shop', 'Options');
					if ($shop) :?>
						<section class="l-front__shop">
							<h2>Shop</h2>
							<?php echo do_shortcode('[BASE_ITEM]'); ?>
						</section>
					<?php endif; ?>

				<section class="l-front__catalog">
					<div class="l-front__catalog-logo">
						<h2>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/front/catalog/catalog-title__sp.png" alt="hair catalog"/>
						</h2>
					</div>
					<div class="js-catalog__arrow"></div>
					<div class="js-catalog">
						<?php
							$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
							$my_query = new WP_Query(array(
								'paged'          => $paged,
								'posts_per_page' => 5,
								'post_type'      => 'hair_style'
							));
							$i        = 01;
							if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post();
								if (wp_is_mobile()) {
									$img_size = 'medium';
								} else {
									$img_size = 'full';
								}
								$title = get_the_title();

								$staff          = get_field('style_staff');
								$style_img_main = get_field('style_img_main');
								$style_img_side = get_field('style_img_side');

								$attr = [
									'alt' => $title
								];
								?>
								<div class="js-catalog__item">
									<div class="js-catalog__num">
										<?php foreach ($staff as $post):
											$staff_name = get_field('staff_name'); ?>
											<h3>Style <?php echo sprintf('%02d', $i); ?></h3>
											<p>DESIGN BY <?php echo $staff_name; ?></p>
										<?php endforeach; ?>
									</div>
									<div class="js-catalog__img">
										<div class="js-catalog__img-left">
											<a href="<?php the_permalink(); ?>">
												<?php echo wp_get_attachment_image($style_img_main, $size, 0, $attr); ?>
											</a>
										</div>
										<div class="js-catalog__img-right">
											<a href="<?php the_permalink(); ?>">
												<?php echo wp_get_attachment_image($style_img_side, $size, 0, $attr); ?>
											</a>
										</div>

									</div>

								</div>
								<?php
								$i++;
							endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
				</section>

				<?php
					$ig = get_field('instagram', 'Options');
				?>
				<section class="l-front__ig">
					<h2>Latest Posts</h2>
					<div class="l-front__ig-feed">
						<?php echo do_shortcode('[wp_my_instagram username="' . $ig . '" limit="4" layout="4" size="large" link="" target="_blank"]'); ?>
					</div>
				</section>
				<div class="l-front__ig-more">
					<a href="https://www.instagram.com/<?php echo $ig; ?>" target="_blank">
						READ MORE
					</a>
					<div class="l-front__ig-bar"></div>
				</div>

			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();

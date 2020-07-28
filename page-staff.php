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
		<main id="main" class="site-main p-staff">
			<article class="p-staff__wrap">
				<header class="p-staff__header">
					<div class="p-staff__header-wrap">
						<div class="p-staff__header-left">
							<h1>Staff</h1>
							<dl class="p-staff__card">
								<?php
									$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
									$my_query = new WP_Query(array(
										'paged'          => $paged,
										'post__in'       => [34],
										'posts_per_page' => 1,
										'post_type'      => 'shop_staff'
									));
									if ($my_query->have_posts()): while ($my_query->have_posts()):
									$my_query->the_post();
									$staff_name        = get_field('staff_name');
									$staff_img         = get_field('staff_img');
									$staff_webreserved = get_field('staff_webreserved');
									$staff_comment     = get_field('staff_comment');
									$hair_style        = get_field('hair_style');
								?>

								<dt class="p-staff__card-left">
									<?php
										$size      = 'full';
										$blog_info = get_bloginfo();
										$attr      = [
											'alt'   => $staff_name,
											'class' => 'p-staff__card-thumb',
										];
										echo wp_get_attachment_image($staff_img, $size, 0, $attr); ?>
								</dt>
								<dd class="p-staff__card-right">
									<h2 class="p-staff__card-jp"><?php the_title(); ?></h2>
									<p class="p-staff__card-en"><?php echo $staff_name ?></p>
									<p class="p-staff__card-comment"><?php echo $staff_comment ?></p>
									<a class="p-staff__card-btn" href="<?php echo $staff_webreserved ?>" target="_blank">
										指名WEB予約する
									</a>
								</dd>
							</dl>
						</div>
						<div class="p-staff__header-right">
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/staff/staff-hero.png" alt="店舗写真"/>
						</div>
					</div>

					<div class="p-staff__slider">
						<div class="js-staff-hair">
							<?php foreach ($hair_style as $post): ?>
								<?php echo $post->post_status ?>
								<?php
								$hair_thumb = get_field('style_img_main'); ?>
								<a href="<?php echo home_url('/hair_style/') . $post->ID; ?>">
									<?php echo wp_get_attachment_image($hair_thumb, $size, 0, $attr); ?>
								</a>
							<?php endforeach; ?>
						</div>
					</div>
					<?php endwhile;
						endif;
						wp_reset_postdata();
					?>
				</header>

				<section class="p-staff__content">

<!--					<div class="p-staff__card">-->
<!--						--><?php
//							$paged    = get_query_var('paged') ? get_query_var('paged') : 1;
//							$my_query = new WP_Query(array(
//								'paged'          => $paged,
//								'posts_per_page' => 20,
//								'post__not_in'   => [34],
//								'post_type'      => 'shop_staff',
//							));
//
//							if ($my_query->have_posts()): while ($my_query->have_posts()): $my_query->the_post();
//								$staff_name        = get_field('staff_name');
//								$staff_img         = get_field('staff_img');
//								$staff_webreserved = get_field('staff_webreserved');
//								$staff_comment     = get_field('staff_comment');
//								?>
<!---->
<!--								<h2>--><?php //the_title(); ?><!--</h2>-->
<!--								<p>--><?php //echo $staff_name ?><!--</p>-->
<!--								--><?php
//								$size      = 'full';
//								$blog_info = get_bloginfo();
//								$attr      = [
//									'alt'   => $staff_name,
//									'class' => 'p-staff__card-thumb',
//								];
//								echo wp_get_attachment_image($staff_img, $size, 0, $attr); ?>
<!--								<br>-->
<!--							--><?php //endwhile;endif;
//							wp_reset_postdata();
//						?>
<!--					</div>-->

				</section>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

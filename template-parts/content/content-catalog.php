<?php
	/**
	 * Template part for displaying posts
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<?php
		$img_size  = 'large';
		$thumb_id  = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id, $img_size);
	?>

	<section class="p-catalog__gallery">
		<div class="p-catalog__content">
			<?php
				if (wp_is_mobile()) {
					$img_size = 'medium';
				} else {
					$img_size = 'full';
				}
				$title = get_the_title();

				$staff          = get_field('style_staff');
				$style_img_main = get_field('style_img_main');
				$style_img_side = get_field('style_img_side');
				$style_img_back = get_field('style_img_back');
				$style_img_etc  = get_field('style_img_etc');

				$attr = [
					'alt' => $title
				];
			?>
			<div class="p-catalog__content-item">
				<div class="p-catalog__content-title">
					<h1><?php the_title() ?></h1>
					<?php foreach ($staff as $post):
						$staff_name = get_field('staff_name'); ?>
						<p>DESIGN BY <?php echo $staff_name; ?></p>
					<?php endforeach; ?>
				</div>
				<div class="p-catalog__content-img">
					<div class="p-catalog__content-img-left">
						<?php echo wp_get_attachment_image($style_img_main, $size, 0, $attr); ?>
					</div>
					<div class="p-catalog__content-img-right">


						<?php
							/**
							 * main slider
							 */
							$attr_main = [
								'alt'   => $title,
								'class' => 'js-catalog-single__item'
							];
						?>
						<ul class="main js-catalog-single">
							<?php if ($style_img_side): ?>
								<li>
									<?php echo wp_get_attachment_image($style_img_side, $size, 0, $attr_main); ?>
								</li>
							<?php endif;
								if ($style_img_back): ?>
									<li>
										<?php echo wp_get_attachment_image($style_img_back, $size, 0, $attr_main); ?>
									</li>
								<?php endif;
								if ($style_img_etc):
									foreach ($style_img_etc as $value_main) : ?>
										<li>
											<?php echo wp_get_attachment_image($value_main, $size, 0, $attr_main); ?>
										</li>
									<?php endforeach;
								endif; ?>
						</ul>

						<?php

							/**
							 * thumbnail slider
							 */

							$attr_thumb = [
								'alt' => $title
							];
						?>
						<ul class="js-catalog-single__thumb thumb">
							<li>
								<?php echo wp_get_attachment_image($style_img_side, $size, 0, $attr_thumb); ?>
							</li>
							<li>
								<?php echo wp_get_attachment_image($style_img_back, $size, 0, $attr_thumb); ?>
							</li>
							<?php foreach ($style_img_etc as $value_thumb) : ?>
								<li>
									<?php echo wp_get_attachment_image($value_thumb, $size, 0, $attr_thumb); ?>
								</li>
							<?php endforeach; ?>

						</ul>
						<!-- arrow -->
						<div class="js-catalog-single__thumb-arrow"></div>
					</div>

				</div>

			</div>
		</div>
	</section>

	<section class="p-catalog__karte">
		<div class="p-catalog__karte-wrap">
			<table>
				<tr>
					<th class="">
						施術メニュー
					</th>
					<td class="">
						<?php
							$style_menu_select = get_field('style_menu_select');
							the_field('style_menu_select');
						?>
					</td>
				</tr>
				<tr>
					<th class="">
						イメージ
					</th>
					<td class="">
						<?php $style_image = get_field('style_image'); ?>
					</td>
				</tr>

				<tr>
					<th class="">
						髪の量
					</th>
					<td class="">
						<?php $style_volume = get_field('style_volume'); ?>
					</td>
				</tr>

				<tr>
					<th class="">
						髪質
					</th>
					<td class="">
						<?php $style_type = get_field('style_type'); ?>
					</td>
				</tr>

				<tr>
					<th class="">
						太さ
					</th>
					<td class="">
						<?php $style_thickness = get_field('style_thickness'); ?>
					</td>
				</tr>

				<tr>
					<th class="face">
						顔の形
					</th>
					<td class="">
						<?php $style_shape = get_field('style_shape'); ?>
					</td>
				</tr>


			</table>
		</div>
	</section>

	<section class="entry-content p-single__content">
		<?php
			the_content(sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpress_template'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));
		?>


	</section><!-- .entry-content -->

	<footer class="entry-footer p-single__footer">
		<div class="p-single__author">
			<?php
				echo get_avatar(get_the_author_email(), '120');
			?>
			<p>WRITTEN BY <br><?php the_author(); ?></p>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

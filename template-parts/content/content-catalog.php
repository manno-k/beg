<?php
	/**
	 * Template part for displaying posts
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<?php
		$img_size  = 'large';
		$thumb_id  = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id, $img_size);
	?>

	<section class="p-catalog__gallery">
		<div class="p-catalog__content">
			<div class="p-archive__wrap">
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
						<?php wp_reset_postdata(); ?>
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
											<?php echo wp_get_attachment_image($style_img_back, $size, 0,
												$attr_main); ?>
										</li>
									<?php endif;
									if ($style_img_etc):
										foreach ($style_img_etc as $value_main) : ?>
											<li>
												<?php echo wp_get_attachment_image($value_main, $size, 0,
													$attr_main); ?>
											</li>
										<?php endforeach;
									endif; ?>
							</ul>

							<?php

								/**
								 * thumbnail slider
								 */
								$style_img_etc  = get_field('style_img_etc');

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

		</div>
	</section>


	<?php
		$style_menu_select = get_field('style_menu_select');
		$style_image       = get_field('style_image');
		$style_volume      = get_field('style_volume');
		$style_type        = get_field('style_type');
		$style_thickness   = get_field('style_thickness');
		$style_shape       = get_field('style_shape');
	?>
	<section class="p-catalog__karte">
		<div class="p-catalog__karte-wrap">
			<table class="p-catalog__karte-table" cellspacing="15">
				<tr>
					<th class="">
						施術メニュー
					</th>
					<td class="">
						<ul class="p-catalog__karte-list">
							<?php
								$menu_arr = ['セット', 'メイク', 'パーマ', 'カラー', '3Dカラー', '着付け', 'トリートメント', 'カット'];
								foreach ($menu_arr as $menu):?>
									<li class="<?php if (in_array($menu, $style_menu_select)) {
										echo 'choice';
									} ?>">
										<?php echo $menu; ?>
									</li>
								<?php endforeach; ?>
						</ul>


					</td>
				</tr>
				<tr>
					<th class="">
						イメージ
					</th>
					<td class="">
						<ul class="p-catalog__karte-list">
							<?php
								$image_arr = ['フェミニン', 'エレガンス', 'ガーリー', 'ナチュラル', 'ワイルド', 'カジュアル', 'クール', 'モード'];
								foreach ($image_arr as $image):?>
									<li class="<?php if (in_array($image, $style_image)) {
										echo 'choice';
									} ?>">
										<?php echo $image; ?>
									</li>
								<?php endforeach; ?>
						</ul>
					</td>
				</tr>

				<tr>
					<th class="">
						髪の量
					</th>
					<td class="p-catalog__karte-bar">
						<?php $style_volume = get_field('style_volume');
							if (wp_is_mobile()):
								if ($style_volume['value'] == 'volume01') {
									$volume_count = 1;
								} elseif ($style_volume['value'] == 'volume02') {
									$volume_count = 2;
								} else {
									$volume_count = 3;
								}
								?>
								<div class="sp">
									<div class="circle <?php echo $volume_count; ?>">
										<?php for ($i = 1; $i <= 3; $i++) :
											if ($i <= $volume_count) :?>
												<span class="on"></span>
											<?php else : ?>
												<span class="off"></span>
											<?php endif; endfor; ?>
									</div>
									<?php echo $style_volume['label']; ?>
								</div>
							<?php else: ?>
								<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/catalog/bar/<?php echo $style_volume['value']; ?>.svg" alt="髪の量"/>
							<?php endif; ?>
					</td>
				</tr>

				<tr>
					<th class="">
						髪質
					</th>
					<td class="p-catalog__karte-bar">
						<?php $style_type = get_field('style_type');
							if (wp_is_mobile()):
								if ($style_type['value'] == 'type01') {
									$type_count = 1;
								} elseif ($style_type['value'] == 'type02') {
									$type_count = 2;
								} else {
									$type_count = 3;
								}
								?>
								<div class="sp">
									<div class="circle <?php echo $type_count; ?>">
										<?php for ($i = 1; $i <= 3; $i++) :
											if ($i <= $type_count) :?>
												<span class="on"></span>
											<?php else : ?>
												<span class="off"></span>
											<?php endif; endfor; ?>
									</div>
									<?php echo $style_type['label']; ?>
								</div>
							<?php else: ?>
								<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/catalog/bar/<?php echo $style_type['value']; ?>.svg" alt="髪質"/>
							<?php endif; ?>
					</td>
				</tr>

				<tr>
					<th class="">
						太さ
					</th>
					<td class="p-catalog__karte-bar">
						<?php $style_thickness = get_field('style_thickness');
							if (wp_is_mobile()):
								if ($style_thickness['value'] == 'thickness01') {
									$thin_count = 1;
								} elseif ($style_thickness['value'] == 'thickness02') {
									$thin_count = 2;
								} else {
									$thin_count = 3;
								}
								?>
								<div class="sp">
									<div class="circle <?php echo $thin_count; ?>">
										<?php for ($i = 1; $i <= 3; $i++) :
											if ($i <= $thin_count) :?>
												<span class="on"></span>
											<?php else : ?>
												<span class="off"></span>
											<?php endif; endfor; ?>
									</div>
									<?php echo $style_thickness['label']; ?>
								</div>
							<?php else: ?>
								<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/catalog/bar/<?php echo $style_thickness['value']; ?>.svg" alt="髪質"/>
							<?php endif; ?>
					</td>
				</tr>

				<tr>
					<th class="face">
						顔の形
					</th>
					<td class="p-catalog__karte-face">
						<?php
							$shape_arr = [
								'1' => [
									'key'   => 'shape01',
									'value' => '卵型',
								],
								'2' => [
									'key'   => 'shape02',
									'value' => '丸形',
								],
								'3' => [
									'key'   => 'shape03',
									'value' => '面形',
								],
								'4' => [
									'key'   => 'shape04',
									'value' => '三角形',
								],
								'5' => [
									'key'   => 'shape05',
									'value' => '四角形',
								],

							];
							foreach ($shape_arr as $key => $value):
								if (in_array($value['key'], $style_shape)) {
									$toggle = 'on';
								} else {
									$toggle = 'off';
								}
								if (wp_is_mobile()):?>
									<li class="sp">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/catalog/sp/<?php echo $value['key']; ?>_<?php echo $toggle; ?>.svg" alt="卵型"/>
										<span><?php echo $value['value'] ?></span>
									</li>
								<?php else: ?>
									<li class="">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/catalog/icon/<?php echo $value['key']; ?>_<?php echo $toggle; ?>.svg" alt="卵型"/>
									</li>
								<?php
								endif;
							endforeach; ?>
					</td>
				</tr>


			</table>
		</div>
	</section>

	<footer class="entry-footer p-catalog__footer">
		<div class="p-catalog__footer-badge">
			担当スタイリスト
		</div>
		<?php foreach ($staff as $post): ?>
			<div class="p-catalog__footer-staff">

				<div class="thumb">
					<?php
						$staff_webreserved = get_field('staff_webreserved');
						$staff_img         = get_field('staff_img');
						$size              = 'thumbnail';
						$blog_info         = get_the_title();
						$attr              = [
							'alt' => $blog_info
						];
						echo wp_get_attachment_image($staff_img, $size, 0, $attr);
					?>
				</div>
				<div class="name">
					<?php $staff_name = get_field('staff_name'); ?>
					<p><?php the_title(); ?></p>
					<p><?php echo $staff_name; ?></p>
				</div>
			</div>
			<a href="<?php echo $staff_webreserved; ?>" target="_blank">
				指名WEB予約する
			</a>
		<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
	</footer><!-- .entry-footer -->
</div><!-- #post-<?php the_ID(); ?> -->

<nav class="l-footer-pc__nav">
	<div class="l-footer-pc__nav-left">
		<?php
			$defaults = array(
				'menu'            => 'footer_pc',
				'container_class' => 'list-group l-footer-pc__nav-menu',
				'fallback_cb'     => 'wp_page_menu',
			);
			wp_nav_menu($defaults);
		?>


		<h2 class="text-left">
			<img class="l-footer__logo" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/footer/footer-logo.png" alt="<?php bloginfo('name'); ?>"/>
		</h2>
		<address class="l-footer-pc__address">
			<table class="l-footer-pc__address-table">
				<tr>
					<th class="">
						ADDRESS
					</th>
					<td class="">
						〒<?php the_field('zip', 'Options'); ?><?php the_field('address', 'Options'); ?>
					</td>
				</tr>
				<tr>
					<th class="">
						TEL
					</th>
					<td class="">
						<?php the_field('tel', 'Options'); ?>
					</td>
				</tr>
				<tr>
					<th class="">
						OPEN
					</th>
					<td class="">
						<?php the_field('open', 'Options'); ?>

					</td>
				</tr>
				<tr>
					<th class="">
						CLOSE
					</th>
					<td class="">
						<?php the_field('holiday', 'Options'); ?>
					</td>
				</tr>
			</table>

		</address>
	</div>
	<div class="l-footer-pc__nav-right">
		<img class="l-footer-pc__qr" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/footer/footer-qr.png" alt="qrコード"/>
		<?php
			$size      = 'large';
			$blog_info = get_bloginfo();
			/*
			 * 前
			 */
			$attr       = [
				'alt'   => $blog_info,
				'class' => 'l-footer-pc__img'
			];
			$footer_img = get_field('footer_img', 'Options');

			/*
			 * 後
			 */
			$attr_back       = [
				'alt'   => $blog_info,
				'class' => 'l-footer-pc__img-back'
			];
			$footer_img_back = get_field('footer_img_back', 'Options');
			echo wp_get_attachment_image($footer_img['ID'], $size, 0, $attr);
			echo wp_get_attachment_image($footer_img_back['ID'], $size, 0, $attr_back); ?>
	</div>
</nav>

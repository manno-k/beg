<dl class="p-archive__card">
	<dt class="p-archive__card-thumb">
		<a href="<?php the_permalink(); ?>">
			<?php
				$title          = get_the_title();
				$style_img_main = get_field('style_img_main');
				$size           = 'full';
				$attr = [
					'alt' => $title
				];

				if ($style_img_main):
					echo wp_get_attachment_image($style_img_main, $size, 0, $attr);
				else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.jpg" alt="no image">
				<?php endif; ?>
		</a>
	</dt>
	<dd class="p-archive__card-desc">
		<a href="<?php the_permalink(); ?>">
			<h2><?php echo get_the_title(); ?></h2>
		</a>
	</dd>
</dl>

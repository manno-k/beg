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

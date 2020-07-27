<nav class="l-footer__nav">
	<?php
		$defaults = array(
			'menu'            => '',
			'container'       => false,
			'container_class' => 'list-group',
			'fallback_cb'     => 'wp_page_menu',
		);
		wp_nav_menu($defaults);
	?>
	<a href="<?php the_field('reserve', 'Options'); ?>" class="l-footer__nav-item reserve" target="_blank">
		24H RESERVED
	</a>
</nav>
<h2>
	<img class="l-footer__logo" src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/footer/footer-logo__sp.png" alt="<?php bloginfo('name'); ?>"/>
</h2>
<address class="l-footer__address">
	<p>
		<span>ADDRESS</span>
		〒<?php the_field('zip', 'Options'); ?><br>
		<?php the_field('address', 'Options'); ?>
	</p>

	<p>
		<span>TEL</span>
		<?php the_field('tel', 'Options'); ?>
	</p>
	<p>
		<span>OPEN</span>
		<?php the_field('open', 'Options'); ?>
	</p>

	<p>
		<span>CLOSE</span>
		<?php the_field('holiday', 'Options'); ?>
	</p>
</address>
<div class="l-footer__copy">
	copyright (c) blue-eyed girl co.,ltd. all rights reserved.
</div>

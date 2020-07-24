<?php if (wp_is_mobile()) : ?>
	<nav class="l-front__nav-sp">
		<a href="https://www.facebook.com/tuyagamiproject/" class="l-front__nav-left" target="_blank">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/front/nav/hair.png" alt="ツヤ髪プロジェクト"/>
		</a>
		<a href="https://facebook.com/blue.eyed.girl2015/" class="l-front__nav-right" target="_blank">
			<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/front/nav/radio.png" alt="ラジオ番組"/>
		</a>
	</nav>
<?php else: ?>
	<nav class="l-front__nav">
		<a href="https://www.facebook.com/tuyagamiproject/" class="l-front__nav-left" target="_blank">
			ツヤ髪プロジェクト
		</a>
		<a href="https://facebook.com/blue.eyed.girl2015/" class="l-front__nav-right" target="_blank">
			ラジオ番組
		</a>
	</nav>
<?php endif; ?>

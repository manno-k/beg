<h2 class="l-header__center">
	<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/front/hero/banner-type.svg" alt="creat coolness"/>
</h2>
<div class="l-header__copy">copyright (c) blue-eyed girl co.,ltd. all rights reserved.</div>
<ul class="l-header__sns">
	<li>
		<a href="<?php the_field('facebook', 'Options'); ?>" target="_blank">
			FACEBOOK
		</a>
	</li>
	<li>
		<a href="<?php the_field('instagram', 'Options'); ?>" target="_blank">
			INSTAGRAM
		</a>
	</li>
	<li>
		<a href="<?php the_field('twitter', 'Options'); ?>" target="_blank">
			Twitter
		</a>
	</li>
	<li>
		<a href="<?php the_field('pinterest', 'Options'); ?>" target="_blank">
			PINTEREST
		</a>
	</li>
	<li>
		<a href="<?php the_field('ameba', 'Options'); ?>" target="_blank">
			AMEBLO
		</a>
	</li>
</ul>
<a class="l-header__reserve" href="<?php the_field('reserve', 'Options'); ?>">
	24H RESERVED
</a>

<a class="l-header__member" href="<?php the_field('member', 'Options') ?>">
	MEMBER
</a>
<?php
	$top_movie = get_field('top_movie');
	if ($top_movie) :?>
		<video id="js-bg_movie" class="l-header__video" playsinline controls loop autoplay muted width="" height="">
			<source src="<?php echo $top_movie['url']; ?>" type="video/mp4"/>
		</video>
		<script>
		jQuery(function ($) {
			function lazyLoadVideo () {
				var xhr = new XMLHttpRequest();
				xhr.open('GET', "<?php echo $top_movie['url']; ?>", true);
				xhr.responseType = 'blob';
				xhr.onload = function (e) {
					if (this.status === 200) {
						// ロード完了
						var blob = this.response;
						var src = (window.webkitURL || window.URL).createObjectURL(blob);
						$('#video').append('<source type="video/mp4" src="' + src + '">');
					}
				};
				xhr.send();
			}

			// 実行
			lazyLoadVideo();
		});

		</script>
	<?php endif; ?>

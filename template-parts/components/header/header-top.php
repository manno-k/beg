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
		<div class="l-header__video">
			<video id="js-bg_movie" class="" playsinline controls loop autoplay muted width="" height="" poster="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/video.jpg">
				<source src="<?php echo $top_movie['url']; ?>" type="video/mp4"/>
			</video>
		</div>
	<?php endif; ?>

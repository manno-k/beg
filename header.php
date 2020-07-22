<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package wordpress_template
	 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- adobe font -->
	<script>
	(function (d) {
		var config = {
				kitId: 'pgq6dlk',
				scriptTimeout: 3000,
				async: true
			},
			h = d.documentElement, t = setTimeout(function () {
				h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
			}, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a;
		h.className += " wf-loading";
		tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
		tk.async = true;
		tk.onload = tk.onreadystatechange = function () {
			a = this.readyState;
			if (f || a && a != "complete" && a != "loaded") return;
			f = true;
			clearTimeout(t);
			try {
				Typekit.load(config)
			} catch (e) {
			}
		};
		s.parentNode.insertBefore(tk, s)
	})(document);
	</script>
</head>

<body <?php body_class('js-loader js-loader-body js-drawer drawer--right'); ?>>
<header id="masthead" class="l-header">
	<div class="site-branding">
		<?php
			if (is_front_page() || is_home()) : ?>
				<h1 class="site-title l-header__h1">
					<?php the_custom_logo(); ?>
					<div class="sr-only"><?php bloginfo('name'); ?></div>
				</h1>
				<p class="l-header__desc">
					<?php
						$top_description = get_field('top_description');
						if ($top_description) {
							echo $top_description;
						}
					?>
				</p>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php endif; ?>
	</div><!-- .site-branding -->

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
		// nav
		get_template_part('template-parts/components/nav', ''); ?>
</header><!-- #masthead -->


<a href="content">
	test
</a>

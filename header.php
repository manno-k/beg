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
	<link rel="stylesheet" href="https://use.typekit.net/snb3twl.css">

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
			}, config.scriptTimeout), tk = d.createElement("script"), f = false,
			s = d.getElementsByTagName("script")[0], a;
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

<body id="#top" <?php body_class('js-loader js-loader-body js-drawer drawer--right'); ?>>
<?php
	if (is_front_page() || is_home()) {
		$header_class = 'l-header';
	}else{
		$header_class = 'l-header-other';
	}
?>
<header id="masthead" class="<?php echo $header_class;?>">
	<div class="site-branding l-header__branding">
		<?php
			if (is_front_page() || is_home()) : ?>
				<h1 class="site-title l-header__h1">
					<?php if (wp_is_mobile()) : ?>
						<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo__sp.png" alt="<?php bloginfo('name'); ?>"/>
					<?php else: ?>
						<?php the_custom_logo(); ?>
					<?php endif; ?>
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
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
						<?php if (wp_is_mobile()) : ?>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo__sp.png" alt="<?php bloginfo('name'); ?>"/>
						<?php else: ?>
							<?php the_custom_logo(); ?>
						<?php endif; ?>
						<div class="sr-only"><?php bloginfo('name'); ?></div>
					</a>
			<?php endif; ?>
	</div><!-- .site-branding -->
	<?php
		if (is_front_page() || is_home()) :
			get_template_part('template-parts/components/header/header', 'top');
		else:
			get_template_part('template-parts/components/header/header', 'other');
		endif;
	?>

</header><!-- #masthead -->
<?php
	// nav
	get_template_part('template-parts/components/nav', '');
?>

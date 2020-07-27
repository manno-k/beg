<?php
	/**
	 * The template for displaying the footer
	 *
	 * Contains the closing of the #content div and all content after.
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package wordpress_template
	 */

?>

<div class="c-sns">
	<h2>Follow us and get the lasted infomation</h2>
	<ul class="c-sns__list">
		<li>
			<a class="facebook" href="<?php the_field('facebook', 'Options'); ?>" target="_blank"></a>
		</li>
		<li>
			<a class="instagram" href="<?php the_field('instagram', 'Options'); ?>" target="_blank"></a>
		</li>
		<li>
			<a class="twitter" href="<?php the_field('twitter', 'Options'); ?>" target="_blank"></a>
		</li>
		<li>
			<a class="pinterest" href="<?php the_field('pinterest', 'Options'); ?>" target="_blank"></a>
		</li>
		<li>
			<a class="ameba" href="<?php the_field('ameba', 'Options'); ?>" target="_blank"></a>
		</li>
	</ul>
	<p>FOLLOW US!</p>
</div>
<div class="c-totop">
	<div class="c-totop__bar"></div>
	<a href="#top">
		GO TO TOP
	</a>
</div>
<footer class="l-footer">
	<div class="l-footer__wrap">
		<?php
			if (wp_is_mobile()) {

				get_template_part('template-parts/components/footer/nav', 'sp');
			} else {
				get_template_part('template-parts/components/footer/nav', 'pc');
			}
		?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>

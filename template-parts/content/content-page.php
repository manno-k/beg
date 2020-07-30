<?php
	/**
	 * Template part for displaying posts
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('p-single'); ?>>
	<?php
		$img_size  = 'large';
		$thumb_id  = get_post_thumbnail_id();
		$thumb_url = wp_get_attachment_image_src($thumb_id, $img_size);
	?>
	<header class="entry-header p-single__header" style="background: url('<?php echo $thumb_url[0]; ?>')center no-repeat;background-size: cover;background-color: rgba(0,0,0,.5);background-blend-mode:darken;">
		<div class="p-single__wrap">
			<time><?php the_time('Y-m-d'); ?> </time>
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>
	</header><!-- .entry-header -->

	<section class="entry-content p-single__content">
		<?php
			the_content(sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpress_template'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));
		?>

		<div class="p-single__author">
			<?php
				echo get_avatar( get_the_author_email(), '120' );
			?>
			<p>WRITTEN BY <br><?php the_author(); ?></p>
		</div>
	</section><!-- .entry-content -->

	<footer class="entry-footer p-single__footer">
		<div class="p-single__footer-wrap">
			<nav class="p-single__footer-link">
				<?php
					previous_post_link('%link', '< PREV', true);
				?>
			</nav>

			<div class="p-single__footer-title">
				<div class="align-self-center"><?php the_title(); ?></div>

			</div>

			<nav class="p-single__footer-link next">
				<?php
					next_post_link('%link', 'NEXT >', true);
				?>
			</nav>
		</div>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

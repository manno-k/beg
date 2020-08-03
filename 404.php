<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpress_template
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<article id="post-<?php the_ID(); ?>" <?php post_class('p-single'); ?>>
				<?php
					$img_size  = 'large';
					$thumb_id  = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id, $img_size);
				?>
				<header class="entry-header p-single__header" style="background: url('<?php echo $thumb_url[0]; ?>')center no-repeat;background-size: cover;background-color: rgba(0,0,0,.5);background-blend-mode:darken;">
					<div class="p-single__wrap">
						<h1 class="page-title">お探しのページは見つかりませんでした
						</h1>
					</div>
				</header><!-- .entry-header -->

				<section class="entry-content p-single__content">
					<p>
						ご指定のURLのページを見つけられませんでした。
					</p>

				</section><!-- .entry-content -->
			</article><!-- #post-<?php the_ID(); ?> -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

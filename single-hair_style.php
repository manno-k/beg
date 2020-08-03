<?php
	/**
	 * The template for displaying all single posts
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
	 *
	 * @package wordpress_template
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<article>
				<div class="p-archive__wrap">
					<header class="u-title u-title__catalog">
						<div class="u-title__wrap">
							<p class="u-title__text">Catalog</p>
						</div>
					</header>
				</div>
				<?php
					while (have_posts()) : the_post();

						get_template_part('template-parts/content/content', 'catalog');

					endwhile; // End of the loop.
				?>
				<div class="p-catalog__related">
					<div class="js-related">
						<?php // 現在表示されている投稿と同じタームに分類された投稿を取得
							$taxonomy_slug  = 'hair_style_cat'; // タクソノミーのスラッグを指定
							$post_type_slug = 'hair_style'; // 投稿タイプのスラッグを指定
							$post_terms     = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
							if ($post_terms && ! is_wp_error($post_terms)) { // 値があるときに作動
								$terms_slug = array(); // 配列のセット
								foreach ($post_terms as $value) { // 配列の作成
									$terms_slug[] = $value->slug; // タームのスラッグを配列に追加
								}
							}
							$args      = array(
								'post_type'      => $post_type_slug, // 投稿タイプを指定
								'posts_per_page' => 10, // 表示件数を指定
								'orderby'        => 'rand', // ランダムに投稿を取得
								'post__not_in'   => array($post->ID), // 現在の投稿を除外
								'tax_query'      => array( // タクソノミーパラメーターを使用
									array(
										'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
										'field'    => 'slug', // スラッグに一致するタームを返す
										'terms'    => $terms_slug // タームの配列を指定
									)
								)
							);
							$the_query = new WP_Query($args);
							if ($the_query->have_posts()):
								while ($the_query->have_posts()): $the_query->the_post();
									$style_img_main = get_field('style_img_main');
									?>
									<a href="<?php the_permalink() ?>">
										<?php
											$size      = 'thumbnail';
											$blog_info = get_bloginfo();
											$attr      = [
												'alt' => $blog_info
											];
											echo wp_get_attachment_image($style_img_main, $size, 0, $attr); ?>
									</a>
								<?php endwhile; ?>
								<?php wp_reset_postdata(); ?>
							<?php endif; ?>
					</div>
				</div>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
	get_footer();

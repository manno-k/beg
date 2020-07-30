<?php
	/**
	 * The template for displaying all pages
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages
	 * and that other 'pages' on your WordPress site may use a
	 * different template.
	 *
	 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package wordpress_template
	 */

	get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main p-salon">
			<article class="p-salon__wrap">

				<header class="p-salon__header">
					<div class="p-salon__header-txt">
						<h1>blue-eyed girl</h1>
						<p>
							あなただけのパーソナルデザインとオーガニックや髪に優しいものだけを使用した極上のヘアケアをご提供いたします。経験に基づいた提案とTV,PVメディア等のヘアメイクでやしなった技術でライフスタイルにあったデザインを作ります。</p>
					</div>
				</header>

				<section class="p-salon__container">
					<div class="p-salon__map">
						<div class="p-salon__map-card">
							<address class="p-salon__map-address">
								<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/logo__other.png" alt="map logo"/>
								<?php
									$zip        = get_field('zip', 'Options');
									$address    = get_field('address', 'Options');
									$tel        = get_field('tel', 'Options');
									$open       = get_field('open', 'Options');
									$holiday    = get_field('holiday', 'Options');
									$google_map = get_field('google_map_iframe', 'Options');
								?>
								<table class="p-salon__map-table">
									<tr>
										<th class="">
											ADDRESS
										</th>
										<td class="">
											〒<?php echo $zip ?>　　<?php echo $address; ?>
										</td>
									</tr>
									<tr>
										<th class="">
											TEL
										</th>
										<td class="">
											<?php echo $tel; ?>
										</td>
									</tr>
									<tr>
										<th class="">
											OPEN
										</th>
										<td class="">
											<?php echo $open; ?>
										</td>
									</tr>
									<tr>
										<th class="">
											CLOSE
										</th>
										<td class="">
											<?php echo $holiday; ?>
										</td>
									</tr>

								</table>
							</address>
							<?php echo $google_map; ?>
						</div>
					</div>
				</section>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

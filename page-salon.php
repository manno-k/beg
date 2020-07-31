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
						<h1><?php the_field('title'); ?></h1>
						<p><?php the_field('desc'); ?></p>
					</div>
				</header>

				<section class="p-salon__container">
					<div class="p-salon__map">
						<div class="p-salon__map-wrap">
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
					</div>

					<div class="p-salon__map-icon">

					</div>


					<div class="p-salon__shampoo">
						<div class="p-salon__shampoo-left">
							<div class="top">
								<h2>Shampoo<br><span>Chair</span></h2>
							</div>
							<div class="bottom">
								<div class="bottom-wrap">
									<div class="bottom-img">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/salon/chair/chair03.png" alt="ブラックピロー"/>
									</div>
									<div class="bottom-text">
										<h3>従来のシャンプー台</h3>
										首を支点にしているため 頭部が不安定。 首への負担もかかります。
									</div>
								</div>
								<div class="bottom-wrap">
									<div class="bottom-img">
										<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/salon/chair/chair04.png" alt="ブラックピロー"/>
									</div>
									<div class="bottom-text">
										<h3>当サロンシャンプー台</h3>
										固定枕「ブラックピロー」があるため、 頭部が安定し左右自由に動かすことができます。
									</div>
								</div>

							</div>
						</div>
						<div class="p-salon__shampoo-right">
							<div class="top">
								<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/salon/chair/chair05.png" alt="ブラックピロー"/>
							</div>
							<div class="bottom">
								<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/salon/chair/chair06.png" alt="ブラックピロー"/>
								<p>
									ブラックピローがお客様の頭部をやさしく支え、長時間の施術でも首への負担がないので、リラックスしていただけます。ピローは、ずれないよう強力に固定されますが、取り外してメンテナンスすることも可能です。
								</p>
							</div>
						</div>
					</div>

				</section>

			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

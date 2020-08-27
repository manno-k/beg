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
		<main id="main" class="site-main p-menu">
			<article class="p-menu__wrap">
				<nav class="p-menu__nav">
					<select name="select" id="" onChange="location.href=value;">
						<option value="#cut">MENU</option>
						<option value="#cut">CUT</option>
						<option value="#color">COLOR</option>
						<option value="#perm">PERM</option>
						<option value="#set">SET</option>
						<option value="#spa">SPA</option>
						<option value="#shampoo">SHAMPOO&TREATMENT</option>
						<option value="#vip">VIP CARD</option>
					</select>
				</nav>
				<nav class="p-menu__nav-pc">
					<h2>OUR SERVICES</h2>
					<a href="#cut">
						CUT
					</a>
					<a href="#color">
						COLOR
					</a>
					<a href="#perm">
						PERM
					</a>
					<a href="#set">
						SET
					</a>
					<a href="#spa">
						SPA
					</a>
					<a href="#shampoo">
						SHAMPOO&<br>
						TREATMENT
					</a>
					<a href="#vip">
						VIP CARD
					</a>

				</nav>
				<header class="u-title u-title__menu">
					<div class="u-title__wrap">
						<h1 class="u-title__text">Menu</h1>
					</div>
				</header>

				<section class="p-menu__container">
					<div class="p-menu__recommend">
						<div class="p-menu__recommend-inner">
							<h2 id="recommend">おすすめメニュー</h2>
							<?php
								$redommends = get_field('recommend');
								if ($redommends): ?>
									<?php foreach ($redommends as $row) : ?>
										<h3><?php echo $row['menu'] ?></h3>
										<p><?php echo $row['menu_desc'] ?></p>
									<?php endforeach; ?>
								<?php endif; ?>
						</div>
					</div>
					<p class="p-menu__recommend-desc">※価格は全て税抜き表示になっております。</p>

					<div class="p-menu__card" id="cut">
						<h2 class="cut">Cut</h2>
						<div class="p-menu__card-inner">
							<h3>カット</h3>
							<?php
								$cut_group = get_field('cut_group');
								if ($cut_group): ?>

									<?php if ($cut_group['info']): ?>
										<p class="p-menu__card-info"><?php echo $cut_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($cut_group['info_bottom']): ?>
										<p class="p-menu__card-info-bottom"><?php echo $cut_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($cut_group['menu']) : ?>
										<ul class="p-menu__card-list">
											<?php foreach ($cut_group['menu'] as $row) : ?>
												<li>
													<div class="list-inner">
														<span><?php echo $row['name'] ?></span>
														<span><?php echo $row['price'] ?></span>
													</div>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($cut_group['menu_note']) : ?>
										<ul>
											<?php foreach ($cut_group['menu_note'] as $row) : ?>
												<li>
													<?php echo $row['txt'] ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>
						</div>
					</div>

					<div class="p-menu__card">
						<h2 id="color" class="color">Color</h2>
						<div class="p-menu__color">
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/menu/color/img01.png" alt="color"/>
							<p class="p-menu__color-title">ヴィラロドラ<br>イタリアの認証機関ICEA認定</p>
							<p>世界で唯一認められた天然由来のオーガニックカラー材を使用</p>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/menu/color/img02.png" alt="color"/>
							<p class="p-menu__color-title"></p>
							<p>刺激臭カット＆無香料・内部までしっかり染まる・植物の力でダメージ軽減</p>
						</div>
						<div class="p-menu__card-inner color">
							<h3>カラー</h3>
							<?php
								$color_group = get_field('color_group');
								if ($color_group): ?>

									<?php if ($color_group['info']): ?>
										<p class="p-menu__card-info"><?php echo $color_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($color_group['info_bottom']): ?>
										<p class="p-menu__card-info-bottom"><?php echo $color_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($color_group['menu']) : ?>
										<ul class="p-menu__card-list">
											<?php foreach ($color_group['menu'] as $row) : ?>
												<?php if ($row['name']) : ?>
													<li>
														<div class="list-inner">
															<span><?php echo $row['name'] ?></span>
															<span><?php echo $row['price'] ?></span>
														</div>
													</li>
												<?php else: ?>
													<li class="empty"></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($color_group['menu_note']) : ?>
										<ul class="p-menu__card-list bottom">
											<?php foreach ($color_group['menu_note'] as $row) : ?>
												<li>
													<?php echo $row['txt'] ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>
						</div>
					</div>

					<div class="p-menu__card" id="perm">
						<h2 class="perm">Perm</h2>
						<div class="p-menu__card-inner">
							<h3>パーマ</h3>
							<?php
								$perm_group = get_field('perm_group');
								if ($perm_group): ?>

									<?php if ($perm_group['info']): ?>
										<p class="p-menu__card-info"><?php echo $perm_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($perm_group['info_bottom']): ?>
										<p class="p-menu__card-info-bottom"><?php echo $perm_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($perm_group['menu']) : ?>
										<ul class="p-menu__card-list">
											<?php foreach ($perm_group['menu'] as $row) : ?>
												<?php if ($row['name']) : ?>
													<li>
														<div class="list-inner">
															<span><?php echo $row['name'] ?></span>
															<span><?php echo $row['price'] ?></span>
														</div>
													</li>
												<?php else: ?>
													<li class="empty"></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($perm_group['menu_note']) : ?>
										<ul class="p-menu__card-list bottom">
											<?php foreach ($perm_group['menu_note'] as $row) : ?>
												<li>
													<?php echo $row['txt'] ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>
						</div>
					</div>
					<div class="p-menu__card" id="set">
						<h2 class="set">Set</h2>
						<div class="p-menu__card-inner">
							<h3>セット</h3>
							<?php
								$set_group = get_field('set_group');
								if ($set_group): ?>

									<?php if ($set_group['info']): ?>
										<p class="p-menu__card-info"><?php echo $set_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($set_group['info_bottom']): ?>
										<p class="p-menu__card-info-bottom"><?php echo $set_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($set_group['menu']) : ?>
										<ul class="p-menu__card-list">
											<?php foreach ($set_group['menu'] as $row) : ?>
												<?php if ($row['name']) : ?>
													<li>
														<div class="list-inner">
															<span><?php echo $row['name'] ?></span>
															<span><?php echo $row['price'] ?></span>
														</div>
													</li>
												<?php else: ?>
													<li class="empty"></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($set_group['menu_note']) : ?>
										<ul class="p-menu__card-list bottom">
											<?php foreach ($set_group['menu_note'] as $row) : ?>
												<li>
													<?php echo $row['txt'] ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>
						</div>
					</div>

					<div class="p-menu__card" id="spa">
						<h2 class="spa">Spa</h2>
						<div class="p-menu__card-inner">
							<h3>スパ</h3>
							<?php
								$set_group = get_field('spa_group');
								if ($set_group): ?>

									<?php if ($set_group['info']): ?>
										<p class="p-menu__card-info"><?php echo $set_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($set_group['info_bottom']): ?>
										<p class="p-menu__card-info-bottom"><?php echo $set_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($set_group['menu']) : ?>
										<ul class="p-menu__card-list">
											<?php foreach ($set_group['menu'] as $row) : ?>
												<?php if ($row['name']) : ?>
													<li>
														<div class="list-inner">
															<span><?php echo $row['name'] ?></span>
															<span><?php echo $row['price'] ?></span>
														</div>
													</li>
												<?php else: ?>
													<li class="empty"></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($set_group['menu_note']) : ?>
										<ul class="p-menu__card-list bottom">
											<?php foreach ($set_group['menu_note'] as $row) : ?>
												<li>
													<?php echo $row['txt'] ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>
						</div>
					</div>
					<div class="p-menu__card" id="shampoo">
						<h2 class="shampoo">Shampoo&<br/>Treatment</h2>
						<div class="p-menu__shampoo">
							<div class="p-menu__shampoo-step">
								トリートメント施術手順
							</div>
							<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/menu/shampoo/step.png" alt="トリートメント施術手順"/>
						</div>
						<div class="p-menu__card-inner shampoo">
							<h3>ツヤ髪プロジェクト</h3>
							<?php
								$shampoo_group = get_field('shampoo_group');
								if ($shampoo_group): ?>

									<?php if ($shampoo_group['info']): ?>
										<p class="p-menu__card-info"><?php echo $shampoo_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($shampoo_group['info_bottom']): ?>
										<p class="p-menu__card-info-bottom"><?php echo $shampoo_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($shampoo_group['menu']) : ?>
										<ul class="p-menu__card-list">
											<?php foreach ($shampoo_group['menu'] as $row) : ?>
												<?php if ($row['name']) : ?>
													<li>
														<div class="list-inner">
															<span><?php echo $row['name'] ?></span>
															<span><?php echo $row['price'] ?></span>
														</div>
													</li>
												<?php else: ?>
													<li class="empty"></li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($shampoo_group['menu_note']) : ?>
										<ul class="p-menu__card-list bottom">
											<?php foreach ($shampoo_group['menu_note'] as $row) : ?>
												<li>
													<?php echo $row['txt'] ?>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>

							<?php if ($shampoo_group['img']) : ?>
								<div class="p-menu__shampoo-thumb">
									<?php foreach ($shampoo_group['img'] as $row) : ?>
										<?php if ($row['img']) : ?>
											<?php
											$size      = 'medium';
											$blog_info = get_bloginfo();
											$attr      = [
												'alt' => 'ツヤ髪プロジェクト'
											];
											echo wp_get_attachment_image($row['img']['id'], $size, 0, $attr); ?>
										<?php endif; ?>
									<?php endforeach; ?>

								</div>
							<?php endif; ?>

							<?php if ($shampoo_group['img_comment']) : ?>
								<div class="p-menu__shampoo-comment">
									<?php echo $shampoo_group['img_comment']; ?>
								</div>
							<?php endif; ?>




							<?php if ($shampoo_group['menu_2']) : ?>
								<ul class="p-menu__card-list">
									<?php foreach ($shampoo_group['menu_2'] as $row) : ?>
										<?php if ($row['name']) : ?>
											<li>
												<div class="list-inner">
													<span><?php echo $row['name'] ?></span>
													<span><?php echo $row['price'] ?></span>
												</div>
											</li>
										<?php else: ?>
											<li class="empty"></li>
										<?php endif; ?>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>

							<?php if ($shampoo_group['menu_note_2']) : ?>
								<ul class="p-menu__card-list bottom">
									<?php foreach ($shampoo_group['menu_note_2'] as $row) : ?>
										<li>
											<?php echo $row['txt'] ?>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>


						</div>
					</div>

					<div class="p-menu__card" id="vip">
						<h2 class="vip">VIP Card</h2>
						<div class="p-menu__card-inner p-menu__card-vip">
							<?php
								$vip_front = get_field('vip_front');
								$vip_back  = get_field('vip_back');
								$vip_desc  = get_field('vip_desc');
							?>

							<div class="thumb">
								<?php
									$size      = 'full';
									$blog_info = get_bloginfo();
									$attr      = [
										'alt' => 'VIP Card'
									]; ?>
								<span><?php echo wp_get_attachment_image($vip_front['ID'], $size, 0, $attr); ?></span>
								<span><?php echo wp_get_attachment_image($vip_back['ID'], $size, 0, $attr); ?></span>

							</div>

							<p class="desc"><?php echo $vip_desc; ?></p>

						</div>
					</div>
				</section>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

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
						<option value="#cut">Menu</option>
						<option value="#cut">Cut</option>
						<option value="#color">Color</option>
						<option value="#perm">Perm</option>
						<option value="#set">Set</option>
						<option value="#spa">Spa</option>
						<option value="#shampoo">Shampoo&Treatment</option>
						<option value="#shampoo">VIP Card</option>
					</select>
				</nav>
				<header class="u-title u-title__menu">
					<div class="u-title__wrap">
						<h1 class="u-title__text">Menu</h1>
					</div>
				</header>

				<section class="p-menu__container">
					<div class="p-menu__recommend">
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
					<p>※価格は全て税抜き表示になっております。</p>

					<div class="p-menu__card">
						<h2 id="cut">Cut</h2>
						<div class="p-menu__card-inner">
							<h3>カット</h3>
							<?php
								$cut_group = get_field('cut_group');
								if ($cut_group): ?>

									<?php if ($cut_group['info']): ?>
										<p><?php echo $cut_group['info'] ?></p>
									<?php endif; ?>

									<?php if ($cut_group['info_bottom']): ?>
										<p><?php echo $cut_group['info_bottom'] ?></p>
									<?php endif; ?>

									<?php if ($cut_group['menu']) : ?>
										<ul>
											<?php foreach ($cut_group['menu'] as $row) : ?>
												<li>
													<span><?php echo $row['name'] ?></span>
													<span><?php echo $row['price'] ?></span>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

									<?php if ($cut_group['menu_note']) : ?>
										<ul>
											<?php foreach ($cut_group['menu_note'] as $row) : ?>
												<li>
													<span><?php echo $row['txt'] ?></span>
												</li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>

								<?php endif; ?>
						</div>
					</div>

					<h2 id="color">Color</h2>

					<h2 id="perm">Perm</h2>

					<h2 id="set">Set</h2>

					<h2 id="spa">Spa</h2>

					<h2 id="shompee">Shampoo&<br/>Treatment</h2>
					<h2 id="vip">VIP Card</h2>
				</section>
			</article>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();

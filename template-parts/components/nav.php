<nav class="c-nav">

	<header class="" role="banner">
		<div class="drawer-container">
			<button type="button" class="drawer-toggle drawer-hamburger">
				<span class="sr-only">toggle navigation</span>
				<span class="drawer-hamburger-icon"></span>
			</button>

			<nav class="drawer-nav c-nav__inner" role="navigation">
				<div class="c-nav__inner-wrap">
					<div class="c-nav__inner-left">
						<ul>
							<li>
								<a href="<?php the_field('member', 'Options') ?>" target="_blank">
									MEMBER <span>会員登録</span>
								</a>
							</li>
							<li>
								<a href="<?php the_field('reserve', 'Options') ?>" target="">
									24H RESERVED <span>予約ページ</span>
								</a>
							</li>
							<li>
								<a href="<?php the_field('google_map', 'Options') ?>" target="_blank">
									GOOGLE MAP
									<span>〒<?php the_field('zip', 'Options') ?><br><?php the_field('address', 'Options') ?></span>
								</a>
							</li>
							<li>
								OPEN
								<span><?php the_field('open','Options') ?></span>
							</li>
							<li>
								CLOSED
								<span><?php the_field('holiday','Options') ?></span>
							</li>
							<li>
								<?php if (wp_is_mobile()) : ?>
									<a href="tel:<?php the_field('tel', 'Options') ?>">
										TEL
										<span><?php the_field('tel', 'Options') ?></span>
									</a>
								<?php else: ?>
									TEL
									<span><?php the_field('tel', 'Options') ?></span>
								<?php endif; ?>
							</li>
						</ul>
					</div>

					<div class="c-nav__inner-right">
						<?php
							$defaults = array(
								'menu'            => '',
								'container_class' => 'list-group',
								'fallback_cb'     => 'wp_page_menu',
								'class'           => 'drawer-menu drawer-menu--right'
							);
							wp_nav_menu($defaults);
						?>
					</div>
				</div>

			</nav>

		</div>
	</header>
</nav>

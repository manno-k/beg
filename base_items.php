<?php
	if ( ! defined('ABSPATH')) {
		exit;
	}
	global $base_items;
	/*
     * item
     *	item_id int
     *	title string
     *	detail string
     *	price int
     *	stock int
     *	**img(n) is 1 to 5**
     *	img(n)_origin string
     *	img(n)_76 string
     *	img(n)_146 string
     *	img(n)_300 string
     *	img(n)_500 string
     *	img(n)_640 string
     *	img(n)_sp_480 string
     *	img(n)_sp_640 string
     *	modified int
     *	shop_id string
     *  shop_name string
     *	shop_url string
     *	categories array (string,string...)
     */
?>
<?php if (isset($base_items)) : ?>
	<?php if (wp_is_mobile()) : ?>
		<span class="js-front__shop-arrow"></span>
		<div class="c-shop js-front__shop">
			<?php foreach ($base_items as $item) : ?>
				<a class="c-shop__item" href="<?php echo esc_url($item->shop_url) ?>/items/<?php echo $item->item_id; ?>" target="_blank">
					<img class="c-shop__img" src="<?php echo esc_url($item->img1_300); ?>" alt="<?php esc_attr($item->title); ?>">
					<h3 class="c-shop__title">
						<?php echo esc_html($item->title); ?>
					</h3>
				</a>
			<?php endforeach; ?>
		</div>
	<?php else: ?>
		<span class="js-front__shop-arrow pc"></span>
		<div class="c-shop-pc js-front__shop">
			<?php foreach ($base_items as $item) : ?>
				<div class="c-shop-pc__item">

					<a class="c-shop-pc__item-left" href="<?php echo esc_url($item->shop_url) ?>/items/<?php echo $item->item_id; ?>" target="_blank">
						<img class="c-shop-pc__img" src="<?php echo esc_url($item->img1_300); ?>" alt="<?php esc_attr($item->title); ?>">
					</a>
					<a class="c-shop-pc__item-right" href="<?php echo esc_url($item->shop_url) ?>/items/<?php echo $item->item_id; ?>" target="_blank">
						<h3 class="c-shop-pc__title">
							<?php echo esc_html($item->title); ?>
						</h3>
						<p class="c-shop__desc">
							<?php
								$word_count = 150;
								if (mb_strlen($item->detail, 'UTF-8') > $word_count) {
									$detail = mb_substr($item->detail, 0, $word_count, 'UTF-8');
								} else {
									$detail = $item->detail;
								}
							?>
							<?php echo str_replace("\n", "<br>", $detail); ?>
						</p>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

<?php endif;

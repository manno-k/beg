<ul class="p-catalog__nav">
	<li>
		<?php if (is_post_type_archive('hair_style')): ?>
			<a aria-current="page" href="<?php echo home_url('/hair_style'); ?>">
				ALL
			</a>
		<?php else: ?>
			<a href="<?php echo home_url('/hair_style'); ?>">
				ALL
			</a>

		<?php endif; ?>
	</li>

	<?php wp_list_categories(array(
		'title_li'   => '',
		'taxonomy'   => 'hair_style_cat',
		'show_count' => 0
	)); ?>
</ul>

<nav class="p-catalog__nav-select">
	<select name="catalog" onChange="location.href=value;">
		<option value="<?php echo home_url('/hair_style'); ?>">ALL</option>
		<?php
			$args       = array(
				'orderby'  => '',
				'taxonomy' => 'hair_style_cat',
			);
			$categories = get_categories($args);
			foreach ($categories as $category) {
				$cat_link = get_category_link($category->cat_ID);
				echo '<option value="' . $cat_link . '">' . $category->name . '</option>';
			}
		?>
	</select>
</nav>

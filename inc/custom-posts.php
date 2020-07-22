<?php
/**
 * Custom Posts Settings
 */


	function new_post_type_style() {
		//hair_style（ヘアカタログ）というカスタム投稿タイプを登録
		register_post_type(
			'hair_style',//投稿タイプ名（識別子）
			array(
				'label' => 'ヘアカタログ', //カスタム投稿タイプの名前（これが管理画面のメニューに表示される）
				'labels' => array( //管理画面に表示されるラベルを指定
					'add_new_item' => '新規ヘアカタログを追加',
					'edit_item' =>'ヘアカタログの編集',
					'view_item' => 'ヘアカタログを表示',
					'search_items' => 'ヘアカタログを検索',
					'not_found' => 'ヘアカタログは見つかりませんでした。',
					'not_found_in_trash' => 'ゴミ箱にヘアカタログはありませんでした。',
				),
				'public' => true,// 管理画面に表示しサイト上にも表示する
				'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
				'has_archive' => true,//trueにすると投稿した記事の一覧ページを作成
				'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
					'title',//タイトル
					'editor',//本文（の編集機能）
					'thumbnail',//アイキャッチ画像
					'excerpt'//抜粋
				),
				'menu_position' => 5//「投稿」の下に追加
			)
		);
		//hair_style_cat（ヘアカタログカテゴリー）というカスタム分類を登録
		register_taxonomy(
			'hair_style_cat', //カスタム分類名
			'hair_style', //カスタム分類を利用する投稿タイプ
			array(
				'label' => 'ヘアカタログカテゴリー', //管理画面ラベル名
				'labels' => array(
					'popular_items' => 'よく使うヘアカタログカテゴリー',
					'edit_item' => 'ヘアカタログカテゴリーを編集',
					'add_new_item' => '新規ヘアカタログカテゴリーを追加',
					'search_items' => 'ヘアカタログカテゴリーを検索',
				),
				'public' => true,
				'hierarchical' => true //カテゴリーのような親子関係（階層）を持たせる
			)
		);
		//hair_style_tag（ヘアカタログタグ）というカスタム分類を登録
		register_taxonomy(
			'hair_style_tag', //カスタム分類名
			'hair_style', //カスタム分類を利用する投稿タイプ
			array(
				'label' => 'ヘアカタログタグ', //管理画面ラベル名
				'labels' => array(
					'popular_items' => 'よく使うヘアカタログタグ',
					'edit_item' => 'ヘアカタログタグを編集',
					'add_new_item' => '新規ヘアカタログタグを追加',
					'search_items' => 'ヘアカタログタグを検索',
				),
				'public' => true,
				'hierarchical' => false //タグ形式なので親子関係（階層）を持たせない
			)
		);
		flush_rewrite_rules();
	}
	add_action('init', 'new_post_type_style');

	function new_post_type_staffhamadak() {
		//blog_hamadak（ブログ濱田薫）というカスタム投稿タイプを登録
		register_post_type(
			'blog_hamadak',//投稿タイプ名（識別子）
			array(
				'label' => 'ブログ濱田薫', //カスタム投稿タイプの名前（これが管理画面のメニューに表示される）
				'labels' => array( //管理画面に表示されるラベルを指定
					'add_new_item' => '新規ブログ濱田薫を追加',
					'edit_item' =>'ブログ濱田薫の編集',
					'view_item' => 'ブログ濱田薫を表示',
					'search_items' => 'ブログ濱田薫を検索',
					'not_found' => 'ブログ濱田薫は見つかりませんでした。',
					'not_found_in_trash' => 'ゴミ箱にブログ濱田薫はありませんでした。',
				),
				'public' => true,// 管理画面に表示しサイト上にも表示する
				'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
				'has_archive' => true,//trueにすると投稿した記事の一覧ページを作成
				'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
					'title',//タイトル
					'editor',//本文（の編集機能）
					'thumbnail',//アイキャッチ画像
					'excerpt'//抜粋
				),
				'menu_position' => 5//「投稿」の下に追加
			)
		);
		flush_rewrite_rules();
	}
	add_action('init', 'new_post_type_staffhamadak');

	function new_post_type_stafftakahiro() {
		//blog_takahiro（ブログタカヒロ）というカスタム投稿タイプを登録
		register_post_type(
			'blog_takahiro',//投稿タイプ名（識別子）
			array(
				'label' => 'ブログタカヒロ', //カスタム投稿タイプの名前（これが管理画面のメニューに表示される）
				'labels' => array( //管理画面に表示されるラベルを指定
					'add_new_item' => '新規ブログタカヒロを追加',
					'edit_item' =>'ブログタカヒロの編集',
					'view_item' => 'ブログタカヒロを表示',
					'search_items' => 'ブログタカヒロを検索',
					'not_found' => 'ブログタカヒロは見つかりませんでした。',
					'not_found_in_trash' => 'ゴミ箱にブログタカヒロはありませんでした。',
				),
				'public' => true,// 管理画面に表示しサイト上にも表示する
				'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
				'has_archive' => true,//trueにすると投稿した記事の一覧ページを作成
				'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
					'title',//タイトル
					'editor',//本文（の編集機能）
					'thumbnail',//アイキャッチ画像
					'excerpt'//抜粋
				),
				'menu_position' => 5//「投稿」の下に追加
			)
		);
		flush_rewrite_rules();
	}
	add_action('init', 'new_post_type_stafftakahiro');

	function new_post_type_staff() {
		//shop_staff（スタッフ）というカスタム投稿タイプを登録
		register_post_type(
			'shop_staff',//投稿タイプ名（識別子）
			array(
				'label' => 'スタッフ', //カスタム投稿タイプの名前（これが管理画面のメニューに表示される）
				'labels' => array( //管理画面に表示されるラベルを指定
					'add_new_item' => '新規スタッフを追加',
					'edit_item' =>'スタッフの編集',
					'view_item' => 'スタッフを表示',
					'search_items' => 'スタッフを検索',
					'not_found' => 'スタッフは見つかりませんでした。',
					'not_found_in_trash' => 'ゴミ箱にスタッフはありませんでした。',
				),
				'public' => true,// 管理画面に表示しサイト上にも表示する
				'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
				'has_archive' => true,//trueにすると投稿した記事の一覧ページを作成
				'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
					'title',//タイトル
					'editor',//本文（の編集機能）
					'thumbnail',//アイキャッチ画像
					'excerpt'//抜粋
				),
				'menu_position' => 5//「投稿」の下に追加
			)
		);
		//shop_staff_cat（スタッフカテゴリー）というカスタム分類を登録
		register_taxonomy(
			'shop_staff_cat', //カスタム分類名
			'shop_staff', //カスタム分類を利用する投稿タイプ
			array(
				'label' => 'スタッフカテゴリー', //管理画面ラベル名
				'labels' => array(
					'popular_items' => 'よく使うスタッフカテゴリー',
					'edit_item' => 'スタッフカテゴリーを編集',
					'add_new_item' => '新規スタッフカテゴリーを追加',
					'search_items' => 'スタッフカテゴリーを検索',
				),
				'public' => true,
				'hierarchical' => true //カテゴリーのような親子関係（階層）を持たせる
			)
		);
		flush_rewrite_rules();
	}
	add_action('init', 'new_post_type_staff');


	function new_post_type_ranking() {
		//hair_ranking（ランキング）というカスタム投稿タイプを登録
		register_post_type(
			'hair_ranking',//投稿タイプ名（識別子）
			array(
				'label' => 'ランキング', //カスタム投稿タイプの名前（これが管理画面のメニューに表示される）
				'labels' => array( //管理画面に表示されるラベルを指定
					'add_new_item' => '新規ランキングを追加',
					'edit_item' =>'ランキングの編集',
					'view_item' => 'ランキングを表示',
					'search_items' => 'ランキングを検索',
					'not_found' => 'ランキングは見つかりませんでした。',
					'not_found_in_trash' => 'ゴミ箱にランキングはありませんでした。',
				),
				'public' => true,// 管理画面に表示しサイト上にも表示する
				'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
				'has_archive' => true,//trueにすると投稿した記事の一覧ページを作成
				'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
					'title',//タイトル
					'editor',//本文（の編集機能）
					'thumbnail',//アイキャッチ画像
					'excerpt'//抜粋
				),
				'menu_position' => 5//「投稿」の下に追加
			)
		);    flush_rewrite_rules();
	}
	add_action('init', 'new_post_type_ranking');

	function new_post_type_youtube() {
		//youtube_code（ランキング）というカスタム投稿タイプを登録
		register_post_type(
			'youtube_code',//投稿タイプ名（識別子）
			array(
				'label' => 'Youtube', //カスタム投稿タイプの名前（これが管理画面のメニューに表示される）
				'labels' => array( //管理画面に表示されるラベルを指定
					'add_new_item' => '新規Youtubeを追加',
					'edit_item' =>'Youtubeの編集',
					'view_item' => 'Youtubeを表示',
					'search_items' => 'Youtubeを検索',
					'not_found' => 'Youtubeは見つかりませんでした。',
					'not_found_in_trash' => 'ゴミ箱にYoutubeはありませんでした。',
				),
				'public' => true,// 管理画面に表示しサイト上にも表示する
				'hierarchicla' => false,//コンテンツを階層構造にするかどうか(投稿記事と同様に時系列に)
				'has_archive' => true,//trueにすると投稿した記事の一覧ページを作成
				'supports' => array(//記事編集画面に表示する項目を配列で指定することができる
					'title',//タイトル
					'editor',//本文（の編集機能）
					'thumbnail',//アイキャッチ画像
					'excerpt'//抜粋
				),
				'menu_position' => 5//「投稿」の下に追加
			)
		);    flush_rewrite_rules();
	}
	add_action('init', 'new_post_type_youtube');

?>

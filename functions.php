<?php

/**
 * アイキャッチ表示
 */
add_theme_support( 'post-thumbnails' );

/**
 * ブロックエディタにCSS適応
 */
function my_editor_suport() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}
add_action( 'after_setup_theme', 'my_editor_suport' );

/**
 * MENU/SHOPLISTページの下層ページにアクセスしたら一覧にリダイレクト
 */
function redirect_custom_post_type() {
	if ( is_singular( 'menu' ) ) {
		wp_redirect( home_url( '/menu' ), 301 );
		exit;
	}
	if ( is_singular( 'shoplist' ) ) {
		wp_redirect( home_url( '/shoplist' ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'redirect_custom_post_type' );

/**
 * MENU/SHOPLIST一覧の表示数を無限にする
 */
function change_posts_per_page( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	if ( $query->is_post_type_archive( 'menu' ) || $query->is_post_type_archive( 'shoplist' ) ) { // カスタム投稿タイプを指定
		$query->set( 'posts_per_page', '-1' ); // 表示件数を指定
	}
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

/**
 * search-{post_type}.phpで検索結果を表示
 */
function custom_search_template( $template ) {
	if ( is_search() ) {
		$post_types = get_query_var( 'post_type' );
		foreach ( (array) $post_types as $post_type ) {
			$templates[] = "search-{$post_type}.php";
		}
		$templates[] = 'search.php';
		$template    = get_query_template( 'search', $templates );
	}
	return $template;
}
add_filter( 'template_include', 'custom_search_template' );

/**
 * areaパラメータを考慮して結果をフィルタリング
 */
function custom_search_query( $query ) {
	// メインクエリ、検索クエリ、フロントエンドの場合のみカスタマイズを行う
	if ( ! $query->is_main_query() || ! $query->is_search() || is_admin() ) {
		return;
	}

	// エリアに関するパラメータがセットされている場合
	if ( isset( $_GET['area'] ) && $_GET['area'] != '' ) {
		$area         = sanitize_text_field( $_GET['area'] );
		$meta_query[] = array(
			'key'     => 'area',
			'value'   => $area,
			'compare' => '=',
		);
		$query->set( 'meta_query', $meta_query );
	}

	return $query;
}
add_action( 'pre_get_posts', 'custom_search_query' );

/**
 * セキュリティ対策
 * 参考記事：https://baigie.me/officialblog/2020/01/28/wordpress-security/
 */
remove_action( 'wp_head', 'wp_generator' ); // WordPressのバージョン
remove_action( 'wp_head', 'wp_shortlink_wp_head' ); // 短縮URLのlink
remove_action( 'wp_head', 'wlwmanifest_link' ); // ブログエディターのマニフェストファイル
remove_action( 'wp_head', 'rsd_link' ); // 外部から編集するためのAPI
remove_action( 'wp_head', 'feed_links_extra', 3 ); // フィードへのリンク
remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // 絵文字に関するJavaScript
remove_action( 'wp_head', 'rel_canonical' ); // カノニカル
remove_action( 'wp_print_styles', 'print_emoji_styles' ); // 絵文字に関するCSS
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); // 絵文字に関するJavaScript
remove_action( 'admin_print_styles', 'print_emoji_styles' ); // 絵文字に関するCSS

/**
 * 日付アーカイブをサイトマップから除外
 */
function remove_date_archives_from_xml_output() {
    // サイトマップリクエストかチェック
    if (strpos($_SERVER['REQUEST_URI'], 'sitemap') !== false && 
        strpos($_SERVER['REQUEST_URI'], '.xml') !== false) {
        
        ob_start(function($buffer) {
            // 年/月形式の日付アーカイブエントリを削除
            // 例: /2024/03/, /2023/08/ など
            $pattern = '/<url>\s*<loc>[^<]*\/\d{4}\/\d{2}\/\s*<\/loc>.*?<\/url>/s';
            $buffer = preg_replace($pattern, '', $buffer);
            
            // 年のみの形式も削除（もしあれば）
            // 例: /2024/, /2023/ など  
            $pattern_year = '/<url>\s*<loc>[^<]*\/\d{4}\/\s*<\/loc>.*?<\/url>/s';
            $buffer = preg_replace($pattern_year, '', $buffer);
            
            // 空行を削除してXMLを整形
            $buffer = preg_replace('/\n\s*\n/', "\n", $buffer);
            
            return $buffer;
        });
    }
}
add_action('template_redirect', 'remove_date_archives_from_xml_output', 1);

// より確実にするため、WordPressのinitフックでも実行
function force_remove_date_archives() {
    if (isset($_GET['sitemap']) || strpos($_SERVER['REQUEST_URI'], 'sitemap') !== false) {
        remove_date_archives_from_xml_output();
    }
}
add_action('init', 'force_remove_date_archives', 1);
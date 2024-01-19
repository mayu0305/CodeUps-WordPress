<?php

function custom_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.1/swiper-bundle.min.css');

    // Theme stylesheet
    wp_enqueue_style('theme-style', get_theme_file_uri('/assets/css/style.css'), array('google-fonts', 'swiper-css'));

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper@8.3.1/swiper-bundle.min.js', array('jquery'), null, true);

    // Micromodal JS
    wp_enqueue_script('micromodal-js', 'https://cdn.jsdelivr.net/npm/micromodal/dist/micromodal.min.js', array(), null, true);

    // Inview JS
    wp_enqueue_script('inview-js', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array('jquery'), null, true);

    // Custom script
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');


//テーマの基本設定
function my_setup(){
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');


//ブログの人気記事
function update_custom_meta_views()
{
  global $post;
  if ('publish' === get_post_status($post) && is_single()) {
    $views = intval(get_post_meta($post->ID, '_custom_meta_views', true));
    update_post_meta($post->ID, '_custom_meta_views', ($views + 1));
  }
}
add_action('wp_head', 'update_custom_meta_views');

function add_column_custom_meta_views($columns)
{
  $columns['views'] = 'Views';
  return $columns;
}
add_filter('manage_posts_columns', 'add_column_custom_meta_views');

function add_column_custom_meta_views_content($column_name, $post_id)
{
  $views = intval(get_post_meta($post_id, '_custom_meta_views', true));
  echo $views;
}
add_action('manage_posts_custom_column', 'add_column_custom_meta_views_content', 10, 2);

function sortable_column_custom_meta_views($columns)
{
  $columns['views'] = 'Views';
  return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'sortable_column_custom_meta_views');

function custom_orderby_custom_meta_views($vars)
{
  if (isset($vars['orderby']) && 'Views' == $vars['orderby']) {
    $vars = array_merge($vars, array(
      'meta_key' => '_custom_meta_views',
      'orderby' => 'meta_value_num'
    ));
  }
  return $vars;
}
add_filter('request', 'custom_orderby_custom_meta_views');


// カスタム投稿タイプ 'blog' の月別アーカイブを有効にする
add_filter('pre_get_posts', 'custom_post_type_archive');

function custom_post_type_archive($query) {
    if ($query->is_main_query() && is_post_type_archive('blog') && !is_admin()) {
        $query->set('posts_per_page', -1);
    }
}

//管理画面のメニュー「投稿」→「ブログ」に変更
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'ブログ';
    $submenu['edit.php'][5][0] = 'ブログ一覧';
    $submenu['edit.php'][10][0] = '新規追加';
    echo '';
}
function change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'ブログ';
    $labels->singular_name = 'ブログ';
    $labels->add_new = _x('追加', 'ブログ');
    $labels->add_new_item = '新規ブログの追加';
    $labels->edit_item = 'ブログの編集';
    $labels->new_item = '新しいブログ';
    $labels->view_item = 'ブログを表示';
    $labels->search_items = 'ブログを検索';
    $labels->not_found = 'ブログはありません';
    $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
}
add_action('init', 'change_post_object_label');
add_action('admin_menu', 'change_post_menu_label');


//アーカイブの表示件数変更
function change_posts_per_page($query) {
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }

    if ($query->is_archive() && $query->get('post_type') == 'voice') {
        $query->set('posts_per_page', 6);
    } elseif ($query->is_archive() && $query->get('post_type') == 'campaign') {
        $query->set('posts_per_page', 4);
    }
}

add_action('pre_get_posts', 'change_posts_per_page');


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}


function dynamic_field_values ( $tag, $unused ) {
    if ( $tag['name'] != 'your-form-tag-name' )  // Contact Form 7内に記入するフィールド名（独自のフォームタグ名）
        return $tag;
    $args = array (
        'posts_per_page' => -1, // 全件取得（制限が必要な場合は数値を指定）
        'post_type'      => 'campaign', // カスタム投稿タイプ名（投稿タイプスラッグ）
        'orderby'        => 'title', // タイトルでソート
        'order'          => 'ASC', // 昇順
    );
    $custom_posts = get_posts($args);
    if ( ! $custom_posts )
        return $tag;
    foreach ( $custom_posts as $custom_post ) {
        $tag['raw_values'][] = $custom_post->post_title;
        $tag['values'][] = $custom_post->post_title;
        $tag['labels'][] = $custom_post->post_title;
    }
    return $tag;
}
add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 30, 2);







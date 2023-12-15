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


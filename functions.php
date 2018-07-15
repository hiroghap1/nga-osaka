<?php

function sidebar_widgets_init()
{
    register_sidebar(array(
    'name' => 'sidebar1',
    'id' => 'sidebar-1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ));
}
add_action('widgets_init', 'sidebar_widgets_init');

add_filter('mimizuku_layout', function ($layout) {//トップページ読み込み
    if (is_front_page()) {
        return 'one-column--index';
    }
    return $layout;
});

function my_copyright()
{ //コピーライト
    echo '&copy; 2010 日本酒卍固め &copy;SAKAZUKIN';
}
add_filter('mimizuku_copyright', 'my_copyright');

function change_posts_per_page($query)
{//検索結果の表示件数
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }
    //参加店舗一覧は50件表示
    if ($query->is_archive('store')) {
        $query->set('posts_per_page', '50');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

function nga_scripts()
{
    if (is_post_type_archive('store')) {
        wp_enqueue_script('archive-store', get_stylesheet_directory_uri().'/assets/js/archive-store.js', array( 'jquery' ), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'nga_scripts');

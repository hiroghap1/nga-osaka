<?php

function sidebar_widgets_init()
{
    register_sidebar(array(
    'name' => 'sidebar1',
    'id' => 'sidebar-1',
    'before_widget' => '<div class="sidebar_box">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="sidebar-title">',
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
add_filter('mimizuku_footer', function ($footer) {
    return '3row';
    return $footer;
});

function my_copyright()
{ //コピーライト
    echo '&copy; 2010 日本酒卍固め &copy;SAKAZUKIN';
}
add_filter('mimizuku_copyright', 'my_copyright');

function my_posts_per_page($wp_query)
{
    if (is_admin()) {
        // カスタム投稿タイプ store の時のみ
        if ($wp_query->is_post_type_archive('store')
      && post_type_supports($wp_query->query_vars['post_type'], 'page-attributes')) {
            if (!isset($wp_query->query_vars['orderby'])) {
                $wp_query->query_vars['orderby'] = 'menu_order';
            }
            if (!isset($wp_query->query_vars['order'])) {
                $wp_query->query_vars['order'] = 'ASC';
            }
        }
    }
}
add_action('pre_get_posts', 'my_posts_per_page');

function change_posts_per_page($query)
{//検索結果の表示件数
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }
    //参加店舗一覧は50件表示
    if ($query->is_archive('store')) {
        $query->set('posts_per_page', '50');
        $query->set('orderby', 'menu_order');
        $query->set('order', 'asc');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

function nga_scripts()
{
    if (is_post_type_archive('store')) {
        wp_enqueue_script('archive-store', get_stylesheet_directory_uri().'/assets/js/archive-store.js', array( 'jquery' ), '1.0', true);
    }
    if (is_page('map')) {
        wp_enqueue_script('single-map', get_stylesheet_directory_uri().'/assets/js/map.js', array( 'jquery' ), '1.1', true);
        wp_enqueue_script('maps-api', 'https://maps.googleapis.com/maps/api/js?callback=initMap&key=AIzaSyBmfQ9WtDcljgigU5CGo6UyH4VbarONNcw', array(), '1.0', true);
    }
    wp_enqueue_script('city', get_stylesheet_directory_uri().'/assets/js/imagemaps.min.js', array( 'jquery' ), '1.1', true);
}
add_action('wp_enqueue_scripts', 'nga_scripts');

function tag_manager_head()
{ //タグマネージャーhead内
    if (is_user_logged_in()) {
        return;
    } else {
        $tag_manager_head = "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MW8T3QW');</script>
<!-- End Google Tag Manager -->";
        echo $tag_manager_head;
    }
}
add_action('wp_head', 'tag_manager_head');

function my_js_function()
{
    if (is_user_logged_in()) {
        return;
    } else {
        echo '<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MW8T3QW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->';
    }
}
add_action('wp_footer', 'my_js_function');

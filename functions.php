<?php

function sidebar_widgets_init() {
  register_sidebar( array(
    'name' => 'sidebar1',
    'id' => 'sidebar-1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );
}
add_action( 'widgets_init', 'sidebar_widgets_init' );

add_filter( 'mimizuku_layout', function( $layout ) {
  if ( is_front_page() ) {
      return 'one-column--index';
  }
  return $layout;
} );

function my_copyright () { //コピーライト
  echo '&copy; 2010 日本酒卍固め &copy;SAKAZUKIN';
}
add_filter( 'mimizuku_copyright', 'my_copyright' );

?>
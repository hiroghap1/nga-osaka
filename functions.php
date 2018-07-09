<?php
add_filter( 'mimizuku_layout', function( $layout ) {
  if ( is_front_page() ) {
      return 'one-column--index';
  }
  return $layout;
} );

function my_copyright () { //コピーライト
  echo '&copy; 2010 日本酒卍固め';
}
add_filter( 'mimizuku_copyright', 'my_copyright' );

?>
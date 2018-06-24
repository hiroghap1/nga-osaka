<?php

function my_copyright () { //コピーライト
    echo 'Copyright 日本酒卍固め All Rights Reserved.';
}
add_filter( 'mimizuku_copyright', 'my_copyright' );

?>
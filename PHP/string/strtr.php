<?php
    $str = 'I love php, I love PHP too!';
    $replace = strtr( $str, 'ov', 'ik' );
    echo $replace . '<br>';
    $find = [ 'love' => 'like', 'PHP' => 'Python' ];
    $replace = strtr( $str, $find );
    echo $replace . '<br>';


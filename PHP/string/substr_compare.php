<?php
    $str1 = 'Hello World!';
    $str2 = 'World!';
    $compare = substr_compare($str1, $str2, 6, 3 );
    if( $compare == 0 ){
        echo 'String Equal';
    }
    elseif( $compare > 0 ) {
        echo 'String One';
    }
    else {
        echo 'String Two ';
    }

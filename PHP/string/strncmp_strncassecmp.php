<?php
    $str1 = 'Hello World!';
    $str2 = 'Hello World!';
    $compare = strncmp( $str1, $str2, 6 );
    if( $compare == 0 ){
        echo 'String Equal';
    }
    elseif( $compare > 0 ) {
        echo 'String One';
    }
    else {
        echo 'String Two ';
    }

    echo '<br>';

    $str1 = 'HELLO World!';
    $str2 = 'Hello World!';
    $com = strncasecmp( $str1, $str2, 6 );
    if( $com == 0 ){
        echo 'String Equal';
    }
    elseif( $com > 0 ) {
        echo 'String One';
    }
    else {
        echo 'String Two';
    }
<?php
    $str1 = '12Hello World!';
    $str2 = '10Hello World!';
    $compare = strnatcmp( $str1, $str2 );
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

    $str1 = '12HELLO World!';
    $str2 = '12Hello World!';
    $com = strnatcasecmp( $str1, $str2 );
    if( $com == 0 ){
        echo 'String Equal';
    }
    elseif( $com > 0 ) {
        echo 'String One';
    }
    else {
        echo 'String Two';
    }
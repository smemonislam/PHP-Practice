<?php
    $str1 = 'Hello World!';
    $str2 = 'Hello World!';
    $compare = strcmp( $str1, $str2 );
    if( $compare == 0 ){
        echo 'String Equal';
    }
    elseif( $compare > 0 ) {
        echo 'String One Grater than String Two';
    }
    else {
        echo 'String Two Grater than String One';
    }

    echo '<br>';

    $str1 = 'HELLO World!';
    $str2 = 'Hello World!';
    $com = strcasecmp( $str1, $str2 );
    if( $com == 0 ){
        echo 'String Equal';
    }
    elseif( $com > 0 ) {
        echo 'String One Grater than String Two';
    }
    else {
        echo 'String Two Grater than String One';
    }
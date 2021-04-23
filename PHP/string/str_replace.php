<?php
    $str    = 'I love php, I love PHP too!';
    $strr   = 'Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
    $find   = [ 'Lorem', 'Ipsum', 'is', 'dummy' ];
    $new    = [ 'Emon', 'Islam', 'Learning', 'PHP' ]; 

    $replace = str_replace( 'php', 'Python', $str );
    echo ucwords( $replace )   . "<br>";

    echo str_replace( $find, $new, $strr) . "<br>";

    $ireplace = str_ireplace( 'php', 'JavaScript', $str );
    echo ucwords( $ireplace );
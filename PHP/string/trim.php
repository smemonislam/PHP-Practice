<?php
    $str = "Hello World";
    echo trim( $str, 'Hd' ) . "<br>";
    echo ltrim( $str, 'H' ) . "<br>";
    echo rtrim( $str, 'd' ) . "<br>";
    echo chop( $str, 'd' ) . "<br>";

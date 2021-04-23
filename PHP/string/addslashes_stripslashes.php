<?php
    $str = "Hello 'World!'";
    echo $str . '<br>';
    echo 'Add Slashes: ' . addslashes( $str ) . '<br>';
    echo 'Remove Slashes: ' . stripslashes( $str ) . "<br>";
    echo 'Add Slashess with multiple characters: ' . addcslashes( $str, "A..Z" ) . "<br>";
    echo 'Remove Slashess with multiple characters: ' . stripcslashes( $str );


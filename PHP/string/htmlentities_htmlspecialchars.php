<?php
    //$str = " 'Nice World' <hr> ";
    $str = '<a href="www.google.com" target="_blank">Google</a>';
    //echo $str . '<br>';
    $htmldecode =  htmlspecialchars( $str, ENT_QUOTES ) . '<br>';
    $html_entity_code = htmlentities( $str, ENT_QUOTES )   . "<br>";

    echo htmlspecialchars_decode( $htmldecode ) . "<br>";
    echo html_entity_decode( $html_entity_code ) . "<br>";
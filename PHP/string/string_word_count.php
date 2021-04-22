<?php
    $str = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
    $strWord0 = str_word_count( $str, 0 );
    $strWord1 = str_word_count( $str, 1 );
    $strWord2 = str_word_count( $str, 2 );

    echo $strWord0;
    echo '<pre>';
    print_r( $strWord1 );
    echo '</pre>';
    echo '<pre>';
    print_r( $strWord2 );
    echo '</pre>';
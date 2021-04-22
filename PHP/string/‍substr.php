<?php
    $str1 = '$Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
    $str2 = '$Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
    $str3 = '$Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
    $str4 = '$Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
    echo substr( $str1, 1 ) . "<br>";
    echo substr( $str2, 0, 12 ) . "<br>";
    echo substr( $str3, 0, -2 ) . "<br>";
    echo substr( $str4, -5, 3 ) . "<br>";
    
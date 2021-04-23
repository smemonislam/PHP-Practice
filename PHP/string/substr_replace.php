<?php
    $str = 'I love php, I love PHP too!';
    $replace = substr_replace($str, 'Python and', 7, 11);
    echo $replace;


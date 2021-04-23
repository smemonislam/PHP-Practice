<?php
    $str1 = 'Hello World!';
    $str2 = 'Hello Beatifull World!';
    $compare = similar_text($str1, $str2, $per );
    echo "Pertange: $per %";
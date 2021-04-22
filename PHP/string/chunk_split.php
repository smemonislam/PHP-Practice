<?php
    $str = 'Hello World';
    $strChunk = chunk_split( $str, 6, '.' );

    echo '<pre>';
    echo( $strChunk );
    echo '</pre>';
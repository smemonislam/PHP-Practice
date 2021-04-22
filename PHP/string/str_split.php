<?php
    
$str = 'Hello World!';
$strSplit = str_split( $str, 2 );
echo '<pre>';
print_r( $strSplit );
echo '</pre>';


$str = array(
    'a' => 'Hello Programer',
    'b' => 'Are you ready to php code',
);


array_walk( $str, 'strFunc' );
function strFunc( $val, $key ){
    $strSplit = str_split( $val, 3 );
    echo '<pre>';
    print_r( $strSplit );
    echo '</pre>';
}
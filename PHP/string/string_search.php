<?php
$str        = 'Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
$strr       = 'Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
$strchr     = 'Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
$strrchr    = 'Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
$strchar    = 'Lorem Ipsum is simply dummy text of the printing and typesetting is industry.';
$str        = strstr( $str, 'is' );
echo $str . '<br>';
$str        = strstr( $strr, 'is', true );
echo $str . '<br>';

$strchr     = strchr( $strchr, 'is' );
echo $strchr . '<br>';
$strchr     = strchr( $strrchr, 'is', true );
echo $strchr . '<br>';

$strchar    = strpbrk( $strchar, 'em' );
echo $strchar . '<br>';



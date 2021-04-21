<?php
$fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
$computer   = [ 'Monitor', 'CPU', 'Proccessor', 'Motherboard', 'Ram', 'Hard Disk', 'Cable', 'Graphic Card', 'Fan' ];
$arrayCombine = array_combine( $fruits, $computer );
echo 'array combine with index array: ' . '<pre>';
print_r( $arrayCombine );
echo '</pre>';

$fruits = [ 
    'a' => 'Apple', 
    'b' => 'Orange', 
    'c' => 'Banana', 
    'd' => 'Groom', 
    'e' => 'Guava', 
    'f' => 'Grapes', 
    'j' => 'Pear', 
];

$vaggie = [ 
    'a' => 'Eggplant',
    '1' => 'Carrot',
    'k' => 'Chili',
    'j' => 'Pea',
    '5' => 'Lemon',
    'm' => 'Cabbage',
    'n' => 'Beans'

];
$arrayCombine = array_combine( $fruits, $vaggie );
echo 'array combine with associtive array: ' . '<pre>';
print_r( $arrayCombine );
echo '</pre>';
<?php
    // index Array
    $fruits = [ 'apple', 'orange', 'banana', 'date plam', 'carrot', 'groom', 'grapes', 'pear', 'coconat', 'guava' ];

    $count = count($fruits);
    echo "Index array count: " . $count;

    echo '<br>';
    // Associative Array
    $fruits = [ 
        'a' =>'apple', 
        'b' =>'orange', 
        'c' =>'banana', 
        'd' =>'date plam', 
        'e' =>'carrot', 
        'f' =>'groom', 
        'g' =>'grapes', 
        'h' =>'pear', 
        'i' =>'coconat', 
        'j' =>'guava'
    ];
    $count = count($fruits);
    echo "Associative array count: " . $count;

    echo '<br>';
    // Multidimensional Array count
    $mixed = [
        'fruits' => [
            'a' =>'apple', 
            'b' =>'orange', 
            'c' =>'banana', 
            'd' =>'date plam', 
            'e' =>'lemon', 
            'f' =>'groom', 
            'g' =>'grapes', 
            'h' =>'pear', 
            'i' =>'coconat', 
            'j' =>'guava'
        ],
        'vaggie' => [
            'k' => 'carrot',
            'l' => 'eggplant',
            'm' => 'collard',
            'n' => 'pea',
            'o' => 'chili',
            'vaggie' => [
                'k' => 'carrot',
                'l' => 'eggplant',
                'm' => 'collard',
                'n' => 'pea',
                'o' => 'chili',
                
            ],
        ],
    ];
    $count = count($mixed, 1);
    echo "Multidimensional array count: " . $count;
<?php
    // Index Array
    $fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
    $vaggie     = [ 'Eggplant', 'Orange', 'Beans', 'Groom', 'Cabbage', 'Chili', 'Barbati', 'cauliflower' ];
    $arrayIntersect = array_intersect( $fruits, $vaggie );
    echo 'array Key with index array: ' . '<pre>';
    print_r( $arrayIntersect );
    echo '</pre>';

    echo '<br>';
    // Associative Array
    $fruits = [ 
        'a' => 'Apple', 
        'b' => 'Orange', 
        'c' => 'Banana', 
        'd' => 'Groom', 
        'e' => 'Guava', 
        'f' => 'Grapes', 
        'j' => 'Pear', 
        'h' => 'Pinapple', 
        'i' => 'Coconat',
        'j' => 'Lemon'
    ];

    $vaggie = [
        '1' => 'Eggplant',
        '2' => 'Carrot',
        '3' => 'Pinapple',
        '4' => 'Pea',
        '5' => 'Grapes',
        '6' => 'Cabbage',
        '7' => 'Chili',
        '8' => 'Tomato',
        '9' => 'Lemon',
    ];

    $arrayIntersect = array_intersect( $fruits, $vaggie );
    echo 'array Key with associative array: ' . '<pre>';
    print_r( $arrayIntersect );
    echo '</pre>';

    echo '<br>';
    
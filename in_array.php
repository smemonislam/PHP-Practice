<?php
    // index Array
    $fruits = [ 'apple', 'orange', 'banana', 'date plam', 'carrot', 'groom', 'grapes', 'pear', 'coconat', 'guava' ];

    $search = in_array( 'grapes', $fruits );
    if( $search ){
        echo 'Index Array Search Result: Find Successfully';
    }else {
        echo "Index Array Search Result: Can't Find";
    }

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
    $search = in_array( 'fruits', $fruits );
    if( $search ){
        echo 'Associative Array Search Result: Find Successfully';
    }else {
        echo "Associative Array Search Result: Can't Find";
    }

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
            'computer' => [
                'k' => 'motherboard',
                'l' => 'ram',
                'm' => 'mouse',
                'n' => 'keyboard',
                'o' => 'monitor',
                
            ],
        ],
    ];

    $result = in_array( 'apple', $mixed );
    if( $result ){
        echo 'Multidimensional Array Search Result: Find Successfully';
    }else {
        echo "Multidimensional Array Search Result: Can't Find";
    }

<?php
    // Index Array
    $fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
    $vaggie     = [ 'Eggplant', 'Pea', 'Carrot', 'Collad' ];
    $computer   = [ 'Monitor', 'CPU', 'Proccessor', 'Motherboard', 'Ram', 'Hard Disk', 'Cable', 'Graphic Card' ];
    $arrayMerge = array_merge( $fruits, $vaggie, $computer );
    echo 'array merge with index array: ' . '<pre>';
    print_r( $arrayMerge );
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
        'a' => 'Eggplant',
        '1' => 'Carrot',
        'k' => 'Chili',
        'j' => 'Pea',
        '5' => 'Lemon',
        'm' => 'Cabbage',
        'n' => 'Beans'

    ];

    $arrayMerge = array_merge( $fruits, $vaggie );
    echo 'array merge with associative array: ' . '<pre>';
    print_r( $arrayMerge );
    echo '</pre>';

    echo '<br>';
    // Multidimensional Array
    $mixed1 = [
        array(
            'id'            => 2135,
            'first_name'    => 'John',
            'last_name'     => 'Doe',
        ),
        array(
            'id'            => 3245,
            'first_name'    => 'Sally',
            'last_name'     => 'Smith',
        ),
        array(
            'id'            => 5342,
            'first_name'    => 'Jane',
            'last_name'     => 'Jones',
        ),
        array(
            'id'            => 5623,
            'first_name'    => 'Peter',
            'last_name'     => 'Doe',
        )

    ];

    $mixed2 = [
        array(
            'id'            => 21351,
            'first_name'    => 'Emon',
            'last_name'     => 'Islam',
        ),
        array(
            'id'            => 32452,
            'first_name'    => 'Sally',
            'last_name'     => 'Smith',
        ),
        array(
            'id'            => 53423,
            'first_name'    => 'Jane',
            'last_name'     => 'Jones',
        ),
        array(
            'id'            => 54624,
            'first_name'    => 'Peter',
            'last_name'     => 'Doe',
        )

    ];

    $arrayMerge = array_merge( $mixed1, $mixed2 );
    echo 'array merge with Multidimensional array: ' . '<pre>';
    print_r( $arrayMerge );
    echo '</pre>';

    echo '<br>';
    // Multidimensional associative Array
    $mixedassoc1 = [
        'fruits' => [ 
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
        ],

        'vaggie' => [
            'z' => 'Eggplant',
            'y' => 'Carrot',
            'x' => 'Pea',
            'w' => 'Collad',
        ],

    ];

    $mixedassoc2 = [
        'f' => [ 
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
        ],

        'v' => [
            'z' => 'Eggplant',
            'y' => 'Carrot',
            'x' => 'Pea',
            'w' => 'Collad',
        ],

    ];

    $arrayMerge = array_merge( $mixedassoc1, $mixedassoc2 );
    echo 'array merge with multidimensional associative array: ' . '<pre>';
    print_r( $arrayMerge );
    echo '</pre>';
    
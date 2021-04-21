<?php
    // Index Array
    $fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
    array_splice( $fruits, 1, 4 );
    echo 'array Splice with index array: ' . '<pre>';
    print_r( $fruits );
    echo '</pre>';

    $fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
    $vaggie     = [ 'Eggplant', 'Carrot', 'Beans', 'Pea', 'Cabbage', 'Chili', 'Barbati', 'cauliflower'];
    array_splice( $fruits, 0,  count($fruits ), $vaggie );
    echo 'array Splice with index array: ' . '<pre>';
    print_r( $fruits );
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
        '3' => 'Beans',
        '4' => 'Pea',
        '5' => 'Onion',
        '6' => 'Cabbage',
        '7' => 'Chili',
        '8' => 'Tomato',
        '9' => 'Potato',
    ];

    array_splice( $fruits, 1, 4, $vaggie );
    echo 'array Splice with associative array: ' . '<pre>';
    print_r( $fruits );
    echo '</pre>';

    echo '<br>';
    // Multidimensional Array
    $mixed = [
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

    array_splice( $mixed, 1, 2 );
    echo 'array Splice with Multidimensional array: ' . '<pre>';
    print_r( $mixed );
    echo '</pre>';

    echo '<br>';
    // Multidimensional associative Array
    $mixedassoc = [
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

    array_splice( $mixedassoc, 0, 3 );
    echo 'array Splice with multidimensional associative array: ' . '<pre>';
    print_r( $mixedassoc );
    echo '</pre>';
    
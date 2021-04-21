<?php
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

    $arrReplace = array_replace_recursive( $mixed1, $mixed2 );
    echo '<pre>';
    print_r( $arrReplace );
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

    $arrReplace = array_replace_recursive( $mixedassoc1, $mixedassoc2 );
    echo '<pre>';
    print_r( $arrReplace );
    echo '</pre>';
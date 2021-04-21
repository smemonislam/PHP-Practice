<?php
    // Index Array
    $fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
    array_shift( $fruits );
    echo '<pre>';
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

    array_shift( $fruits );
    echo '<pre>';
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

   

    array_shift( $mixed );
    echo '<pre>';
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

    ];    

    array_pop( $mixedassoc );
    echo '<pre>';
    print_r( $mixedassoc );
    echo '</pre>';
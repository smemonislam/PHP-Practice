<?php
    // Index Array
    $fruits     = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];
    $vaggie     = [ 'Eggplant', 'Pea', 'Carrot', 'Collad' ];
    $computer   = [ 'Monitor', 'CPU', 'Proccessor', 'Motherboard', 'Ram', 'Hard Disk', 'Cable', 'Graphic Card' ];
    $arrReplace = array_replace( $fruits, $vaggie, $computer );
    echo '<pre>';
    print_r( $arrReplace );
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

    $arrReplace = array_replace( $fruits, $vaggie );
    echo '<pre>';
    print_r( $arrReplace );
    echo '</pre>';

    echo '<br>';
    
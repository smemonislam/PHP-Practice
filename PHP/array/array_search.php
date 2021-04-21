<?php
    // Index Array
    $fruits = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];

    $result = array_search( 'Pinapple', $fruits, true );
    if( $result ){
        echo 'Index array search result: Find Successfully';
    }
    else {
        echo "Index array search result: Can't Find"; 
    }

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
    
    $search = array_search( 'Lemon', $fruits, true );    
    if( $search ){
        echo "Associative array search result: Find Successfully";
    }
    else {
        echo "Associative array search result: Can't Find"; 
    }
    
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
    
    $search = array_search( '5623', array_column( $mixed, 'id' ) );
    if( $search ){
        echo "Multidimensional array search result: Find Successfully";
    }
    else {
        echo "Multidimensional array search result: Can't Find"; 
    }

    echo '<br>';
    // Multidimensional Associative Array
    $mixed = [
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
 
function array_search_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && array_search_r($needle, $item, $strict))) {
            return true;
        }
    }
 
    return false;
}
 
echo array_search_r("Eggplant", $mixed) ? 'Multidimensional associative array search result: found <br>' : 'Multidimensional associative array search result: not found <br>';
echo array_search_r("I am not in the array", $mixed) ? 'Multidimensional associative array search result: found <br>' : 'Multidimensional associative array search result: not found<br>';
 
?>
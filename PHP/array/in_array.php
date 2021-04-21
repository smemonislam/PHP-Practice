<?php
    // Index Array
    $fruits = [ 'Apple', 'Orange', 'Banana', 'Groom', 'Guava', 'Grapes', 'Pear', 'Pinapple', 'Coconat' ];

    $result = in_array( 'Pinapple', $fruits, true );
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
    
    $search = in_array( 'Lemon', $fruits, true );
    if( $search ){
        echo "Associative array search result: Find Successfully";
    }
    else {
        echo "Associative array search result: Can't Find"; 
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
 
function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
 
    return false;
}
 
echo in_array_r("Eggplant", $mixed) ? 'Multidimensional associative array search result: found <br>' : 'Multidimensional associative array search result: not found <br>';
echo in_array_r("I am not in the array", $mixed) ? 'Multidimensional associative array search result: found <br>' : 'Multidimensional associative array search result: not found<br>';
 
?>
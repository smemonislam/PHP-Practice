<?php
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

    $keyExists = array_key_exists( 'a', $fruits );
    if( $keyExists ) {
        echo "Associative Array : Key Exists";
    }else {
        echo "Associative Array : Key Not Exists";
    }
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

    function multi_array_key_exists( $needle, $haystack ) {
        foreach ( $haystack as $key => $value ) :
    
            if ( $needle == $key )
                return true;
           
            if ( is_array( $value ) ) :
                 if ( multi_array_key_exists( $needle, $value ) == true )
                    return true;
                 else
                     continue;
            endif;
           
        endforeach;
       
        return false;
    }
     
    echo multi_array_key_exists("z", $mixedassoc) ? 'Multidimensional associative array search result: found <br>' : 'Multidimensional associative array search result: not found <br>';
    echo multi_array_key_exists("I am not in the array", $mixedassoc) ? 'Multidimensional associative array search result: found <br>' : 'Multidimensional associative array search result: not found<br>';
    

    

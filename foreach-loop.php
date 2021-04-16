<?php
  // Index Array or Numeric Array
  $index = [ 'A', 'B', 'C', 'D' ];
  
  foreach( $index as $key => $value ){
    echo $key . ' = ' . $value . '<br>';
  }

 // Associative Array
 $assoc = [
    'a' => 'A',
    'b' => 'B'
    'c' => 'C',
    'd' => 'D',
 ];
  
  foreach( $assoc as $key => $value ){
    echo $key . ' = ' . $value . '<br>';
  }

  // Multidimensional Array
  $multi = [
    [ 
      'a' => 'A',
      'b' => 'B'
      'c' => 'C',
      'd' => 'D',
    ],
    [ 
      'e' => 'E',
      'f' => 'F'
      'g' => 'G',
      'h' => 'H',
    ],
  ];
  
  foreach( $multi as $key => $value ){
    foreach( $value as $key2 => $value2 ){
      echo $key2 . ' = ' . $value2 . '<br>';
    }
  }


  // Multidimensional Associative Array
    $multi_assoc = [
      'emon' => [ 
        'a' => 'A',
        'b' => 'B'
        'c' => 'C',
        'd' => 'D',
      ],
      'fatema' => [ 
        'e' => 'E',
        'f' => 'F'
        'g' => 'G',
        'h' => 'H',
      ],
    ];

    foreach( $multi as $key => $value ){
      foreach( $value as $key2 => $value2 ){
        echo $key2 . ' = ' . $value2 . '<br>';
      }
    }


















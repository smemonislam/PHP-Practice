<?php
// Index Array or Numeric Array
$index = [ 'A', 'B', 'C', 'D' ];

foreach( $index as $key => $value ){
  echo $key . ' = ' . $value . '<br>';
}

// Associative Array
$assoc = [
  'a' => 'A',
  'b' => 'B',
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
    'b' => 'B',
    'c' => 'C',
    'd' => 'D',
  ],
  [ 
    'e' => 'E',
    'f' => 'F',
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
      'b' => 'B',
      'c' => 'C',
      'd' => 'D',
    ],
    'fatema' => [ 
      'e' => 'E',
      'f' => 'F',
      'g' => 'G',
      'h' => 'H',
    ],
  ];

  foreach( $multi as $key => $value ){
    foreach( $value as $key2 => $value2 ){
      echo $key2 . ' = ' . $value2 . '<br>';
    }
  }

$multi_assoc_ad = [
  'emon' => [ 
    'a' => 'A',
    'b' => 'B',
    'c' => 'C',
    'd' => 'D',
    'emo' => [ 
      'n' => 'N',
      'o' => 'O',
      'p' => 'P'
    ]
  ],
  'fatema' => [
    'e' => 'E',
    'f' => 'F',
    'g' => 'G',
    'abeda' => [
      'h' => 'H',
      'i' => 'I',
      'j' => 'J',
    ],
    'suchi' => [
      'k' => 'K',
      'l' => 'L',
      'm' => 'M',
    ],
  ]
];

foreach( $multi_assoc_ad as $key => $value ){
  foreach( $value as $key2 => $value2 ){
    if( is_array( $value2 ) ){
      foreach( $value2 as $key3 => $value3){
        echo $key3 . ' = ' . $value3 . '<br>';
      }
    }
    else {
      echo $key2 . ' = ' . $value2 . '<br>';
    }
  }
}

$ab = [  
  'a' => '52',   
  array(
      'a' => 'A',
      'b' => 'B',
      'c' => 'C',
      'd' => 'D',
  ),
  array(
      'e' => 'E',
      'f' => 'F',
      'g' => 'G',
      'h' => 'H',
      'i' => 'I',
  ),
];

// Multidimensional associative array Advanced topic
foreach( $ab as $key => $value){
  //echo $key;
  if( is_array( $value ) ){
      foreach( $value as $key2 => $value2 ){
          echo $key2 . ' => ' . $value2 . '<br>';
      }
      
  }
  else {
      echo $key . ' => ' . $value . '<br>';
  }
}















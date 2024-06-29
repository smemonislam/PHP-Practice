
<?php
    $multidimensional = [
        [
            'key1' => 'apple',
            'key2' => 'banana',
            'key3' => 'cherry',
            'key4' => 'date',
        ],
        [
            'key5' => 'ant',
            'key6' => 'bear',
            'key7' => 'cat',
            'key8' => 'dog',
            [
                'key9' => 'airplane',
                'key10' => 'boat',
                'key11' => 'car',
                'key12' => 'duck',
                [
                    'key13' => 'arrow',
                    'key14' => 'ball',
                    'key15' => 'cup',
                    'key16' => 'drum',
                ]
            ]
        ],
        [
            'key17' => 'apricot',
            'key18' => 'blueberry',
            'key19' => 'coconut',
            'key20' => 'dragonfruit',
        ]
    ];
    

   


    // foreach($multidimensional as $key1 => $layer1)
    // {
    //     foreach($layer1 as $key2 => $layer2)
    //     {
    //         if(is_array($layer2)){
    //             foreach($layer2 as $key3 => $layer3)
    //             {
                  
    //                 if(is_array($layer3))
    //                 {
    //                     echo $layer3['key13'];
    //                     // foreach($layer3 as $key4 => $layer4)
    //                     // {
    //                     //     echo "<pre>";
    //                     //     print_r($layer4);
    //                     //     echo "</pre>";
    //                     // }
    //                 }
                  
    //             }
    //         } 
    //     }
    // }
    
    

    $multi_assoc_ad = [
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
        ],
        
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
    ];

    foreach($multi_assoc_ad as $key1 => $layer1)
    {
        
        echo $layer1['emo']['p'];
        break;
    }

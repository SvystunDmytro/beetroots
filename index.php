<?php

    $orgs = [
        'Org1'=>[
            'worker'=>['Name' => 'John', 'Age' => 20,
            ],
            'worker1'=>['Name' => 'John1', 'Age' => 15,
            ],
            'worker2'=>['Name' => 'John2', 'Age' => 10,
            ],
        ],
        'Org2'=>[
            'worker'=>['Name' => 'Jack', 'Age' => 30,
            ],
            'worker1'=>['Name' => 'Jack1', 'Age' => 29,
            ],
            'worker2'=>['Name' => 'Jack2','Age' => 28,
            ],
        ],

        'Org3'=>[
            'worker'=>['Name' => 'Peter', 'Age' => 28,
            ],
            'worker1'=>['Name' => 'Peter1', 'Age' => 28,
            ],
            'worker2'=>['Name' => 'Peter2', 'Age' => 28,
            ],
        ]
    ];
echo "<pre>";
    echo "We have worker named ".$orgs['Org1']['worker']['Name']." and his age is ".$orgs['Org1']['worker']['Age']." years";
echo "</pre>";
echo "<pre>";
    echo "And at another organisation we have worker named ".$orgs['Org2']['worker']['Name']." and his age is ".$orgs['Org1']['worker']['Age']." years";
echo "</pre>";
echo "<pre>";
    echo "But, the third organisation have worker named ".$orgs['Org3']['worker']['Name']." and his age is ".$orgs['Org1']['worker']['Age']." years";
echo "</pre>";



//do ()while ($i < 5) {
//
//}


//while ($i <10) {
//    $count = $i++;
//    echo "<pre>";
//    var_dump($i);
//    echo "</pre>";
//}



//for ($i = 0; $i < 15; $i++) {
//    echo "<pre>";
//    var_dump($array[$i]);
//    echo "</pre>";}

//foreach ($array as $key => $value) {
//    echo "<pre>";
//    if (is_array($value)) {
//        foreach ($array as $key => $value) {
//            var_dump($value);
//        }
//    }
//    echo "</pre>";
//}

//echo"<pre>";
//var_dump($array['embeddedArray']['Hi']);
//echo"</pre>";
//
//echo"<pre>";
//var_dump($array['my key']);
//echo"</pre>";
//
//echo"<pre>";
//var_dump($int);
//var_dump($string);
//var_dump($array);
//echo"</pre>";



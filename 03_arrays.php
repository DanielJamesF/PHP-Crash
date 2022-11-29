<?php
// Simple array
$numbers = [1, 44, 55, 22, ];
$fruits = array('apple', 'orange', 'pear');
// print_r($numbers);
// var_dump($numbers);
// echo $fruits[0];
// Associative Array
$colors = [
1 => 'red',
4 => 'blue',
6 => 'green'
];
// echo $colors[4];
$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];
// echo $hex['blue']
$person = [
    'first_name' => 'Daniel',
    'last_name' => 'Fredericks',
    'email' => 'daniel@gmail.com'
];
// echo $person['first_name']
$person = [
    [
        'first_name' => 'Daniel',
        'last_name' => 'Fredericks',
        'email' => 'daniel@gmail.com'
    ],
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];
// echo $person[0]['email'];
var_dump(json_encode($person));

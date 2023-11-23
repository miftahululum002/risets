<?php
$buah = [
    'apel',
    'mangga'
];

$buah[] = 'Jeruk';


$employees = [
    [
        'name' => 'Employee 1',
        'address' => 'Malang',
    ]
];

$employees[] = [
    'name' => 'Employee 2',
];

$employees[1]['address'] = 'Jawa timur';

foreach ($employees as $key => $value) {
    echo $value['name'] . '<br>';
}

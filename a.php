<?php
$food = 'ahhhhhhhhh';

$return_value = match ($food) {
    'apple', "ahhhhhhhhh" => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

var_dump($return_value);
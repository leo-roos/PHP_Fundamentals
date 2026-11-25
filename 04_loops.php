<?php

function first_function($number_one, $number_two) {
    return ($number_one + $number_two) / 2;
}

$second_function = function($number_one, $number_two) {
    return ($number_one + $number_two) / 2;
};

$third_function = fn($number_one, $number_two) => ($number_one + $number_two) / 2;

echo first_function(1, 4);
echo "<br>";

echo $second_function(1, 4);
echo "<br>";

echo $third_function(1, 4);
echo "<br>";

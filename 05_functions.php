<?php

$array = [1, 5, 6, 10, 3, 25, 12, 19, 17, 2, 5];

print_r(array_filter($array, fn($value) => $value == 5));
echo "<br>";
echo "<br>";

print_r(array_map(function($value) {
    return $value - 1 . ",99 SEK";
}, $array));

echo "<br>";
echo "<br>";
echo "<br>";
print_r(array_filter($array, fn($value) => $value > 5));
echo "<br>";
echo "<br>";

print_r(array_map(function($value) {
    return $value * 2;
}, $array));

echo "<br>";
echo "<br>";
echo "<br>";
$string = "Hej jag heter X";
$exploded = explode("|", str_replace(" ", "| ", $string));
print_r($exploded);
echo "<br>";
echo "<br>";

$imploded = implode($exploded);
print_r($imploded);
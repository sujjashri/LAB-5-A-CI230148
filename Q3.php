<?php
function calculateArea($length, $width) {
    return $length * $width;
}


$length = 2; // Example length
$width = 4;  // Example width
$area = calculateArea($length, $width);


echo "The area of a rectangle with a width of $width and $length is $area";
?>
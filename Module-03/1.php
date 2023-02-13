<?php
//Question: Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
function checkEvenOdd( $number ) {
    if ( $number % 2 == 0 ) {
        return "$number is an even number.";
    } else {
        return "$number is an odd number.";
    }
}
$number = 5;
echo checkEvenOdd( $number );




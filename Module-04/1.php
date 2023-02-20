<?php
//Write a PHP function to sort an array of strings by their length, in ascending order.
function sortByLength( $array ) {
    usort( $array, function ( $a, $b ) {
        return strlen( $a ) - strlen( $b );
    } );
    return $array;
}

$words = array( "apple", "banana", "cherry", "date", "elderberry" );
$sortedWords = sortByLength( $words );
print_r( $sortedWords ); 

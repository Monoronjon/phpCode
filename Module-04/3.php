<?php
//Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.
function removeFirstLast( $arr ) {
    $len = count( $arr );
    if ( $len <= 2 ) {
        return array();
    } else {
        return array_slice( $arr, 1, $len - 2 );
    }
}
$arr = array( 1, 2, 3, 4, 5 );
$new_arr = removeFirstLast( $arr );
print_r( $new_arr ); 

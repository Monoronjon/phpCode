<?php
//Write a PHP function to find the second largest number in an array of numbers.
function findSecondLargest( $arr ) {
    $max = max( $arr );
    $second_max = null;
    foreach ( $arr as $num ) {
        if ( $num != $max && ( $second_max === null || $num > $second_max ) ) {
            $second_max = $num;
        }
    }
    return $second_max;
}
$arr = [1, 2, 3, 4, 5];
echo findSecondLargest( $arr );

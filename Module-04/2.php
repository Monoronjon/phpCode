<?php
//Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.
function concatReverse( $str1, $str2 ) {
    $len1 = strlen( $str1 );
    $len2 = strlen( $str2 );
    $result = "";

    for ( $i = $len1 - 1; $i >= 0; $i-- ) {
        $result .= $str1[$i];
    }
    for ( $i = $len2 - 1; $i >= 0; $i-- ) {
        $result .= $str2[$i];
    }

    return $result;
}
$str1 = "Hello";
$str2 = "world";
echo concatReverse( $str1, $str2 ); 

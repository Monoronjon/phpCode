<?php
//Write a PHP function to check if a string contains only letters and whitespace.
function is_letter_space( $str ) {
    for ( $i = 0; $i < strlen( $str ); $i++ ) {
        if ( !ctype_alpha( $str[$i] ) && !ctype_space( $str[$i] ) ) {
            return false;
        }
    }
    return true;
}
$str = "This is a string with spaces";
echo is_letter_space( $str ); 


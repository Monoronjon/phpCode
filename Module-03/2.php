<?php
//Question: 1+2+3...…….100  Write a loop to calculate the summation of the series
$sum = 0;
for ( $i = 1; $i <= 100; $i++ ) {
    $sum += $i;
}

echo "The summation of the series is {$sum}";
<?php
    $arrayNumber = array(1,3,5,7,9);
    $sum = 0;

    foreach ($arrayNumber as $number) {
    echo $number . "\n";
    $sum += $number;
    }
    
    echo $sum;
?>
<?php

function printArr($numbers) {
    for ($x = 0; $x <= sizeof($numbers)-1; $x++) {
        echo "element: $x of the array is $numbers[$x] <br>";
    }
}

function largest($numbers){
    $currentLargest = PHP_INT_MIN;
    for ($x = 0; $x <= sizeof($numbers) - 1; $x++) {
        if ($numbers[$x] > $currentLargest) $currentLargest = $numbers[$x];
    }
    echo "The largest number is: $currentLargest";
}


function removeDups($numbers){
    echo "<br> Array with no duplicates: <br>";
    print_r(array_unique($numbers));
    }

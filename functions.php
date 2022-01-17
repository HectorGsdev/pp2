<?php

function printArr($numbers) {
    for ($x = 0; $x <= sizeof($numbers)-1; $x++) {
        echo "element: $x of the array is $numbers[$x] <br>";
    }
}
?>

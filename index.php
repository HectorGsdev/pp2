<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Name Hector Gonzalez
// Date 01-16-22
// URL: https://github.com/HectorGsdev/pp2.git
// Pair Programing 2


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Programing 2</title>
</head>
<body>
<h1>Pair Programing 2</h1>
<?php
echo ("Step 1 " ."<br>");
echo("PHP array practice"."<br>");
$numbers=array(7, 9, 8, 9, 8, 8, 6);
printArr($numbers);

function printArr($numbers) {
    for ($x = 0; $x <= sizeof($numbers)-1; $x++) {
        echo "element: $x of the array is $numbers[$x] <br>";
    }
}




?>

</body>
</html>

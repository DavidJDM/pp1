<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 1/14/19
 * Time: 2:18 AM
 */


$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

function printArr($numbers) {
    for ($x = 0; $x < count($numbers); $x++) {
        echo($numbers[$x]);
        echo "<br>";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>
</body>
</html>
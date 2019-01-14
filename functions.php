<?php
/**
 * Created by PhpStorm.
 * User: davidkovalevich
 * Date: 1/14/19
 * Time: 2:38 AM
 */

function printArr($numbers) {
    for ($x = 0; $x < count($numbers); $x++) {
        echo($numbers[$x]);
        echo("<br>");
    }
}

function largest($numbers) {
    echo(max($numbers));
    echo("<br>");
}
<?php


/*
    - init 
    - check condition 
    - update 
*/

$x = 1 ;
while($x <= 5)
{
    echo "<h1> $x </h1>";
    $x++; // 3
}
/************************************/
$x = 6 ;
do {
    echo $x . "<br>";
    $x++; // 3
} while($x <= 5);
<?php
declare(strict_types=1);
//
// variable type is not fixed
$value = 10;
$value = 'hello';
$value = 4.898;

$int = 10;
$text = '15';
$result = $int + $text;
echo $result . "<br>";

function toggleFunction(bool $enable):void {
    echo $enable ? 'true<br>' : 'false<br>';
}

toggleFunction(true);
toggleFunction(false);
toggleFunction(1);
toggleFunction(0);
toggleFunction('false');


function showAge(int $age){
    echo "Your age is " . $age . "<br>";
}

showAge("25 years");


<?php

$number1= 20;
$number2= 40;

$result = ($number1 == $number2) ? "$number1 is equal to $number2" : (($number1 > $number2) ?  "$number1 is greater then $number2": "$number2 is greater then $number1"); 

echo $result;
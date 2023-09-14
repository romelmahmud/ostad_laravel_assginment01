<?php

$number1 = 4;
$number2 = 5;

$result;

$calculation_option = "multiplication";

if($calculation_option == "addition") {
  $result = $number1 + $number2;
} else if($calculation_option == "subtraction") {
  $result = $number1 - $number2;
} else if($calculation_option == "multiplication") {
  $result = $number1 * $number2;
} else if($calculation_option == "division") {
  $result = $number1 / $number2;
}

echo $result;
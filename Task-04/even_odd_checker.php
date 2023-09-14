<?php

$number = 11;
$remainder = $number % 2;

if($number == 0) {
  echo "The number $number is Zero";

} else if ($remainder == 0) {
  echo "The number $number is Even";
}else {
  echo "The number $number is Odd";
}
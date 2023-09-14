<?php

$temperature = 50;
$unite_to_convert= "C";

$converted_temperature;


if($unite_to_convert == "F"){
 $converted_temperature = ($temperature - 32) * 5/9;
 
} else if ($unite_to_convert == "C") {
  $converted_temperature =(($temperature * 9/5) + 32);

}

echo $converted_temperature;
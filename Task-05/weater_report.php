<?php
$temperature = 21;

if($temperature <=0) {
  echo "It's Freezing";
} else if ($temperature > 0 && $temperature <= 20 ){
  echo "It's Cool";
} else {
  echo "It's Warm";
}
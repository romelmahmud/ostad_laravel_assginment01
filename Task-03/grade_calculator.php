<?php

$score1 = 70;
$score2 = 70;
$score3 = 60;

$score_avg = ($score1 + $score2 + $score3 ) / 3;

if($score_avg < 50) {
  echo "Grade F";
} else if ($score_avg >=50 && $score_avg <60) {
  echo "Grade D";
} else if ($score_avg >=60 && $score_avg <70) {
  echo "Grade C";
} else if ($score_avg >=70 && $score_avg <80) {
  echo "Grade B";
}else if ($score_avg >=80) {
  echo "Grade A";
}
 
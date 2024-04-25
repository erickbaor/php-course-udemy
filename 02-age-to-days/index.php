<?php

$test_date = "1995-09-17";
$today = date("Y-m-d");

$diff = strtotime($today) - strtotime($test_date);
$age_in_days = $diff / (60 * 60 * 24);

if ($age_in_days < 1) {
  echo "There is $age_in_days since $test_date";
} else {
  echo "There are $age_in_days since $test_date";
}

?>

<?php

/*
* Problem
* We have a list of people's information with name and age.
* 1 - we want to count the number of adults (+18 years old) and children
* 2 - we want to make a list of people between 22 to 30 who can apply for our job opening
*/

$people = [
  ['name' => 'Joseph', 'age' => 25],
  ['name' => 'Sarah', 'age' => 5],
  ['name' => 'Anne', 'age' => 18],
  ['name' => 'Pratham', 'age' => 23],
  ['name' => 'Simon', 'age' => 30],
  ['name' => 'Amir', 'age' => 28],
  ['name' => 'Sabrina', 'age' => 22],
  ['name' => 'Rana', 'age' => 24],
  ['name' => 'Meet', 'age' => 21],
  ['name' => 'Vitto', 'age' => 24],
  ['name' => 'Rachel', 'age' => 9],
  ['name' => 'Tom', 'age' => 3]
];

$count_people = ['adults' => 0, 'children' => 0];
$eligible_applicants = [];

foreach ($people as $person) {
  if ($person['age'] < 18) {
    $count_people['children'] += 1;
  } else {
    $count_people['adults'] += 1;

    if ($person['age'] >= 22 && $person['age'] <= 30) {
      $eligible_applicants[] = $person;
    }
  }
}

echo "Adults: " . $count_people['adults'] . " / Children: " . $count_people['children'] . PHP_EOL;
echo "\nEligible Applicants" . PHP_EOL;
print_r($eligible_applicants);
?>

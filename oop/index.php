<?php

$person1 = [
  'name' => 'Sam',
  'age' =>33,
  'pets' => [
      'Rock',
      'Boy'
  ]
];

$person2 = [
    'name' => 'Charlie',
    'age' =>35,
    'pets' => [
        'Luigi'
    ]
];



class Person
{
    public $name;
    public $age;
    public $pets;

    public function introduce()
    {
        echo 'Hi, my name is ' . $this->name;
     }
}
// some other file\|/ <- this is down-arrow

$sam = new Person();
$sam->name = 'Sam';

$charlie = new Person();
$charlie->name = 'Charlie';

echo $sam->name;
echo '<br>';
echo $charlie->name;
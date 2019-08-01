<?php


abstract class User
{
private $name;
public $spendTotal;
public $interests;

public function __construct(string $name, int $spendTotal, array $interests = [])
{
$this->name = $name;
$this->spendTotal = $spendTotal;
$this->interests = $interests;
}

public function sayInterests()
{
return 'I like ' . $this->interests[0];
}

public function getName()
{
return $this->name;
}
}
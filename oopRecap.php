<?php

require_once 'User.php';

$dan = new User();

$ben = new User();

$dan->interests = ['sports', 'sports', 'sports'];
$ben->interests = ['mario'];

echo 'Dan says ' . $dan->sayInterests();
echo '<br>';
echo 'Ben says ' . $ben->sayInterests();



//Different file called <User.php>

// Won't work when name is set to private or protected
<?php

class User
{
    private $name;
    public $spendTotal;
    public $interests;

    public function sayInterests()
    {
        return 'I like ' . $this->interests[0];
    }

    public function getName()
    {
        return $this->name;
    }
}
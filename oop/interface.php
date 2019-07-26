<?php

interface feedable   // interface is like a contract. if I implement this, my class must have it too.
{
    public function eat(string $food): string;   //  because this function accepts string param
    //public function walk(): string     -> if you have this as well, eat() and walk() are couple. so you cannot separately use only one of them.
}                                                //  It's better to keep interface small(short).

class Sheep implements feedable
{
    public  function eat(string $food): string    // this has to accept string param as well. otherwise, it throws an error.
    {
        if($food !== 'grass'){
            return 'Mmmm, lovely ' . $food;
        } else {
            return 'Get out of here';
        }
    }
}

class Pig implements feedable
{
    public function eat(string $food): string
    {
        return 'Mmmm, lovely ' . $food;
    }

    public function rollInMud()
    {
        return 'YEEEEAHAH';
    }
}

$sheeply = new Sheep();
$piggly = new Pig();
echo $sheeply->eat('grass');

function makeEat(feedable $farmanimal, string $food):string    //feedable $farmanimal param -> because both Sheep and Pig class implements feedable.
{
    return $farmanimal->eat($food);
}

function rollAround(Pig $pig)
{
    echo $pig->rollInMud();
}

if(rand(0,1) > 0.5) {
    echo makeEat($piggly, 'rocks');
} else {
    echo makeEat($sheeply, 'grass');
}

// Force a class to do something, use interface

//Polymorphism is in this case, $unpicky and $pickey are. They used same interface.
//Polymorphism is instances of classes that are forced to have same methods.
//Polymorphism describes a pattern in Object Oriented Programming in which
// a class has varying functionality while sharing a common interfaces.
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
        // TODO: Implement eat() method.
        return 'Mmmm, lovely ' . $food;
    }
}

$unpicky = new Sheep();
echo $unpicky->eat('grass');

// Force a class to do something, use interface
<?php

namespace App;

interface CanSwim
{
    public function swim();
}

// is a
abstract class Animal
{
    protected $lives;

    public function __construct($lives) {
        $this->lives = $lives;
    }

    abstract public function say();

    abstract public function walk();

    public function howManyLive(){
        echo $this->lives;
    }

    public function breathe()
    {
        echo "im breathing from animal";
    }
}

class Cat extends Animal
{
    public function say()
    {
        echo 'meau';
    }

    public function walk()
    {
        echo "im walking";
    }

    public function purr()
    {
        echo "purr";
    }
}

class Dog extends Animal implements CanSwim
{
    private function toThink()
    {
        echo 'i want to pee';
    }

    public function say()
    {

        echo 'woof';
    }

    public function walk()
    {

        echo "top top";
    }

    public function swim()
    {
        echo 'im swimming';
    }

    public function breathe()
    {
        echo parent::breathe().' heavy breathing';
    }
}



$s = new Dog(1);
$s->howManyLive();

echo "\n";
//
$dog = new Cat(9);
$dog->howManyLive();


function test(Animal $animal)
{
    if (!($animal instanceof CanSwim)) {
        echo "This animal needs to swim, sorry";
        die;
    }

    if ($animal instanceof Cat) {
        $animal->purr();
    } else {
        $animal->say();
    }
}



//test($cat);

echo "\n";

<?php

abstract class AbstractHuman
{
    //...
    abstract function getWork(): Work;

    public function doPersonStuff() {}

    public static function sayHello(){
        echo 'hello from parent';
    }
}


class Person extends AbstractHuman
{
    private string $address;
    private string $phone;
    private string $name;
    private string $lastName;
    private Work $work;

    public function __construct(Work $work, string $name, string $lastName, string $address, string $phone)
    {
        $this->name     = $name;
        $this->lastName = $lastName;
        $this->address  = $address;
        $this->phone    = $phone;
        $this->work     = $work;
    }


    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getWork(): Work
    {
        return $this->work;
    }

    public function setWork(Work $work): void
    {
        $this->work = $work;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }


}

class Work
{
    private string $name;
    private string $position;
    private string $address;
    private string $oktmo;

    public function __construct(string $name, string $position, string $address, string $oktmo)
    {
        $this->name     = $name;
        $this->position = $position;
        $this->address  = $address;
        $this->oktmo    = $oktmo;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): void
    {
        $this->position = $position;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getOktmo(): string
    {
        return $this->oktmo;
    }

    public function setOktmo(string $oktmo): void
    {
        $this->oktmo = $oktmo;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Singleton {
    private static ?Person $person = null;

    public static function getPerson(){
       if(self::$person != null){
           return self::$person;
       }else{
           $person = new Person(new Work('1','1','1','1','1'), '1', '2','1','1');
           self::$person = $person;
           return self::$person;
       }
    }
}

Singleton::getPerson();
//
//$p = new Person();
//$p->salary;
//
//Person::$counter = 5;
//echo Person::$counter;
//Person::sayHello();


echo "\n";

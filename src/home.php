<?php

class CountriesConnector
{
    public function getCountries():array
    {
      // https://zetcode.com/php/pdo/
        // берем из базы страны и через foreach мы делаем массив из новых объектов Country
        // и возвращаем их
        // root root
        // https://www.php.net/manual/ru/book.pdo.php
    }

$dsn = "mysql:host=localhost;dbname=mydb";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();

echo $version[0] . PHP_EOL;

}

class Country {
    // get set
    private $name;
    private $currency;
}



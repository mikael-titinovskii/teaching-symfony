<?php

use App\Superjet100;

require 'vendor/autoload.php';

// тут делайте уже реализацию
$jet = new Superjet100();
$jet->fly();

// Mers
use App\Mercedes;

require 'vendor/autoload.php';

$mers = new Mercedes();
$mers->fast();


// Mers
use App\Yacht;

require 'vendor/autoload.php';

$yacht = new Yacht();
$yacht->swim();


/// других сюда
/// сделйте 1 конструктор
class Mercedes extends Transport implements GoingFast
{
    private function speed()
    {
        echo '300 km\h';
    }

    public function Fuel()
    {
        echo 'diesel';
    }

    public function drive()

    {
        echo parent::drive().'drive fast';
    }
echo "\n";

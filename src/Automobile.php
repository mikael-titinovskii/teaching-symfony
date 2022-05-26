<?php

abstract class Automobile extends Transport
{
    public function getCategory()
    {
        return 'B';
    }

    public function drive()
    {
        echo 'vrum';
    }
}

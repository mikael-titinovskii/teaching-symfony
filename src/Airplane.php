<?php

class Airplane extends Transport
{
    public function takeoff()
    {
        echo "i am taking off";
    }


    public function getCategory()
    {
        return 'M';
    }
}

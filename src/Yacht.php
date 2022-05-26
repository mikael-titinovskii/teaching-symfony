<?php

abstract class Yacht extends Transport implements CanSwim
{

    public function getCategory()
    {
        return 'Y';
    }

    public function swim()
    {
        echo "im swimming";
    }


}

<?php

namespace App\Solid;

class B extends A
{
    public function getResult()
    {
        $result = parent::getResult();

        return 10;
    }
}
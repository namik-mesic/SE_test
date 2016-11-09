<?php

namespace App\Factory;

/**
 * Class Factory
 * @package App\Factory
 */
abstract class Factory
{
    /**
     * @var Object
     */
    protected $lastInstance;

    /**
     * @param $params
     * @return Object
     */
    abstract public function instantiate(...$params);
}
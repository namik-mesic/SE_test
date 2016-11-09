<?php

namespace App\Singleton;

/**
 * Class Singleton
 * @package App\Singleton
 */
abstract class Singleton
{
    /**
     * @var Singleton
     */
    protected static $instance = null;

    /**
     * Single constructor.
     */
    protected function __construct() {}

    /**
     * @param $params
     * @return Singleton
     */
    public static function getInstance(...$params)
    {
        if (!static::$instance)
            static::$instance = new static(...$params);

        return static::$instance;
    }
}
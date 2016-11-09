<?php

namespace App\Container;

use Closure;

/**
 * Class Container
 * @package App\Container
 */
abstract class Container
{
    /**
     * @var array
     */
    protected static $implementations = [];

    /**
     * @param $key
     * @param Closure $implementation
     */
    public static function register($key, Closure $implementation)
    {
        static::$implementations[$key] = $implementation;
    }

    /**
     * @param $key
     * @param Closure $closure
     */
    public static function singleton($key, Closure $closure)
    {
        static::$implementations[$key] = $closure();
    }

    /**
     * @param $key
     * @return mixed
     */
    public static function resolve($key)
    {
        if (isset(static::$implementations[$key]))
            $implementation = static::$implementations[$key];

        else
            return null;

        return $implementation instanceof Closure
            ? $implementation()
            : $implementation;
    }
}
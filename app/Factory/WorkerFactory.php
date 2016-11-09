<?php

namespace App\Factory;

/**
 * Class WorkerFactory
 * @package App\Factory
 */
class WorkerFactory extends Factory
{
    /**
     * @param $params
     * @return Object
     */
    public function instantiate(...$params)
    {
        Worker::$COUNT++;

        return new Worker($params[0], $params[1]);
    }
}
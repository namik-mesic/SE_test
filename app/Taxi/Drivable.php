<?php

namespace App\Taxi;

/**
 * Interface Drivable
 * @package App\Taxi
 */
interface Drivable
{
    /**
     * Determines the weight of the object that can be driven
     *
     * @return double
     */
    public function getWeight();

    /**
     * Determines the size of the object that can be driven
     *
     * @return double
     */
    public function getSize();

    /**
     * Determines the quantity of the object that can be driven
     *
     * @return int
     */
    public function getQuantity();
}
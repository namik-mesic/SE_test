<?php

namespace App\Taxi;

/**
 * Class AbstractTaxi
 * @package App\Taxi
 */
abstract class AbstractTaxi
{
    /**
     * @var Drivable
     */
    protected $drivable;

    /**
     * @var string
     */
    public static $COMMUNICATION_CENTER = 'Ilidza';

    /**
     * @return boolean
     */
    public static function printCommunicationCenter()
    {
        return static::$COMMUNICATION_CENTER;
    }

    /**
     * @return double
     */
    abstract public function perClassMethod();
}

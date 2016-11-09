<?php

namespace App\Taxi;

/**
 * Class Person
 * @package App\Taxi
 */
class Person implements Drivable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var double
     */
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param float $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * Determines the weight of the object that can be driven
     *
     * @return double
     */
    public function getWeight()
    {
        return 100.0;
    }

    /**
     * Determines the size of the object that can be driven
     *
     * @return double
     */
    public function getSize()
    {
        return 5.0;
    }

    /**
     * Determines the quantity of the object that can be driven
     *
     * @return int
     */
    public function getQuantity()
    {
        return 1;
    }
}
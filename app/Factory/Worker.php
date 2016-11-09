<?php

namespace App\Factory;

/**
 * Class Worker
 * @package App\Factory
 */
class Worker
{
    /**
     * @var int
     */
    public static $COUNT = 0;

    /**
     * @var string
     */
    private $name;

    /**
     * @var double
     */
    private $salary;

    /**
     * Worker constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @return float
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param float $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
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
}
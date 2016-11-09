<?php

namespace App\Taxi;

/**
 * Class Student
 * @package App\Taxi
 */
class Student extends Person
{
    /**
     * @var string
     */
    private $university;

    /**
     * Student constructor.
     * @param $name
     * @param $age
     * @param $university
     */
    public function __construct($name, $age, $university)
    {
        parent::__construct($name, $age);

        $this->university = $university;
    }

    /**
     * @return string
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * @param string $university
     */
    public function setUniversity($university)
    {
        $this->university = $university;
    }
}
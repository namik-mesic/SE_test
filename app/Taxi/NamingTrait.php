<?php

namespace App\Taxi;

/**
 * Trait NamingTrait
 * @package App\Taxi
 */
trait NamingTrait
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
<?php

namespace App\Singleton;

/**
 * Class Company
 * @package App\Singleton
 */
class Company extends Singleton
{
    /**
     * @var string
     */
    private $name;

    /**
     * Company constructor.
     * @param $name
     */
    protected function __construct($name)
    {
        $this->name = $name;
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
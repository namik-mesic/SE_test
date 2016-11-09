<?php

namespace App\Taxi;

/**
 * Class AdvancedTaxi
 * @package App\Taxi
 */
class AdvancedTaxi extends AbstractTaxi
{
    use NamingTrait;

    /**
     * @var string
     */
    public static $COMMUNICATION_CENTER = 'Center';

    /**
     * @var Drivable
     */
    protected $drivable;

    /**
     * AdvancedTaxi constructor.
     * @param Drivable $drivable
     */
    public function __construct(Drivable $drivable = null)
    {
        $this->drivable = $drivable;
    }

    /**
     * @return void
     */
    public function drive()
    {
        echo "What's your weight" .
            $this->drivable->getWeight() .
            "What's your size" .
            $this->drivable->getSize() .
            "What's your quantity" .
            $this->drivable->getQuantity();
    }

    /**
     * @return void
     */
    public function leaveObject()
    {
        $this->drivable = null;
    }

    /**
     * @return Drivable
     */
    public function getDrivable()
    {
        return $this->drivable;
    }

    /**
     * @param Drivable $drivable
     */
    public function setDrivable($drivable)
    {
        $this->drivable = $drivable;
    }

    /**
     * @return double
     */
    public function perClassMethod()
    {
        // TODO: Implement perClassMethod() method.
    }
}
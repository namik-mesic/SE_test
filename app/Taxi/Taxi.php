<?php

namespace App\Taxi;

/**
 * Class Taxi
 * @package App\Taxi
 */
class Taxi
{
    /**
     * @var Person|null
     */
    private $person = null;

    /**
     * @var string
     */
    public static $COMMUNICATION_CENTER = 'Ilidza';

    /**
     * @return void
     */
    public function drive()
    {
        echo "What's your name?\n";

        static::$COMMUNICATION_CENTER = 'Centar';

        echo $this->person->getName();

        echo "What's your age?";

        echo $this->person->getAge();

        echo "Are you a student?";

        if ($this->person instanceof Student)
        {
            echo "Yes";

            echo "Where are you studying?";
            echo $this->person->getUniversity();
        }

        else
        {
            echo 'No';
        }
    }

    /**
     * @return bool
     */
    public function isBusy()
    {
        return (bool) $this->person;
    }

    /**
     * @param Person $person
     */
    public function takeGuest(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return void
     */
    public function leaveGuest()
    {
        $this->person = null;
    }
}

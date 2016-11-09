<?php

namespace App\Adapter;

use mysqli_result;

/**
 * Class MySqliResultAdapter
 * @package App\Adapter
 */
class MySqliResultAdapter implements DatabaseResultAdapter
{
    /**
     * @param mysqli_result $resource
     * @return Object[]
     */
    public function adapt($resource)
    {
        $objects = [];

        while($row = $resource->fetch_assoc())
            $objects[] = (object) $row;

        return $objects;
    }
}
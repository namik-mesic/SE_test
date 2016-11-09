<?php

namespace App\Adapter;

/**
 * Class ArrayResultAdapter
 * @package App\Adapter
 */
class ArrayResultAdapter implements DatabaseResultAdapter
{

    /**
     * @param array $resource
     * @return Object[]
     */
    public function adapt($resource)
    {
        $objects = [];

        foreach ($resource as $item)
            $objects[] = (object) $item;

        return $objects;
    }
}
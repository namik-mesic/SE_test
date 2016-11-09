<?php

namespace App\Adapter;

/**
 * Interface DatabaseResultAdapter
 * @package App\Adapter
 */
interface DatabaseResultAdapter
{
    /**
     * @param $resource
     * @return Object[]
     */
    public function adapt($resource);
}
<?php

namespace Illuminator;

/**
 * Time interface
 */
interface TimeInterface
{
    /**
     * Read the time
     *
     * @return float
     */
    public function read() : float;
}

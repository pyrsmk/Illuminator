<?php

namespace Illuminator;

/**
 * Handles a fixed time
 */
final class Time implements TimeInterface
{
    /**
     * The time
     *
     * @var float
     */
    private $time;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->time = microtime(true);
    }

    /**
     * Read the time
     *
     * @return float
     */
    public function read() : float
    {
        return $this->time;
    }
}

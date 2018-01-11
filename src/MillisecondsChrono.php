<?php

namespace Illuminator;

/**
 * Chrono in milliseconds
 */
final class MillisecondsChrono implements TimeInterface
{
    /**
     * The chrono
     *
     * @var Chrono
     */
    private $chrono;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->chrono = new Chrono();
    }

    /**
     * Read the elapsed time in seconds (rounded)
     *
     * @return int
     */
    public function read() : float
    {
        return round($this->chrono->read() * 1000);
    }
}

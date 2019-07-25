<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Chrono base class
 */
final class Chrono implements TimeInterface
{
    /**
     * Start time
     *
     * @var float
     */
    private $time;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->time = new Time();
    }

    /**
     * Read the elapsed time
     *
     * @return float
     */
    public function read() : float
    {
        return (new Time())->read() - $this->time->read();
    }
}

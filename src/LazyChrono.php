<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Chrono base class
 */
final class LazyChrono implements TimeInterface
{
    /**
     * Beginning time
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
     * Read the elapsed time
     *
     * @return float
     */
    public function read() : float
    {
        return microtime(true) - $this->time;
    }

    /**
     * Read the time in MS
     *
     * @return float
     */
    public function readAsMilliseconds() : float
    {
        return round($this->read() * 1000);
    }
}

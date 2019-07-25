<?php

namespace Illuminator;

/**
 * Milliseconds chrono decorator
 */
final class MillisecondsChrono implements TimeInterface
{
    /**
     * The base chrono
     *
     * @var TimeInterface
     */
    private $chrono;

    /**
     * Constructor
     *
     * @param TimeInterface $chrono
     */
    public function __construct(TimeInterface $chrono)
    {
        $this->chrono = $chrono;
    }

    /**
     * Read the elapsed time in seconds
     *
     * @return float
     */
    public function read() : float
    {
        return round($this->chrono->read() * 1000);
    }
}

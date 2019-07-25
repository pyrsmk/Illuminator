<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Seconds chrono decorator
 */
final class SecondsChrono implements TimeInterface
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
     * Read the elapsed time in seconds (rounded)
     *
     * @return float
     */
    public function read() : float
    {
        return round($this->chrono->read());
    }
}

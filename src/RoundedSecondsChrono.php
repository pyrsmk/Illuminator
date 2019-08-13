<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Rounded seconds chrono decorator
 */
final class RoundedSecondsChrono implements TimeInterface
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
     * Start the chrono
     *
     * @return void
     */
    public function start() : void
    {
        $this->chrono->start();
    }

    /**
     * Pause the chrono
     *
     * @return void
     */
    public function stop() : void
    {
        $this->chrono->stop();
    }

    /**
     * Reset the chrono
     *
     * @return void
     */
    public function reset() : void
    {
        $this->chrono->reset();
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

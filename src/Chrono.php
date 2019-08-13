<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Chrono base class
 */
final class Chrono implements ChronoInterface
{
    /**
     * Beginning time
     *
     * @var float
     */
    private $beginning = 0.0;

    /**
     * End time
     *
     * @var float
     */
    private $end = 0.0;

    /**
     * Chrono state
     *
     * @var boolean
     */
    private $started = false;

    /**
     * Start the chrono
     *
     * @return void
     */
    public function start() : void
    {
        if ($this->started === false) {
            if ($this->beginning === 0.0) {
                $this->beginning = microtime(true);
            }
            $this->started = true;
        }
    }

    /**
     * Pause the chrono
     *
     * @return void
     */
    public function stop() : void
    {
        $this->end = microtime(true);
        $this->started = false;
    }

    /**
     * Reset the chrono
     *
     * @return void
     */
    public function reset() : void
    {
        $this->beginning = microtime(true);
        $this->end = microtime(true);
    }

    /**
     * Read the elapsed time
     *
     * @return float
     */
    public function read() : float
    {
        if ($this->started === true) {
            $this->end = microtime(true);
        }
        return $this->end - $this->beginning;
    }
}

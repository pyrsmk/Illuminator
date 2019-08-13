<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Chrono base class
 */
final class TimedTask implements TimeInterface
{
    /**
     * The task
     *
     * @var callable
     */
    private $task;

    /**
     * Constructor
     *
     * @param callable $task
     */
    public function __construct(callable $task)
    {
        $this->task = $task;
    }

    /**
     * Read the elapsed time
     *
     * @return float
     */
    public function read() : float
    {
        $time = microtime(true);
        call_user_func($this->task);
        return microtime(true) - $time;
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

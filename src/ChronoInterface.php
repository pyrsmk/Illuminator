<?php

declare(strict_types=1);

namespace Illuminator;

/**
 * Chrono interface
 */
interface ChronoInterface extends TimeInterface
{
    /**
     * Start the chrono
     *
     * @return void
     */
    public function start() : void;

    /**
     * Pause the chrono
     *
     * @return void
     */
    public function stop() : void;

    /**
     * Stop and reset the chrono
     *
     * @return void
     */
    public function reset() : void;
}

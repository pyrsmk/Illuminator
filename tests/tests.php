<?php

use Symfony\Component\ClassLoader\Psr4ClassLoader;

########################################################### Prepare

error_reporting(E_ALL);

require 'vendor/autoload.php';

$loader = new Psr4ClassLoader;
$loader->addPrefix('Illuminator\\', '../src');
$loader->register();

$suite = new MiniSuite\Suite('Illuminator');

########################################################### Chrono class

$chrono = new Illuminator\Chrono();

$suite->expects('Chrono: read after instanciation')
    ->that($chrono->read())
    ->equals(0.0);

$chrono->start();
usleep(1000000);
$elapsed = $chrono->read();

$suite->expects('Chrono: 1000µs has passed')
    ->that($elapsed)
    ->isGreaterThanOrEqual(0.1);

$suite->expects('Chrono: time format')
    ->that(preg_match('/\d\.\d+/', $elapsed))
    ->equals(1);

$suite->expects('Chrono: MS format')
    ->that(preg_match('/\d{4}/', $chrono->readAsMilliseconds()))
    ->equals(1);

$suite->expects('Chrono: chrono still running')
    ->that($chrono->read())
    ->isGreaterThan($elapsed);

$chrono->reset();

$suite->expects('Chrono: chrono bas been reset')
    ->that($chrono->read())
    ->isLessThan($elapsed);

$chrono->stop();
$elapsed = $chrono->read();
usleep(1000);

$suite->expects('Chrono: chrono has been stopped')
    ->that($chrono->read())
    ->equals($elapsed);

$chrono->start();

$suite->expects('Chrono: chrono time has been resumed')
    ->that($chrono->read())
    ->isGreaterThan($elapsed);

$chrono->stop();
$chrono->reset();

$suite->expects('Chrono: chrono has been stopped and reset')
    ->that($chrono->read())
    ->equals(0.0);

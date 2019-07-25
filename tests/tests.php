<?php

use Symfony\Component\ClassLoader\Psr4ClassLoader;

########################################################### Prepare

error_reporting(E_ALL);

require 'vendor/autoload.php';

$loader = new Psr4ClassLoader;
$loader->addPrefix('Illuminator\\', '../src');
$loader->register();

$suite = new MiniSuite\Suite('Illuminator');

########################################################### Time class

$time = new Illuminator\Time();

$suite->expects('Time: type')
    ->that($time->read())
    ->isFloat();

$suite->expects('Time: format')
    ->that(preg_match('/\d{10}\.\d{1,4}/', $time->read()))
    ->equals(1);

########################################################### Chrono class

$chrono = new Illuminator\Chrono();
sleep(1);

$suite->expects('Chrono: type')
    ->that($chrono->read())
    ->isFloat();

$suite->expects('Chrono: format')
    ->that(preg_match('/\d\.\d+/', $chrono->read()))
    ->equals(1);

########################################################### SecondsChrono class

$chrono = new Illuminator\SecondsChrono(
    new Illuminator\Chrono()
);
sleep(1);

$suite->expects('SecondsChrono: type')
    ->that($chrono->read())
    ->isFloat();

$suite->expects('SecondsChrono: format')
    ->that(preg_match('/\d/', $chrono->read()))
    ->equals(1);

########################################################### MillisecondsChrono class

$chrono = new Illuminator\MillisecondsChrono(
    new Illuminator\Chrono()
);
sleep(1);

$suite->expects('MillisecondsChrono: type')
    ->that($chrono->read())
    ->isFloat();

$suite->expects('MillisecondsChrono: format')
    ->that(preg_match('/\d{4}/', $chrono->read()))
    ->equals(1);

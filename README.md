# Illuminator

A collection of simple chronometers.

## Install

```sh
composer require pyrsmk/illuminator
```

## Illuminator\Chrono

Here's the base chrono.

```php
$chrono = new Illuminator\Chrono();
// Start!
$chrono->start();
// Stop the chrono for some time...
$chrono->stop();
// Resume the chrono
$chrono->start();
// Return the time in seconds
$chrono->read();
// Reset the still running chrono
$chrono->reset();
// Return the reseted time
$chrono->read();
// Completely stop and reset the chrono
$chrono->stop();
$chrono->reset();
```

The time is returned as a [microtime](http://php.net/manual/en/function.microtime.php) float number, in seconds. You can also read it in milliseconds with:

```php
$chrono->readAsMilliseconds();
```

## Illuminator\LazyChrono

A lazy chrono that you don't need to start or whatever.

```php
$chrono = new Illuminator\LazyChrono();
usleep(1000);
$chrono->read();
```

## Illuminator\TimedTask

With that class, you can time a specific task.

```php
$timedTask = new TimedTask(function () {
    usleep(1000);
});
$timedTask->read();
```

Note that the callback will be run each time `read()` is called.

## License

Released under the [MIT license](http://dreamysource.mit-license.org).

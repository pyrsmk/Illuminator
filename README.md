# Illuminator

This is a really simple chronometer.

## Install

```sh
composer require pyrsmk/illuminator
```

## Use

```php
$chrono = new Illuminator\Chrono();
// Some actions...
$chrono->read();
```

The time is returned as a [microtime](http://php.net/manual/en/function.microtime.php) float number (in seconds).

If needed, you can use `SecondsChrono` object to have a result in rounded seconds, or even `MillisecondsChrono`, like so:

```php
$chrono = new Illuminator\MillisecondsChrono(
    new Illuminator\Chrono()
);
// Some actions...
$chrono->read();
```

## License

Released under the [MIT license](http://dreamysource.mit-license.org).

Illuminator 1.0.0
=================

This is a really simple chronometer, designed to be a well designed object.

Install
=======

```
composer require pyrsmk/illuminator
```

Use
===

```
$chrono = new Illuminator\Chrono();

// ...

$chrono->read();
```

The time is returned as a [microtime](http://php.net/manual/en/function.microtime.php) float number (in seconds). If needed, you can use `SecondsChrono` object to have a result in rounded seconds, or even `MillisecondsChrono`.

License
-------

Released under the [MIT license](http://dreamysource.mit-license.org).

Yampee Redis: a PHP library that speaks with Redis!
=============================================================

What is Yampee Redis ?
----------------------------

Yampee Annotations is a PHP library to send command to Redis easily.
It supports many kind of connections, using sockets.

An example ?

``` php
<?php
$redis = new Yampee_Redis_Client();

$redis->set('key', 'value');

if ($redis->has('key')) {
	$redis->get('key');
}
```

Redis
-------------

>Redis is an open source, advanced key-value store. It is often referred to as
>a data structure server since keys can contain strings, hashes, lists, sets and
>sorted sets.

This open source storage system is very useful for cache or very quick storage
needs.

Documentation
-------------

The documentation is to be found in the `doc/` directory.

About
-------

Yampee Redis is licensed under the MIT license (see LICENSE file).
The Yampee Redis library is developed and maintained by the Titouan Galopin.

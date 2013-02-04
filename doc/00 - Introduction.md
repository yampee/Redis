Introduction
============

What is it?
-----------

Yampee Redis is a PHP library that provides a complete Redis client for PHP 5.

Redis is an open source, advanced key-value store. It is often referred to as
a data structure server since keys can contain strings, hashes, lists, sets and
sorted sets. As this system store data as couples of keys/values, you have three
main methods in the client:

``` php
<?php
$redis = new Yampee_Redis_Client();

// Setter
$redis->set('key', 'value');

// Checker
if ($redis->has('key')) {
	// Getter
	$redis->get('key');
}
```

Here, Redis will store a key called `key` with as value `value`. Then, we check
its existence and we get its value, using `has($name)` and `get($name)`.

### Easy to use

There is only one archive to download, and you are ready to go. No
configuration, no installation. Drop the files in a directory and start using
it today in your projects.

### Open-Source

Released under the MIT license, you are free to do whatever you want, even in
a commercial environment. You are also encouraged to contribute.

### Documented

Yampee Redis is fully documented and of course a full API documentation.

### Fast

As Redis is really fast, the client must be as fast as possible to not decrease
Redis performances. Therefore Yampee Redis is fast.

### Easy using commands system

Yampee Redis use a complete system of commands, which let you to send any command
to Redis, even yours (very specific commands for instance).

### Clear error messages

Whenever you have a problem with your Redis server, connection or storage, you will
find the problem quickly with Yampee Redis clear error messages.
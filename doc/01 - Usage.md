Using Yampee Redis
===================

Basic usage
-----------------------

The client is based on the `send()` method, which send a command to Redis.
For instance, to get a valueby its key, you will send a GET command:

``` php
<?php
$redis = new Yampee_Redis_Client();

$redis->send('get', array($key));
```

The first argument is the command name, the other is the list of command arguments.
Here, we need to provide the key name to find it. But for a set command, it will be
something like that:

``` php
<?php
$redis = new Yampee_Redis_Client();

$this->send('set', array($key, $value));
```

Using this `send()` method, you can send every command you want. However, there are
some shortcuts for common commands:

``` php
<?php
$redis = new Yampee_Redis_Client();

$redis->set('key', 'value');
$redis->has('key');
$redis->get('key');
$redis->remove('key');

// You can authenticate on the server:
$redis->authenticate('password');

// You can remove an expiration on a value
$redis->persist('key');

// You can find keys that match a given pattern
$redis->findKeys('pattern');

// You can flush the database (delete all keys)
$redis->flush();

// You can get server stats
$redis->getStats();

// You can configure the server
$redis->getParameter('parameterName');
$redis->setParameter('parameterName', 'parameterValue');

// You can get the database size
$redis->getSize();
```
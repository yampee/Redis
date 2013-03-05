Using Yampee Redis
===================

Basic usage
-----------------------

The client is based on the `send()` method, which send a command to Redis.
For instance, to get a value by its key, you will send a GET command:

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

The lists
-----------------------

Redis let you to use lists in it, but to optimize access times, you are not able to do anything you could want.
Yampee Redis give you some shortcuts for lists.

### Create a list

Create a list is really simple: you add an element in the list, even if it not exists.

``` php
<?php
// Add an element in the list 'mylist', and create it if it does not exists yet
$redis->listPush('mylist', 'value');
```

By default, the value is added on the bottom of the list, but you can change it:

``` php
<?php
// Add an element as first element of the list
$redis->listPush('mylist', 'value', Yampee_Redis_Client::LIST_PUSH_LEFT);
```

### Get elements from a list

You can get a single value:

``` php
<?php
// Get a the value stored in the first index
$redis->listGet('mylist', 0);
```

Or a collection of values:

``` php
<?php
// Get a range of elements from a list (the first to the fifth)
$redis->listGetRange('mylist', 0, 5);
```

### Set elements in a list

You can set a single index:

``` php
<?php
// Change the value stored in 'mylist' at index 0
$redis->listSet('mylist', 0, 'newvalue');
```

### Remove elements from a list

You can remove from left or from right:

``` php
<?php
// Remove the last element in the list 'mylist'
$redis->listPop('mylist');

// Remove the first element in the list 'mylist'
$redis->listPop('mylist', Yampee_Redis_Client::LIST_POP_LEFT);
```

### Get the list length

You can get the list length using:

``` php
<?php
$redis->listLength('mylist');
```
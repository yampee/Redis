<?php

require '../autoloader.php';

$redis = new Yampee_Redis_Client();

// Getters/Setters
$redis->set('key', 'value');

if ($redis->has('key')) {
	$redis->get('key');
}

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

// And for each more specific command, you can use send()
$redis->send($command, $arguments);

<?php

require '../autoloader.php';

$redis = new Yampee_Redis_Client();

$redis->set('key', 'value');

if ($redis->has('key')) {
	$redis->get('key');
}

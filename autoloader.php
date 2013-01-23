<?php

// Yampee Annotations component autoloader

function load($class)
{
	$file = dirname(__FILE__).'/src/'.strtr($class, '_', '/').'.php';

	if (file_exists($file)) {
		require $file;
		return true;
	}
}

spl_autoload_register('load');
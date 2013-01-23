<?php

/*
 * Yampee Components
 * Open source web development components for PHP 5.
 *
 * @package Yampee Components
 * @author Titouan Galopin <galopintitouan@gmail.com>
 * @link http://titouangalopin.com
 */

/**
 * Redis error.
 */
class Yampee_Redis_Exception_Error extends Exception
{
	/**
	 * @var string
	 */
	protected $redisError;

	/**
	 * Constructor
	 *
	 * @param string $redisError
	 */
	public function __construct($redisError)
	{
		$this->redisError = $redisError;

		$this->message = sprintf('Redis error: "%s".', $redisError);
	}

	/**
	 * @return string
	 */
	public function getRedisError()
	{
		return $this->redisError;
	}
}
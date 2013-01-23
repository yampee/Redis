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
 * Connection exception.
 */
class Yampee_Redis_Exception_Connection extends Exception
{
	/**
	 * @var string
	 */
	protected $host;

	/**
	 * @var int
	 */
	protected $port;

	/**
	 * Constructor
	 *
	 * @param string $host
	 * @param int    $port
	 */
	public function __construct($host, $port)
	{
		$this->host = $host;
		$this->port = $port;

		$this->message = sprintf('Unable to connect to Redis at "%s:%s".', $host, $port);
	}

	/**
	 * @return string
	 */
	public function getHost()
	{
		return $this->host;
	}

	/**
	 * @return int
	 */
	public function getPort()
	{
		return $this->port;
	}
}
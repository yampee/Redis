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
 * Yampee_Reddis_Connection represents a Reddis connection.
 */
class Yampee_Redis_Connection
{
	/**
	 * @var resource
	 */
	protected $socket;

	/**
	 * Constructor
	 *
	 * @param string $host
	 * @param int $port
	 * @throws Yampee_Redis_Exception_Connection
	 */
	public function __construct($host = 'localhost', $port = 6379)
	{
		$socket = fsockopen($host, $port, $errno, $errstr);

		if (! $socket) {
			throw new Yampee_Redis_Exception_Connection($host, $port);
		}

		$this->socket = $socket;
	}

	/**
	 * @param $command
	 * @return int
	 */
	public function send($command)
	{
		return fwrite($this->socket, $command);
	}

	/**
	 * @return string
	 */
	public function read()
	{
		return fgets($this->socket);
	}

	/**
	 * @param $position
	 * @return string
	 */
	public function positionRead($position)
	{
		return fread($this->socket, $position);
	}

	/**
	 * @return resource
	 */
	public function getSocket()
	{
		return $this->socket;
	}
}
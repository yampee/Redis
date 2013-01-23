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
 * Command exception.
 */
class Yampee_Redis_Exception_Command extends Exception
{
	/**
	 * @var string
	 */
	protected $command;

	/**
	 * Constructor
	 *
	 * @param string $command
	 */
	public function __construct($command)
	{
		$this->command = $command;

		$this->message = sprintf('Unable to execute command "%s".', $command);
	}

	/**
	 * @return string
	 */
	public function getCommand()
	{
		return $this->command;
	}
}
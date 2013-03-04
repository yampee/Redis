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
 * Test a Reddis connection.
 */
class Yampee_Redis_Test_ClientTest extends PHPUnit_Framework_TestCase
{
	public function testConnection()
	{
		$redis = new Yampee_Redis_Client();
		$redis->connect();

		$redis->set('key', 'value');

		$this->assertTrue($redis->has('key'));
		$this->assertEquals($redis->get('key'), 'value');

		$redis->remove('key');

		$this->assertFalse($redis->has('key'));
	}

	public function testList()
	{
		$redis = new Yampee_Redis_Client();
		$redis->connect();

		$redis->listPush('mylist', 'index0');
		$redis->listPush('mylist', 'index1');
		$redis->listPush('mylist', 'index2');

		$this->assertEquals($redis->listGet('mylist', 0), 'index0');
		$this->assertEquals($redis->listGet('mylist', 1), 'index1');
		$this->assertEquals($redis->listGet('mylist', 2), 'index2');

		$this->assertTrue($redis->has('mylist'));

		$redis->remove('mylist');

		$this->assertFalse($redis->has('mylist'));
	}
}
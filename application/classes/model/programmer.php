<?php defined('SYSPATH') or die('No direct script access.');

/**
*
*/
class Model_Programmer extends ORM
{
	protected $_rules = array(
		'first_name' => array(
			'not_empty' => NULL,
			'min_length' => array(3),
			'max_length' => array(32),
			'regex' => array('/^[-\pL\pN_.]++$/uD'),
		),
		'last_name' => array(
			'not_empty' => NULL,
			'min_length' => array(3),
			'max_length' => array(32),
			'regex' => array('/^[-\pL\pN_.]++$/uD'),
		),
	);

	public function get_all_programmers()
	{
		return true;
	}

	public function get_programmer($id)
	{
		return true;
	}

	public function create_programmer()
	{
		return true;
	}

	public function update_programmer()
	{
		return true;
	}

	public function delete_programmer($id)
	{
		return true;
	}
}

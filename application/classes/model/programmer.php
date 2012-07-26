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
		'weight' => array(
			'min_length' => array(0),
			'max_length' => array(3),
			'digit' => true,
		),
		'height' => array(
			'min_length' => array(0),
			'max_length' => array(3),
			'digit' => true,
		),
	);

	protected $_has_one = array(
		'typing' => array(
			'model' => 'typing',
			'foreign_key' => 'id',
		),
	);

	public function save_programmer($data)
	{
		// First we'll set up the programmer...
		if ($data['update']) {
			$programmer = ORM::factory('programmer', $data['update']);
		} else {
			$programmer = ORM::factory('programmer');
		}

		$programmer->first_name = $data['first_name'];
		$programmer->last_name = $data['last_name'];
		$programmer->height = $data['height'];
		$programmer->weight = $data['weight'];

		// Then their typing statistics
		if ($programmer->type_stats != NULL) {
			$typing = ORM::factory('typing', $programmer->type_stats);
		} else {
			$typing = ORM::factory('typing');
		}

		$typing->wpm = $data['wpm'];
		$typing->keyboard = $data['keyboard'];
		$typing->home_row = (isset($data['home_row']) && $data['home_row']) ? 1 : 0;
		$typing->save();

		$programmer->type_stats = $typing->id;

		$programmer->save();

	}
}

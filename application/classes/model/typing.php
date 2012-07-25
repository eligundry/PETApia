<?php defined('SYSPATH') or die('No direct script access.');

/**
 *
 */
class Model_Typing extends ORM
{
	protected $_belongs_to = array(
		'programmer' => array(
			'foreign_key' => 'id',
		),
	);
}

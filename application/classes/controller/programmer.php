<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Programmer Controller
 */
class Controller_Programmer extends Controller
{
	public function action_index()
	{
		$this->response->body('hello, programmer!');
	}

	public function action_new()
	{
		$this->response->body('create new programmer?');
	}

	public function action_view($id)
	{
		$this->response->body('view programmer');
	}

	public function action_edit($id)
	{
		$this->response->body('edit programmer?');
	}

	public function action_delete($id)
	{
		$this->response->body('delete programmer?');
	}
}

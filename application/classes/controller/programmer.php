<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Programmer Controller
 */
class Controller_Programmer extends Controller
{
	public function action_index()
	{
		$programmers = ORM::factory('programmer')->find_all();

		$view = View::factory('programmer/index')->bind('programmers', $programmers);

		$this->response->body($view->render());
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
	}

	public function action_delete($id)
	{
		$this->response->body('delete programmer?');
	}
}

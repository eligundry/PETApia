<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Programmer Controller
 */
class Controller_Programmer extends Controller_Bootstrap
{
	public function action_index()
	{
		$programmers = ORM::factory('programmer')->find_all();
		$view = View::factory('programmer/index')->bind('programmers', $programmers);

		$this->template->title = "All Programmers";
		$this->template->content = $view;
	}

	public function action_new()
	{
		$view = View::factory('programmer/new');

		$this->template->title = "Create New Programmer";
		$this->template->content = $view;
	}

	public function action_view()
	{
		$programmer = ORM::factory('programmer', $this->request->param('id'));
		$view = View::factory('programmer/view')->bind('programmer', $programmer);

		if ($programmer->type_stats != NULL) {
			$typing = ORM::factory('typing', $programmer->type_stats);
			$view->bind('typing', $typing);
		}

		$this->template->title = $programmer->first_name . " " . $programmer->last_name;
		$this->template->content = $view;
	}

	public function action_edit()
	{
		$programmer = ORM::factory('programmer', $this->request->param('id'));
		$view = View::factory('programmer/edit')->bind('p', $programmer);

		if ($programmer->type_stats != NULL) {
			$typing = ORM::factory('typing', $programmer->type_stats);
		} else {
			$typing = false;
		}

		$view->bind('t', $typing);

		$this->template->title = "Editing " . $programmer->first_name . " " . $programmer->last_name;
		$this->template->content = $view;
	}

	public function action_delete()
	{
		$programmer = ORM::factory('programmer', $this->request->param('id'));
		$view = View::factory('programmer/delete')->bind('programmer', $programmer);

		$this->template->title = "Deleting " . $programmer->first_name . " " . $programmer->last_name;
		$this->template->content = $view;
	}

	public function action_create()
	{
		$programmer = Model::factory('programmer');
		$post = Validation::factory($_POST);

		if ($post->check()) {
			$programmer->save_programmer($post);
			$this->request->redirect('programmer/index');
		}
	}

	public function action_update()
	{
		$post = Validation::factory($_POST);
		$programmer = ORM::factory('programmer', $post['update']);

		if ($post->check()) {
			$programmer->save_programmer($post);
			$this->request->redirect('programmer/index');
		}
	}

	public function action_destroy()
	{
		$programmer = ORM::factory('programmer', $this->request->param('id'));
		$programmer->delete();
		$this->request->redirect('programmer/index');
	}
}

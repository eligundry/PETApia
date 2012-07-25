<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Template Controller for Twitter Bootstrap
 */
class Controller_Bootstrap extends Controller_Template
{
	public $template = 'bootstrap';

	public function before()
	{
		parent::before();

		if ($this->auto_render) {
			$this->template->title = '';
			$this->template->content = '';
			$this->template->styles = array();
			$this->template->scripts = array();
		}
	}

	public function after()
	{
		if ($this->auto_render) {
			$styles = array(
				'css/bootstrap.css',
			);
			$scripts = array(
				'https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js',
				'js/bootstrap.js',
			);

			$this->template->styles = array_merge($this->template->styles, $styles);
			$this->template->scripts = array_merge($this->template->scripts, $scripts);
		}

		parent::after();
	}
}

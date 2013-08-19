<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Analytics extends Controller {

	public function action_index() {
	  $this->template = View::factory('frame');
    $this->template->content = 'hello, world!';
    // $this->response->body('hello, world!');
	}

} // End Welcome

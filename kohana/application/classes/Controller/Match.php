<?php
class Controller_Match extends Controller {
	
	public function action_index() {
		$matches = ORM::factory('match')->find_all();

		$view = View::factory('core/template');
		$view->title = "Matches";
		$view->body = 'matches/index';
		$view->matches = $matches;	
		$this->response->body($view);
	}
}
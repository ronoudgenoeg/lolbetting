<?php
class Controller_Match extends Controller {
	public function action_index() {
		$matches = ORM::factory('match')->find_all();
		foreach($matches as $match){
			echo $match->id;
		}
	}
}
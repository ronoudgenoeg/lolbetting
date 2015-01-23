<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
		$default = Database::instance();
		$users = DB::select()->from('user')->execute() ;
		
		foreach($users as $user){
			echo $user['username'];
		}
		
		$view = View::factory('core/template');
		$view->title = "Welcome!";
		$view->body = 'home/index';
		$view->test = "test";
		
		$this->response->body($view);
	}

}

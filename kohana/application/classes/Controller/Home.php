<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

	public function action_index()
	{
// 		$user = new Model_User();
// 		$user->username = 'Dmagoz';
// 		$user->email = 'ronoudgenoeg@gmail.com';
// 		$user->password = '123';
// 		$user->save();
		
 		$user = ORM::factory('user', 'ronoudgenoeg@gmail.com');
 		if($user->loaded()){
 			$user->username = 'dmagoz_changed';
 			$user->save();
 		}
		
		$view = View::factory('core/template');
		$view->title = "Welcome!";
		$view->body = 'home/index';
		$view->user = $user;
		$view->test = "content";
		
		$this->response->body($view);
	}

}

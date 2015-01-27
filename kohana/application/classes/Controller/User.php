<?php
class Controller_User extends Controller {
	
	public function action_index() {
		$view = View::factory ( 'core/template' );
		$view->body = 'user/index';
		$this->response->body ( $view );
	}
	
	public function action_register() {
		if(isset($_POST['username']) && isset($_POST['email']) &&isset($_POST['password'])){
			
		}
		$view = View::factory ( 'core/template' );
		$view->body = 'user/register';
		$this->response->body ( $view );
	}
	
	
}
<?php
class UsersController extends AppController
{
	var $name = 'Users';
	var $uses = null;
	
	function login() {
		$this->redirect('/users/index');
	}
	
	function logout() {
		$this->redirect('/users/registry');
	}

	function index() {

	}

	function profile() {

	}

	function setting() {
		$this->cakeError('error404');
	}

	function registry() {
		$this->layout = null;
	}
}
?>

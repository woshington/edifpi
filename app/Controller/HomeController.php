<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {
	public function index(){
		if($this->Session->read('Auth.User')){
			$this->redirect(array('controller'=>'inscricaos', 'action'=>'index', 'admin'=>0));
		}
	}
}
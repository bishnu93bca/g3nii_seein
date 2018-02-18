<?php

namespace App\Controller;


use App\Controller\AppController;
use Cake\Network\Session\DatabaseSession;

class UsersController extends AppController{
	
	public function index(){
		 $this->viewBuilder()->layout('defaultview');

	}
	public function view(){

	}
	public function edit(){

	}
	public function delete(){

	}
	public function login(){
		 $this->viewBuilder()->layout('login');
		 if ($this->request->is('post')) {
		 	 $session= $this->request->session();
             if ($users=$this->Users->find('all')->where(['username'=>$this->request->data['username']])->andwhere(['password'=>$this->request->data['password']])->first()){
            	$session->write('user',$users);
            	
                $this->Flash->success(__('Login successful.'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Unable to add your filter.'));
        }

	}


}
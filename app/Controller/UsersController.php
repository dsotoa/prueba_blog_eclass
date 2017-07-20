<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {

            if ($this->Auth->login()) {
                //return $this->redirect($this->Auth->redirectUrl());
                return $this->redirect(array('action' => 'admin_index', 'controller' => 'posts'));
            }

            return $this->redirect(array('action' => 'login'));
            $this->Session->setFlash(__('Invalid username or password, try again'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
?>
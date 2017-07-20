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
                $this->Session->setFlash(__('Usuario guardado'));
                return $this->redirect(array('action' => 'login'));
            }
            $this->Session->setFlash(
                __('Error al guardar el usuario. Inténtelo nuevamente.')
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

            $this->Session->setFlash(__('Usuario y/o contraseña incorréctos.'));
            return $this->redirect(array('action' => 'login'));
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}
?>
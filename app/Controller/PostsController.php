<?php

class PostsController extends AppController {
    public $helpers = array('Html', 'Form', 'Flash');
    public $components = array('Flash');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        $this->set('post', $this->Post->findById($id));
    }

    public function admin_index() {
    	$this->layout = 'admin';
    	$this->set('posts', $this->Post->find('all'));
    }

    public function admin_add() {
    	$this->layout = 'admin';
        if ($this->request->is('post')) {
        	$this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Se ha guardado correctamente.');
                $this->redirect(array('action' => 'admin_index'));
            }
        }
    }

    public function admin_edit($id = null) {
    	$this->layout = 'admin';
	    if (!$id) {
	        throw new NotFoundException(__('Invalid post'));
	    }

	    $post = $this->Post->findById($id);
	    if (!$post) {
	        throw new NotFoundException(__('Invalid post'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Post->id = $id;
	        $this->request->data['Post']['user_id'] = $this->Auth->user('id');
	        if ($this->Post->save($this->request->data)) {
	            $this->Flash->success(__('Se ha modificado correctamente.'));
	            return $this->redirect(array('action' => 'admin_index'));
	        }
	        $this->Flash->error(__('No se ha podido modificar su post. Inténtelo nuevamente.'));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $post;
	    }
	}

	function admin_delete($id) {
	    if (!$this->request->is('post')) {
	        throw new MethodNotAllowedException();
	    }
	    $this->request->data['Post']['user_id'] = $this->Auth->user('id');
	    if ($this->Post->delete($id)) {
	        $this->Flash->success('El post ha sido eliminado.');
	        $this->redirect(array('action' => 'admin_index'));
	    }
	}
}

?>
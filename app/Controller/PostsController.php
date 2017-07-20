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
    	$this->set('posts', $this->Post->find('all'));
    }

    public function admin_add() {

        if ($this->request->is('post')) {
        	$this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success('Your post has been saved.');
                $this->redirect(array('action' => 'admin_index'));
            }
        }
    }

    public function admin_edit($id = null) {

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
	            $this->Flash->success(__('Your post has been updated.'));
	            return $this->redirect(array('action' => 'admin_index'));
	        }
	        $this->Flash->error(__('Unable to update your post.'));
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
	        $this->Flash->success('The post with id: ' . $id . ' has been deleted.');
	        $this->redirect(array('action' => 'admin_index'));
	    }
	}
}

?>
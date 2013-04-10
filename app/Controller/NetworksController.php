<?php
App::uses('AppController', 'Controller');
/**
 * Networks Controller
 *
 * @property Network $Network
 */
class NetworksController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Network->recursive = 0;
		$this->set('networks', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Network->create();
			if ($this->Network->save($this->request->data)) {
				$this->Session->setFlash(__('The network has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The network could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->Network->Status->find('list');
		$this->set(compact('statuses'));
		
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Network->id = $id;
		if (!$this->Network->exists()) {
			throw new NotFoundException(__('Invalid network'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Network->save($this->request->data)) {
				$this->Session->setFlash(__('The network has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The network could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Network->read(null, $id);
		}
		$statuses = $this->Network->Status->find('list');
		$this->set(compact('statuses'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Network->id = $id;
		if (!$this->Network->exists()) {
			throw new NotFoundException(__('Invalid network'));
		}
		if ($this->Network->delete()) {
			$this->Session->setFlash(__('Network deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Network was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function lista () {
		$conditions = array('Status.name' => 'publicado');
		$order = array('Network.name' => 'asc');
        return $this->Network->find('all', array('conditions' => $conditions, 'order' => $order));
	}
}

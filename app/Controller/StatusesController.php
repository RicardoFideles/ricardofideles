<?php
App::uses('AppController', 'Controller');
/**
 * Statuses Controller
 *
 * @property Status $Status
 */
class StatusesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Status->recursive = 0;
		$this->set('statuses', $this->paginate());
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Status->create();
			if ($this->Status->save($this->request->data)) {
				$this->Session->setFlash(__('The status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Status->id = $id;
		if (!$this->Status->exists()) {
			throw new NotFoundException(__('Invalid status'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Status->save($this->request->data)) {
				$this->Session->setFlash(__('The status has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The status could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Status->read(null, $id);
		}
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
		$this->Status->id = $id;
		if (!$this->Status->exists()) {
			throw new NotFoundException(__('Invalid status'));
		}
		if ($this->Status->delete()) {
			$this->Session->setFlash(__('Status deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Status was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

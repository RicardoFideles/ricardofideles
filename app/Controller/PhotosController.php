<?php
App::uses('AppController', 'Controller');
/**
 * Photos Controller
 *
 * @property Photo $Photo
 */
class PhotosController extends AppController {



/**
 * add method
 *
 * @return void
 */
	public function admin_add($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'News','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		}
		$news = $this->Photo->News->find('list', array ('conditions' => array('News.id' => $id)));
		$this->set(compact('news'));
	}
	
	public function admin_add_projeto($id = null) {
		if ($this->request->is('post')) {
			$this->Photo->create();
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'Projects','action' => 'view', $id));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		}
		$projects = $this->Photo->Project->find('list', array ('conditions' => array('Project.id' => $id)));
		$news = $this->Photo->News->find('list');
		
		$this->set(compact('news', 'projects'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null, $idNews = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'News','action' => 'view', $idNews));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Photo->read(null, $id);
		}
		$news = $this->Photo->News->find('list', array ('conditions' => array('News.id' => $idNews)));
		$this->set(compact('news'));
	}
	
	
	public function admin_edit_projeto($id = null, $idProjeto = null) {
		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Photo->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'));
				$this->redirect(array('controller' =>'Projects','action' => 'view', $idProjeto));
			} else {
				$this->Session->setFlash(__('A foto não pode ser salva. Por favor, tente novamente.'));
			}
		} else {
			$this->request->data = $this->Photo->read(null, $id);
		}
		
		$projects = $this->Photo->Project->find('list', array ('conditions' => array('Project.id' => $idProjeto)));
		$news = $this->Photo->News->find('list');
		
		$this->set(compact('news', 'projects'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null, $idNews = null) {

		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Foto apagada com sucesso.'));
			$this->redirect(array('controller' =>'News','action' => 'view', $idNews));
		}
		$this->Session->setFlash(__('Não foi possível apagar a foto.'));
		$this->redirect(array('controller' =>'News','action' => 'view', $idNews));
		
		
	}
	
	public function admin_delete_projeto($id = null, $idProjeto = null) {

		$this->Photo->id = $id;
		if (!$this->Photo->exists()) {
			throw new NotFoundException(__('Foto inválida.'));
		}
		if ($this->Photo->delete()) {
			$this->Session->setFlash(__('Foto apagada com sucesso.'));
			$this->redirect(array('controller' =>'Projects','action' => 'view', $idProjeto));
		}
		$this->Session->setFlash(__('Não foi possível apagar a foto.'));
		$this->redirect(array('controller' =>'Projects','action' => 'view', $idProjeto));
		
		
	}
}

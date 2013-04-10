<?php
App::uses('AppController', 'Controller');
/**
 * NewsTags Controller
 *
 * @property NewsTag $NewsTag
 */
class NewsTagsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->NewsTag->recursive = 0;
		$this->set('newsTags', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->NewsTag->id = $id;
		if (!$this->NewsTag->exists()) {
			throw new NotFoundException(__('Invalid news tag'));
		}
		$this->set('newsTag', $this->NewsTag->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->NewsTag->create();
			if ($this->NewsTag->save($this->request->data)) {
				$this->Session->setFlash(__('The news tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news tag could not be saved. Please, try again.'));
			}
		}
		$news = $this->NewsTag->News->find('list');
		$tags = $this->NewsTag->Tag->find('list');
		$this->set(compact('news', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->NewsTag->id = $id;
		if (!$this->NewsTag->exists()) {
			throw new NotFoundException(__('Invalid news tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->NewsTag->save($this->request->data)) {
				$this->Session->setFlash(__('The news tag has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news tag could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->NewsTag->read(null, $id);
		}
		$news = $this->NewsTag->News->find('list');
		$tags = $this->NewsTag->Tag->find('list');
		$this->set(compact('news', 'tags'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->NewsTag->id = $id;
		if (!$this->NewsTag->exists()) {
			throw new NotFoundException(__('Invalid news tag'));
		}
		if ($this->NewsTag->delete()) {
			$this->Session->setFlash(__('News tag deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('News tag was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function top_tags () {
		$this->NewsTag->recursive = 2;
		
		$tags = $this->NewsTag->find ('all');
		
		var_dump($tags);
		exit;
	}
	
	public function lista ($id = null) {
		
		
		$this->NewsTag->recursive = 2;
		
		$this->paginate = array(
	        'conditions' => array('NewsTag.tag_id' => $id),
	        'limit' => 3
	    );
		$this->set('noticias', $this->paginate());
		
	}
	
}

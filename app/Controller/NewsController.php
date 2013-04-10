<?php
App::uses('AppController', 'Controller');
/**
 * News Controller
 *
 * @property News $News
 */
class NewsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->News->recursive = 0;
		$this->set('news', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		$this->set('news', $this->News->read(null, $id));
		$statuses = $this->News->Status->find('list');
		$tags = $this->News->Tag->find('list');
		$this->set(compact('statuses', 'tags'));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->News->create();
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		}
		$statuses = $this->News->Status->find('list');
		$tags = $this->News->Tag->find('list');
		$this->set(compact('statuses', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->News->save($this->request->data)) {
				$this->Session->setFlash(__('The news has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The news could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->News->read(null, $id);
		}
		$statuses = $this->News->Status->find('list');
		$tags = $this->News->Tag->find('list');
		$this->set(compact('statuses', 'tags'));
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
		$this->News->id = $id;
		if (!$this->News->exists()) {
			throw new NotFoundException(__('Invalid news'));
		}
		if ($this->News->delete()) {
			$this->Session->setFlash(__('News deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('News was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	public function ultimas_noticias () {
		$order = array('News.id' => 'desc');
        return $this->News->find('all', array('limit' => 5, 'order' => $order));
	}
	
	public function slider () {
		$order = array('News.id' => 'desc');
        return $this->News->find('all', array('limit' => 7, 'order' => $order));
	}
	
	public function lista () {
			
		$id = $this->params['page'];    
		
		if (empty($id)) {
			$id = 1;
		}
       
		$this->set(array(
		    'body_class' => 'news'
		));

		$this->News->recursive = 2;

		$this->paginate = array('limit' => 2 , 'page' => $id, 'order' => array('News.id' => 'desc'));

		$noticias = $this->paginate();

		$this->set('noticias', $noticias);
	}
	
	public function lista_dev () {
			
		$id = $this->params['page'];    
		
		if (empty($id)) {
			$id = 1;
		}
       
		$this->set(array(
		    'body_class' => 'desenvolvimento'
		));

		$this->News->recursive = 2;
		
		$this->paginate = array('limit' => 3 , 'page' => $id, 'order' => array('News.id' => 'desc'));

		$noticias = $this->paginate();

		$this->set('noticias', $noticias);
	}
	
	public function view($id = null) {
        
        preg_match('/(?:.*?)\-([0-9]+)\.html$/', $id, $matches);
        
        $id = $matches[1];
        
        $this->News->id = $id;
        if (!$this->News->exists()) {
            throw new NotFoundException(__('Invalid news'));
        }
        
        $noticia = $this->News->read(null, $id);
        
        $title = 'Noticias - ';
        $title .= $noticia['News']['name']; 
        
        $this->set(array(
            'title_for_layout' => $title,
            'isNoticia' => true
        ));
        
        $this->set('noticia', $noticia);
    }
	
}

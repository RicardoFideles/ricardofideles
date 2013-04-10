<?php
App::uses('AppController', 'Controller');
/**
 * Projects Controller
 *
 * @property Project $Project
 */
class ProjectsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Project->recursive = 0;
		$this->set('projects', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		$this->set('project', $this->Project->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Project->create();
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
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
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Project->save($this->request->data)) {
				$this->Session->setFlash(__('The project has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The project could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Project->read(null, $id);
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
		$this->Project->id = $id;
		if (!$this->Project->exists()) {
			throw new NotFoundException(__('Invalid project'));
		}
		if ($this->Project->delete()) {
			$this->Session->setFlash(__('Project deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Project was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	public function lista () {
			
		$id = $this->params['page'];    
		
		if (empty($id)) {
			$id = 1;
		}
       
		$this->set(array(
		    'body_class' => 'portfolio'
		));

		$this->Project->recursive = 2;

		$this->paginate = array('limit' => 8 , 'page' => $id, 'order' => array('Project.id' => 'desc'));

		$projetos = $this->paginate();

		$this->set('projetos', $projetos);
	}
	
	public function view($id = null) {
        
        preg_match('/(?:.*?)\-([0-9]+)\.html$/', $id, $matches);
        
        $id = $matches[1];
        
        $this->Project->id = $id;
        if (!$this->Project->exists()) {
            throw new NotFoundException(__('Invalid news'));
        }
        
        $projeto = $this->Project->read(null, $id);
        
        $title = 'Projetos - ';
        $title .= $projeto['Project']['name']; 
        
        $this->set(array(
            'title_for_layout' => $title,
        ));
        
        $this->set('projeto', $projeto);
    }
}

<?php
App::uses('AppController', 'Controller');
/**
 * EstudiosComplementarios Controller
 *
 * @property EstudiosComplementario $EstudiosComplementario
 * @property PaginatorComponent $Paginator
 */
class EstudiosComplementariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EstudiosComplementario->recursive = 0;
		$this->set('estudiosComplementarios', $this->Paginator->paginate());
	}
        
        public function public_index() {
		$this->EstudiosComplementario->recursive = 0;
		$this->set('estudiosComplementarios', $this->Paginator->paginate());
                $this->layout = 'ajax';
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EstudiosComplementario->exists($id)) {
			throw new NotFoundException(__('Invalid estudios complementario'));
		}
		$options = array('conditions' => array('EstudiosComplementario.' . $this->EstudiosComplementario->primaryKey => $id));
		$this->set('estudiosComplementario', $this->EstudiosComplementario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EstudiosComplementario->create();
			if ($this->EstudiosComplementario->save($this->request->data)) {
				$this->Session->setFlash(__('The estudios complementario has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudios complementario could not be saved. Please, try again.'));
			}
		}
//		$pacientes = $this->EstudiosComplementario->Paciente->find('list');
                $this->EstudiosComplementario->recursive = 0;
		$this->set('estudiosComplementarios', $this->Paginator->paginate());
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EstudiosComplementario->exists($id)) {
			throw new NotFoundException(__('Invalid estudios complementario'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EstudiosComplementario->save($this->request->data)) {
				$this->Session->setFlash(__('The estudios complementario has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudios complementario could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstudiosComplementario.' . $this->EstudiosComplementario->primaryKey => $id));
			$this->request->data = $this->EstudiosComplementario->find('first', $options);
		}
		$pacientes = $this->EstudiosComplementario->Paciente->find('list');
		$this->set(compact('pacientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EstudiosComplementario->id = $id;
		if (!$this->EstudiosComplementario->exists()) {
			throw new NotFoundException(__('Invalid estudios complementario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstudiosComplementario->delete()) {
			$this->Session->setFlash(__('Estudios complementario deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Estudios complementario was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

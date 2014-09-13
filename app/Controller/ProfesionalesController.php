<?php
App::uses('AppController', 'Controller');
/**
 * Profesionales Controller
 *
 * @property Profesionale $Profesionale
 * @property PaginatorComponent $Paginator
 */
class ProfesionalesController extends AppController {

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
		$this->Profesionale->recursive = 0;
		$this->set('profesionales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Profesionale->exists($id)) {
			throw new NotFoundException(__('Invalid profesionale'));
		}
		$options = array('conditions' => array('Profesionale.' . $this->Profesionale->primaryKey => $id));
		$this->set('profesionale', $this->Profesionale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Profesionale->create();
			if ($this->Profesionale->save($this->request->data)) {
				$this->Session->setFlash(__('The profesionale has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesionale could not be saved. Please, try again.'));
			}
		}
		$especialidades = $this->Profesionale->Especialidade->find('list');
		$obrasSociales = $this->Profesionale->ObrasSociale->find('list');
		$this->set(compact('especialidades', 'obrasSociales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Profesionale->exists($id)) {
			throw new NotFoundException(__('Invalid profesionale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Profesionale->save($this->request->data)) {
				$this->Session->setFlash(__('The profesionale has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The profesionale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Profesionale.' . $this->Profesionale->primaryKey => $id));
			$this->request->data = $this->Profesionale->find('first', $options);
		}
		$especialidades = $this->Profesionale->Especialidade->find('list');
		$obrasSociales = $this->Profesionale->ObrasSociale->find('list');
		$this->set(compact('especialidades', 'obrasSociales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Profesionale->id = $id;
		if (!$this->Profesionale->exists()) {
			throw new NotFoundException(__('Invalid profesionale'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Profesionale->delete()) {
			$this->Session->setFlash(__('Profesionale deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Profesionale was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

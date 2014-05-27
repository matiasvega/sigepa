<?php
App::uses('AppController', 'Controller');
/**
 * Patologias Controller
 *
 * @property Patologia $Patologia
 * @property PaginatorComponent $Paginator
 */
class PatologiasController extends AppController {

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
		$this->Patologia->recursive = -1;
		$this->set('patologias', $this->Patologia->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Patologia->exists($id)) {
			throw new NotFoundException(__('Invalid patologia'));
		}
		$options = array('conditions' => array('Patologia.' . $this->Patologia->primaryKey => $id));
		$this->set('patologia', $this->Patologia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Patologia->create();
			if ($this->Patologia->save($this->request->data)) {
				$this->Session->setFlash(__('The patologia has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patologia could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->Patologia->Paciente->find('list');
		$this->set(compact('pacientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Patologia->exists($id)) {
			throw new NotFoundException(__('Invalid patologia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Patologia->save($this->request->data)) {
				$this->Session->setFlash(__('The patologia has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patologia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Patologia.' . $this->Patologia->primaryKey => $id));
			$this->request->data = $this->Patologia->find('first', $options);
		}
		$pacientes = $this->Patologia->Paciente->find('list');
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
		$this->Patologia->id = $id;
		if (!$this->Patologia->exists()) {
			throw new NotFoundException(__('Invalid patologia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Patologia->delete()) {
			$this->Session->setFlash(__('Patologia deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Patologia was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

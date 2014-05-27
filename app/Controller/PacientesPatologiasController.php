<?php
App::uses('AppController', 'Controller');
/**
 * PacientesPatologias Controller
 *
 * @property PacientesPatologia $PacientesPatologia
 * @property PaginatorComponent $Paginator
 */
class PacientesPatologiasController extends AppController {

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
		$this->PacientesPatologia->recursive = 0;
		$this->set('pacientesPatologias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PacientesPatologia->exists($id)) {
			throw new NotFoundException(__('Invalid pacientes patologia'));
		}
		$options = array('conditions' => array('PacientesPatologia.' . $this->PacientesPatologia->primaryKey => $id));
		$this->set('pacientesPatologia', $this->PacientesPatologia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PacientesPatologia->create();
			if ($this->PacientesPatologia->save($this->request->data)) {
				$this->Session->setFlash(__('The pacientes patologia has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pacientes patologia could not be saved. Please, try again.'));
			}
		}
		$patologias = $this->PacientesPatologia->Patologia->find('list');
		$pacientes = $this->PacientesPatologia->Paciente->find('list');
		$tratamientos = $this->PacientesPatologia->Tratamiento->find('list');
		$this->set(compact('patologias', 'pacientes', 'tratamientos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PacientesPatologia->exists($id)) {
			throw new NotFoundException(__('Invalid pacientes patologia'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PacientesPatologia->save($this->request->data)) {
				$this->Session->setFlash(__('The pacientes patologia has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pacientes patologia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PacientesPatologia.' . $this->PacientesPatologia->primaryKey => $id));
			$this->request->data = $this->PacientesPatologia->find('first', $options);
		}
		$patologias = $this->PacientesPatologia->Patologia->find('list');
		$pacientes = $this->PacientesPatologia->Paciente->find('list');
		$tratamientos = $this->PacientesPatologia->Tratamiento->find('list');
		$this->set(compact('patologias', 'pacientes', 'tratamientos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PacientesPatologia->id = $id;
		if (!$this->PacientesPatologia->exists()) {
			throw new NotFoundException(__('Invalid pacientes patologia'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PacientesPatologia->delete()) {
			$this->Session->setFlash(__('Pacientes patologia deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pacientes patologia was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

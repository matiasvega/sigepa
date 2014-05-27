<?php
App::uses('AppController', 'Controller');
/**
 * EspecialidadesProfesionales Controller
 *
 * @property EspecialidadesProfesionale $EspecialidadesProfesionale
 * @property PaginatorComponent $Paginator
 */
class EspecialidadesProfesionalesController extends AppController {

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
		$this->EspecialidadesProfesionale->recursive = 0;
		$this->set('especialidadesProfesionales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EspecialidadesProfesionale->exists($id)) {
			throw new NotFoundException(__('Invalid especialidades profesionale'));
		}
		$options = array('conditions' => array('EspecialidadesProfesionale.' . $this->EspecialidadesProfesionale->primaryKey => $id));
		$this->set('especialidadesProfesionale', $this->EspecialidadesProfesionale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EspecialidadesProfesionale->create();
			if ($this->EspecialidadesProfesionale->save($this->request->data)) {
				$this->Session->setFlash(__('The especialidades profesionale has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidades profesionale could not be saved. Please, try again.'));
			}
		}
		$especialidades = $this->EspecialidadesProfesionale->Especialidade->find('list');
		$profesionales = $this->EspecialidadesProfesionale->Profesionale->find('list');
		$this->set(compact('especialidades', 'profesionales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EspecialidadesProfesionale->exists($id)) {
			throw new NotFoundException(__('Invalid especialidades profesionale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EspecialidadesProfesionale->save($this->request->data)) {
				$this->Session->setFlash(__('The especialidades profesionale has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidades profesionale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EspecialidadesProfesionale.' . $this->EspecialidadesProfesionale->primaryKey => $id));
			$this->request->data = $this->EspecialidadesProfesionale->find('first', $options);
		}
		$especialidades = $this->EspecialidadesProfesionale->Especialidade->find('list');
		$profesionales = $this->EspecialidadesProfesionale->Profesionale->find('list');
		$this->set(compact('especialidades', 'profesionales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EspecialidadesProfesionale->id = $id;
		if (!$this->EspecialidadesProfesionale->exists()) {
			throw new NotFoundException(__('Invalid especialidades profesionale'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EspecialidadesProfesionale->delete()) {
			$this->Session->setFlash(__('Especialidades profesionale deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Especialidades profesionale was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

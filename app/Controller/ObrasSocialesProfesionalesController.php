<?php
App::uses('AppController', 'Controller');
/**
 * ObrasSocialesProfesionales Controller
 *
 * @property ObrasSocialesProfesionale $ObrasSocialesProfesionale
 * @property PaginatorComponent $Paginator
 */
class ObrasSocialesProfesionalesController extends AppController {

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
		$this->ObrasSocialesProfesionale->recursive = 0;
		$this->set('obrasSocialesProfesionales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ObrasSocialesProfesionale->exists($id)) {
			throw new NotFoundException(__('Invalid obras sociales profesionale'));
		}
		$options = array('conditions' => array('ObrasSocialesProfesionale.' . $this->ObrasSocialesProfesionale->primaryKey => $id));
		$this->set('obrasSocialesProfesionale', $this->ObrasSocialesProfesionale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ObrasSocialesProfesionale->create();
			if ($this->ObrasSocialesProfesionale->save($this->request->data)) {
				$this->Session->setFlash(__('The obras sociales profesionale has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The obras sociales profesionale could not be saved. Please, try again.'));
			}
		}
		$obrasSociales = $this->ObrasSocialesProfesionale->ObrasSociale->find('list');
		$profesionales = $this->ObrasSocialesProfesionale->Profesionale->find('list');
		$this->set(compact('obrasSociales', 'profesionales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ObrasSocialesProfesionale->exists($id)) {
			throw new NotFoundException(__('Invalid obras sociales profesionale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ObrasSocialesProfesionale->save($this->request->data)) {
				$this->Session->setFlash(__('The obras sociales profesionale has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The obras sociales profesionale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ObrasSocialesProfesionale.' . $this->ObrasSocialesProfesionale->primaryKey => $id));
			$this->request->data = $this->ObrasSocialesProfesionale->find('first', $options);
		}
		$obrasSociales = $this->ObrasSocialesProfesionale->ObrasSociale->find('list');
		$profesionales = $this->ObrasSocialesProfesionale->Profesionale->find('list');
		$this->set(compact('obrasSociales', 'profesionales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ObrasSocialesProfesionale->id = $id;
		if (!$this->ObrasSocialesProfesionale->exists()) {
			throw new NotFoundException(__('Invalid obras sociales profesionale'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ObrasSocialesProfesionale->delete()) {
			$this->Session->setFlash(__('Obras sociales profesionale deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Obras sociales profesionale was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

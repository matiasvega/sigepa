<?php
App::uses('AppController', 'Controller');
/**
 * PatologiasTratamientos Controller
 *
 * @property PatologiasTratamiento $PatologiasTratamiento
 * @property PaginatorComponent $Paginator
 */
class PatologiasTratamientosController extends AppController {

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
		$this->PatologiasTratamiento->recursive = 0;
		$this->set('patologiasTratamientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PatologiasTratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid patologias tratamiento'));
		}
		$options = array('conditions' => array('PatologiasTratamiento.' . $this->PatologiasTratamiento->primaryKey => $id));
		$this->set('patologiasTratamiento', $this->PatologiasTratamiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PatologiasTratamiento->create();
			if ($this->PatologiasTratamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The patologias tratamiento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patologias tratamiento could not be saved. Please, try again.'));
			}
		}
		$patologias = $this->PatologiasTratamiento->Patologia->find('list');
		$tratamientos = $this->PatologiasTratamiento->Tratamiento->find('list');
		$this->set(compact('patologias', 'tratamientos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PatologiasTratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid patologias tratamiento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PatologiasTratamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The patologias tratamiento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The patologias tratamiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PatologiasTratamiento.' . $this->PatologiasTratamiento->primaryKey => $id));
			$this->request->data = $this->PatologiasTratamiento->find('first', $options);
		}
		$patologias = $this->PatologiasTratamiento->Patologia->find('list');
		$tratamientos = $this->PatologiasTratamiento->Tratamiento->find('list');
		$this->set(compact('patologias', 'tratamientos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PatologiasTratamiento->id = $id;
		if (!$this->PatologiasTratamiento->exists()) {
			throw new NotFoundException(__('Invalid patologias tratamiento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PatologiasTratamiento->delete()) {
			$this->Session->setFlash(__('Patologias tratamiento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Patologias tratamiento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

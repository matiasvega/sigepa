<?php
App::uses('AppController', 'Controller');
/**
 * Tratamientos Controller
 *
 * @property Tratamiento $Tratamiento
 * @property PaginatorComponent $Paginator
 */
class TratamientosController extends AppController {

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
		$this->Tratamiento->recursive = 0;
		$this->set('tratamientos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		$options = array('conditions' => array('Tratamiento.' . $this->Tratamiento->primaryKey => $id));
		$this->set('tratamiento', $this->Tratamiento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tratamiento->create();
			if ($this->Tratamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The tratamiento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tratamiento could not be saved. Please, try again.'));
			}
		}
		$medicaciones = $this->Tratamiento->Medicacione->find('list');
		$patologias = $this->Tratamiento->Patologium->find('list');
		$this->set(compact('medicaciones', 'patologias'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tratamiento->exists($id)) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Tratamiento->save($this->request->data)) {
				$this->Session->setFlash(__('The tratamiento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tratamiento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tratamiento.' . $this->Tratamiento->primaryKey => $id));
			$this->request->data = $this->Tratamiento->find('first', $options);
		}
		$medicaciones = $this->Tratamiento->Medicacione->find('list');
		$patologias = $this->Tratamiento->Patologium->find('list');
		$this->set(compact('medicaciones', 'patologias'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tratamiento->id = $id;
		if (!$this->Tratamiento->exists()) {
			throw new NotFoundException(__('Invalid tratamiento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tratamiento->delete()) {
			$this->Session->setFlash(__('Tratamiento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Tratamiento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Medicaciones Controller
 *
 * @property Medicacione $Medicacione
 * @property PaginatorComponent $Paginator
 */
class MedicacionesController extends AppController {

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
		$this->Medicacione->recursive = 0;
		$this->set('medicaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medicacione->exists($id)) {
			throw new NotFoundException(__('Invalid medicacione'));
		}
		$options = array('conditions' => array('Medicacione.' . $this->Medicacione->primaryKey => $id));
		$this->set('medicacione', $this->Medicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medicacione->create();
			if ($this->Medicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The medicacione has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicacione could not be saved. Please, try again.'));
			}
		}
		$tratamientos = $this->Medicacione->Tratamiento->find('list');
		$this->set(compact('tratamientos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Medicacione->exists($id)) {
			throw new NotFoundException(__('Invalid medicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The medicacione has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Medicacione.' . $this->Medicacione->primaryKey => $id));
			$this->request->data = $this->Medicacione->find('first', $options);
		}
		$tratamientos = $this->Medicacione->Tratamiento->find('list');
		$this->set(compact('tratamientos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Medicacione->id = $id;
		if (!$this->Medicacione->exists()) {
			throw new NotFoundException(__('Invalid medicacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Medicacione->delete()) {
			$this->Session->setFlash(__('Medicacione deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Medicacione was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

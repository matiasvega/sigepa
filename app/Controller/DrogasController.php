<?php
App::uses('AppController', 'Controller');
/**
 * Drogas Controller
 *
 * @property Droga $Droga
 * @property PaginatorComponent $Paginator
 */
class DrogasController extends AppController {

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
		$this->Droga->recursive = 0;
		$this->set('drogas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Droga->exists($id)) {
			throw new NotFoundException(__('Invalid droga'));
		}
		$options = array('conditions' => array('Droga.' . $this->Droga->primaryKey => $id));
		$this->set('droga', $this->Droga->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Droga->create();
			if ($this->Droga->save($this->request->data)) {
				$this->Session->setFlash(__('The droga has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The droga could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Droga->exists($id)) {
			throw new NotFoundException(__('Invalid droga'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Droga->save($this->request->data)) {
				$this->Session->setFlash(__('The droga has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The droga could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Droga.' . $this->Droga->primaryKey => $id));
			$this->request->data = $this->Droga->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Droga->id = $id;
		if (!$this->Droga->exists()) {
			throw new NotFoundException(__('Invalid droga'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Droga->delete()) {
			$this->Session->setFlash(__('Droga deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Droga was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

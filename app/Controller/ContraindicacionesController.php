<?php
App::uses('AppController', 'Controller');
/**
 * Contraindicaciones Controller
 *
 * @property Contraindicacione $Contraindicacione
 * @property PaginatorComponent $Paginator
 */
class ContraindicacionesController extends AppController {

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
		$this->Contraindicacione->recursive = 0;
		$this->set('contraindicaciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contraindicacione->exists($id)) {
			throw new NotFoundException(__('Invalid contraindicacione'));
		}
		$options = array('conditions' => array('Contraindicacione.' . $this->Contraindicacione->primaryKey => $id));
		$this->set('contraindicacione', $this->Contraindicacione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contraindicacione->create();
			if ($this->Contraindicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The contraindicacione has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contraindicacione could not be saved. Please, try again.'));
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
		if (!$this->Contraindicacione->exists($id)) {
			throw new NotFoundException(__('Invalid contraindicacione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Contraindicacione->save($this->request->data)) {
				$this->Session->setFlash(__('The contraindicacione has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contraindicacione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contraindicacione.' . $this->Contraindicacione->primaryKey => $id));
			$this->request->data = $this->Contraindicacione->find('first', $options);
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
		$this->Contraindicacione->id = $id;
		if (!$this->Contraindicacione->exists()) {
			throw new NotFoundException(__('Invalid contraindicacione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Contraindicacione->delete()) {
			$this->Session->setFlash(__('Contraindicacione deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Contraindicacione was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

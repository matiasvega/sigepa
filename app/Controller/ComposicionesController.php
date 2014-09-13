<?php
App::uses('AppController', 'Controller');
/**
 * Composiciones Controller
 *
 * @property Composicione $Composicione
 * @property PaginatorComponent $Paginator
 */
class ComposicionesController extends AppController {

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
		$this->Composicione->recursive = 0;
		$this->set('composiciones', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Composicione->exists($id)) {
			throw new NotFoundException(__('Invalid composicione'));
		}
		$options = array('conditions' => array('Composicione.' . $this->Composicione->primaryKey => $id));
		$this->set('composicione', $this->Composicione->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Composicione->create();
			if ($this->Composicione->save($this->request->data)) {
				$this->Session->setFlash(__('The composicione has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composicione could not be saved. Please, try again.'));
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
		if (!$this->Composicione->exists($id)) {
			throw new NotFoundException(__('Invalid composicione'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Composicione->save($this->request->data)) {
				$this->Session->setFlash(__('The composicione has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composicione could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Composicione.' . $this->Composicione->primaryKey => $id));
			$this->request->data = $this->Composicione->find('first', $options);
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
		$this->Composicione->id = $id;
		if (!$this->Composicione->exists()) {
			throw new NotFoundException(__('Invalid composicione'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Composicione->delete()) {
			$this->Session->setFlash(__('Composicione deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Composicione was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * GruposTerapeuticos Controller
 *
 * @property GruposTerapeutico $GruposTerapeutico
 * @property PaginatorComponent $Paginator
 */
class GruposTerapeuticosController extends AppController {

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
		$this->GruposTerapeutico->recursive = 0;
		$this->set('gruposTerapeuticos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GruposTerapeutico->exists($id)) {
			throw new NotFoundException(__('Invalid grupos terapeutico'));
		}
		$options = array('conditions' => array('GruposTerapeutico.' . $this->GruposTerapeutico->primaryKey => $id));
		$this->set('gruposTerapeutico', $this->GruposTerapeutico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GruposTerapeutico->create();
			if ($this->GruposTerapeutico->save($this->request->data)) {
				$this->Session->setFlash(__('The grupos terapeutico has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupos terapeutico could not be saved. Please, try again.'));
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
		if (!$this->GruposTerapeutico->exists($id)) {
			throw new NotFoundException(__('Invalid grupos terapeutico'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GruposTerapeutico->save($this->request->data)) {
				$this->Session->setFlash(__('The grupos terapeutico has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The grupos terapeutico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GruposTerapeutico.' . $this->GruposTerapeutico->primaryKey => $id));
			$this->request->data = $this->GruposTerapeutico->find('first', $options);
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
		$this->GruposTerapeutico->id = $id;
		if (!$this->GruposTerapeutico->exists()) {
			throw new NotFoundException(__('Invalid grupos terapeutico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GruposTerapeutico->delete()) {
			$this->Session->setFlash(__('Grupos terapeutico deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Grupos terapeutico was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

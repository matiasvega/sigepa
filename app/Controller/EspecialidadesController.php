<?php
App::uses('AppController', 'Controller');
/**
 * Especialidades Controller
 *
 * @property Especialidade $Especialidade
 * @property PaginatorComponent $Paginator
 */
class EspecialidadesController extends AppController {

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
		$this->Especialidade->recursive = 0;
		$this->set('especialidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Especialidade->exists($id)) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		$options = array('conditions' => array('Especialidade.' . $this->Especialidade->primaryKey => $id));
		$this->set('especialidade', $this->Especialidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Especialidade->create();
			if ($this->Especialidade->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos se guardaron correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidade could not be saved. Please, try again.'));
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
		if (!$this->Especialidade->exists($id)) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Especialidade->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos se guardaron correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The especialidade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Especialidade.' . $this->Especialidade->primaryKey => $id));
			$this->request->data = $this->Especialidade->find('first', $options);
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
		$this->Especialidade->id = $id;
		if (!$this->Especialidade->exists()) {
			throw new NotFoundException(__('Invalid especialidade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Especialidade->delete()) {
			$this->Session->setFlash(__('Datos eliminados'), 'flash_ok');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ups! No se pudieron eliminar los datos!'), 'flash_error');
		return $this->redirect(array('action' => 'index'));
	}
}

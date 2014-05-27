<?php
App::uses('AppController', 'Controller');
/**
 * ObrasSociales Controller
 *
 * @property ObrasSociale $ObrasSociale
 * @property PaginatorComponent $Paginator
 */
class ObrasSocialesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(
            'index'  => 48000,
//            'edit'  => 48000,
//            'add'  => 48000,
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ObrasSociale->recursive = 0;
		$this->set('obrasSociales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ObrasSociale->exists($id)) {
			throw new NotFoundException(__('Invalid obras sociale'));
		}
		$options = array('conditions' => array('ObrasSociale.' . $this->ObrasSociale->primaryKey => $id));
		$this->set('obrasSociale', $this->ObrasSociale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ObrasSociale->create();
			if ($this->ObrasSociale->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos se guardaron correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The obras sociale could not be saved. Please, try again.'));
			}
		}
//		$pacientes = $this->ObrasSociale->Paciente->find('list');
//		$profesionales = $this->ObrasSociale->Profesionale->find('list');
		$this->set(compact('pacientes', 'profesionales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ObrasSociale->exists($id)) {
			throw new NotFoundException(__('Invalid obras sociale'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ObrasSociale->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos se guardaron correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The obras sociale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ObrasSociale.' . $this->ObrasSociale->primaryKey => $id));
			$this->request->data = $this->ObrasSociale->find('first', $options);
		}
		$pacientes = $this->ObrasSociale->Paciente->find('list');
		$profesionales = $this->ObrasSociale->Profesionale->find('list');
		$this->set(compact('pacientes', 'profesionales'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ObrasSociale->id = $id;
		if (!$this->ObrasSociale->exists()) {
			throw new NotFoundException(__('Invalid obras sociale'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ObrasSociale->delete()) {
			$this->Session->setFlash(__('Datos eliminados'), 'flash_ok');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Obras sociale was not deleted'), 'flash_error');
		return $this->redirect(array('action' => 'index'));
	}
}

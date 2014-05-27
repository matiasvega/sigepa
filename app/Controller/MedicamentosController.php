<?php
App::uses('AppController', 'Controller');
/**
 * Medicamentos Controller
 *
 * @property Medicamento $Medicamento
 * @property PaginatorComponent $Paginator
 */
class MedicamentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(
//            'index'  => 48000,
//            'viewMedicamento'  => 48000,
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Medicamento->recursive = -1;
		$this->set('medicamentos', $this->Medicamento->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
		$this->set('medicamento', $this->Medicamento->find('first', $options));
	}
        
        public function viewMedicamento($id = null) {
                $this->Medicamento->recursive = 1;
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
		$this->set('medicamento', $this->Medicamento->find('first', $options));
                $this->layout = 'ajax';
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Medicamento->create();
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('The medicamento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicamento could not be saved. Please, try again.'));
			}
		}
		$drogas = $this->Medicamento->Droga->find('list');
		$contraindicaciones = $this->Medicamento->Contraindicacione->find('list');
		$gruposTerapeuticos = $this->Medicamento->GruposTerapeutico->find('list');
		$composiciones = $this->Medicamento->Composicione->find('list');
		$this->set(compact('drogas', 'contraindicaciones', 'gruposTerapeuticos', 'composiciones'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Medicamento->exists($id)) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Medicamento->save($this->request->data)) {
				$this->Session->setFlash(__('The medicamento has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The medicamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Medicamento.' . $this->Medicamento->primaryKey => $id));
			$this->request->data = $this->Medicamento->find('first', $options);
		}
		$drogas = $this->Medicamento->Droga->find('list');
		$contraindicaciones = $this->Medicamento->Contraindicacione->find('list');
		$gruposTerapeuticos = $this->Medicamento->GruposTerapeutico->find('list');
		$composiciones = $this->Medicamento->Composicione->find('list');
		$this->set(compact('drogas', 'contraindicaciones', 'gruposTerapeuticos', 'composiciones'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Medicamento->id = $id;
		if (!$this->Medicamento->exists()) {
			throw new NotFoundException(__('Invalid medicamento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Medicamento->delete()) {
			$this->Session->setFlash(__('Medicamento deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Medicamento was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

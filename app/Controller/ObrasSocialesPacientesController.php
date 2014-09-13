<?php
App::uses('AppController', 'Controller');
/**
 * ObrasSocialesPacientes Controller
 *
 * @property ObrasSocialesPaciente $ObrasSocialesPaciente
 * @property PaginatorComponent $Paginator
 */
class ObrasSocialesPacientesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

        public $cacheAction = array(
            'indexPaciente' => 48000,
//            'index'  => 48000,
//            'edit'  => 48000,
        );
        
        
/**
 * index method
 *
 * @return void
 */
	public function index($idPaciente) {
		$this->ObrasSocialesPaciente->recursive = 0;
		$this->set('obrasSocialesPacientes', $this->Paginator->paginate());
                $this->set('idPaciente', $idPaciente);
                $this->layout = 'ajax';
	}
        
        public function indexPaciente($idPaciente) {
		$this->ObrasSocialesPaciente->recursive = 0;
		$options = array('conditions' => array('ObrasSocialesPaciente.pacientes_id' => $idPaciente));                
                $this->set('obrasSocialesPacientes', $this->ObrasSocialesPaciente->find('all', $options));
                $this->set('idPaciente', $idPaciente);
                $this->layout = 'ajax';
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ObrasSocialesPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid obras sociales paciente'));
		}
		$options = array('conditions' => array('ObrasSocialesPaciente.' . $this->ObrasSocialesPaciente->primaryKey => $id));
		$this->set('obrasSocialesPaciente', $this->ObrasSocialesPaciente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ObrasSocialesPaciente->create();
			if ($this->ObrasSocialesPaciente->save($this->request->data)) {
				$this->Session->setFlash(__('The obras sociales paciente has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The obras sociales paciente could not be saved. Please, try again.'));
			}
		}
		$pacientes = $this->ObrasSocialesPaciente->Paciente->find('list');
		$obrasSociales = $this->ObrasSocialesPaciente->ObrasSociale->find('list');
		$this->set(compact('pacientes', 'obrasSociales'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idPaciente=null) {
		if (!$this->ObrasSocialesPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid obras sociales paciente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (!($this->ObrasSocialesPaciente->save($this->request->data))) {
				$this->Session->setFlash(__('The obras sociales paciente could not be saved. Please, try again.'), 'flash_error');
			}
		} else {
			$options = array('conditions' => array('ObrasSocialesPaciente.' . $this->ObrasSocialesPaciente->primaryKey => $id));
			$this->request->data = $this->ObrasSocialesPaciente->find('first', $options);
		}
		$pacientes = $this->ObrasSocialesPaciente->Paciente->find('list');
		$obrasSociales = $this->ObrasSocialesPaciente->ObrasSociale->find('list');
		$this->set(compact('pacientes', 'obrasSociales'));
                $this->set('idPaciente', $idPaciente);
                $this->layout = 'ajax';
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ObrasSocialesPaciente->id = $id;
		if (!$this->ObrasSocialesPaciente->exists()) {
			throw new NotFoundException(__('Invalid obras sociales paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ObrasSocialesPaciente->delete()) {
			$this->Session->setFlash(__('Datos eliminados'), 'flash_ok');
//			return $this->redirect(array('action' => 'index'));
		} else {
                    $this->Session->setFlash(__('Obras sociales paciente was not deleted', 'flash_ok'));
                }
//		return $this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Diagnosticos Controller
 *
 * @property Diagnostico $Diagnostico
 * @property PaginatorComponent $Paginator
 */
class DiagnosticosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(
//            'add'  => 48000,
            'indexPaciente'  => 48000,
//            'edit'  => 48000,
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Diagnostico->recursive = 0;
		$this->set('diagnosticos', $this->Paginator->paginate());
	}
                
        public function indexPaciente($idPaciente) {
		$this->Diagnostico->recursive = 0;
                $options = array('conditions' => array('Diagnostico.pacientes_id' => $idPaciente));
		$this->set('diagnosticos', $this->Diagnostico->find('all', $options));   
//                dd($this->Diagnostico->find('all', $options));
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
		if (!$this->Diagnostico->exists($id)) {
			throw new NotFoundException(__('Invalid diagnostico'));
		}
		$options = array('conditions' => array('Diagnostico.' . $this->Diagnostico->primaryKey => $id));
		$this->set('diagnostico', $this->Diagnostico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idPaciente) {
		if ($this->request->is('post')) {
			$this->Diagnostico->create();
			if ($this->Diagnostico->save($this->request->data)) {
                                $this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostico could not be saved. Please, try again.'));
			}
		}
//		$pacientes = $this->Diagnostico->Paciente->find('list');
		$this->set("idPaciente", $idPaciente);
                $this->layout = "ajax";
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idPaciente = null) {
		if (!$this->Diagnostico->exists($id)) {
			throw new NotFoundException(__('Invalid diagnostico'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Diagnostico->save($this->request->data)) {
				$this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
//				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The diagnostico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Diagnostico.' . $this->Diagnostico->primaryKey => $id));
			$this->request->data = $this->Diagnostico->find('first', $options);
		}
//		$pacientes = $this->Diagnostico->Paciente->find('list');
                $patologias = ClassRegistry::init('Patologia')->find('list');                
		$this->set(compact('pacientes'));
                $this->set('id', $id);
                $this->set('idPaciente', $idPaciente);
                $this->set('patologias', $patologias);
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
		$this->Diagnostico->id = $id;
		if (!$this->Diagnostico->exists()) {
			throw new NotFoundException(__('Invalid diagnostico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Diagnostico->delete()) {
			$this->Session->setFlash(__('Diagnostico deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Diagnostico was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

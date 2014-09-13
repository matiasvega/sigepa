<?php
App::uses('AppController', 'Controller');
/**
 * ExamenesFisicos Controller
 *
 * @property ExamenesFisico $ExamenesFisico
 * @property PaginatorComponent $Paginator
 */
class ExamenesFisicosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(
//            'add'  => 48000,
            'indexPaciente'  => 48000,
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ExamenesFisico->recursive = 0;
		$this->set('examenesFisicos', $this->Paginator->paginate());
	}
        
        public function indexPaciente($idPaciente) {
                $this->ExamenesFisico->recursive = 0;		                                
                $options = array('conditions' => array('ExamenesFisico.pacientes_id' => $idPaciente));
		$this->set('examenesFisicos', $this->ExamenesFisico->find('all', $options));                                
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
		if (!$this->ExamenesFisico->exists($id)) {
			throw new NotFoundException(__('Invalid examenes fisico'));
		}
		$options = array('conditions' => array('ExamenesFisico.' . $this->ExamenesFisico->primaryKey => $id));
		$this->set('examenesFisico', $this->ExamenesFisico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idPaciente = null) {
		if ($this->request->is('post')) {
			$this->ExamenesFisico->create();
			if ($this->ExamenesFisico->save($this->request->data)) {
				$this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The examenes fisico could not be saved. Please, try again.'), 'flash_error');
			}
		}
//		$pacientes = $this->ExamenesFisico->Paciente->find('list');
		$this->set(compact('idPaciente'));
                $this->layout = 'ajax';
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExamenesFisico->exists($id)) {
			throw new NotFoundException(__('Invalid examenes fisico'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ExamenesFisico->save($this->request->data)) {
				$this->Session->setFlash(__('The examenes fisico has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The examenes fisico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExamenesFisico.' . $this->ExamenesFisico->primaryKey => $id));
			$this->request->data = $this->ExamenesFisico->find('first', $options);
		}
		$pacientes = $this->ExamenesFisico->Paciente->find('list');
		$this->set(compact('pacientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ExamenesFisico->id = $id;
		if (!$this->ExamenesFisico->exists()) {
			throw new NotFoundException(__('Invalid examenes fisico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExamenesFisico->delete()) {
			$this->Session->setFlash(__('Examenes fisico deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Examenes fisico was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}                
        
}

<?php
App::uses('AppController', 'Controller');
/**
 * Antecedentes Controller
 *
 * @property Antecedente $Antecedente
 * @property PaginatorComponent $Paginator
 */
class AntecedentesController extends AppController {

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
		$this->Antecedente->recursive = 0;
		$this->set('antecedentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Antecedente->exists($id)) {
			throw new NotFoundException(__('Invalid antecedente'));
		}
		$options = array('conditions' => array('Antecedente.' . $this->Antecedente->primaryKey => $id));
		$this->set('antecedente', $this->Antecedente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idPaciente = null) {
		if ($this->request->is('post')) {
			$this->Antecedente->create();
			if ($this->Antecedente->save($this->request->data)) {
				$this->Session->setFlash(__('The antecedente has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The antecedente could not be saved. Please, try again.'));
			}
		}
//		$pacientes = $this->Antecedente->Paciente->find('list');
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
//		if (!$this->Antecedente->exists($id)) {
//			throw new NotFoundException(__('Invalid antecedente'));
//		}
                
//                $this->autoRender=false; 
//                if ($this->Antecedente->RequestHandler->isAjax()) { 
//                    Configure::write('debug', 0);                     
//                } 
                
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Antecedente->save($this->request->data)) {
                                $lastId = $this->Antecedente->getLastInsertId();
				$this->Session->setFlash(__('The antecedente has been saved'));
				return $this->redirect('/consultas/add/');
			} else {
				$this->Session->setFlash(__('The antecedente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Antecedente.' . $this->Antecedente->primaryKey => $id));
			$this->request->data = $this->Antecedente->find('first', $options);
		}
//		$pacientes = $this->Antecedente->Paciente->find('list');
//		$this->set(compact('pacientes'));
                                                                
//                if(!empty($this->data)) { 
//                    if($this->Tutor->save($this->data)) {
//                        echo 'Record has been added';                         
//                    } else { 
//                        echo 'Error while adding record';                         
//                    }
//                }
                
                $this->layout = 'ajax';
                $this->set('idPaciente', $id);
                
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Antecedente->id = $id;
		if (!$this->Antecedente->exists()) {
			throw new NotFoundException(__('Invalid antecedente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Antecedente->delete()) {
			$this->Session->setFlash(__('Antecedente deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Antecedente was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

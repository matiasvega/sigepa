<?php
App::uses('AppController', 'Controller');
/**
 * Pacientes Controller
 *
 * @property Paciente $Paciente
 * @property PaginatorComponent $Paginator
 */
class PacientesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler', 'Mpdf');
        
        public $cacheAction = array(
//            'add' => 48000,
            'index'  => 48000,
//            'edit'  => 48000,
            'ficha'  => 48000,
//            'antecedentes'  => 48000
        );
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paciente->recursive = 0;
                $pacientes = $this->Paciente->find('all');
		$this->set('pacientes', $pacientes);
	}
        
/**
 * search method
 *
 * @throws NotFoundException
 * @param string $value
 * @return void
 */
	public function search($value = null) {
                $this->Paciente->recursive = 0;
		$options = array('conditions' => array('OR' => array(
                                                                        'Paciente.nombre LIKE' => sprintf('%%%s%%', $value),
                                                                        'Paciente.apellido LIKE' => sprintf('%%%s%%', $value),
                                                                    ) 
                                                        )
                                );
		$this->set('pacientes', $this->Paciente->find('all', $options));
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
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
		$this->set('paciente', $this->Paciente->find('first', $options));
                $this->layout = 'ajax';
	}

        
        
	public function ficha($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
		$this->set('paciente', $this->Paciente->find('first', $options));
                if ($this->params['isAjax']) {
                    $this->layout = 'ajax';
                }                
	}
               
        public function antecedentes($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
//                        dd($this->request->data);
			if ($this->Paciente->save($this->request->data)) {
//				$this->Session->setFlash(__('The paciente has been saved'));
//				return $this->redirect(array('action' => 'index'));
			} else {
//				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id));
			$this->request->data = $this->Paciente->find('first', $options);
		}

                $this->set('idPaciente', $id);
                $this->layout = 'ajax';
		
	}
        

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paciente->create();
                        
                        $this->request->data['Paciente']['fechaNacimiento'] = fechaDb($this->request->data['Paciente']['fechaNacimiento']);
//                        dd($this->request->data);
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
				return $this->redirect(array('controller' => 'pacientes' , 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'), 'flash_error');
			}
		}
                $obrasSociales = $this->Paciente->ObrasSociale->find('list');
//		$estudiosComplementarios = $this->Paciente->EstudiosComplementario->find('list');		
//		$patologias = $this->Paciente->Patologia->find('list');
//		$this->set(compact('estudiosComplementarios', 'obrasSociales', 'patologias'));
                $this->set(compact('obrasSociales'));
                if ($this->params['isAjax']) {
                    $this->layout = 'ajax';
                }                
	}
        
        
        public function addExpress() {
		if ($this->request->is('post')) {
			$this->Paciente->create();
			if ($this->Paciente->save($this->request->data)) {
//				$this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
//				return $this->redirect(array('controller' => 'pacientes' , 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'), 'flash_error');
			}
		}
                $obrasSociales = $this->Paciente->ObrasSociale->find('list');
//		$estudiosComplementarios = $this->Paciente->EstudiosComplementario->find('list');		
//		$patologias = $this->Paciente->Patologia->find('list');
//		$this->set(compact('estudiosComplementarios', 'obrasSociales', 'patologias'));
                $this->set(compact('obrasSociales'));
//                if ($this->params['isAjax']) {
                    $this->layout = 'ajax';
//                }                
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Paciente->exists($id)) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        $this->request->data['Paciente']['fechaNacimiento'] = fechaDb($this->request->data['Paciente']['fechaNacimiento']);                        
			if ($this->Paciente->save($this->request->data)) {
				$this->Session->setFlash(__('Datos guardados correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array(
                                'conditions' => array('Paciente.' . $this->Paciente->primaryKey => $id),
                                'recursive' => 1,
                                        );
                            
			$this->request->data = $this->Paciente->find('first', $options);
                        $this->request->data['Paciente']['fechaNacimiento'] = fecha($this->request->data['Paciente']['fechaNacimiento']);
                        
                        $obrasSocialesPaciente = Set::classicExtract($this->request->data, 'ObrasSociale.{n}.id');
                        
		}
//		$estudiosComplementarios = $this->Paciente->EstudiosComplementario->find('list');
		$obrasSociales = $this->Paciente->ObrasSociale->find('list');                
//		$patologias = $this->Paciente->Patologium->find('list');
//                $patologias = null;
//		$this->set(compact('estudiosComplementarios', 'obrasSociales', 'patologias'));
                $this->set(compact('obrasSociales', 'obrasSocialesPaciente'));
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
		$this->Paciente->id = $id;
		if (!$this->Paciente->exists()) {
			throw new NotFoundException(__('Invalid paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Paciente->delete()) {
			$this->Session->setFlash(__('Los datos fueron eliminados'), 'flash_ok');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Paciente was not deleted'), 'flash_error');
		return $this->redirect(array('action' => 'index'));
	}
        
        public function testpdf() { 
            $this->layout = 'ajax';
            // initializing mPDF
            
            $this->Mpdf->init();
            
            // setting filename of output pdf file
            $this->Mpdf->setFilename('file.pdf'); 

            // setting output to I, D, F, S
//            $this->Mpdf->setOutput('I');
            $this->Mpdf->setOutput('D');

            // you can call any mPDF method via component, for example:
//            $this->Mpdf->SetWatermarkText("Draft"); 
            $this->Mpdf->Bookmark('Start of the document');
            $this->Mpdf->WriteHTML('<p>Hallo World</p> <div> <b> xxxxxxxxxxxxxx </b> </div>');
            

        }               
        
}

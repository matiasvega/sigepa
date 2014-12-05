<?php
App::uses('AppController', 'Controller');
/**
 * EstudiosComplementariosPacientes Controller
 *
 * @property EstudiosComplementariosPaciente $EstudiosComplementariosPaciente
 * @property PaginatorComponent $Paginator
 */
class EstudiosComplementariosPacientesController extends AppController {

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
		$this->EstudiosComplementariosPaciente->recursive = 0;
		$this->set('estudiosComplementariosPacientes', $this->Paginator->paginate());
	}
        
        public function indexPaciente($idPaciente) {
		$this->EstudiosComplementariosPaciente->recursive = 0;		                                
                $options = array('conditions' => array('EstudiosComplementariosPaciente.pacientes_id' => $idPaciente));
		$this->set('estudiosComplementariosPacientes', $this->EstudiosComplementariosPaciente->find('all', $options));                        $this->set('idPaciente', $idPaciente);
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
		if (!$this->EstudiosComplementariosPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid estudios complementarios paciente'));
		}
		$options = array('conditions' => array('EstudiosComplementariosPaciente.' . $this->EstudiosComplementariosPaciente->primaryKey => $id));
		$this->set('estudiosComplementariosPaciente', $this->EstudiosComplementariosPaciente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idPaciente) {
		if ($this->request->is('post')) {
			$this->EstudiosComplementariosPaciente->create();
			if ($this->EstudiosComplementariosPaciente->save($this->request->data)) {
//				$this->Session->setFlash(__('Datos guardados correctamente'), 'flash_ok');
//				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudios complementarios paciente could not be saved. Please, try again.'));
			}
		}
//		$estudiosComplementariosSolicitados = ClassRegistry::init('EstudiosComplementario')->find('all');
                $estudiosComplementarios = ClassRegistry::init('EstudiosComplementario')->find('list');
//                d($estudiosComplementarios);
		$this->set(compact('estudiosComplementarios', 'idPaciente'));
                $this->layout = 'ajax';
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idPaciente = null) {
		if (!$this->EstudiosComplementariosPaciente->exists($id)) {
			throw new NotFoundException(__('Invalid estudios complementarios paciente'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {                       
                        $archivoAdjunto = $this->request->data['EstudiosComplementariosPaciente']['adjunto']['name'];
                        move_uploaded_file($this->request->data['EstudiosComplementariosPaciente']['adjunto']["tmp_name"], WWW_ROOT . DS . 'files' . DS . $archivoAdjunto);
                                                
                        $this->request->data['EstudiosComplementariosPaciente']['adjunto'] = $archivoAdjunto;
                        $this->request->data['EstudiosComplementariosPaciente']['fechaRealizado'] = fechaDb($this->request->data['EstudiosComplementariosPaciente']['fechaRealizado']);
//                        echo "console.log(". $this->request->data .")";
//                        dd($this->request->data);
                        
			if ($this->EstudiosComplementariosPaciente->save($this->request->data)) {
//				$this->Session->setFlash(__('The estudios complementarios paciente has been saved'));
//				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estudios complementarios paciente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EstudiosComplementariosPaciente.' . $this->EstudiosComplementariosPaciente->primaryKey => $id));
			$this->request->data = $this->EstudiosComplementariosPaciente->find('first', $options);
                        if ($this->request->data['EstudiosComplementariosPaciente']['fechaRealizado']) {
                            $this->request->data['EstudiosComplementariosPaciente']['fechaRealizado'] = fecha($this->request->data['EstudiosComplementariosPaciente']['fechaRealizado']);
                        } else {
                            $this->request->data['EstudiosComplementariosPaciente']['fechaRealizado'] = date('d-m-Y');
                        }
                        
		}
		$pacientes = $this->EstudiosComplementariosPaciente->Paciente->find('list');
		$estudiosComplementarios = $this->EstudiosComplementariosPaciente->EstudiosComplementario->find('list');
		$this->set(compact('pacientes', 'estudiosComplementarios'));
                $this->set('id', $id);
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
		$this->EstudiosComplementariosPaciente->id = $id;
		if (!$this->EstudiosComplementariosPaciente->exists()) {
			throw new NotFoundException(__('Invalid estudios complementarios paciente'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EstudiosComplementariosPaciente->delete()) {
//                        $this->Session->setFlash(__('Los datos fueron eliminados'), 'flash_ok');
//			return $this->redirect(array('action' => 'index'));
		} else {
                        $this->Session->setFlash(__('Error al intentar eliminar los datos, comuniquese con el administrador del sistema'), 'flash_error');    
                }
		$this->layout = 'ajax';
		//return $this->redirect(array('action' => 'index'));
	}
        
        public function download($file, $estudio, $id) {
            $this->viewClass = 'Media';
            $name = strtolower(str_replace(' ', '_', $estudio)) . '_' . $id;
            // Download app/outside_webroot_dir/example.zip
            $params = array(
                'id'        => $file,
                'name'      => $name,
                'download'  => true,
//                'extension' => 'zip',
                'path'      => WWW_ROOT . 'files' . DS
            );
            $this->set($params);
        }
        
        
        
}

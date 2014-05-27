<?php
App::uses('AppController', 'Controller');
/**
 * Recetas Controller
 *
 * @property Receta $Receta
 * @property PaginatorComponent $Paginator
 */
class RecetasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(
//            'add'  => 48000,
            'indexPaciente'  => 48000,
//            'getMedicamentos'  => 48000,
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Receta->recursive = 0;
		$this->set('recetas', $this->Paginator->paginate());
	}
        
        public function indexPaciente($idPaciente) {
		$this->Receta->recursive = 0;
                $options = array('conditions' => array('Receta.pacientes_id' => $idPaciente));
		$this->set('recetas', $this->Receta->find('all', $options));   
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
		if (!$this->Receta->exists($id)) {
			throw new NotFoundException(__('Invalid receta'));
		}
		$options = array('conditions' => array('Receta.' . $this->Receta->primaryKey => $id));
		$this->set('receta', $this->Receta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($idPaciente) {
		if ($this->request->is('post')) {
			$this->Receta->create();
			if ($this->Receta->save($this->request->data)) {
//				$this->Session->setFlash(__('The receta has been saved'));
//				return $this->redirect(array('action' => 'index'));
			} else {
//				$this->Session->setFlash(__('The receta could not be saved. Please, try again.'));
			}
		}
//		$pacientes = $this->Receta->Paciente->find('list');
//		$medicamentos = $this->Receta->Medicamento->find('list');
//                d($medicamentos);
//		$this->set(compact('pacientes', 'medicamentos'));
                $gruposTerapeuticos = ClassRegistry::init('GruposTerapeutico')->find('list');
                $drogas = ClassRegistry::init('Droga')->find('list');
                
                $this->set(compact('gruposTerapeuticos', 'drogas'));
                
                $this->set("idPaciente", $idPaciente);
                $this->layout = "ajax";
	}
        
        public function getMedicamentos($grupoTerapeutico = null, $droga = null) {

            if (!empty($grupoTerapeutico)) {
                $where['OR']['Medicamento.grupos_terapeuticos_id'] = $grupoTerapeutico;
            } 
            
            if (!empty($droga)) {
                $where['OR']['Medicamento.drogas_id'] = $droga;
            }
            
//            d($where);
            
            $medicamentos = ClassRegistry::init('Medicamento')->find('list', array(
                                    'conditions' => $where,
                                     'recursive' => 0,
                                                                        )
                                                        );
//            d($medicamentos);

            $medicamentos = json_encode($medicamentos);
//            d($medicamentos);                                             
            
            $this->set("medicamentos", $medicamentos);
            $this->layout = "ajax";
        }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Receta->exists($id)) {
			throw new NotFoundException(__('Invalid receta'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Receta->save($this->request->data)) {
				$this->Session->setFlash(__('The receta has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Receta.' . $this->Receta->primaryKey => $id));
			$this->request->data = $this->Receta->find('first', $options);
		}
		$pacientes = $this->Receta->Paciente->find('list');
		$medicamentos = $this->Receta->Medicamento->find('list');
		$this->set(compact('pacientes', 'medicamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Receta->id = $id;
		if (!$this->Receta->exists()) {
			throw new NotFoundException(__('Invalid receta'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Receta->delete()) {
			$this->Session->setFlash(__('Receta deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Receta was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

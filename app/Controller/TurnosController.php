<?php
App::uses('AppController', 'Controller');
/**
 * Turnos Controller
 *
 * @property Turno $Turno
 * @property PaginatorComponent $Paginator
 */
class TurnosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(            
//            'index'  => 48000,
//            'agendaDiaria'  => 48000,
        );

/**
 * index method
 *
 * @return void
 */
	public function index() {
                $especialidades = ClassRegistry::init('Especialidade')->find('list');
//                d($especialidades);
                $this->set('especialidades', $especialidades);
                $profesionales = ClassRegistry::init('Profesionale')->find('list');
//                d($profesionales);
                $this->set('profesionales', $profesionales);
            
		$this->Turno->recursive = 0;
                $turnos = $this->Turno->find('all');
                
                $this->set('turnos', $turnos);

                
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Turno->exists($id)) {
			throw new NotFoundException(__('Invalid turno'));
		}
		$options = array('conditions' => array('Turno.' . $this->Turno->primaryKey => $id));
		$this->set('turno', $this->Turno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($dia, $mes, $anio, $especialidad, $profesional) {
                if ($mes < 10) {
                    $mes = sprintf('0%s', $mes+1);
                }
                        
		if ($this->request->is('post')) {
			$this->Turno->create();
                        
                        $data['Turno']['pacientes_id'] = $this->request->data['Turno']['idPaciente'];
                        $data['Turno']['profesionales_id'] = $this->request->data['Turno']['idProfesional'];
                        $data['Turno']['especialidades_id'] = $this->request->data['Turno']['idEspecialidad'];                        
//                        d($dia);
//                        d($mes);
//                        d($anio);
//                        d($this->request->data['Turno']['hora']);
                        $fechaHora = new DateTime(sprintf("%s-%s-%s %s:00", $anio, $mes+1, $dia, 
                        $this->request->data['Turno']['hora']));
                        d($fechaHora);
                        d($fechaHora->date);
                        $data['Turno']['fechaHora'] = $fechaHora->date;
                        
                        $this->request->data = $data;
//                        dd($this->request->data);
                        
			if ($this->Turno->save($this->request->data)) {
//                                dd('xxx');
				$this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turno could not be saved. Please, try again.'));
			}
		}
               
		$pacientes = $this->Turno->Paciente->find('all', array(
                    'recursive' => 0,
                    'fields' => array('Paciente.id', 'Paciente.nombre', 'Paciente.apellido', 'Paciente.dni'),
                ));
                
                $aux = array();
                foreach ($pacientes as $paciente) {
                    $aux[$paciente['Paciente']['id']] = sprintf('%s, %s - DNI: %s', $paciente['Paciente']['nombre'], $paciente['Paciente']['apellido'], $paciente['Paciente']['dni']);
                }
                $pacientes = $aux;

//		$profesionales = $this->Turno->Profesionale->find('list');
//		$especialidades = $this->Turno->Especialidade->find('list');
		$this->set(compact('pacientes', 'profesional', 'especialidad', 'dia', 'mes', 'anio'));
                $this->layout = 'ajax';
//                dd('xxx');
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Turno->exists($id)) {
			throw new NotFoundException(__('Invalid turno'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                        $data['Turno']['id'] = $id;
                        $data['Turno']['pacientes_id'] = $this->request->data['Turno']['idPaciente'];
                        $data['Turno']['profesionales_id'] = $this->request->data['Turno']['idProfesional'];
                        $data['Turno']['especialidades_id'] = $this->request->data['Turno']['idEspecialidad'];       
                        $anio = $this->request->data['Turno']['anio'];
                        $mes = $this->request->data['Turno']['mes'];
                        $dia = $this->request->data['Turno']['dia'];
                        $hora = $this->request->data['Turno']['hora'];
                                                       
                        $fechaHora = new DateTime(sprintf("%s-%s-%s %s:00", trim($anio), trim($mes), trim($dia), trim($hora)));
                        d($fechaHora);
                        $data['Turno']['fechaHora'] = $fechaHora->date;

                        $this->request->data = $data;
                        
			if ($this->Turno->save($this->request->data)) {
				$this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The turno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Turno.' . $this->Turno->primaryKey => $id));
			$this->request->data = $this->Turno->find('first', $options);
		}
                
                $pacientes = $this->Turno->Paciente->find('all', array(
                    'recursive' => 0,
                    'fields' => array('Paciente.id', 'Paciente.nombre', 'Paciente.apellido', 'Paciente.dni'),
                ));
                
                $aux = array();
                foreach ($pacientes as $paciente) {
                    $aux[$paciente['Paciente']['id']] = sprintf('%s, %s - DNI: %s', $paciente['Paciente']['nombre'], $paciente['Paciente']['apellido'], $paciente['Paciente']['dni']);
                }
                $pacientes = $aux;
                                
		$profesionales = $this->Turno->Profesionale->find('list');
		$especialidades = $this->Turno->Especialidade->find('list');
		$this->set(compact('pacientes', 'profesionales', 'especialidades'));
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
		$this->Turno->id = $id;
		if (!$this->Turno->exists()) {
			throw new NotFoundException(__('Invalid turno'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Turno->delete()) {
//			$this->Session->setFlash(__('Turno deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Turno was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
        
        public function agendaDiaria() {		                        
                $this->Turno->recursive = 0;
                $turnos = $this->Turno->find('all', array(
                        'conditions' => array('date(Turno.fechaHora)' => date('Y-m-d')),
                    ));
                if (!empty($turnos)) {
//                    dd($turnos);
                    $this->set('turnos', $turnos);
                } else {
                    $this->Session->setFlash(__('No se encontraron turnos registrados en la agenda diaria el dia ' . date('d-m-Y') . '.'), 'flash_error');
                    return $this->redirect(array(
                                                'action' => 'index'
                                                )
                                            );
                }
	}
        
        
}

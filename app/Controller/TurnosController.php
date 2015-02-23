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
                
//                $responses = file_get_contents('/var/www/html/devel/testYowsup/responses');
                $responses = shell_exec('timeout 20 python /var/www/html/devel/testYowsup/listener.py');
                dd($responses);

                $profesional = $this->Session->read('Auth.User.profesional');
                d($profesional);
//		$this->Turno->recursive = 0;                               
//                $turnos = $this->Turno->find('all', array(
//                                                            'conditions' => $conditions,                
//                                                         )
//                                            );
//                
//                $this->set('turnos', $turnos);

                
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
                        $data['Turno']['profesionales_id'] = $profesional;
                        $data['Turno']['especialidades_id'] = $especialidad;                                                                                                
                        $fecha=date_create(sprintf("%s-%s-%s", $anio, $mes, $dia));
                        $hora = explode(':', $this->request->data['Turno']['hora']);
                        date_time_set($fecha, $hora[0], $hora[1]);
                        $data['Turno']['fechaHora'] = date_format($fecha,"Y-m-d H:i:s");
                        
                        $this->request->data = $data;
//                        dd($this->request->data);
			if ($this->Turno->save($this->request->data)) {
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
        
     public function getProfesionales($idEspecialidad) {
        if (!empty($idEspecialidad)) {
            $profesionales = ClassRegistry::init('EspecialidadesProfesionale')->find('all', array(
                                                    'conditions' => array(
                                                            'EspecialidadesProfesionale.especialidades_id' => $idEspecialidad,
                                                                        ),
                                                     'recursive' => 1,
                                                                            )
                                                            );                    
//            dd($profesionales);
//            dd(Set::extract('{n}.Profesionales', $profesionales));
            $profesionales = json_encode(Set::extract('{n}.Profesionales', $profesionales));
            $this->set('profesionales', $profesionales);
        }
        $this->layout = 'ajax';
    }
    
    public function getTurnos() {
        
//        $this->request->data['anioDesde'] = 2014;
//        $this->request->data['mesDesde'] = 12;
//        $this->request->data['diaDesde'] = 29;
//        
//        $this->request->data['anioHasta'] = 2015;
//        $this->request->data['mesHasta'] = 02;
//        $this->request->data['diaHasta'] = 07;

//        d($this->request->data);
        
        // Para identificar si el uisuario logeado es un profesional
        $profesional = $this->Session->read('Auth.User.profesional');

        $conditions = array();
        if (!empty($profesional)) {
            $conditions['Turno.profesionales_id'] = $profesional;
        }
        // Para identificar un profesional por el que estan filtrando
        if (!empty($this->request->data['profesional_id'])) {
            $conditions['Turno.profesionales_id'] = $this->request->data['profesional_id'];
        }

        $desde = date_create(sprintf("%s-%s-%s", $this->request->data['anioDesde'], $this->request->data['mesDesde'], $this->request->data['diaDesde']));
        
        if (!empty($desde)) {
            $conditions['Turno.fechaHora >='] = date_format($desde,"Y-m-d H:i:s");
        }
        
        $hasta = date_create(sprintf("%s-%s-%s", $this->request->data['anioHasta'], $this->request->data['mesHasta'], $this->request->data['diaHasta']));
        
        if (!empty($hasta)) {
            $conditions['Turno.fechaHora <='] = date_format($hasta,"Y-m-d H:i:s");
        }

        $this->Turno->recursive = 0;
        $turnos = $this->Turno->find('all', array(
                                                    'conditions' => $conditions,
                                                 )
                                    );

//        dd($turnos);
//        $turnos = json_encode(Set::extract('{n}.Turno', $turnos));        
        
        
        $events = array();
        if (!empty($turnos)) {        
            foreach ($turnos as $k => $turno) {
    //            dd($turno);
                $events[$k]['title'] = sprintf('%s, %s', $turno['Paciente']['nombre'], $turno['Paciente']['apellido']);
                $events[$k]['start'] = $turno['Turno']['fechaHora'];
                $events[$k]['allDay'] = false;
                $events[$k]['idTurno'] = $turno['Turno']['id'];
            }
        }
                                     
        $this->set('events', $events);
        
        $this->layout = 'ajax';
    }
        
        
}

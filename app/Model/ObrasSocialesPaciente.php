<?php
App::uses('AppModel', 'Model');
/**
 * ObrasSocialesPaciente Model
 *
 * @property Pacientes $Pacientes
 * @property ObrasSociales $ObrasSociales
 */
class ObrasSocialesPaciente extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'pacientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ObrasSociale' => array(
			'className' => 'ObrasSociale',
			'foreignKey' => 'obras_sociales_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        function afterSave($created) {
            // Guardo la fecha de ultima modificacion en el paciente
            $data['Paciente']['id'] = $this->data['ObrasSocialesPaciente']['pacientes_id'];
            $data['Paciente']['fechaUltimaConsulta'] = date('Y-m-d');
            
            ClassRegistry::init('Paciente')->save($data);
            
        }
        
}

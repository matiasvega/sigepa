<?php
App::uses('AppModel', 'Model');
/**
 * Receta Model
 *
 * @property Pacientes $Pacientes
 * @property Medicamentos $Medicamentos
 */
class Receta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
    
    public $validate = array(
                'medicamentos_id' => 'alphaNumeric',
            );        

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pacientes' => array(
			'className' => 'Pacientes',
			'foreignKey' => 'pacientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Medicamento' => array(
			'className' => 'Medicamento',
			'foreignKey' => 'medicamentos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        function afterSave($created) {
            // Guardo la fecha de ultima modificacion en el paciente
            $data['Paciente']['id'] = $this->data['Receta']['pacientes_id'];
            $data['Paciente']['fechaUltimaConsulta'] = date('Y-m-d');
            
            ClassRegistry::init('Paciente')->save($data);
            
        }
}

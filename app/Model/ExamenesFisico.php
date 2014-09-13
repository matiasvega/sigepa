<?php
App::uses('AppModel', 'Model');
/**
 * ExamenesFisico Model
 *
 * @property Pacientes $Pacientes
 */
class ExamenesFisico extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
		)
	);
        
        function afterSave($created) {
            // Guardo la fecha de ultima modificacion en el paciente
            $data['Paciente']['id'] = $this->data['ExamenesFisico']['pacientes_id'];
            $data['Paciente']['fechaUltimaConsulta'] = date('Y-m-d');
            
            ClassRegistry::init('Paciente')->save($data);
            
        }
}

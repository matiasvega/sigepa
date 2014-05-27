<?php
App::uses('AppModel', 'Model');
/**
 * EstudiosComplementariosPaciente Model
 *
 * @property Pacientes $Pacientes
 * @property EstudiosComplementarios $EstudiosComplementarios
 */
class EstudiosComplementariosPaciente extends AppModel {

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
		'Paciente' => array(
			'className' => 'Paciente',
			'foreignKey' => 'pacientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'EstudiosComplementario' => array(
			'className' => 'EstudiosComplementario',
			'foreignKey' => 'estudios_complementarios_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

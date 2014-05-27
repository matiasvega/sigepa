<?php
App::uses('AppModel', 'Model');
/**
 * PacientesPatologia Model
 *
 * @property Patologias $Patologias
 * @property Pacientes $Pacientes
 * @property Tratamientos $Tratamientos
 */
class PacientesPatologia extends AppModel {

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
		'Patologias' => array(
			'className' => 'Patologias',
			'foreignKey' => 'patologias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Pacientes' => array(
			'className' => 'Pacientes',
			'foreignKey' => 'pacientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tratamientos' => array(
			'className' => 'Tratamientos',
			'foreignKey' => 'tratamientos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

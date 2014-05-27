<?php
App::uses('AppModel', 'Model');
/**
 * PatologiasTratamiento Model
 *
 * @property Patologias $Patologias
 * @property Tratamientos $Tratamientos
 */
class PatologiasTratamiento extends AppModel {

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
		'Tratamientos' => array(
			'className' => 'Tratamientos',
			'foreignKey' => 'tratamientos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

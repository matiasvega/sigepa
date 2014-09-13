<?php
App::uses('AppModel', 'Model');
/**
 * EstudiosComplementario Model
 *
 * @property Paciente $Paciente
 */
class EstudiosComplementario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'joinTable' => 'estudios_complementarios_pacientes',
			'foreignKey' => 'estudios_complementario_id',
			'associationForeignKey' => 'paciente_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}

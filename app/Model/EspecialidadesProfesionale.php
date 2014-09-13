<?php
App::uses('AppModel', 'Model');
/**
 * EspecialidadesProfesionale Model
 *
 * @property Especialidades $Especialidades
 * @property Profesionales $Profesionales
 */
class EspecialidadesProfesionale extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Especialidades' => array(
			'className' => 'Especialidades',
			'foreignKey' => 'especialidades_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Profesionales' => array(
			'className' => 'Profesionales',
			'foreignKey' => 'profesionales_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * ObrasSocialesProfesionale Model
 *
 * @property ObrasSociales $ObrasSociales
 * @property Profesionales $Profesionales
 */
class ObrasSocialesProfesionale extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ObrasSociale' => array(
			'className' => 'ObrasSociale',
			'foreignKey' => 'obras_sociales_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Profesionale' => array(
			'className' => 'Profesionale',
			'foreignKey' => 'profesionales_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

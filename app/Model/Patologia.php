<?php
App::uses('AppModel', 'Model');
/**
 * Patologia Model
 *
 * @property Paciente $Paciente
 */
class Patologia extends AppModel {

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
//	public $hasAndBelongsToMany = array(
//		'Paciente' => array(
//			'className' => 'Paciente',
//			'joinTable' => 'pacientes_patologias',
//			'foreignKey' => 'patologia_id',
//			'associationForeignKey' => 'paciente_id',
//			'unique' => 'keepExisting',
//			'conditions' => '',
//			'fields' => '',
//			'order' => '',
//			'limit' => '',
//			'offset' => '',
//			'finderQuery' => '',
//			'deleteQuery' => '',
//			'insertQuery' => ''
//		)
//	);
//        
        
        public $belongsTo = array(
		'Diagnostico' => array(
			'className' => 'Diagnostico',
			'foreignKey' => 'patologias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}

<?php
App::uses('AppModel', 'Model');
/**
 * Tratamiento Model
 *
 * @property Medicacione $Medicacione
 * @property Patologia $Patologia
 */
class Tratamiento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Medicacione' => array(
			'className' => 'Medicacione',
			'joinTable' => 'medicaciones_tratamientos',
			'foreignKey' => 'tratamiento_id',
			'associationForeignKey' => 'medicacione_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Patologia' => array(
			'className' => 'Patologia',
			'joinTable' => 'patologias_tratamientos',
			'foreignKey' => 'tratamiento_id',
			'associationForeignKey' => 'patologia_id',
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

<?php
App::uses('AppModel', 'Model');
/**
 * Profesionale Model
 *
 * @property Especialidade $Especialidade
 * @property ObrasSociale $ObrasSociale
 */
class Profesionale extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'apellido';        
        
        public $virtualFields = array(
            'nombre' => 'CONCAT(Profesionale.apellido, " ", Profesionale.nombre)'
        );

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Especialidade' => array(
			'className' => 'Especialidade',
			'joinTable' => 'especialidades_profesionales',
			'foreignKey' => 'profesionales_id',
			'associationForeignKey' => 'especialidades_id',
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
		'ObrasSociale' => array(
			'className' => 'ObrasSociale',
			'joinTable' => 'obras_sociales_profesionales',
			'foreignKey' => 'profesionales_id',
			'associationForeignKey' => 'obras_sociales_id',
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

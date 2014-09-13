<?php
App::uses('AppModel', 'Model');
/**
 * ObrasSociale Model
 *
 * @property Paciente $Paciente
 * @property Profesionale $Profesionale
 */
class ObrasSociale extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

        public $validate = array(
                'nombre' => 'alphaNumeric'
            );        
        
        
        
/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Paciente' => array(
			'className' => 'Paciente',
			'joinTable' => 'obras_sociales_pacientes',
			'foreignKey' => 'obras_sociales_id',
			'associationForeignKey' => 'pacientes_id',
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
		'Profesionale' => array(
			'className' => 'Profesionale',
			'joinTable' => 'obras_sociales_profesionales',
			'foreignKey' => 'obras_sociales_id',
			'associationForeignKey' => 'profesionales_id',
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

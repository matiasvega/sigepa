<?php
App::uses('AppModel', 'Model');
/**
 * Paciente Model
 *
 * @property EstudiosComplementario $EstudiosComplementario
 * @property ObrasSociale $ObrasSociale
 * @property Patologia $Patologia
 */
class Paciente extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';
        
//        public $virtualFields = array(
//            'nombre' => "CONCAT(Paciente.nombre, ', ', Paciente.apellido, ' - DNI: ', Paciente.dni)"
//        );

        public $validate = array(
                'dni' => 'numeric',
                'nombre' => 'alphaNumeric',
                'apellido' => 'alphaNumeric',
                'telefonoFijo' => 'alphaNumeric',
                'sexo' => 'notEmpty',
                'fechaNacimiento'  => 'notEmpty',
            );        
        

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'EstudiosComplementario' => array(
			'className' => 'EstudiosComplementario',
			'joinTable' => 'estudios_complementarios_pacientes',
			'foreignKey' => 'pacientes_id',
			'associationForeignKey' => 'estudios_complementarios_id',
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
			'joinTable' => 'obras_sociales_pacientes',
			'foreignKey' => 'pacientes_id',
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
		),
//		'Patologia' => array(
//			'className' => 'Patologia',
//			'joinTable' => 'pacientes_patologias',
//			'foreignKey' => 'pacientes_id',
//			'associationForeignKey' => 'patologias_id',
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
	);
        

}

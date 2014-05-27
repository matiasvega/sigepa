<?php
App::uses('AppModel', 'Model');
/**
 * Diagnostico Model
 *
 * @property Pacientes $Pacientes
 */
class Diagnostico extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

            public $validate = array(
                'diagnostico_presuntivo' => 'alphaNumeric',
            );        
    
    
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pacientes' => array(
			'className' => 'Pacientes',
			'foreignKey' => 'pacientes_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Patologias' => array(
			'className' => 'Patologias',
			'foreignKey' => 'patologias_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

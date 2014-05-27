<?php
App::uses('AppModel', 'Model');
/**
 * Medicamento Model
 *
 * @property Drogas $Drogas
 * @property Contraindicaciones $Contraindicaciones
 * @property GruposTerapeuticos $GruposTerapeuticos
 * @property Composiciones $Composiciones
 */
class Medicamento extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre_comercial';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Droga' => array(
			'className' => 'Droga',
			'foreignKey' => 'drogas_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Contraindicaciones' => array(
			'className' => 'Contraindicaciones',
			'foreignKey' => 'contraindicaciones_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GruposTerapeutico' => array(
			'className' => 'GruposTerapeutico',
			'foreignKey' => 'grupos_terapeuticos_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Composiciones' => array(
			'className' => 'Composiciones',
			'foreignKey' => 'composiciones_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

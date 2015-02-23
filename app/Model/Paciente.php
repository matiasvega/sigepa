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
//                'dni' => 'numeric',
                'nombre' => 'notEmpty',
                'apellido' => 'notEmpty',
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
        
        
        
        
        
        public function GetData() {
        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
         * Easy set variables
        */
         
        /* Array of database columns which should be read and sent back to DataTables. Use a space where
         * you want to insert a non-database field (for example a counter or static image)
        */
        $aColumns = array( 'id', 'nombre', 'apellido', 'sexo', 'fechaNacimiento', 'fechaUltimaConsulta', '"_"');
//            $aColumns = array( 'id', 'nombre', 'apellido', 'sexo', 'fechaNacimiento', 'fechaUltimaConsulta');
         
        /* Indexed column (used for fast and accurate table cardinality) */
        $sIndexColumn = "id";
         
        /* DB table to use */
        $sTable = "pacientes";
         
        App::uses('ConnectionManager', 'Model');
        $dataSource = ConnectionManager::getDataSource('default');
//        d($dataSource); 
        /* Database connection information */
        $gaSql['user']       = $dataSource->config['login'];
        $gaSql['password']   = $dataSource->config['password'];
        $gaSql['db']         = $dataSource->config['database'];
        $gaSql['server']     = $dataSource->config['host'];
         
//        dd($gaSql);
         
        /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
         * If you just want to use the basic configuration for DataTables with PHP server-side, there is
        * no need to edit below this line
        */
         
        /*
         * Local functions
        */
        function fatal_error ( $sErrorMessage = '' )
        {
            header( $_SERVER['SERVER_PROTOCOL'] .' 500 Internal Server Error' );
            die( $sErrorMessage );
        }
         
         
        /*
         * MySQL connection
        */
        if ( ! $gaSql['link'] = mysql_pconnect( $gaSql['server'], $gaSql['user'], $gaSql['password']  ) )
        {
            fatal_error( 'Could not open connection to server' );
        }
         
        if ( ! mysql_select_db( $gaSql['db'], $gaSql['link'] ) )
        {
            fatal_error( 'Could not select database ' );
        }
         
         
        /*
         * Paging
        */
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
        {
            $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".
                    intval( $_GET['iDisplayLength'] );
        }
         
         
        /*
         * Ordering
        */
        $sOrder = "";
        if ( isset( $_GET['iSortCol_0'] ) )
        {
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
            {
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
                {
                    $sOrder .= "`".$aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."` ".
                        ($_GET['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
                }
            }
         
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" )
            {
                $sOrder = "";
            }
        }
         
         
        /*
         * Filtering
        * NOTE this does not match the built-in DataTables filtering which does it
        * word by word on any field. It's possible to do here, but concerned about efficiency
        * on very large tables, and MySQL's regex functionality is very limited
        */
        $sWhere = "";
        if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" )
        {
            $sWhere = "WHERE (";
            for ( $i=0 ; $i<count($aColumns) ; $i++ )
            {
                $sWhere .= "`".$aColumns[$i]."` LIKE '%".mysql_real_escape_string( $_GET['sSearch'] )."%' OR ";
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
         
        /* Individual column filtering */
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
            if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
            {
                if ( $sWhere == "" )
                {
                    $sWhere = "WHERE ";
                }
                else
                {
                    $sWhere .= " AND ";
                }
                $sWhere .= "`".$aColumns[$i]."` LIKE '%".mysql_real_escape_string($_GET['sSearch_'.$i])."%' ";
            }
        }
         
         
        /*
         * SQL queries
        * Get data to display
        */
        $sQuery = "
    SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumns))."
            FROM   $sTable
            $sWhere
            $sOrder
            $sLimit
            ";
//        d($sQuery);
        $rResult = mysql_query( $sQuery, $gaSql['link'] ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
         
        /* Data set length after filtering */
        $sQuery = "
    SELECT FOUND_ROWS()
";
        $rResultFilterTotal = mysql_query( $sQuery, $gaSql['link'] ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
        $aResultFilterTotal = mysql_fetch_array($rResultFilterTotal);
        $iFilteredTotal = $aResultFilterTotal[0];
         
        /* Total data set length */
        $sQuery = "
    SELECT COUNT(`".$sIndexColumn."`)
            FROM   $sTable
            ";        
        $rResultTotal = mysql_query( $sQuery, $gaSql['link'] ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
        $aResultTotal = mysql_fetch_array($rResultTotal);
        $iTotal = $aResultTotal[0];
         
         
        /*
         * Output
        */
        @$output = array(
                "sEcho" => intval($_GET['sEcho']),
                "iTotalRecords" => $iTotal,
                "iTotalDisplayRecords" => $iFilteredTotal,
                "aaData" => array()
        );
        
//        $output = array(
//            "draw" => 1,
//            "recordsTotal" => $iTotal,
//            "recordsFiltered" => $iFilteredTotal,
//            "data" => array()
//        );
         
        while ( $aRow = mysql_fetch_array( $rResult ) )
        {
            $row = array();
            for ( $i=0 ; $i<count($aColumns) ; $i++ )
            {
//                d($aRow);
//                d($aColumns[$i]);
                if ( $aColumns[$i] == "id" ) {
                    /* Special output formatting for 'version' column */
//                    $row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
                    $idPaciente = $aRow[ $aColumns[$i] ];
                    $row['DT_RowId'] = $idPaciente;
                }
                else if ( $aColumns[$i] == '"_"' ) {
//                    $row[] = sprintf('<img src="/devel/sigepa/img/ficha.png" alt="Ver ficha de paciente" title="Ver ficha de paciente" class="viewPaciente" id="%s">', $idPaciente);

                    

                    
                    
                }
                else {
                    /* General output */
//                    $row[$aColumns[$i]] = $aRow[ $aColumns[$i] ];
                    $row[] = $aRow[ $aColumns[$i] ];
                }
            }
            $output['aaData'][] = $row;
//            $output['data'][] = $row;
        }
         
        return $output;
    }
        
        
}

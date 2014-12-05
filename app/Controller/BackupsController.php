<?php
App::uses('AppController', 'Controller');
/**
 * Backups Controller
 *
 * @property Backup $Backup
 * @property PaginatorComponent $Paginator
 */
class BackupsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Backup->recursive = 0;
		$this->set('backups', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Backup->exists($id)) {
			throw new NotFoundException(__('Invalid backup'));
		}
		$options = array('conditions' => array('Backup.' . $this->Backup->primaryKey => $id));
		$this->set('backup', $this->Backup->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
//		if ($this->request->is('post')) {
			$this->Backup->create();
                        
                        d($this->request->data);
                                                                       
                        $backup = array('Backup' => array(
                                                            'tag' => sprintf("Full backup SIGEPA %s", date('d-m-Y')),
                                                            'fecha' => array(
                                                                                'month' => date('m'),
                                                                                'day' => date('d'),
                                                                                'year' => date('Y'),
                                                                            ),
                                                            'filename' => sprintf('backupSigepa_%s.sql', date('d_m_Y_h_i_s')),
                                                            'logfile' => sprintf('backupSigepa_%s.log', date('d_m_Y')),
                                                        )
                                        );
                                                                                                
                        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                            echo 'This is a server using Windows!';
                            $path = ' ';
                        } else {
                            echo 'This is a server not using Windows!';
                            $path = '/usr/bin/';
                        }
                        
                        $command = sprintf('%smysqldump -u root -px sigepa -r %s -v ', 
                                                $path,
                                                WWW_ROOT . 'files' . DS . $backup['Backup']['filename']
                                            );
//                        d($command);
                        
//                        dd(WWW_ROOT . 'files' . DS . $backup['Backup']['filename']);
                        $x = shell_exec($command);
//                        dd($x);
//                        d(shell_exec('whoami'));
                        

                        
                        
//                        dd($backup);     
                        
                        $this->request->data = $backup;
                        
			if ($this->Backup->save($this->request->data)) {
				$this->Session->setFlash(__('Backup de datos generado correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The backup could not be saved. Please, try again.'));
			}
//		}
	}
        
        
        public function download($filename) {
            $this->viewClass = 'Media';
            // Download app/outside_webroot_dir/example.zip
            $params = array(
                'id'        => $filename,
                'name'      => $filename,
                'download'  => true,
                'path'      => WWW_ROOT . 'files' . DS                                                
            );
            $this->set($params);
        }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Backup->exists($id)) {
			throw new NotFoundException(__('Invalid backup'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Backup->save($this->request->data)) {
				$this->Session->setFlash(__('The backup has been saved'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The backup could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Backup.' . $this->Backup->primaryKey => $id));
			$this->request->data = $this->Backup->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Backup->id = $id;
		if (!$this->Backup->exists()) {
			throw new NotFoundException(__('Invalid backup'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Backup->delete()) {
			$this->Session->setFlash(__('Backup eliminado'), 'flash_ok');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Backup was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}

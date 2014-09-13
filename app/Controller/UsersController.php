<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
        public $cacheAction = array(            
//            'login'  => 48000,
//            'agendaDiaria'  => 48000,
        );
      
        
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos se guardaron correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Los datos se guardaron correctamente'), 'flash_ok');
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Datos eliminados'), 'flash_ok');
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Obras sociale was not deleted'), 'flash_error');
		return $this->redirect(array('action' => 'index'));
	}
        
    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                
                $actions = array();
                $fullActions = $this->AclReflector->get_all_actions();
        //        dd($fullActions);
                $i = 0;
                foreach ($fullActions as $fullAction) {
                    $arrActions = String::tokenize($fullAction, '/');    
        //            d($arrActions);
                    if (count($arrActions) == 2) {
                        $actions[$i]['controller'] = $arrActions[0];
                        $actions[$i]['action'] = $arrActions[1];
                    } elseif (count($arrActions) == 3) {
                        $actions[$i]['controller'] = $arrActions[1];
                        $actions[$i]['action'] = $arrActions[2];
                    }
                    $i++;
                }
        //        dd($actions);        
                $granActions = array();
                foreach ($actions as $k => $action) {
                    if ($this->Acl->check(array('User' => array('id' => $this->Session->read('Auth.User.id'))), sprintf('%s/%s', $action['controller'], $action['action']))) {
                        $granActions[$action['controller']][$action['action']] = true;
                    }              
                }
//                dd($granActions);
                $this->Session->write('Auth.User.grantActions', $granActions);                
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Nombre de Usuario o Contraseña incorrecto.'), 'flash_error');
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
       
    
     public function options($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Datos guardados correctamente.'), 'flash_ok');
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Los datos no se guardaron. Si el error persiste notifique al administrador del sistema.'), 'flash_error');
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }
        
}

<?php
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class AppController extends Controller {
    public $components = array(
        'Session',
        'RequestHandler',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'Participante',
                    'fields' => array(
                        'username' => 'email',
                        'password' => 'senha'
                    ),
                    'scope'=>array(
                        'status'=>true
                    )
                )
            ),
            'authorize'=>'Controller',  
            'loginAction' => array('controller' => 'participantes','action' => 'login','plugin'=>null, 'admin'=>0),
            //'loginRedirect' => array('controller' => 'jogadors','action' => 'perfil','plugin'=>null, 'admin'=>0),
            'logoutRedirect' => array('controller' => 'participantes','action' => 'login','plugin'=>null, 'admin'=>0),
            'authError' => 'Voce nao tem autorizacao!'
        ),
    );
    public $helpers = array('Session', 'Html','Form');
    
    public function beforeFilter(){        
        $this->Auth->allowedActions = array('');
        $this->Auth->autoRedirect = false;
    }
     
    public function isAuthorized($usuario = null) {        
        if (isset($this->request->params['admin'])) {
            return (bool)($usuario['admin']);
        }
        return true;          
    }    
    public function formatDataList($data){
        $data_format = explode("/", $data);
        return $data_format[2]."-".$data_format[1]."-".$data_format[0];
    }
}

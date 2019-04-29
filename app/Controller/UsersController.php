<?php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('CakeTime', 'Utility');
class UsersController extends AppController
{
    var $name = 'Users';
    var $helpers = array('Form');
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->currentDateTime=CakeTime::format('Y-m-d H:i:s',CakeTime::convert(time(),$this->siteTimezone));
    }
    public function client_index(){
        $this->redirect(array('controller' => 'Users', 'action' => 'login'));
    }
    public function client_login()
    {
        if (empty($this->data['User']['mem']) == false)
        {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $password=$passwordHasher->hash($this->request->data['User']['password']);            
            $user = $this->User->find('first', array('conditions' => array('User.holder_id' => $this->data['User']['mem'], 'User.password' =>$password)));            
            if($user != false)
            {
                if($user['User']['status']=="Active")
                {
                    $record_arr=array('User'=>array('id'=>$user['User']['id'],'last_login'=>$this->currentDateTime));
                    $this->User->save($record_arr);
                    $this->Session->write('frontUser', $user);                
                    $this->redirect(array('controller' => 'Dashboards', 'action' => 'index'));
                    exit();
                }
                else
                {
                    $status=$user['User']['status'];
                    $this->Session->setFlash(__d('default',"You are %s Member! Please contact administrator",$status),'flash', array('alert'=> 'danger'));
                    $this->redirect(array('action' => 'login'));
                    exit();
                }
            }
            else
            {
                $this->Session->setFlash(__('Incorrect username/password!'),'flash', array('alert'=> 'danger'));
                $this->redirect(array('action' => 'login'));
                exit();
            }
        }
    }
    public function client_logout()
    {
        $this -> Session -> destroy();
        $this -> redirect(array('action' => 'login'));
        exit();
    }    
}

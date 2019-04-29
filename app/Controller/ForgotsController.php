<?php
App::uses('CakeEmail', 'Network/Email');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class ForgotsController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();        
    }
    public function client_password()
    {
        if ($this->request->is(array('post', 'put')))
        {
            $clientId=$this->request->data['Forgot']['member'];
            $mobile=$this->request->data['Forgot']['mobile'];
            $this->loadModel('Client');
            if($this->Client->find('count',array('conditions'=>array('Client.holder_id'=>$clientId,'Client.phone'=>$mobile)))==0)
            {
                $this->Session->setFlash(__('Incorrect login id/mobile number'),'flash', array('alert'=> 'danger'));
                $this->redirect(array('controller' => 'Forgots', 'action' => 'password'));
            }
            else
            {                
                $userValue=$this->Client->find('first',array('conditions'=>array('Client.holder_id'=>$clientId,'Client.phone'=>$mobile)));
                $code=rand();
                $clientName=$userValue['Client']['name'];
                $mobileNo=$userValue['Client']['phone'];
                $email=$userValue['Client']['email'];
                $contactNo=$this->siteEmailContact;
                $siteName=$this->siteName;
                $siteEmailContact=$this->siteEmailContact;
                $this->Client->save(array('id'=>$userValue['Client']['id'],'presetcode'=>$code));
                try
                {
                    if($this->emailNotification && $email)
                    {
                        /* Send Email */
                        $this->loadModel('Emailtemplate');
                        $emailTemplateArr=$this->Emailtemplate->findByType('CFP');
                        if($emailTemplateArr['Emailtemplate']['status']=="Published")
                        {
                            $rand1=$this->CustomFunction->generate_rand(35);
                            $rand2=rand();
                            $url="$this->siteDomain/client/Forgots/mpresetcode/$code/$rand1/$rand2";
                            $message=eval('return "' . addslashes($emailTemplateArr['Emailtemplate']['description']) . '";');
                            $Email = new CakeEmail();
                            $Email->transport($this->emailSettype);
                            if($this->emailSettype=="Smtp")
                            $Email->config(array('host' => $this->emailHost,'port' =>  $this->emailPort,'username' => $this->emailUsername,'password' => $this->emailPassword,'timeout'=>90));
                            $Email->from(array($this->siteEmail =>$this->siteName));
                            $Email->to($email);
                            $Email->template('default');
                            $Email->emailFormat('html');
                            $Email->subject($emailTemplateArr['Emailtemplate']['name']);
                            $Email->send($message);
                        }
                        /* End Email */
                    }
                    if($this->smsNotification)
                    {
                        /* Send Sms */
                        $this->loadModel('Smstemplate');
                        $smsTemplateArr=$this->Smstemplate->findByType('CFP');
                        if($smsTemplateArr['Smstemplate']['status']=="Published")
                        {
                            $url="$this->siteDomain";
                            $message=eval('return "' . addslashes($smsTemplateArr['Smstemplate']['description']) . '";');
                            $this->CustomFunction->sendSms($mobileNo,$message,$this->smsSettingArr);
                        }
                        /* End Sms */
                    }   
                    $this->redirect(array('controller' => 'Forgots', 'action' => 'presetcode'));
                }
                catch(Exception $e)
                {
                   $this->Session->setFlash($e->getMessage(),'flash',array('alert'=> 'danger'));
                }
                
            }
        }
    }
    public function client_presetcode($id=null)
    {
        if ($this->request->is(array('post', 'put')))
        {
           $id=$this->request->data['Forgot']['verificationcode'];
        }
        if($id)
        {        
            $post=$this->Forgot->find('first',array('conditions'=>array('Forgot.presetcode'=>$id)));
            if(!$post)
            {
              $this->Session->setFlash(__('Incorrect code'),'flash', array('alert'=> 'danger'));
              $this->redirect(array('controller' => 'Forgots', 'action' => 'presetcode'));
            }
            else
            {
               $this->Session->write('Parc', $id);
               $this->redirect(array('controller' => 'Forgots', 'action' => 'reset'));
            }
        }
    }
    public function client_reset()
    {
        try
        {
            if($this->Session->read('Parc'))
            {
                if ($this->request->is(array('post', 'put')))
                {
                    $userValue=$this->Forgot->find('first',array('conditions'=>array('Forgot.presetcode'=>$this->Session->read('Parc'))));
                    $passwordValue=$this->request->data['Forgot']['password'];
                    $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
                    $password=$passwordHasher->hash($passwordValue);
                    $this->Forgot->save(array('id'=>$userValue['Forgot']['id'],'password'=>$password,'presetcode'=>NULL));
                    session_unset('Parc');
                    $this->Session->setFlash(__('Password Changed Successfully'),'flash',array('alert'=> 'success'));
                    $this->redirect(array('controller' => 'users', 'action' => 'login'));
                }
            }
            else
            {
             $this->redirect(array('controller' => 'Forgots', 'action' => 'presetcode'));  
            }
        }
        catch(Exception $e)
        {
            $this->Session->setFlash($e->getMessage(),'flash',array('alert'=> 'danger'));
            $this->redirect(array('controller' => 'Forgots', 'action' => 'reset'));
        }
        
    }
}

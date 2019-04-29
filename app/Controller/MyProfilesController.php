<?php
class MyProfilesController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->authenticate();
        $this->userId=$this->userValue['User']['id'];
    }
    public function client_index()
    {
        $post=$this->MyProfile->findById($this->userId);
        $this->set('post',$post);
    }
}

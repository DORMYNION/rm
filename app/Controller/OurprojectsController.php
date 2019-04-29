<?php
class OurprojectsController extends AppController
{   
    public function index($id=null)
    {
        if (!$id)
        {
            $this->redirect(array('controller'=>''));
        }
        $post=$this->Ourproject->find('first',array('conditions'=>array('id'=>$id,'Status'=>'Active')));
        if(!$post)
        {
            $this->redirect(array('controller'=>''));
        }
        $this->set('post',$post);
    }
}
<?php
class PropertiesPhotosController extends AdminAppController {
    public $helpers = array('Html', 'Form','Session');
    public $components = array('Session','CustomFunction');
    public function index($id=null)
    {
        if (!$id)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            return $this->redirect(array('controller'=>'Properties','action' => 'index'));            
        }
        $this->loadModel('Property');
        $post=$this->Property->findById($id);
        if(!$post)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            return $this->redirect(array('controller'=>'Properties','action' => 'index'));  
        }
        $propertiesPhoto=$this->PropertiesPhoto->findAllByPropertyId($id);
        $this->set('PropertiesPhoto', $propertiesPhoto);
        $this->set('propertyId',$id);
    }    
    public function add($id=null)
    {
        if ($this->request->is('post'))
        {
            if ($this->request->is('post'))
            {
                $this->PropertiesPhoto->create();
                try
                {
                    $prPhoto=array();
                    $propertyId=$this->data['propertyId'];
                    $dirName="propertiesphotos";
                    foreach($this->request->data['PropertiesPhoto']['photo'] as $propertyPhoto)
                    {
                        $fileName=$this->CustomFunction->Upload($propertyPhoto['tmp_name'],$propertyPhoto['name'],$dirName,200,200);
                        if(strlen($fileName)>0)
                        {
                            $prPhoto[]=(array('property_id'=>$propertyId,'photo' => $fileName,'dir'=>$dirName));
                        }
                    }
                    $this->PropertiesPhoto->saveAll($prPhoto);
                    $this->Session->setFlash(__('Property Photo has been saved'),'flash',array('alert'=>'success'));
                    return $this->redirect(array('action' => "index/$propertyId"));
                }
                catch (Exception $e)
                {
                    $this->Session->setFlash(__('Something wrong'),'flash',array('alert'=>'danger'));
                    return $this->redirect(array('action' => 'index'));
                }
            }            
            $this->set('isError',true);
            $this->set('propertyId',$propertyId);
        }        
        else
        {
            $this->layout = null;
            $this->set('propertyId',$id);
            $this->set('isError',false);
        }
    }    
    public function deleteall()
    {
        if ($this->request->is('post'))
        {
            foreach($this->data['PropertiesPhoto']['id'] as $key => $value)
            {
                $PropertiesPhoto=$this->PropertiesPhoto->findById($value);
                if($PropertiesPhoto)
                {
                    $fileName=$PropertiesPhoto['PropertiesPhoto']['photo'];
                    $dirName=$PropertiesPhoto['PropertiesPhoto']['dir'];
                    $this->PropertiesPhoto->delete($value);
                    $this->CustomFunction->fileDelete($fileName,$dirName);
                }
            }
            $this->Session->setFlash(__('Your Property Photo has been deleted.'),'flash',array('alert'=>'success'));
            $propertyId=$this->data['propertyId'];
        }
        $this->redirect(array('action' => "index/$propertyId"));
        $this->set('propertyId',$propertyId);
    }
    public function view($id = null)
    {
        $this->layout = null;
        if (!$id)
        {
            $this->Session->setFlash(__('Invalid Post.'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $post = $this->PropertiesPhoto->findById($id);
        if (!$post)
        {
            $this->Session->setFlash(__('Invalid Post.'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $photoImg=$post['PropertiesPhoto']['dir'].'/'.$post['PropertiesPhoto']['photo'];
        $this->set('photoImg',$photoImg);        
    }
}

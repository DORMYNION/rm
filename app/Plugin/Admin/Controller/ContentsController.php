<?php
class ContentsController extends AdminAppController {
    public $helpers = array('Html', 'Form','Session','Paginator');
    public $components = array('Session','Paginator','search-master.Prg');
    public $presetVars = true;
    var $paginate = array('limit'=>20,'maxLimit'=>500,'page'=>1,'order'=>array('Content.id'=>'asc','Content.ordering'=>'asc'));
    public function index()
    {
        $this->Prg->commonProcess();
        $this->Paginator->settings = $this->paginate;
        $this->Paginator->settings['conditions'] = $this->Content->parseCriteria($this->Prg->parsedParams());
        $this->set('Content', $this->Paginator->paginate());        
    }
    public function add()
    {
        if ($this->request->is('post'))
        {
            $this->Content->create();
            try
            {
                if ($this->Content->save($this->request->data))
                {
                    $this->Session->setFlash(__('Page has been saved.'),'flash',array('alert'=>'success'));
                    return $this->redirect(array('action' => 'index'));
                }
            }
            catch (Exception $e)
            {
                $this->Session->setFlash(__('Page Url already exist.'),'flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function edit($id = null)
    {
       
        if (!$id)
        {
            throw new NotFoundException(__('Invalid post'));
        }
        $ids=explode(",",$id);
        $post=array();
        foreach($ids as $id)
        {
            $post[]=$this->Content->findById($id);
        }
        $this->set('Content',$post);
        if (!$post)
        {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put')))
        {
            try
            {
                if ($this->Content->saveAll($this->request->data))
                {
                    $this->Session->setFlash(__('Pages updated Successfully !'),'flash',array('alert'=>'success'));
                    return $this->redirect(array('action' => 'index'));
                }
            }
            catch (Exception $e)
            {
                $this->Session->setFlash(__('Invalid Post.'),'flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->set('isError',true);
        }
        else
        {
            $this->layout = 'tinymce';
            $this->set('isError',false);
        }
        if (!$this->request->data)
        {
            $this->request->data = $post;
        }
        
    }    
    public function deleteall()
    {
        
        if ($this->request->is('post'))
        {
            foreach($this->data['Content']['id'] as $key => $value)
            {
                $this->Content->delete($value);
            }
            $this->Session->setFlash(__('Page has been deleted.'),'flash',array('alert'=>'success'));
        }
       
        $this->redirect(array('action' => 'index'));
    }
     public function published($id=null,$mode=null)
    {
        
        
        if (!$id || !$mode)
        {
            $this->Session->setFlash(__('Invalid Post.'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $post = $this->Content->findById($id);
        if (!$post)
        {
            $this->Session->setFlash(__('Invalid Post.'),'flash',array('alert'=>'danger'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Content->id = $id;
        try
        {
            $published="";
            if($mode=="Yes")
            $published="Unpublished";
            else
            $published="Published";
            $userArr=array('id'=>$id,'published'=>$published);
            $this->Content->unbindValidation('remove', array('link_name','ordering','url','is_parent','parent_id'), true);
            if ($this->Content->save($userArr))
            {
                $this->Session->setFlash(__("Page has been").' '.$published,'flash',array('alert'=>'success'));
                return $this->redirect(array('action' => 'index'));
            }
            else
            {
                $this->Session->setFlash(__('Something wrong.'),'flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));            
            }
        }
        catch (Exception $e)
        {
            $this->Session->setFlash(__('Something wrong.'),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));            
        }
    }
}

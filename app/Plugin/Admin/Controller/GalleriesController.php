<?php
class GalleriesController extends AdminAppController {
    public $helpers = array('Html', 'Form','Session','Paginator');
    public $components = array('Session','Paginator','search-master.Prg');
    public $presetVars = true;
    var $paginate = array('limit'=>20,'maxLimit'=>500,'page'=>1,'order'=>array('Gallery.id'=>'desc'));
    public function index()
    {
        $this->Prg->commonProcess();
        $this->Paginator->settings = $this->paginate;
        $this->Paginator->settings['conditions'] = $this->Gallery->parseCriteria($this->Prg->parsedParams());
        $this->set('gallery', $this->Paginator->paginate());        
    }    
    public function add()
    {
        $this->loadModel('Category');
        $this->set('category',$this->Category->find('list',array('conditions'=>array('type'=>'PHO','status'=>'Active'),'order'=>array('ordering'=>'asc'))));
        if ($this->request->is('post'))
        {
            $this->Gallery->create();
            try
            {
                $this->request->data['Gallery']['dirt']='gallery';
                if ($this->Gallery->save($this->request->data))
                {
                    $this->Session->setFlash(__('Gallery has been saved.'),'flash',array('alert'=>'success'));
                    return $this->redirect(array('action' => 'add'));
                }
            }
            catch (Exception $e)
            {
                $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
                return $this->redirect(array('action' => 'index'));
            }
        }
    }
    public function edit($id = null)
    {
        $this->loadModel('Category');
        $this->set('category',$this->Category->find('list',array('conditions'=>array('type'=>'PHO','status'=>'Active'),'order'=>array('ordering'=>'asc'))));
        
        if (!$id)
        {
            throw new NotFoundException(__('Invalid post'));
        }
        $ids=explode(",",$id);
        $post=array();
        foreach($ids as $k=>$id)
        {
            $k++;
            $post[$k]=$this->Gallery->findById($id);
        }
        $this->set('gallery',$post);
        if (!$post)
        {
            throw new NotFoundException(__('Invalid post'));
        }
        if ($this->request->is(array('post', 'put')))
        {
            $this->Gallery->unbindValidation('remove', array('photo'), true);
            try
            {
                if ($this->Gallery->saveAll($this->request->data))
                {
                    $this->Session->setFlash(__('Gallery has been saved.'),'flash',array('alert'=>'success'));
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
            $this->layout = null;
            $this->set('isError',false);
        }
        if (!$this->request->data)
        {
            $this->request->data = $post;
        }
    }
    public function deleteall()
    {
        try
        {
            if ($this->request->is('post'))
            {
                foreach($this->data['Gallery']['id'] as $key => $value)
                {
                    $this->Gallery->delete($value);
                }
                $this->Session->setFlash(__('Gallery has been deleted.'),'flash',array('alert'=>'danger'));
            }        
            $this->redirect(array('action' => 'index'));
        }
        catch (Exception $e)
        {
            $this->Session->setFlash(__('Please delete related record first.'),'flash',array('alert'=>'danger'));
            return $this->redirect(array('action' => 'index'));
        }
    }
    
}

<?php
class GalleriesController extends AppController {
    public function index($id=null)
    {
        $categoryName=null;
        if (!$id)
        {
            $this->Session->setFlash(__('Invalid Post'),'flash',array('alert'=>'danger'));
            $this->redirect(array('controller'=>'pages','action' => 'home'));
        }
        $post=$this->Gallery->find('all',array('conditions'=>array('Category.short_name'=>$id),'order'=>'Gallery.ordering asc'));
        if(!$post)
        {
            $this->Session->setFlash(__('No photo found'),'flash',array('alert'=>'danger'));
        }
        else
        {
            $categoryName=$post[0]['Category']['name'];
        }
        $this->set('categoryName',$categoryName);
        $this->set('newsPost',$post);
    }    
}

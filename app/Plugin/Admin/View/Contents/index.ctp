<div class="row">
    <div class="col-md-12">
        <div class="btn-group">
            <?php $url=$this->Html->url(array('controller'=>'Contents')); echo $this->Html->link('<span class="fa fa-plus-circle"></span>&nbsp;'.__('Add New Page'),array('controller'=>'Contents','action'=>'add'),array('escape'=>false,'class'=>'btn btn-success'));?>
            <?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;'.__('Edit'),'javascript:void(0);',array('type'=>'button','name'=>'editallfrm','id'=>'editallfrm','onclick'=>"check_perform_edit('$url');",'escape'=>false,'class'=>'btn btn-warning'));?>
            <?php echo $this->Html->link('<span class="fa fa-trash"></span>&nbsp;'.__('Delete'),'javascript:void(0);',array('name'=>'deleteallfrm','id'=>'deleteallfrm','onclick'=>'check_perform_delete();','escape'=>false,'class'=>'btn btn-danger'));?>
        </div>
    </div>
        <?php echo $this->element('pagination');
        $pageParams = $this->Paginator->params();
        $limit = $pageParams['limit'];
        $page = $pageParams['page'];
        $serialNo = 1*$limit*($page-1)+1;?>
        <?php echo $this->Form->create(array('name'=>'deleteallfrm','action' => 'deleteall'));?>
</div>
<?php echo $this->Form->create(array('name'=>'deleteallfrm','action' => 'deleteall'));?>    
    <?php echo $this->Session->flash();?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"> <span><?php echo __('Pages');?></span></h4>
			</div>
		</div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th><?php echo $this->Form->checkbox('checkbox', array('value'=>'deleteall','name'=>'selectAll','label'=>false,'id'=>'selectAll','hiddenField'=>false));?></th>
                            <th><?php echo $this->Paginator->sort('id', __('#'), array('direction' => 'desc'));?></th>
			    <th><?php echo $this->Paginator->sort('parent_id', __('Parent Id'), array('direction' => 'desc'));?></th>
                            <th><?php echo $this->Paginator->sort('link_name', __('Link Name'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('page_name', __('Page Name'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('ordering', __('Ordering'), array('direction' => 'asc'));?></th>
                            <th><?php echo $this->Paginator->sort('published', __('Published'), array('direction' => 'asc'));?></th>
                            <th><?php echo __('Action');?></th>
                        </tr>
                        <?php foreach ($Content as $post):
                        $id=$post['Content']['id'];?>
                        <tr>
                            <td><?php echo $this->Form->checkbox(false,array('value' => $post['Content']['id'],'name'=>'data[Content][id][]','id'=>"DeleteCheckbox$id",'class'=>'chkselect'));?></td>
                            <td><?php echo $serialNo++; ?></td>
			    <td><?php echo $post['Content']['id'];?></td>
                            <td><?php echo $post['Content']['link_name']; ?></td>
			    <td><?php if($post['Content']['is_url']=="External"){echo $post['Content']['url'];} else {echo $post['Content']['page_name'];} ?></td>
                            <td><?php echo $post['Content']['ordering']; ?></td>
			    <td><?php if($post['Content']['published']=="Published"){ echo $this->Html->link('<span class="fa fa-check"></span>&nbsp;'.__('Published'),array('controller'=>'Contents','action'=>'published',$id,'Yes'),array('escape'=>false,'class'=>'btn btn-success'));}
			    else{echo $this->Html->link('<span class="fa fa-times-circle"></span>&nbsp;'.__('Unpublished'),array('controller'=>'Contents','action'=>'published',$id,'No'),array('escape'=>false,'class'=>'btn btn-danger'));}?>
                            <td><div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			    <?php echo __('Action').' ';?><span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" role="menu">
			    <li><?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;'.__('Edit'),'javascript:void(0);',array('name'=>'editallfrm','onclick'=>"check_perform_sedit('$url','$id');",'escape'=>false));?></li>
			    <li><?php echo $this->Html->Link('<span class="fa fa-trash"></span>&nbsp;'.__('Delete'),'javascript:void(0);',array('onclick'=>"check_perform_sdelete('$id');",'escape'=>false));?></li>
			    </ul>
			    </div></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php unset($post); ?>
                        </table>
                </div>
        <?php echo $this->Form->end();?>
	<?php echo $this->element('pagination');?>
    </div>
</div>


<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>
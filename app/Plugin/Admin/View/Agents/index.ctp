<div class="row">
    <div class="col-md-12">
        <div class="btn-group">
            <?php $url=$this->Html->url(array('controller'=>'Agents'));?>
	    <?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;'.__('Add New Agent'),array('controller'=>'Agents','action'=>'add'),array('escape'=>false,'class'=>'btn btn-success'));?>
            <?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;'.__('Edit'),'#',array('name'=>'editallfrm','id'=>'editallfrm','onclick'=>"check_perform_edit('$url');",'escape'=>false,'class'=>'btn btn-warning'));?>
            <?php echo $this->Html->link('<span class="fa fa-trash"></span>&nbsp;'.__('Delete'),'#',array('name'=>'deleteallfrm','id'=>'deleteallfrm','onclick'=>'check_perform_delete();','escape'=>false,'class'=>'btn btn-danger'));?>
	    <?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;'.__('Wallet'),'#',array('name'=>'walletallfrm','id'=>'walletallfrm','onclick'=>"check_perform_select('$url','wallet');",'escape'=>false,'class'=>'btn btn-info'));?>
            <?php echo $this->Html->link('<span class="glyphicon glyphicon-briefcase"></span>&nbsp;'.__('Wallet History'),array('controller'=>'awallet_histories','action'=>'index'),array('escape'=>false,'class'=>'btn btn-primary'));?>
        </div>
    </div>
        <?php echo $this->element('pagination');
        $pageParams = $this->Paginator->params();
        $limit = $pageParams['limit'];
        $page = $pageParams['page'];
        $serialNo = 1*$limit*($page-1)+1;?>
        <?php echo $this->Form->create(array('name'=>'deleteallfrm','action' => 'deleteall'));?>
</div>
<?php echo $this->Session->flash();?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"> <span><?php echo __('Agents');?></span></h4>
			</div>
		</div> 
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th><?php echo $this->Form->checkbox('checkbox', array('value'=>'deleteall','name'=>'selectAll','label'=>false,'id'=>'selectAll','hiddenField'=>false));?></th>
                            <th><?php echo $this->Paginator->sort('id', __('#'), array('direction' => 'desc'));?></th>
                            <th><?php echo $this->Paginator->sort('name', __('Name'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('address', __('Address'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('email', __('E-Mail'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('mobile', __('Mobile'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('commission', __('Commission'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('status', __('Status'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('Awallet.balance', __('Balance'), array('direction' => 'asc'));?></th>
                            <th><?php echo __('Action');?></th>
                        </tr>
                        <?php foreach ($Agent as $post):
                        $id=$post['Agent']['id'];?>
                        <tr>
                            <td><?php echo $this->Form->checkbox(false,array('value' => $post['Agent']['id'],'name'=>'data[Agent][id][]','id'=>"DeleteCheckbox$id",'class'=>'chkselect'));?></td>
                            <td><?php echo $serialNo++;?></td>
                            <td><?php echo h($post['Agent']['name']);?></td>
			    <td><?php echo h($post['Agent']['address']);?></td>
			    <td><?php echo h($post['Agent']['email']);?></td>
			    <td><?php echo h($post['Agent']['mobile']);?></td>
			    <td><?php echo h($post['Agent']['commission']);?>%</td>
			    <td><span class="label label-<?php if($post['Agent']['status']=="Active")echo"success";else echo"danger";?>"><?php echo h($post['Agent']['status']); ?></span></td>
			    <td><?php echo (empty($post['Awallet']['balance'])) ? $currency."0.00" : $currency.$this->Number->format($post['Awallet']['balance']);?></td>
			    <td><div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			    <?php echo __('Action').' ';?><span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" role="menu">
			    <li><?php echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;'.__('Wallet'),'#',array('onclick'=>"show_modal('$url/wallet/$id');",'escape'=>false));?>
			    <li><?php echo $this->Html->link('<span class="fa fa-briefcase"></span>&nbsp;'.__('Show Commission'),array('controller'=>'awallet_histories','action'=>'index',$id),array('escape'=>false));?></li>
			    <li><?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;'.__('Edit'),'#',array('name'=>'editallfrm','onclick'=>"check_perform_sedit('$url','$id');",'escape'=>false));?></li>
                            <li><?php echo $this->Html->Link('<span class="fa fa-trash"></span>&nbsp;'.__('Delete'),'#',array('onclick'=>"check_perform_sdelete('$id');",'escape'=>false));?></li>
			    </ul>
			  </div></td>
                        </tr>
                        <?php endforeach;?>
                        <?php unset($post);?>
                        </table>
                </div>
        </div>
    </div>
</div>
<?php echo $this->Form->end();?>
<?php echo $this->element('pagination');?>
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>
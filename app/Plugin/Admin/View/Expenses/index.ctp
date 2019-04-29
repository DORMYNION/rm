<div class="row">
    <div class="col-md-12">
        <div class="btn-group">
            <?php $url=$this->Html->url(array('controller'=>'Expenses'));?>
	    <?php echo $this->Html->link('<span class="fa fa-plus"></span>&nbsp;'.__('Add New Expense'),array('controller'=>'Expenses','action'=>'add'),array('escape'=>false,'class'=>'btn btn-success'));?>
            <?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;'.__('Edit'),'#',array('name'=>'editallfrm','id'=>'editallfrm','onclick'=>"check_perform_edit('$url');",'escape'=>false,'class'=>'btn btn-warning'));?>
            <?php echo $this->Html->link('<span class="fa fa-print"></span>&nbsp;'.__('Print'),'#',array('id'=>'printme','escape'=>false,'class'=>'btn btn-default'));?>
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
<div class="row" id="printable_content">
<?php echo $this->Html->css('print');?>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"> <span><?php echo __('Expenses');?></span></h4>
			</div>
		</div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th class="pbutton"><?php echo $this->Form->checkbox('checkbox', array('value'=>'deleteall','name'=>'selectAll','label'=>false,'id'=>'selectAll','hiddenField'=>false));?></th>
                            <th><?php echo $this->Paginator->sort('id', __('S.No.'), array('direction' => 'desc'));?></th>
			    <th><?php echo $this->Paginator->sort('Vendor.name', __('Vendor / Staff'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('Project.name', __('Project'), array('direction' => 'desc'));?></th>
                            <th><?php echo $this->Paginator->sort('ExpenseCategory.name', __('Category Name'), array('direction' => 'asc'));?></th>			    
			    <th><?php echo $this->Paginator->sort('invoice_no', __('Invoice Nnumber'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('invoice_date', __('Invoice Date'), array('direction' => 'asc'));?></th>
			    <th><?php echo $this->Paginator->sort('invoice_amount', __('Invoice Amount'), array('direction' => 'asc'));?></th>
			    <th><?php echo __('Balance Due');?></th>			    
			    <th><?php echo __('Status');?></th>
			    <th><?php echo $this->Paginator->sort('remarks', __('Remarks'), array('direction' => 'asc'));?></th>
                            <th class="pbutton"><?php echo __('Action');?></th>
                        </tr>
                        <?php $totalInvoice=0;$totalBalance=0;
			foreach ($Expense as $post):
                        $id=$post['Expense']['id'];
			$balanceDue=$post['Expense']['invoice_amount']-$post['Expense']['payment'];
			$totalInvoice=$totalInvoice+$post['Expense']['invoice_amount'];$totalBalance=$totalBalance+$balanceDue;
			if($balanceDue<=0)
			$status="Paid";
			else
			$status="Partial";
			?>
                        <tr>
                            <td class="pbutton"><?php echo $this->Form->checkbox(false,array('value' => $post['Expense']['id'],'name'=>'data[Expense][id][]','id'=>"DeleteCheckbox$id",'class'=>'chkselect'));?></td>
                            <td><?php echo $serialNo++;?></td>
			    <td><?php echo h($post['Vendor']['name']);?></td>
			    <td><?php echo h($post['Project']['name']);?></td>
			    <td><?php echo h($post['ExpenseCategory']['name']);?></td>			    
			    <td><?php echo h($post['Expense']['invoice_no']);?></td>
			    <td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,$post['Expense']['invoice_date']);?></td>
                            <td><?php echo $currency.$this->Number->format($post['Expense']['invoice_amount']);?></td>
			    <td><?php echo $currency.$this->Number->format($balanceDue);?></td>
			    <td><span class="label label-<?php if($status=="Paid")echo"success";else echo"danger";?>"><?php echo $status;?></span></td>
			    <td><?php echo h($post['Expense']['remarks']);?></td>			    
                            <td class="pbutton"><div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			    <?php echo __('Action');?>&nbsp;<span class="caret"></span>
			    </button>
			    <ul class="dropdown-menu" role="menu">
			    <?php if($status!="Paid"){?><li><?php echo $this->Html->link('<span class="fa fa-dollar"></span>&nbsp;'.__('Make Payment'),array('controller'=>'expenses_payments','action'=>'add',$id),array('escape'=>false));?></li><?php }?>
			    <li><?php echo $this->Html->link('<span class="fa fa-briefcase"></span>&nbsp;'.__('Show Payment'),array('controller'=>'expenses_payments','action'=>'index',$id),array('escape'=>false));?></li>
			    <li><?php echo $this->Html->link('<span class="fa fa-edit"></span>&nbsp;'.__('Edit'),'#',array('name'=>'editallfrm','onclick'=>"check_perform_sedit('$url','$id');",'escape'=>false));?></li>
                            <li><?php echo $this->Html->Link('<span class="fa fa-trash"></span>&nbsp;'.__('Delete'),'#',array('onclick'=>"check_perform_sdelete('$id');",'escape'=>false));?></li>
			    </ul>
			  </div></td>
                        </tr>
                        <?php endforeach;?>
                        <?php unset($post);?>
			<tr>
			    <td class="pbutton"></td>
			    <td colspan="6" align="right"><strong><?php echo __('Total');?></strong></td>
			    <td><strong><?php echo$currency.$this->Number->format($totalInvoice);?></strong></td>
			    <td colspan="5"><strong><?php echo$currency.$this->Number->format($totalBalance);?></strong></td>
			</tr>    
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
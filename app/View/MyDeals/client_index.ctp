<?php echo $this->Session->flash();?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"><?php echo __('My');?> <span><?php echo __('Deals');?></span></h4>
			</div>
		</div>		
			<div class="table-responsive">
				<table class="table table-striped">
				<tr>
					<th><?php echo __('#');?></th>
					<th><?php echo __('Name');?></th>
					<th><?php echo __('Invoice No');?>.</th>
					<th><?php echo __('Invoice Date');?></th>
					<th><?php echo __('Invoice Total');?></th>
					<th><?php echo __('Action');?></th>
				</tr>
				<?php $serial_no=1;
				$url=$this->Html->url(array('controller'=>'Myproperties'));
				foreach($postArr as $post):$id=$post['MyDeal']['id'];
				?>
				<tr>
					<td><?php echo$serial_no++;?></td>
					<td><?php echo h($post['Property']['name']);?></td>
					<td><?php echo h($post['MyDeal']['invoice_no']);?></td>
					<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,h($post['MyDeal']['date']));?></td>
					<td><?php echo $currency.$this->Number->format($post['MyDeal']['total_amount']);?></td>
					<td>
					<?php echo $this->Html->link('<span class="fa fa-print"></span>&nbsp;'.__('Invoice'),array('controller'=>'MyDeals','action'=>'printinvoice',$post['MyDeal']['id']),array('class'=>'btn btn-info','target'=>'_blank','escape'=>false));?>
					<?php echo $this->Html->link('<span class="glyphicon glyphicon-fullscreen"></span>&nbsp;'.__('Details'),'javascript:void(0);',array('onclick'=>"show_modal('MyDeals/view/$id');",'class'=>'btn btn-info','escape'=>false));?>
					</td>
				</tr>
				<?php endforeach;unset($post);?>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>
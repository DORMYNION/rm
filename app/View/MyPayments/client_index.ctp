<?php echo $this->Session->flash();?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"><?php echo __('My');?> <span><?php echo __('Payments');?></span></h4>
			</div>
		</div>		
			<div class="table-responsive">
				<table class="table table-striped">
				<tr>
					<th><?php echo __('#');?></th>
					<th><?php echo __('Receipt No');?>.</th>
					<th><?php echo __('Payment Date');?></th>
					<th><?php echo __('Payment');?></th>					
					<th><?php echo __('Payment Type');?></th>
					<th><?php echo __('Transaction Reference');?></th>
					<th><?php echo __('Action');?></th>
				</tr>
				<?php $serial_no=1;
				foreach($postArr as $post):$id=$post['MyPayment']['id'];?>
				<tr>
					<td><?php echo$serial_no++;?></td>
					<td><?php echo h($post['MyPayment']['receipt_no']);?></td>
					<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,h($post['MyPayment']['payment_date']));?></td>
					<td><?php echo $currency.$this->Number->format($post['MyPayment']['amount']);?></td>
					<td><?php echo h($post['Paymenttype']['name']);?></td>
					<td><?php echo h($post['MyPayment']['remarks']);?></td>
					<td>
					<?php echo $this->Html->link('<span class="fa fa-print"></span>&nbsp;'.__('Receipt'),array('controller'=>'MyPayments','action'=>'printreceipt',$id),array('class'=>'btn btn-info','target'=>'_blank','escape'=>false));?>
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
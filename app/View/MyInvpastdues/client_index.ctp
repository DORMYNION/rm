<?php echo $this->Session->flash();?>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
			<div class="widget">
				<h4 class="widget-title"> <span><?php echo __('Balance Invoices');?></span></h4>
			</div>
		</div>
                <div class="table-responsive">
		<table class="table table-striped table-bordered">
		    <tr>
			<th><?php echo __('#');?></th>
			<th><?php echo __('Client Name');?></th>
			<th><?php echo __('Phone');?></th>
			<th><?php echo __('Property');?></th>
			<th><?php echo __('Flat/Plot No.');?></th>
			<th><?php echo __('Invoice No.');?></th>
			<th><?php echo __('Payment Due On');?></th>
			<th><?php echo __('Due Date');?></th>
			<th><?php echo __('Balance');?></th>
		    </tr>
		    <?php $serialNo=0;$totalFullPayment=0;
		    foreach ($deal as $post):$serialNo++;
		    $fullPayment=$post['MyInvpastdue']['amount'];
		    $totalFullPayment=$totalFullPayment+$post['MyInvpastdue']['amount'];
		    ?>
		    <tr>
			<td><?php echo$serialNo;?></td>
			<td><?php echo h($post['Client']['name']);?></td>
			<td><?php echo h($post['Client']['phone']);?></td>
			<td><?php echo h($post['Property']['name']);?></td>
			<td><?php echo h($post['PropertiesFlat']['name']);?></td>
			<td><?php echo h($post['Deal']['invoice_no']);?></td>
			<td><?php echo h($post['MyInvpastdue']['name']);?></td>
			<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,h($post['MyInvpastdue']['date']));?></td>
			<td><?php if($post['Deal']['plan_id']!=1)echo $currency.$this->Number->format($fullPayment);?></td>
		    </tr>
		    <?php endforeach;?>
		    <?php unset($post);?>
		    <tr><td colspan="8" align="right"><strong><?php echo __('Total Balance');?></strong></td><td colspan="2"><strong><?php echo $currency.$this->Number->format($totalFullPayment);?></strong></td></tr>
		</table>
	    </div>
        </div>
    </div>
</div>
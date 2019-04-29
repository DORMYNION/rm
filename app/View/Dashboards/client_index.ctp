<?php echo $this->Session->flash();?>			
		<div class="row">	
			<div class="col-md-12">
				<div class="panel panel-midnightblue">
					<div class="panel-heading"><h4><?php echo __('Payments');?></h4></div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<tr>
								<th><?php echo __('Receipt No.');?></th>
								<th><?php echo __('Payment Date');?></th>
								<th><?php echo __('Payment');?></th>								
								<th><?php __('Payment Type');?></th>
								<th><?php echo __('Transaction Reference');?></th>
							</tr>
							<?php foreach ($dealsPayment as $post):?>
							<tr>
								<td><?php echo h($post['DealsPayment']['receipt_no']);?></td>
								<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,h($post['DealsPayment']['payment_date']));?></td>
								<td><?php echo $currency.$this->Number->format($post['DealsPayment']['amount']);?></td>
								<td><?php echo h($post['Paymenttype']['name']);?></td>
								<td><?php echo h($post['DealsPayment']['remarks']);?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php unset($post); ?>
						</table>
					</div>		
				</div>
			</div>
		</div>
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>
<?php echo $this->Session->flash();?>
			<div class="col-md-12 qaction">
			<div class="widget-modal mrg"><h4 class="widget-modal-title"><span><?php echo __('Quick Action');?></span></h4></div>
			</div>
			<div class="col-md-12 qaction">
				<div class="col-md-2">
					<?php
					echo$this->Html->link($this->Html->image('contact-icon.png',array('align'=>'center')),array('controller'=>'Clients','action'=>'add'),array('escape' => false));?>
					<br/><strong><?php echo$this->Html->link(__('Add New Contact'),array('controller'=>'Clients','action'=>'add'),array('escape' => false));?></strong>
				</div>
				<div class="col-md-2">
					<?php
					echo$this->Html->link($this->Html->image('property-icon.png',array('align'=>'center')),array('controller'=>'Properties','action'=>'add'),array('escape' => false));?>
					<br/><strong><?php echo$this->Html->link(__('Add New Property'),array('controller'=>'Properties','action'=>'add'),array('escape' => false));?></strong>
				</div>
				<div class="col-md-2">
					<?php
					echo$this->Html->link($this->Html->image('lead-icon.png',array('align'=>'center')),array('controller'=>'Leads','action'=>'add'),array('escape' => false));?>
					<br/><strong><?php echo$this->Html->link(__('Add New Lead'),array('controller'=>'Leads','action'=>'add'),array('escape' => false));?></strong>
				</div>
				<div class="col-md-2">
					<?php
					echo$this->Html->link($this->Html->image('deal-icon.png',array('align'=>'center')),array('controller'=>'Deals','action'=>'add'),array('escape' => false));?>
					<br/><strong><?php echo$this->Html->link(__('Add New Deal'),array('controller'=>'Deals','action'=>'add'),array('escape' => false));?></strong>
				</div>
				<div class="col-md-2">
					<?php
					echo$this->Html->link($this->Html->image('expense-icon.png',array('align'=>'center')),array('controller'=>'Expenses','action'=>'add'),array('escape' => false));?>
					<br/><strong><?php echo$this->Html->link(__('Add New Expense'),array('controller'=>'Expenses','action'=>'add'),array('escape' => false));?></strong>
				</div>
				<div class="col-md-2">
					<?php
					echo$this->Html->link($this->Html->image('purchase-icon.png',array('align'=>'center')),array('controller'=>'Purchases','action'=>'add'),array('escape' => false));?>
					<br/><strong><?php echo$this->Html->link(__('Add New Purchase'),array('controller'=>'Purchases','action'=>'add'),array('escape' => false));?></strong>
				</div>
			</div>
		<p>&nbsp;</p>
		<div class="row">	
			
			<div class="col-md-12">
				<div class="panel panel-midnightblue">
					<div class="panel-heading"><h4><?php echo __('Chart Wise Report');?></h4></div>
					<div class="chart">
						<div id="mywrappersr"></div>
						<?php echo $this->HighCharts->render("My Chartsr");?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			
			<div class="col-md-6">
				<div class="panel panel-midnightblue">
					<div class="panel-heading"><h4><?php echo __('New Leads');?></h4></div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<tr>
								<th><?php echo __('Name');?></th>
								<th><?php echo __('Contact');?></th>
								<th><?php echo __('For');?></th>
								<th><?php echo __('Followup Date');?></th>
							</tr>
							<?php foreach ($Lead as $post):?>
							<tr>
								<td><?php echo h($post['Lead']['name']); ?></td>
								<td><?php echo h($post['Lead']['phone']); ?></td>
								<td><?php echo h($post['Property']['name']); ?></td>
								<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear.$dateGap.$sysHour.$timeSep.$sysMin.$dateGap.$sysMer,h($post['Lead']['follow_up'])); ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php unset($post); ?>
						</table>
					</div>				
				</div> 
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-midnightblue">
					<div class="panel-heading"><h4><?php echo __('New Deals');?></h4></div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<tr>
								<th><?php echo __('Name');?></th>
								<th><?php echo __('For');?></th>
								<th><?php echo __('Amount');?></th>
								<th><?php echo __('Date');?></th>
							</tr>
							<?php foreach ($Deal as $post):?>
							<tr>
								<td><?php echo h($post['Client']['name']); ?></td>
								<td><?php echo h($post['Property']['name']); ?></td>
								<td><?php echo $currency.$this->Number->format(h($post['Deal']['total_amount']));?></td>
								<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,h($post['Deal']['date'])); ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php unset($post); ?>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			
			
			<div class="col-md-6">
				<div class="panel panel-midnightblue">
					<div class="panel-heading"><h4><?php echo __('New Property');?></h4></div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<tr>
								<th><?php echo __('Name');?></th>
								<th><?php echo __('Type');?></th>
								<th><?php echo __('For');?></th>
							</tr>
							<?php foreach ($Property as $post):?>
							<tr>
								<td><?php echo h($post['Property']['name']);?></td>
								<td><?php echo h($post['Property']['type']);?></td>
								<td><?php echo h($post['Property']['availiable']);?></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php unset($post); ?>
						</table>
					</div>				
				</div> 
			</div>
			
			<div class="col-md-6">
				<div class="panel panel-midnightblue">
					<div class="panel-heading"><h4><?php echo __('New Expenses');?></h4></div>
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<tr>
								<th><?php echo __('Category');?></th>
								<th><?php echo __('Amount');?></th>
								<th><?php echo __('Date');?></th>
								<th><?php echo __('Remarks');?></th>
							</tr>
							<?php foreach ($Expense as $post):?>
							<tr>
								<td><?php echo h($post['ExpenseCategory']['name']); ?></td>
								<td><?php echo $currency.$this->Number->format(h($post['ExpensesPayment']['amount']));?></td>
								<td><?php echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,h($post['ExpensesPayment']['date'])); ?></td>
								<td><?php echo h($post['ExpensesPayment']['remarks']); ?></td>
                        </tr>
                        <?php endforeach;?>
                        <?php unset($post);?>
						</table>
					</div>
				</div>
			</div>
		</div>		
			
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>
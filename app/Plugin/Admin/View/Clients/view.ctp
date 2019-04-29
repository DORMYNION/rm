<div class="container">
    <div class="row">
    <?php echo $this->Session->flash();?>
	<div class="col-md-12">    
	    <div class="panel panel-default mrg">
		<div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><span><?php echo __('Client Details');?></span></strong></h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div></div>
		<div class="panel-body">
		    <div class="table-responsive">
			<table class="table table-bordered">
			    <tr>
				<td colspan="4"><h3><?php echo __('Applicant Information');?></h3></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Name of the Applicant');?></small></strong></td>
				<td><?php echo h($post['Client']['name']);?></td>
				<td><strong><small class="text-danger"><?php echo __("Father's/Husband Name");?></small></strong></td>
				<td><?php echo h($post['Client']['father_name']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Address');?></small></strong></td>
				<td><?php echo h($post['Client']['address']);?></td>
				<td><strong><small class="text-danger"><?php echo __('District');?></small></strong></td>
				<td><?php echo h($post['Client']['district']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('State');?></small></strong></td>
				<td><?php echo h($post['Client']['state']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Pincode');?></small></strong></td>
				<td><?php echo h($post['Client']['pincode']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Nationality');?></small></strong></td>
				<td><?php echo h($post['Client']['nationality']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Pan');?></small></strong></td>
				<td><?php echo h($post['Client']['pan']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Date of Birth');?></small></strong></td>
				<td><?php echo $this->Time->Format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,$post['Client']['dob']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Occupation with detail');?></small></strong></td>
				<td><?php echo h($post['Client']['occupation']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Mobile');?></small></strong></td>
				<td><?php echo h($post['Client']['phone']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Email');?></small></strong></td>
				<td><?php echo h($post['Client']['email']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Last Login');?></small></strong></td>
				<td colspan="3"><?php if($post['Client']['last_login']){ echo $this->Time->format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear.$dateGap.$sysHour.$timeSep.$sysMin.$timeSep.$sysSec.$dateGap.$sysMer,$post['Client']['last_login']);}?></td>				
			    </tr>
			    <tr>
				<td colspan="4">
				<?php $photo=null; if($post['Client']['photo'])$photo='client_thumb/'.$post['Client']['photo'];else $photo='nia.png';echo$this->Html->image($photo,array('height'=>150));?>
				</td>
			    </tr>
			    <?php if($post['ClientsCoapplicant']){
				foreach($post['ClientsCoapplicant'] as $k=>$value):?>
			    <tr>
				<td colspan="4"><h3><?php echo __('Co-Applicant Information').' ('.++$k.')'?></h3></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Name of the Applicant');?></small></strong></td>
				<td><?php echo h($value['name']);?></td>
				<td><strong><small class="text-danger"><?php echo __("Father's/Husband Name");?></small></strong></td>
				<td><?php echo h($value['father_name']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Address');?></small></strong></td>
				<td><?php echo h($value['address']);?></td>
				<td><strong><small class="text-danger"><?php echo __('District');?></small></strong></td>
				<td><?php echo h($value['district']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('State');?></small></strong></td>
				<td><?php echo h($value['state']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Pincode');?></small></strong></td>
				<td><?php echo h($value['pincode']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Nationality');?></small></strong></td>
				<td><?php echo h($value['nationality']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Pan');?></small></strong></td>
				<td><?php echo h($value['pan']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Date of Birth');?></small></strong></td>
				<td><?php echo $this->Time->Format($sysDay.$dateSep.$sysMonth.$dateSep.$sysYear,$value['dob']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Occupation with detail');?></small></strong></td>
				<td><?php echo h($value['occupation']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Mobile');?></small></strong></td>
				<td><?php echo h($value['phone']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Email');?></small></strong></td>
				<td><?php echo h($value['email']);?></td>
			    </tr>
			    <tr>
				<td colspan="4">
				<?php $photo=null; if($value['photo'])$photo='coapplicant_thumb/'.$value['photo'];else $photo='nia.png';echo$this->Html->image($photo,array('height'=>150));?>
				</td>
			    </tr>
			    <?php endforeach;unset($value); }?>
			</table>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>

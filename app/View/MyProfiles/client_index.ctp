    <div class="row">
    
	<div class="col-md-12">
	<?php echo $this->Session->flash();?>
	    <div class="panel panel-default">
		<div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><?php echo __('My');?> <span><?php echo __('Profile');?></span></strong></h4></div></div>
		<div class="panel-body">
		    <div class="table-responsive">
			<table class="table table-bordered">
			    <tr>
				<td colspan="4"><h3><?php echo __('Client Information');?></h3></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Client ID');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['holder_id']);?></td>
				<td><strong><small class="text-danger"></small></strong></td>
				<td></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Name of the Applicant');?></small></strong></td>
				<td><?php h($post['MyProfile']['name']);?></td>
				<td><strong><small class="text-danger"><?php echo __("Father's/Husband Name");?></small></strong></td>
				<td><?php echo h($post['MyProfile']['father_name']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Address');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['address']);?></td>
				<td><strong><small class="text-danger"><?php echo __('State');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['state']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('District');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['district']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Pincode');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['pincode']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Nationality');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['nationality']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Pan');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['pan']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Date of Birth');?></small></strong></td>
				<td><?php echo $this->Time->Format($dtFormat,$post['MyProfile']['dob']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Occupation with detail');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['occupation']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Mobile');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['phone']);?></td>
				<td><strong><small class="text-danger"><?php echo __('Email');?></small></strong></td>
				<td><?php echo h($post['MyProfile']['email']);?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Last Login');?></small></strong></td>
				<td colspan="3"><?php if($post['MyProfile']['last_login']){ echo $this->Time->format($dtmFormat,$post['MyProfile']['last_login']);}?></td>				
			    </tr>
			    <tr>
				<td colspan="4">
				<?php $photo=null; if($post['MyProfile']['photo'])$photo='client_thumb/'.$post['MyProfile']['photo'];else $photo='nia.png';echo$this->Html->image($photo,array('height'=>150));?>
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
				<td><?php echo $this->Time->Format($dtFormat,$value['dob']);?></td>
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
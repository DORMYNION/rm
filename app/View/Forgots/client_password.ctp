<div class="header-title"><?php echo __('Forgot Password');?></div>
<div class="">
	<?php echo $this->Session->flash();?>
	<?php echo $this->Form->create('Forgot');?>
	<div class="form-group">
		<div class="row"><label for="inputEmail3" class="col-sm-12 control-label"><?php echo __('Login ID');?> :</label></div>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<?php echo $this->Form->input('member',array('label' => false,'class'=>'form-control','placeholder'=>__('Login ID'),'required'=>true,'div'=>false));?>
		</div>
	</div>
	<div class="form-group">
		<div class="row"><label for="inputEmail3" class="col-sm-12 control-label"><?php echo __('Mobile');?> :</label></div>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
		<?php echo $this->Form->input('mobile',array('type'=>'number','label' => false,'class'=>'form-control','placeholder'=>__('Mobile Number'),'required'=>true,'div'=>false));?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $this->Form->button(__('Password Recovery'),array('class'=>'btn btn-primary btn-block'));?>
	</div>
	<div class="form-group">
		<?php echo __('Sign In?').'&nbsp;'.$this->Html->link('Click Here',array('controller'=>'Users','action'=>'login'),array('class'=>'log-link'));?>		
	</div>
	<?php echo$this->Form->end(null);?>
</div>
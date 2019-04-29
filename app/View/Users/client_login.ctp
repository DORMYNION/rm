<div class="header-title"><?php echo __('Client Login');?></div>
<div class="">
	<?php echo $this->Session->flash();?>
	<?php echo $this->Form->create('User');?>
	<div class="form-group">
		<div class="row"><label for="inputEmail3" class="col-sm-12 control-label"><?php echo __('Login ID');?> :</label></div>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<?php echo $this->Form->input('mem',array('label' => false,'class'=>'form-control validate[required]','placeholder'=>__('Login Id'),'required'=>true,'div'=>false));?>
		</div>
	</div>
	<div class="form-group">
		<div class="row"><label for="pass" class="col-sm-12 control-label"><?php echo __('Password');?> :</label></div>
		<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-lock"></i></span>
			<?php echo $this->Form->input('password',array('label' => false,'class'=>'form-control validate[required,minSize[4]]','placeholder'=>__('Password'),'required'=>true,'div'=>false));?>
		</div>
	</div>
	<div class="form-group">
		<?php echo $this->Form->button('<span class="fa fa-sign-in"></span>&nbsp;'.__('Login'),array('class'=>'btn btn-primary btn-block'));?>		
	</div>
	<div class="form-group">
		<?php echo __('Forgot Password?');?>&nbsp;<?php echo$this->Html->link('Click Here',array('controller'=>'Forgots','action'=>'password'),array('class'=>'log-link'));?>
	</div>
	<?php echo$this->Form->end(null);?>
</div>
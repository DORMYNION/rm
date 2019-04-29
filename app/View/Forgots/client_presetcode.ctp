<div class="header-title"><?php echo __('Verification Code');?></div>
<div class="">
    <?php echo $this->Session->flash();?>
    <?php echo $this->Form->create('Forgot');?>
    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
            <?php echo $this->Form->input('verificationcode',array('autocomplete'=>'off','label' => false,'class'=>'form-control','required'=>true,'placeholder'=>__('Enter the verification code sent to mobile/email'),'div'=>false));?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $this->Form->button(__('Verify'),array('class'=>'btn btn-primary btn-block'));?>
    </div>
    <?php echo$this->Form->end();?>
</div>
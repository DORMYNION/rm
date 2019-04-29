<script type="text/javascript">
$(document).ready(function(){
  $('#password').change(function(){validatePassword();});
  $('#con_password').keyup(function(){validatePassword();})
function validatePassword(){
  if($('#password').val() != $('#con_password').val()) {
    document.getElementById('con_password').setCustomValidity("Passwords Don't Match");
  } else {
   document.getElementById('con_password').setCustomValidity('');
  }
}
});
</script>

<div class="header-title"><?php echo __('Reset Password');?></div>
<div class="">
    <?php echo $this->Session->flash();?>
    <?php echo $this->Form->create('Forgot');?>
    <div class="form-group">
        <div class="row"><label for="inputEmail3" class="col-sm-12 control-label"><?php echo __('Password');?> :</label></div>
        <?php echo $this->Form->input('password',array('id'=>'password','value'=>'','autocomplete'=>'off','label' => false,'required'=>true,'class'=>'form-control','placeholder'=>__('Password'),'div'=>false));?>        
    </div>
    <div class="form-group">
        <div class="row"><label for="inputEmail3" class="col-sm-12 control-label"><?php echo __('Confirm Password');?> :</label></div>
        <?php echo $this->Form->input('password',array('value'=>'','id'=>'con_password','autocomplete'=>'off','label' => false,'required'=>true,'class'=>'form-control','placeholder'=>__('Confirm Password'),'div'=>false));?>
    </div>    
    <div class="form-group">
        <?php echo $this->Form->button('<span class="fa fa-refresh"></span>&nbsp;'.__('Update my password'),array('class'=>'btn btn-primary btn-block'));?>
        </div>
    </div>
    <?php echo$this->Form->end();?>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#startDate').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'<?php echo $dpFormat;?>'});
    });
</script>
<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Edit Deal');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Deal', array( 'controller' => 'Deals', 'action' => 'edit','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Invoice Date').':';?></small></label>
                <div class="col-sm-2">
                   <div class="input-group date" id="startDate">                        
                    <?php echo $this->Form->input('date',array('type'=>'text','value'=>$this->Time->format($dtFormat,$post['Deal']['date']),'label' => false,'class'=>'form-control','div'=>false));?>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>                
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Invoice').' #:';?></small></label>
                <div class="col-sm-2">
                   <?php echo $this->Form->input('invoice_no',array('label' => false,'class'=>'form-control','div'=>false));?>
                </div>
	     </div>
            <div class="form-group">
		<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Comment/Remarks').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('remarks',array('label' => false,'class'=>'form-control','placeholder'=>__('Comment/Remarks'),'div'=>false));?>
                </div>                        
            </div>
            <div class="form-group text-left">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span>&nbsp;<?php echo __('Save');?></button>
                    <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span>&nbsp;<?php echo __('Cancel');?></button><?php }?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
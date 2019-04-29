<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Extra payments');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Etcpayment', array( 'controller' => 'Etcpayments', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Payment Due on').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Payment Due on'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Short Name').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('short',array('label' => false,'class'=>'form-control','placeholder'=>__('Short Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Unit').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select('unit_id',$unitOption,array('label' => false,'class'=>'form-control','empty'=>__('Select'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Price').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('rate',array('label' => false,'class'=>'form-control','placeholder'=>__('Price'),'div'=>false));?>
                </div>
            </div>
                <div class="form-group text-left">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span>&nbsp;<?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span>&nbsp;'.__('Close'),array('controller'=>'Etcpayments','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
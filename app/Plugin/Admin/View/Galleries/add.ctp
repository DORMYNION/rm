<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Gallery');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Gallery', array('class'=>'form-horizontal','type' => 'file'));?>
        <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Category').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select('category_id',$category,array('class'=>'form-control','empty'=>__('Select')));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Name').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Ordering').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('ordering',array('label' => false,'class'=>'form-control','placeholder'=>__('Ordering'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Photo').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('photo', array('required'=>true,'type' => 'file','label'=>false,'class'=>'')); ?>
                </div>
            </div>
            
                <div class="form-group text-left">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span>&nbsp;<?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span>&nbsp;'.__('Close'),array('controller'=>'Galleries','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
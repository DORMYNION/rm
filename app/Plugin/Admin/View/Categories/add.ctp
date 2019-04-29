<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Category');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Category', array('class'=>'form-horizontal'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Name').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Short Name').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('short_name',array('label' => false,'class'=>'form-control','placeholder'=>__('Short Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Ordering').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('ordering',array('label' => false,'class'=>'form-control','placeholder'=>__('Ordering'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Type').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select('type',array('PRJ'=>__('Project'),'PHO'=>__('Gallery')),array('class'=>'form-control','empty'=>__('Select')));?>
                </div>
            </div>
                <div class="form-group text-left">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span>&nbsp;<?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span>&nbsp;'.__('Close'),array('controller'=>'Categories','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
    <div class="col-md-12">
        <?php echo $this->Session->flash();?>
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo __('Add');?> <?php echo __('Vendors');?> / <?php echo __('Staff');?></div>
            <div class="panel-body">
            <?php echo $this->Form->create('Vendor', array( 'controller' => 'Vendors', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
                <div class="form-group">
                    <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Name');?>:</small></label>
                    <div class="col-sm-6">
                       <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Address');?>:</small></label>
                    <div class="col-sm-6">
                       <?php echo $this->Form->input('address',array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Contact');?>:</small></label>
                    <div class="col-sm-6">
                       <?php echo $this->Form->input('contact',array('label' => false,'class'=>'form-control','placeholder'=>__('Contact'),'div'=>false));?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Licence No.');?>:</small></label>
                    <div class="col-sm-6">
                       <?php echo $this->Form->input('licence_no',array('label' => false,'class'=>'form-control','placeholder'=>__('Licence No.'),'div'=>false));?>
                    </div>
                </div>
                <div class="form-group text-left">
                    <div class="col-sm-offset-4 col-sm-6">
                        <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span> '.__('Close'),array('controller'=>'Vendors','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Project');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Project', array( 'controller' => 'Projects', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','type' => 'file'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Category');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->select('category_id',$category,array('class'=>'form-control','empty'=>__('Select')));?>
                </div>
		<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Project Name');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Project Name'),'div'=>false));?>
                </div>
            </div>            
            <div class="form-group">                
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('City');?>:</small></label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('city',array('label' => false,'class'=>'form-control','placeholder'=>__('City'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('State');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('state',array('label' => false,'class'=>'form-control','placeholder'=>__('State'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">                
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('address',array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Nearest Location');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('nearest_location',array('label' => false,'class'=>'form-control','placeholder'=>__('Nearest Location'),'div'=>false));?>
                </div>
            </div>
	    <div class="form-group">   
		<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('How to reach');?>:</small></label>
		<div class="col-sm-4">
		   <?php echo $this->Form->input('reach',array('label' => false,'class'=>'form-control','placeholder'=>__('How to reach'),'div'=>false));?>
		</div>
		<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Why purchase');?>:</small></label>
		<div class="col-sm-4">
		   <?php echo $this->Form->input('purchase',array('label' => false,'class'=>'form-control','placeholder'=>__('Why purchase'),'div'=>false));?>
		</div>
	    </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Description');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('description',array('label' => false,'class'=>'form-control','placeholder'=>__('Description'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Add Photo');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('Pr.ProjectsPhoto.', array('type' => 'file','label'=>false,'multiple'=>'multiple','class'=>'')); ?>
                </div>
            </div>
	    <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Add Layout Plan');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('Pr.ProjectsLayoutplan.', array('type' => 'file','label'=>false,'multiple'=>'multiple','class'=>'')); ?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Add Location Map');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('Pr.ProjectsLocationmap.', array('type' => 'file','label'=>false,'multiple'=>'multiple','class'=>'')); ?>
                </div>
            </div>            
            <div class="form-group text-left">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span> '.__('Close'),array('controller'=>'Projects','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
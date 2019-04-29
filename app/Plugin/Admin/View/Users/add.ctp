<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add');?> <?php echo __('Users');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('User', array( 'controller' => 'User', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label"><?php echo __('User');?> <?php echo __('Level');?></label>
                <div class="col-sm-9">
                    <?php echo $this->Form->select('ugroup_id',$ugroup,array('empty'=>null,'label' => false,'class'=>'form-control','div'=>false));?>
                    </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label"><small><?php echo __('Username');?></small></label>
                <div class="col-sm-9">
                   <?php echo $this->Form->input('username',array('label' => false,'class'=>'form-control','placeholder'=>__('User Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label"><small><?php echo __('Password');?></small></label>
                <div class="col-sm-9">
                   <?php echo $this->Form->password('password',array('label' => false,'class'=>'form-control validate[required,minSize[4],maxSize[15]]','required'=>'required','placeholder'=>__('Password'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label"><small><?php echo __('Name');?></small></label>
                <div class="col-sm-9">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label"><small><?php echo __('Email');?></small></label>
                <div class="col-sm-9">
                   <?php echo $this->Form->input('email',array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-3 control-label"><small><?php echo __('Mobile');?></small></label>
                <div class="col-sm-9">
                   <?php echo $this->Form->input('mobile',array('label' => false,'class'=>'form-control','placeholder'=>__('Mobile'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group text-left">
                <div class="col-sm-offset-3 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span> '.__('Close'),array('controller'=>'Users','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
            <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
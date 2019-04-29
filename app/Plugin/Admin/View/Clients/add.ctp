<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Client');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Client', array( 'controller' => 'Clients', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','type' => 'file'));?>
            <div class="panel panel-default">
            <div class="panel-heading"><strong><?php echo __('Applicant Information');?></strong></div>
            <div class="panel-body">
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Name of the Applicant').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name of the Applicant'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __("Father's/Husband Name").':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('father_name',array('label' => false,'class'=>'form-control','placeholder'=>__("Father's/Husband Name"),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('address',array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                </div>    
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('District').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('district',array('label' => false,'class'=>'form-control','placeholder'=>__('District'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('State').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('state',array('label' => false,'class'=>'form-control','placeholder'=>__('State'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Pincode').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('pincode',array('label' => false,'class'=>'form-control','placeholder'=>__('Pincode'),'div'=>false));?>
                </div>                
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Nationality').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('nationality',array('label' => false,'class'=>'form-control','placeholder'=>__('Nationality'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Pan').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('pan',array('label' => false,'class'=>'form-control','placeholder'=>__('Pan Number'),'div'=>false));?>
                </div>                
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Date of Birth').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('dob',array('minYear'=>date('Y')-100,'maxYear'=>date('Y')-18,'label' => false,'class'=>'input-sm','dateFormat'=>'DMY','div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Occupation with detail').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('occupation',array('label' => false,'class'=>'form-control','placeholder'=>__('Occupation with detail'),'div'=>false));?>
                </div>   
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Mobile').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('phone',array('label' => false,'class'=>'form-control','placeholder'=>__('Mobile'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Email').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('email',array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Photo').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('photo',array('label' => false,'type'=>'file','div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Identity Proof').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('id_proof',array('label' => false,'type'=>'file','div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address Proof').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('address_proof',array('label' => false,'type'=>'file','div'=>false));?>
                </div>
            </div>
             <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Co-Applicant').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('coapplicant',array('type'=>'radio','options'=>array("1"=>__('Yes'),"0"=>__('No')),'default'=>'0','legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','after'=>'</label>','label' => false,'div'=>false));?>
                </div>                
            </div>
            
            </div>
            </div>           
            <div class="form-group text-left">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span>&nbsp;<?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span>&nbsp;'.__('Close'),array('action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
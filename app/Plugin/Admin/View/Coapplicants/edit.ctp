<script type="text/javascript">
    $(document).ready(function(){
        $('#post_req').validationEngine();
        });
</script>
<div class="container">
<div class="row">
<?php echo $this->Session->flash();?>
    <div class="col-md-12">
        <div class="panel panel-default mrg">
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><span><?php echo __('Edit Co-Applicants');?></span></strong></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Coapplicant', array( 'controller' => 'Coapplicants','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal','type'=>'file'));?>
					<?php foreach ($Coapplicant as $k=>$post): $id=$post['Coapplicant']['id'];$form_no=$k;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form').' '.$form_no;?></small></strong></div>
							<div class="panel-body">
								<div class="panel panel-default">
            <div class="panel-heading"><strong><?php echo __('Applicant Information');?></strong></div>
            <div class="panel-body">
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Name of the Applicant').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Name of the Applicant'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __("Father's/Husband Name").':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.father_name",array('label' => false,'class'=>'form-control','placeholder'=>__("Father's/Husband Name"),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.address",array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                </div>    
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('District').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.district",array('label' => false,'class'=>'form-control','placeholder'=>__('District'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('State').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.state",array('label' => false,'class'=>'form-control','placeholder'=>__('State'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Pincode').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.pincode",array('label' => false,'class'=>'form-control','placeholder'=>__('Pincode'),'div'=>false));?>
                </div>                
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Nationality').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.nationality",array('label' => false,'class'=>'form-control','placeholder'=>__('Nationality'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Pan').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.pan",array('label' => false,'class'=>'form-control','placeholder'=>__('Pan Number'),'div'=>false));?>
                </div>                
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Date of Birth').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.dob",array('minYear'=>date('Y')-100,'maxYear'=>date('Y')-18,'label' => false,'class'=>'input-sm','dateFormat'=>'DMY','div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Occupation with detail').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.occupation",array('label' => false,'class'=>'form-control','placeholder'=>__('Occupation with detail'),'div'=>false));?>
                </div>   
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Mobile').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.phone",array('label' => false,'class'=>'form-control','placeholder'=>__('Mobile'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Email').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.email",array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
                </div>
            </div>
	    <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Photo').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.photo",array('label' => false,'type'=>'file','div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Identity Proof').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.id_proof",array('label' => false,'type'=>'file','div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address Proof').':';?></small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Coapplicant.address_proof",array('label' => false,'type'=>'file','div'=>false));?>
                </div>
            </div>
	    
            </div>
            </div>
                      
			<div class="form-group text-left">
			    <div class="col-sm-offset-3 col-sm-7">
			    <?php echo $this->Form->input("$k.Coapplicant.id",array('type' => 'hidden'));?>
			    </div>
			</div>
							</div>
						</div>						
                    <?php endforeach; ?>
                        <?php unset($post); ?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-3 col-sm-7">                            
                            <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;<?php echo __('Update');?></button>
                            <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span>&nbsp;<?php echo __('Cancel');?></button><?php }?>
                        </div>
                    </div>
		    <?php echo$this->Form->input('clientId',array('type'=>'hidden','name'=>'clientId','value'=>$clientId));?>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
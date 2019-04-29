<div class="container">
<div class="row">
<?php echo $this->Session->flash();?>
    <div class="col-md-12">
        <div class="panel panel-default mrg">
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><?php echo __('Edit');?> <span><?php echo __('Purchases');?></span></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Purchase', array( 'controller' => 'Purchases','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($Purchase as $k=>$post): $id=$post['Purchase']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form');?> <?php echo$form_no?></small></strong></div>
		  <div class="panel-body">
		    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Project');?>:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->select("$k.Purchase.project_id",$projectName,array('label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
                        </div>
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Seller Name');?>:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Purchase.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Seller Name'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Seller Address');?>:</small></label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input("$k.Purchase.address",array('label' => false,'class'=>'form-control','placeholder'=>__('Seller Address'),'div'=>false));?>
                        </div>
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Seller Mobile');?>:</small></label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input("$k.Purchase.mobile",array('label' => false,'class'=>'form-control','placeholder'=>__('Seller Mobile'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Property Name');?>:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Purchase.property_name",array('label' => false,'class'=>'form-control','placeholder'=>__('Property Name'),'div'=>false));?>
                        </div>
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Property Area');?>:</small></label>
                        <div class="col-sm-2">
                           <?php echo $this->Form->input("$k.Purchase.area",array('label' => false,'class'=>'form-control','placeholder'=>__('Property Area'),'div'=>false));?>			   
                        </div>
			<div class="col-sm-2">
			    <?php echo $this->Form->select("$k.Purchase.unit_id",$unitName,array('label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
			</div>
                    </div>
                    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Property Amount');?>:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Purchase.amount",array('label' => false,'class'=>'form-control','placeholder'=>__('Property Amount'),'div'=>false));?>
                        </div>
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Property Description');?>:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Purchase.description",array('label' => false,'class'=>'form-control','placeholder'=>__('Property Description'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Remarks');?>:</small></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input("$k.Purchase.remarks", array('label'=>false,'placeholder'=>__('Remarks'),'class'=>'form-control')); ?>
                        </div>                                           
                    </div>
		    <div class="form-group text-left">
			<div class="col-sm-offset-4 col-sm-6">
			    <?php echo $this->Form->input("$k.Purchase.id",array('type' => 'hidden'));?>
			</div>
		    </div>
		  </div>
		</div>
                    <?php endforeach; ?>
                        <?php unset($post); ?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-6">                            
                            <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span> <?php echo __('Update');?></button>
                            <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span> <?php echo __('Cancel');?></button><?php }?>
                        </div>
                    </div>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
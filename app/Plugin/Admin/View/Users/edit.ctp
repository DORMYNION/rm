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
	    <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><?php echo __('Edit');?> <span><?php echo __('Users');?></span></strong></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('User', array( 'controller' => 'User','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($User as $k=>$post): $id=$post['User']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form');?> <?php echo$form_no?></small></strong></div>
							<div class="panel-body">
								<?php if($id!=1){?>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('User Level');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->select("$k.User.ugroup_id",$ugroup,array('empty'=>null,'label' => false,'class'=>'form-control input-sm','div'=>false));?>
									</div>
								</div>
								<?php }?>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('User Name');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->input("$k.User.username",array('label' => false,'class'=>'form-control','placeholder'=>__('User Name'),'div'=>false));?>
									</div>
								</div>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('Password');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->password("$k.User.password",array('value'=>'','label' => false,'class'=>'form-control input-sm validate[minSize[4],maxSize[15]]','placeholder'=>__('Password'),'div'=>false));?>
									</div>
								</div>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('Name');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->input("$k.User.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
									</div>
								</div>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('Email');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->input("$k.User.email",array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
									</div>
								</div>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('Mobile');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->input("$k.User.mobile",array('label' => false,'class'=>'form-control','placeholder'=>__('Mobile'),'div'=>false));?>
									</div>
								</div>
								<?php if($id!=1){?>
								<div class="form-group">
									<label for="group_name" class="col-sm-3 control-label"><?php echo __('Status');?></label>
									<div class="col-sm-9">
									   <?php echo $this->Form->select("$k.User.status",array('Active'=>__('Active'),'Suspend'=>__('Suspend')),array('empty'=>null,'label' => false,'class'=>'form-control','div'=>false));?>
									</div>
								</div>
								<?php }?>
								<div class="form-group text-left">
									<div class="col-sm-offset-3 col-sm-7">
										<?php echo $this->Form->input("$k.User.id", array('type' => 'hidden'));?>
									</div>
								</div>
							</div>	
						</div>						
                    <?php endforeach;?>
                        <?php unset($post);?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-3 col-sm-7">                            
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
</div>
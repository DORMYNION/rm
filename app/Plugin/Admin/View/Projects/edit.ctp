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
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><?php echo __('Edit');?> <span><?php echo __('Projects');?></span></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Project', array( 'controller' => 'Projects','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($Project as $k=>$post): $id=$post['Project']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form');?> <?php echo$form_no?></small></strong></div>
		  <div class="panel-body">
		    <div class="form-group">
		     <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Project');?>:</small></label>
		    <div class="col-sm-4">
			 <?php echo $this->Form->select("$k.Project.category_id",$category,array('class'=>'form-control','empty'=>__('Select')));?>
		    </div>
		    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Project Name');?>:</small></label>
		    <div class="col-sm-4">
		       <?php echo $this->Form->input("$k.Project.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Project Name'),'div'=>false));?>
		    </div>
		</div>            
            <div class="form-group">                
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('City');?>:</small></label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input("$k.Project.city",array('label' => false,'class'=>'form-control','placeholder'=>__('City'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('State');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Project.state",array('label' => false,'class'=>'form-control','placeholder'=>__('State'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">                
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Project.address",array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Nearest Location');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Project.nearest_location",array('label' => false,'class'=>'form-control','placeholder'=>__('Nearest Location'),'div'=>false));?>
                </div>
            </div>
	    <div class="form-group">   
		<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('How to reach');?>:</small></label>
		<div class="col-sm-4">
		   <?php echo $this->Form->input("$k.Project.reach",array('label' => false,'class'=>'form-control','placeholder'=>__('How to reach'),'div'=>false));?>
		</div>
		<label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Why purchase');?>:</small></label>
		<div class="col-sm-4">
		   <?php echo $this->Form->input("$k.Project.purchase",array('label' => false,'class'=>'form-control','placeholder'=>__('Why purchase'),'div'=>false));?>
		</div>
	    </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Description');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Project.description",array('label' => false,'class'=>'form-control','placeholder'=>__('Description'),'div'=>false));?>
                </div>               
            </div>
	    <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Status');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Project.status",array('type'=>'radio','options'=>array("Active"=>__("Active"),"Suspend"=>__("Suspend")),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false,'class'=>''));?>
                </div>
		 <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Show on Front');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input("$k.Project.show_front",array('type'=>'radio','options'=>array("Yes"=>__("Yes"),"No"=>__("No")),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false,'class'=>''));?>
                </div>   
            </div>	
		      <div class="form-group text-left">
			  <div class="col-sm-offset-4 col-sm-6">
			      <?php echo $this->Form->input("$k.Project.id",array('type' => 'hidden'));?>
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
</div>
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
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><span><?php echo __('Edit Galleries');?></span></strong></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Gallery', array('class'=>'form-horizontal','type'=>'file'));?>
					<?php foreach ($gallery as $k=>$post): $id=$post['Gallery']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form').' '.$form_no;?></small></strong></div>
		  <div class="panel-body">
		  <div class="form-group">
                      <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Category').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select("$k.Gallery.category_id",$category,array('class'=>'form-control','empty'=>__('Select')));?>
                </div>
                 </div>
		    <div class="form-group">
			  <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Name').':';?></small></label>
			  <div class="col-sm-6">
			     <?php echo $this->Form->input("$k.Gallery.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
			  </div>
		    </div>
		   
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Ordering').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input("$k.Gallery.ordering",array('label' => false,'class'=>'form-control','placeholder'=>__('Ordering'),'div'=>false));?>
                </div>
            </div>
	    <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Photo').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input("$k.Gallery.photo", array('type' => 'file','label'=>false,'class'=>'')); ?>
                </div>
            </div>
            
	    <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Status').':';?></small></label>
                <div class="col-sm-6">
		<?php
		$option=array('Active'=>__('Active'),'Suspend'=>__('Suspend'));
		?>
                   <?php echo $this->Form->select("$k.Gallery.status",$option,array('required'=>true,'label' => false,'class'=>'form-control','empty'=>__('Select'),'div'=>false));?>
                </div>
            </div>
		      <div class="form-group text-left">
			  <div class="col-sm-offset-4 col-sm-6">
			       <?php echo $this->Form->input("$k.Gallery.id",array('type' => 'hidden'));?>
			  </div>
		      </div>
		  </div>
		</div>
                    <?php endforeach; ?>
                        <?php unset($post); ?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-4 col-sm-6">                            
                            <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;<?php echo __('Update');?></button>
                            <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span>&nbsp;<?php echo __('Cancel');?></button><?php }?>
                        </div>
                    </div>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
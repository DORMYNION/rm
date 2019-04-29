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
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><span><?php echo __('Edit Categories');?></span></strong></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('Category', array('class'=>'form-horizontal'));?>
					<?php foreach ($category as $k=>$post): $id=$post['Category']['id'];$form_no=$k+1;?>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form').' '.$form_no;?></small></strong></div>
		  <div class="panel-body">
		    <div class="form-group">
			  <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Name').':';?></small></label>
			  <div class="col-sm-6">
			     <?php echo $this->Form->input("$k.Category.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Name'),'div'=>false));?>
			  </div>
		    </div>
		    <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Short Name').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input("$k.Category.short_name",array('label' => false,'class'=>'form-control','placeholder'=>__('Short Name'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Ordering').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input("$k.Category.ordering",array('label' => false,'class'=>'form-control','placeholder'=>__('Ordering'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Type').':';?></small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select("$k.Category.type",array('PRJ'=>__('Project'),'PHO'=>__('Gallery')),array('class'=>'form-control','empty'=>__('Select')));?>
                </div>
            </div>
	    <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Status').':';?></small></label>
                <div class="col-sm-6">
		<?php
		$option=array('Active'=>__('Active'),'Suspend'=>__('Suspend'));
		?>
                   <?php echo $this->Form->select("$k.Category.status",$option,array('required'=>true,'label' => false,'class'=>'form-control','empty'=>__('Select'),'div'=>false));?>
                </div>
            </div>
		      <div class="form-group text-left">
			  <div class="col-sm-offset-4 col-sm-6">
			      <?php echo $this->Form->input("$k.Category.id",array('type' => 'hidden'));?>
			  </div>
		      </div>
		  </div>
		</div>
                    <?php endforeach; ?>
                        <?php unset($post); ?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-4 col-sm-6">                            
                            <button type="submit" class="btn btn-success"><span class="fa fa-refresh"></span>&nbsp;<?php echo __('Update');?></button>
                            <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span>&nbsp;<?php echo __('Cancle');?></button><?php }?>
                        </div>
                    </div>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="container">
<div class="row">
<?php echo $this->Session->flash();?>
    <div class="col-md-12">
        <div class="panel panel-default mrg">
            <div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><?php echo __('Edit');?> <span><?php echo __('Flats/Plots');?></span></h4><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div></div>
                <div class="panel-body">
					<?php echo $this->Form->create('PropertiesFlat', array( 'controller' => 'PropertiesFlats','action'=>"edit/$propertyId",'name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($PropertiesFlat as $k=>$post): $id=$post['PropertiesFlat']['id'];$form_no=$k+1;?>
						<script type="text/javascript">
						    $(document).ready(function(){
							<?php if($post['PropertiesFlat']['type']=="Flat"){?>
							$('#flat<?php echo$k;?>').show();<?php }else{?>
							$('#flat<?php echo$k;?>').hide();<?php }?>
							$('#<?php echo$k;?>PropertiesFlatTypeFlat').click(function(){$('#flat<?php echo$k;?>').show();});
							$('#<?php echo$k;?>PropertiesFlatTypePlot').click(function(){$('#flat<?php echo$k;?>').hide();});
						    });
						</script>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form');?> <?php echo$form_no?></small></strong></div>
		  <div class="panel-body">
			<div class="form-group">
                <div class="form-group">               
                    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Type');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.type",array('type'=>'radio','options'=>array('Flat'=>__('Flat'),'Plot'=>__('Plot')),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false,'class'=>''));?>
                    </div> 
		    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Flat/Plot Name');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.name",array('label' => false,'class'=>'form-control','placeholder'=>__('Flat/Plot Name'),'div'=>false));?>
                    </div>
		</div>
		<div class="form-group"> 
                    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Amount');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.price",array('label' => false,'class'=>'form-control','placeholder'=>__('Amount'),'div'=>false));?>
                    </div>
		    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Area');?>:</small></label>
                    <div class="col-sm-2">
                       <?php echo $this->Form->input("$k.PropertiesFlat.area",array('label' => false,'class'=>'form-control','placeholder'=>__('Area'),'div'=>false));?>
                    </div>
                    <div class="col-sm-2">
                        <?php echo $this->Form->select("$k.PropertiesFlat.unit_id",$unitName,array('label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
                    </div>
                </div>
                <div class="form-group">                    
                    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Floor/Plot No.');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.floor_no",array('label' => false,'class'=>'form-control','placeholder'=>__('Floor/Plot No.'),'div'=>false));?>
                    </div>
		    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Description');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.remarks",array('label' => false,'class'=>'form-control','placeholder'=>__('Description'),'div'=>false));?>
                    </div>		    		   
                </div>
		<div id="flat<?php echo$k;?>">
                <div class="form-group">               
                   <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Bedroom');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.bedroom",array('label' => false,'class'=>'form-control','placeholder'=>__('Bedroom'),'div'=>false));?>
                    </div>
		    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Bathroom');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.bathroom",array('label' => false,'class'=>'form-control','placeholder'=>__('Bathroom'),'div'=>false));?>
                    </div>                    
                </div>
                <div class="form-group">               
                    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Studyroom');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.studyroom",array('label' => false,'class'=>'form-control','placeholder'=>__('Studyroom'),'div'=>false));?>
                    </div>
		    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Furnished');?>:</small></label>
                    <div class="col-sm-4">
                       <?php echo $this->Form->input("$k.PropertiesFlat.furnished",array('type'=>'radio','options'=>array('Y'=>__("Yes"),"N"=>__("No")),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false,'class'=>''));?>
                    </div>                   
                </div>
			</div>
		<div class="form-group text-left">
		     <div class="col-sm-offset-4 col-sm-6">
			 <?php echo $this->Form->input("$k.PropertiesFlat.id",array('type' => 'hidden'));?>
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
		    <?php echo$this->Form->input('propertyId',array('type'=>'hidden','name'=>'propertyId','value'=>$propertyId));?>
                <?php echo$this->Form->end();?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
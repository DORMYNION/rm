<?php
echo $this->Html->css('select2/select2');
echo $this->Html->css('select2/select2-bootstrap');
echo $this->fetch('css');
echo $this->Html->script('select2.min');
echo $this->fetch('script');
$clientUrl=$this->Html->url(array('controller'=>'Leads','action'=>'clientsearch'));
$propertyUrl=$this->Html->url(array('controller'=>'Leads','action'=>'propertysearch'));
?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#startDate').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'<?php echo $dpFormat;?>'});
        $('#propertyId').select2({
        minimumInputLength: 1,
        ajax: {
          url: '<?php echo$propertyUrl?>',
          dataType: 'json',
          data: function (term, page) {
            return {
              q: term,
              q1: $('input[name="typelead"]:checked').val(),
              q2: $('#projectId').val()
            };
          },
          results: function (data, page) {
            return { results: data };
          }
        }
      });
        });
</script>
<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Lead');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Lead', array( 'controller' => 'Leads', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Name');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Name of Contact'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Address');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('address',array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Email');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('email',array('label' => false,'class'=>'form-control','placeholder'=>__('Email'),'div'=>false));?>
                </div>
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Phone No.');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('phone',array('label' => false,'class'=>'form-control','placeholder'=>__('Phone No.'),'div'=>false));?>
                </div>
            </div>
             <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Lead For');?>:</small></label>
                <div class="col-sm-3">
                   <?php echo $this->Form->input('typelead',array('name'=>'typelead','type'=>'radio','options'=>array("Commercial"=>__("Commercial"),"Residential"=>__("Residential")),'legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','label' => false,'div'=>false));?>
                   </label>
                </div>
                <label for="group_name" class="col-sm-1 control-label"><small><?php echo __('Project');?>:</small></label>
                <div class="col-sm-2">
                   <?php echo $this->Form->select('project_id',$projectName,array('id'=>'projectId','label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
                   </label>
                </div>
             <div class="col-sm-4">
                   <?php echo $this->Form->input('property_id',array('type'=>'text','placeholder'=>__('Search Property Name'),'id'=>'propertyId','label' => false,'class'=>'form-control','div'=>false));?>
                </div>                         
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Follow Up');?>:</small></label>
                <div class="col-sm-4">
                   <div class="input-group date" id="startDate">                        
                    <?php echo $this->Form->input('follow_up',array('type'=>'text','label' => false,'class'=>'form-control','div'=>false));?>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Comment/Remarks');?>:</small></label>
                <div class="col-sm-10">
                   <?php echo $this->Form->input('remarks',array('label' => false,'class'=>'form-control','placeholder'=>__('Comment/Remarks'),'div'=>false));?>
                </div>                        
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Status');?>:</small></label>
                <div class="col-sm-4">
                   <?php echo $this->Form->input('status',array('options'=>array('In Process'=>__('In Process'),'Site Visited'=>__('Site Visited'),'Document Collected'=>__('Document Collected')),'empty'=>'(Please Select)','label' => false,'class'=>'form-control','div'=>false,'default'=>'In Process'));?>
                </div>                        
            </div>
            <div class="form-group text-left">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span> '.__('Close'),array('controller'=>'Leads','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
        <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
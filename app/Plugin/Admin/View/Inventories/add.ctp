<script type="text/javascript">
    $(document).ready(function(){
        $('#paymentDate').datetimepicker({locale:'<?php echo$configLanguage;?>',format:'<?php echo $dpFormat;?>'});
        });
</script>
<div class="col-md-12">
    <?php echo $this->Session->flash();?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo __('Add Inventory');?></div>
        <div class="panel-body">
        <?php echo $this->Form->create('Inventory', array( 'controller' => 'Inventories', 'action' => 'add','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Project');?>:</small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select('project_id',$projectName,array('label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Category Name');?>:</small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select('expense_category_id',$expenseCategory,array('label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Vendor/Staff Name');?>:</small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->select('vendor_id',$vendorName,array('label' => false,'class'=>'form-control','empty'=>__('Please Select'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Invoice No.');?>:</small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('invoice_no',array('label' => false,'class'=>'form-control','placeholder'=>__('Invoice No.'),'div'=>false));?>
                </div>
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Invoice Date');?>:</small></label>
                <div class="col-sm-6">
                   <div class="input-group date" id="paymentDate">                        
                    <?php echo $this->Form->input('invoice_date',array('type'=>'text','label' => false,'class'=>'form-control','div'=>false,'default'=>$date));?>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                </div>                                           
            </div>
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Quantity');?>:</small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('invoice_qty',array('label' => false,'class'=>'form-control','placeholder'=>__('Quantity'),'div'=>false));?>
                </div>
            </div>                     
            <div class="form-group">
                <label for="group_name" class="col-sm-4 control-label"><small><?php echo __('Remarks');?>:</small></label>
                <div class="col-sm-6">
                   <?php echo $this->Form->input('remarks', array('label'=>false,'placeholder'=>__('Remarks'),'class'=>'form-control')); ?>
                </div>                                           
            </div>
            <div class="form-group text-left">
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-success"><span class="fa fa-plus-circle"></span> <?php echo __('Save');?></button>
                    <?php echo$this->Html->link('<span class="fa fa-close"></span> '.__('Close'),array('controller'=>'Inventories','action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));?>
                </div>
            </div>
            <?php echo$this->Form->end();?>
        </div>
    </div>
</div>
<?php echo $this->Session->flash();?>
<div class="row">
    <div class="col-md-12">    
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="widget">
                    <h4 class="widget-title"><span><?php echo __('Configuration Options');?></span></h4>
                </div>
            </div>
               <div class="panel-body">
                <?php echo $this->Form->create('Configuration', array( 'controller' => 'Configurations', 'action' => 'index','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Site Name');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('name',array('label' => false,'class'=>'form-control','placeholder'=>__('Site Name'),'div'=>false));?>
                        </div>
                         <label for="site_name" class="col-sm-2 control-label"><?php echo __('Organization Name');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('organization_name',array('label' => false,'class'=>'form-control','placeholder'=>__('Organization Name'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Address');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('address',array('label' => false,'class'=>'form-control','placeholder'=>__('Address'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Account Details');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('account_details',array('label' => false,'class'=>'form-control','placeholder'=>__('Account Details'),'div'=>false));?>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Domain Name');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('domain_name',array('label' => false,'class'=>'form-control','placeholder'=>__('Domain Name'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Organization Email');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('email',array('label' => false,'class'=>'form-control','placeholder'=>__('Organization Email'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Meta Title');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('meta_title',array('label' => false,'class'=>'form-control','placeholder'=>__('Meta Title'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Meta Description');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('meta_desc',array('label' => false,'class'=>'form-control','placeholder'=>__('Meta Description'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Time Zone');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->select('timezone',$this->Time->listTimezones(),array('empty'=>__('Please Select'),'label' => false,'class'=>'form-control','div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Currency');?></label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('currency',array('options'=>$currency,'empty'=>false,'label' => false,'class'=>'form-control','div'=>false,'escape'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Language');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->select('language',$language,array('empty'=>__('Please Select'),'label' => false,'class'=>'form-control','div'=>false));?>
                        </div>
                        <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Text Direction');?></small></label>
                        <div class="col-sm-4">
                            <?php echo $this->Form->input('dir_type',array('type'=>'radio','options'=>array("1"=>__('Left-to-right (LTR)'),"0"=>__('Right-to-Left (RTL)')),'default'=>'1','legend'=>false,'before' => '<label class="radio-inline">','separator' => '</label><label class="radio-inline">','after'=>'</label>','label' => false,'div'=>false));?>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Date Format');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('date_format',array('label' => false,'class'=>'form-control','data-errormessage'=>__('Date Format Required'),'placeholder'=>__('Date Format'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-6 control-label"><?php echo __('Date, Month, Year, Hour, Min, Sec, Meridian, Date Seprator, Time Seprator');?></label>                        
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Short Name');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('short_name',array('label' => false,'class'=>'form-control','placeholder'=>__('Short Name'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Contact Nos.');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('contact',array('label' => false,'class'=>'form-control','placeholder'=>__('Contact No. should be comma seprated'),'div'=>false));?>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Due Days');?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('due_days',array('label' => false,'class'=>'form-control','placeholder'=>__('Number of Due Days'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __("Late Fees(% annually)");?></label>
                        <div class="col-sm-4">
                           <?php echo $this->Form->input('late_fees',array('label' => false,'class'=>'form-control','placeholder'=>__('Late Fees(% annually)'),'div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="site_name" class="col-sm-2 control-label"><?php echo __('Email Notification');?></label>
                        <div class="col-sm-1">
                           <?php echo $this->Form->input('email_notification',array('label' => false,'class'=>'form-control','data-errormessage'=>__('Date Format Required'),'placeholder'=>__('Date Format'),'div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-3 control-label"><?php echo __('SMS Notification');?></label>
                        <div class="col-sm-1">
                           <?php echo $this->Form->checkbox('sms_notification',array('label' => false,'class'=>'form-control','div'=>false));?>
                        </div>
                        <label for="site_name" class="col-sm-3 control-label"><?php echo __('Translation');?></label>
                        <div class="col-sm-1">
                           <?php echo $this->Form->checkbox('translate',array('label' => false,'class'=>'form-control','div'=>false));?>
                        </div>
                    </div>
                    <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span>&nbsp;<?php echo __('Save Settings');?></button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
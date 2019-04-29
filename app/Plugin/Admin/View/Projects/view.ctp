<div class="container">
    <div class="row">
    <?php echo $this->Session->flash();?>
	<div class="col-md-12">    
	    <div class="panel panel-default mrg">
		<div class="panel-heading"><div class="widget-modal"><h4 class="widget-modal-title"><?php echo __('Project');?> <span><?php echo __('Details');?></span></strong></h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div></div>            
		<div class="panel-body">
		    <div class="table-responsive">
			<table class="table table-bordered">
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Name');?></small></strong></td>
				<td colspan="3"><?php echo $post['Project']['name'];?></td>
			    </tr>
			    <tr>				
				<td><strong><small class="text-danger"><?php echo __('City');?></small></strong></td>
				<td><?php echo $post['Project']['city'];?></td>
				<td><strong><small class="text-danger"><?php echo __('State');?></small></strong></td>
				<td><?php echo $post['Project']['state'];?></td>
			    </tr>
			    <tr>				
				<td><strong><small class="text-danger"><?php echo __('Address');?></small></strong></td>
				<td><?php echo $post['Project']['address'];?></td>
				<td><strong><small class="text-danger"><?php echo __('Nearest Location');?></small></strong></td>
				<td><?php echo $post['Project']['nearest_location'];?></td>
			    </tr>
			    <tr>				
				<td><strong><small class="text-danger"><?php echo __('How to reach');?></small></strong></td>
				<td><?php echo $post['Project']['reach'];?></td>
				<td><strong><small class="text-danger"><?php echo __('Why purchase');?></small></strong></td>
				<td><?php echo $post['Project']['purchase'];?></td>
			    </tr>
			    <tr>
				<td><strong><small class="text-danger"><?php echo __('Description');?>:</small></strong></td>
				<td colspan="3"><?php echo $post['Project']['description'];?></td>
			    </tr>
			</table>
		    </div>
		</div>
	    </div>
	</div>
    </div>
</div>

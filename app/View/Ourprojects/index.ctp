<?php
echo $this->Html->css('/fancybox/jquery.fancybox.css');
echo $this->Html->script('/fancybox/jquery.fancybox.pack.js');
?>
<script type="text/javascript">
$(document).ready(function(){
$(".inlinefancy").fancybox({
	'titlePosition'	: 'inside',
	'transitionIn'	: 'none',
	'transitionOut'	: 'none'
});
$(".fancybox").fancybox({
	'transitionIn'	: 'none',
	'transitionOut'	: 'none'
});
});
</script>
	<?php $id=$post['Ourproject']['id'];
	if($post['ProjectsPhoto'])
	{
		$extraPhoto=null;
		foreach($post['ProjectsPhoto'] as $k=>$value):
		if($k==0)
		{
			$photoImg='projectsphotos_thumb/'.$value['photo'];
			$imgUrl='img/projectsphotos/'.$value['photo'];
		}
		else
		{
			$extraImg='img/projectsphotos/'.$value['photo'];
			$extraPhoto.=$this->Html->link(null,"/$extraImg",array('rel'=>$post['Ourproject']['name'],'class'=>'fancybox','escape'=>false));
		}
		endforeach;
		$projectImage=$this->Html->link($this->Html->image($photoImg,array('alt'=>$post['Ourproject']['name'])),"/$imgUrl",array('rel'=>$post['Ourproject']['name'],'class'=>'fancybox','escape'=>false)).$extraPhoto;
	}
	else
	{
		$projectImage=$this->Html->image('nia.png',array('alt'=>$post['Ourproject']['name']));
	}
	if($post['ProjectsLayoutplan'])
	{
		$extraPhoto=null;
		foreach($post['ProjectsLayoutplan'] as $k=>$value):
		if($k==0)
		{
			$photoImg='img/projectslayoutplans/'.$value['photo'];
		}
		else
		{
			$imgUrl='img/projectslayoutplans/'.$value['photo'];
			$extraPhoto.=$this->Html->link(null,"/$imgUrl",array('rel'=>$post['Ourproject']['name'].'ProjectsLayoutplan','class'=>'fancybox','escape'=>false));
		}
		endforeach;
		$layoutImage=$this->Html->link(__('Layout Plan'),"/$photoImg",array('rel'=>$post['Ourproject']['name'].'ProjectsLayoutplan','class'=>'fancybox inlinefancy btn-primary btn-sm','escape'=>false)).$extraPhoto;
	}
	else
	{
		$layoutImage=$this->Form->button(__('No Layout Plan'),array('class'=>'inlinefancy btn-primary btn-sm','title'=>$post['Ourproject']['name'],'escape'=>false));
	}
	if($post['ProjectsLocationmap'])
	{
		$extraPhoto=null;
		foreach($post['ProjectsLocationmap'] as $k=>$value):
		if($k==0)
		{
			$photoImg='img/projectslocationmaps/'.$value['photo'];
		}
		else
		{
			$imgUrl='img/projectslocationmaps/'.$value['photo'];
			$extraPhoto.=$this->Html->link(null,"/$imgUrl",array('rel'=>$post['Ourproject']['name'].'ProjectsLocationmap','class'=>'fancybox','escape'=>false));
		}
		endforeach;
		$locationmapImage=$this->Html->link(__('Location Map'),"/$photoImg",array('rel'=>$post['Ourproject']['name'].'ProjectsLocationmap','class'=>'fancybox inlinefancy btn-primary btn-sm','escape'=>false)).$extraPhoto;
	}
	else
	{
		$locationmapImage=$this->Form->button(__('No Location Map'),array('class'=>'inlinefancy btn-primary btn-sm','title'=>$post['Ourproject']['name'],'escape'=>false));
	}
	
	?>
<header class="entry-header"><h1 class="entry-title "><?php echo$post['Ourproject']['name'];?></h1></header>
<div class="entry-content">
		
			<div class="col-sm-12">
					
						<div class="col-md-3 col-sm-4">
						<?php echo$projectImage;?>
						<p><br><?php echo$layoutImage;?></p>
						<p><?php echo$locationmapImage;?></p>
						</div>	
						<div class="col-md-9 col-sm-8">
								<p><strong> <?php echo __('Project Name');?> :</strong>&nbsp;&nbsp;<span class="text-danger"><?php echo$post['Ourproject']['name'];?></span></p>
								<p><strong> <?php echo __('State');?> :</strong>&nbsp;&nbsp;<span class="text-danger"><?php echo$post['Ourproject']['state'];?></span></p>
								<p><strong> <?php echo __('City');?> :</strong>&nbsp;&nbsp;<span class="text-danger"><?php echo$post['Ourproject']['city'];?></span></p>
								<p><strong> <?php echo __('Address');?> :</strong>&nbsp;&nbsp;<span class="text-danger"><?php echo$post['Ourproject']['address'];?></span></p>
								<p><strong> <?php echo __('Nearest Location');?> :</strong>&nbsp;&nbsp;<span class="text-danger"><?php echo$post['Ourproject']['nearest_location'];?></span></p>
								
								<div class="col-md-12 col-sm-12">
									<div class="col-md-3 col-sm-4 mrg-xs"><?php echo$this->Html->link(__('Description'),"#dinlinefancy$id",array('title'=>$post['Ourproject']['name'],'class'=>'inlinefancy btn-primary btn-sm','escape'=>false));?></div>
									<div class="col-md-3 col-sm-4 mrg-xs"><?php echo$this->Html->link(__('How To Reach'),"#hinlinefancy$id",array('title'=>$post['Ourproject']['name'],'class'=>'inlinefancy btn-primary btn-sm','escape'=>false));?></div>
									<div class="col-md-3 col-sm-4 mrg-xs"><?php echo$this->Html->link(__('Why purchase'),"#pinlinefancy$id",array('title'=>$post['Ourproject']['name'],'class'=>'inlinefancy btn-primary btn-sm','escape'=>false));?></div>									
								</div>
								
						</div> 
			</div>
		
</div>
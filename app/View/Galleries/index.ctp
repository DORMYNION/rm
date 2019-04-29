<?php
echo $this->Html->css('/fancybox/jquery.fancybox.css');
echo $this->Html->script('/fancybox/jquery.fancybox.pack.js');
?>
<script type="text/javascript">
$(document).ready(function(){
$(".fancybox").fancybox({
	'transitionIn'	: 'none',
	'transitionOut'	: 'none'
});
});
</script>
<header class="entry-header"><h1 class="entry-title "><?php echo h($categoryName);?></h1></header>
<div class="entry-content">
    <?php echo $this->Session->flash();?>
    <ul class="list-unstyled row">
        <?php foreach($newsPost as $post):
        $imageThumb=$post['Gallery']['dirt'].'_thumb/'.$post['Gallery']['photo'];
        $imgUrl='img/'.$post['Gallery']['dirt'].'/'.$post['Gallery']['photo'];?>
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 latest_main">
            <div class="product-thumb transition">
                <div class="image">
                    <?php echo $this->Html->link($this->Html->image($imageThumb,array('alt'=>$post['Gallery']['name'],'class'=>'img-responsive')),array('controller'=>'img','action'=>$post['Gallery']['dirt'],$post['Gallery']['photo']),array('rel'=>$post['Category']['short_name'],'class'=>'fancybox','escape'=>false));?>
                </div>
            </div>
        </li>
        <?php endforeach;unset($post);?>
    </ul>
</div>
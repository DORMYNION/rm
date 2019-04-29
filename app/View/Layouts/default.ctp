<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
  <html lang="<?php echo$configLanguage;?>" dir="<?php echo$dirType;?>">
    <head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <meta name="description" content="<?php echo$siteDescription;?>" />
	  <meta name="author" content="<?php echo$siteName;?>" />
	  <meta name="google-translate-customization" content="839d71f7ff6044d0-328a2dc5159d6aa2-gd17de6447c9ba810-f">
	  <?php echo $this->Html->charset();?>
	  <title><?php echo $siteTitle;?></title>
	<meta name="description" content="<?php echo$siteDescription;?>"/>
		<?php echo $this->Html->meta('icon');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
		echo $this->Html->css('/design900/assets/css/bootstrap.min.css');
		echo $this->Html->css('/design900/assets/css/font-awesome.min.css');
		echo $this->Html->css('/design900/assets/css/bootstrap-theme.css');
		echo $this->Html->css('/design900/assets/css/style.css');
		echo $this->Html->css('/design900/assets/css/camera.css');
		echo $this->Html->css('/design900/assets/js/fancybox/jquery.fancybox.css');
		echo $this->Html->css('validationEngine.jquery');
		echo $this->fetch('meta');		
		echo $this->fetch('css');
		echo $this->Html->script('jquery-1.8.2.min');
		echo $this->Html->script('jquery.validationEngine-en');
                echo $this->Html->script('jquery.validationEngine');
		echo $this->Html->script('/design900/assets/js/modernizr-latest.js');		              
                echo $this->Html->script('/design900/assets/js/fancybox/jquery.fancybox.pack.js');
		echo $this->Html->script('/design900/assets/js/jquery.mobile.customized.min.js');
		echo $this->Html->script('/design900/assets/js/jquery.easing.1.3.js');
		echo $this->Html->script('/design900/assets/js/camera.min.js');
		echo $this->Html->script('/design900/assets/js/bootstrap.min');
		echo $this->Html->script('/design900/assets/js/custom.js');
		echo $this->Html->script('custom.min');
		echo $this->fetch('script');
                echo $this->Js->writeBuffer();
?>   
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="design900/assets/js/html5shiv.js"></script>
	<script src="design900/assets/js/respond.min.js"></script>
	<![endif]-->
<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
.navbar-inverse .navbar-nav > .open > a {
    background: none;
    color: #8a8a8a;
}
</style>	
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				
				  <?php if(strlen($frontLogo)>0){?><?php echo$this->Html->image($frontLogo,array('alt'=>$siteName,'class'=>'img-responsive'));}?>
			</div>
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
				  <?php echo $this->element('front-menu');?>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<?php if($frontSlides==1 && $this->params['controller']==""){?>
	<header id="front-head">
		<div class="container">
					<div class="fluid_container">
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
		      <?php foreach($slides as $k=>$value): $photoImg='img/slides_thumb/'.$value['Slide']['photo'];?>a-title="<?php echo$value['Slide']['slide_name'];?>">
		        <div data-thumb="<?php echo$photoImg;?>" data-src="<?php echo$photoImg;?>">
                        </div>
		    <?php endforeach;unset($k);unset($value);?>
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<?php }?>
	<!-- /Header -->
<div>
   <section class="news-box top-margin">
        <div class="container">
  <?php echo $this->fetch('content');?>
   </div>
      </section>
</div>
      
    	 
    <footer id="footer">
		
		<div class="footer">
			<div class="container">
				<div class="row">

					<div class="col-md-4 panel">
						<div class="panel-body">
							<p class="simplenav">
						         <?php echo$siteName;?> &copy; <?php echo $this->Time->format('Y',$siteTimezone);?>		
							</p>
						</div>
					</div>
					<div class="col-md-4 panel">
						<div class="panel-body">
							<p class="simplenav">
						        <?php echo __('Time');?> <span><?php echo $this->Time->format('d-m-Y h:i:s A',$siteTimezone);?></span>		
							</p>
						</div>
					</div>

					<div class="col-md-4 panel">
						<div class="panel-body">
							<p class="text-right">
								<?php echo __('Powered by');?> <?php echo$this->Html->Link(__('Silver Syclops'),'http://www.silversyclops.net',array('target'=>'_blank'));?>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>
    <?php if($frontSlides==1 && $this->params['controller']==""){?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: '600',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false
			});

		});
	</script>
    <?php }?>
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.remenu').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>	
</body>
</html>
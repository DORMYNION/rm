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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-translate-customization" content="839d71f7ff6044d0-328a2dc5159d6aa2-gd17de6447c9ba810-f"></meta>
	<?php echo $this->Html->charset();?>
	<title><?php echo $siteTitle;?></title>
	<meta name="description" content="<?php echo$siteName;?>"/>
	
		<?php echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('/design300/assets/css/styles.min');
		echo $this->Html->css('/design300/assets/css/glyphicons.min');
		echo $this->Html->css('/design300/assets/css/font-awesome.min');
		echo $this->Html->css('validationEngine.jquery');
		echo $this->Html->css('bootstrap-datetimepicker.min');
		echo $this->Html->css('style');
		echo $this->fetch('meta');		
		echo $this->fetch('css');
                echo $this->Html->script('jquery-1.8.2.min');
		echo $this->Html->script('/design300/assets/js/less');		              
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('jquery.validationEngine-en');
                echo $this->Html->script('jquery.validationEngine');
		echo $this->Html->script('/design300/assets/js/enquire');
		echo $this->Html->script('/design300/assets/js/jquery.cookie');
		echo $this->Html->script('/design300/assets/js/jquery.nicescroll.min');
		echo $this->Html->script('/design300/assets/js/application');
		echo $this->Html->script('moment-with-locales');
		echo $this->Html->script('bootstrap-datetimepicker.min');
		echo $this->Html->script('waiting-dialog.min');
		echo $this->Html->script('custom.min');
		echo $this->fetch('script');
                echo $this->Js->writeBuffer();
		$UserArr=$this->Session->read('frontUser');
		$memberArr=$this->Session->read('Member');
 ?>
<?php if($translate>0){?>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php }?>
</head>
  <?php if($this->Session->check('frontUser')){?>
    <body class="">
    <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
       <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>
        
	<div class="navbar-header pull-left">
	  <a class="navbar-brand" href="javascript:void(0);"><?php echo$siteName;?></a>
        </div>
	<div class="navbar-header pull-right"><a class="navbar-brand" href="javascript:void(0);"><?php echo $UserArr['User']['name'];?></a></div>
	
    </header>
    <div id="page-container">
	      
	    <nav id="page-leftbar" role="navigation">
	        <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
	      <?php
	      $mainMenu=$menuArr;
	      foreach ($mainMenu as $menu):
	      $menuIcon=$menu['Page']['icon'];$menuName=$menu['Page']['model_name'];?>
	      <li <?php echo (strtolower($this->params['controller'])==strtolower($menu['Page']['controller_name']) || in_array(strtolower($this->params['controller']),explode(",",strtolower($menu['Page']['sel_name']))))?"class=\"active\"":"";?>><?php echo $this->Html->link("<i class=\"$menuIcon\"></i>&nbsp;<span>$menuName</span>",array('controller' => $menu['Page']['controller_name'],'action'=>$menu['Page']['action_name']),array('escape' => false));?></li>
	      <?php endforeach;unset($menu);?>
	    </ul> 
	    </nav>
	<div id="page-content">
	  <div id="wrap">
	    <div class="container">
            <div class="row">
	      <div class="col-xs-12">
	    <?php echo $this->fetch('content');?>
	      </div>
	  </div>
	</div>
	    </div>
	</div>
    </div>
    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li><span> <?php echo$siteOrganization;?> &copy; <?php echo $this->Time->format('Y',$siteTimezone);?></li>		 
            </ul>
	    <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
	    <div class="pull-right"><?php echo __('Powered by');?> <?php echo$this->Html->Link(__('Silver Syclops'),'http://www.silversyclops.net',array('target'=>'_blank'));?> All Rights Reserved&nbsp;&nbsp;</div>
        </div>
    </footer>

</div> <!-- page-container -->
<div class="modal fade" id="targetModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-content">        
  </div>
</div>
    </body>
    <?php } else{?>
	<body class="focusedform">
	<div class="verticalcenter">
	<?php if(strlen($frontLogo)>0){?><?php echo$this->Html->link($this->Html->image($frontLogo,array('alt'=>$siteName,'class'=>'img-responsive')),array('controller'=>'../'),array('escape'=>false));}?>
	<div class="member-login-header"><?php echo __('Client Control Panel');?></div>
	<div class="panel panel-orange">
		<div class="panel-body">
	    <?php echo $this->fetch('content');?>
		</div>
	</div>
	</div>
	</body>
	<?php }?>
</html>
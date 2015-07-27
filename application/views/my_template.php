<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo URL::base(); ?>css/template.css" rel="stylesheet">
<link href="<?php echo URL::base(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo URL::base(); ?>css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>asseet/css/TableStyles.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>asseet/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>asseet/css/jquery-ui.theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::base(); ?>asseet/css/datatables.bootstrap.css">
<script type="text/javascript" language="javascript" src="<?php echo URL::base(); ?>asseet/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL::base(); ?>asseet/js/jquery-ui.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL::base(); ?>asseet/js/datatables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL::base(); ?>asseet/js/datatables.bootstrap.js"></script>
<!-- 
<script type="text/javascript" language="javascript" src="<?php echo URL::base(); ?>asseet/js/TableTools.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo URL::base(); ?>js/getdatatable.data.js"></script> -->
<script src="<?php echo URL::base(); ?>js/bootstrap.js"></script>
<?if(Auth::instance()->logged_in()):?>
<script src="<?php echo URL::base(); ?>js/template.js"></script>
<?else:?>
<script type="text/javascript" src="<?php echo URL::base(); ?>js/getdatatable.data.js"></script>
<?endif;?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
</head>
 
<body>
<?php echo $menu;?>
<div class="container-fluid body">
<div class="row-fluid">
<?php if($positionleft):?>
<div class="span3"><?php echo $leftmenu;?></div> 
<div class="span9"><div class="hero-unit"><?php echo $content;?></div>
<?php else:?>
<div class="span12"><div class="hero-unit"><?php echo $content;?></div>
<?php endif;?>
<div class="row-fluid">
<div class="span4"><?php echo $Heading1;?></div> 
<div class="span4"><?php echo $Heading2;?></div>
<div class="span4"><?php echo $Heading3;?></div>
</div> 
<div class="row-fluid">
<div class="span4"><?php echo $Heading4;?></div> 
<div class="span4"><?php echo $Heading5;?></div>
<div class="span4"><?php echo $Heading6;?></div>
</div> 
</div> 
</div> 
<hr>
<footer>
<p>© Company 2012</p>
</footer>
</div> 
</body>
</html>
</head>

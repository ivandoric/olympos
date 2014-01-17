<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
        <?php wp_head(); ?>


        <meta name="viewport" content="width=device-width">
        
        <style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<script src="<?php bloginfo('template_url'); ?>/js/modernizr.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/autoclear.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
</head>
<body <?php body_class(); ?>>
        
        

        
     	
       

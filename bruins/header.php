<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtmll/DTD/chtml1-strict.dtd">
<html xmlns="http://www.w3org/1999/xhtml" >
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>;charset=<?php bloginfo('charset'); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<title> <?php bloginfo('name'); ?><?php wp_title(); ?> </title>
	
	<?php wp_head(); ?>
</head>
<body>
	<div id="header">
		<img src="<?php bloginfo('template_directory'); ?>/images/header.png" alt="" style="width: 831px;"/>
		<ul id="menu">
			<?php wp_list_pages('echo=1&depth=0&title_li=&sort_collum=menu_order'); ?>
		</ul>
		<hr />
	</div>

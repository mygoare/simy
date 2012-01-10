<?php
/*
Template Name:simy
Description:simple
Version:0.1
Author:mygoare
Author Url:http://www.mygoare.com
ForEmlog:4.1.0
*/
if(!defined('EMLOG_ROOT')) {exit('error!');}
require_once View::getView('module');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="keywords" content="<?php echo $site_key; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />

	<!--javascript code prettifier-->
	<link media="all" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>js/prettifier.css" type="text/css" />
	<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>js/prettifier.js"></script>
	<!--end-->
	<link media="all" rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>simy.css" type="text/css" />
	<title><?php echo $blogtitle; ?></title>
<?php doAction('index_head'); ?>
</head>
<body onload="prettyPrint()">
	<div id="header">
		<div id="headerbar"></div>
		<div id="head">
			<h1><a href="<?php echo BLOG_URL; ?>"><?php echo $blogname; ?></a></h1>
			<h3><?php echo $bloginfo; ?></h3>
		</div>
	</div>
	

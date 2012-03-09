<?php 
/*
* 自建页面模板
*/
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
<div id="wrap">
<div id="content">
<div id="contentleft">
<div class="essay">
	<h2><?php echo $log_title; ?></h2>
	<?php echo $log_content; ?>
	<p class="att"><?php blog_att($logid); ?></p>
	<?php blog_comments($comments); ?>
	<?php blog_comments_post($logid,$ckname,$ckmail,$ckurl,$verifyCode,$allow_remark); ?>
	<div style="clear:both;"></div>
</div>
</div><!--end #contentleft-->
</div>
<div class="clear"></div>
<?php
 include View::getView('footer');
?>

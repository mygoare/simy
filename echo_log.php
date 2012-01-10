<?php
if(!defined('EMLOG_ROOT')) {exit('error!');}
?>
	<div id="wrap">
		<div id="content">
			<div id="contentleft">
				<div class="essay">
					<h2><?php topflg($top); ?><?php echo $log_title; ?></h2>
					<span class="datetime">Posttime : <?php echo gmdate('Y-n-j G:i l', $date); ?> Aauthor : <?php blog_author($author); ?> <?php blog_sort($logid); ?> <?php editflg($logid,$author); ?>
					</span>
	<?php echo $log_content; ?>
				</div>
			</div>
		</div>
		<div class="clear"></div>
<?php
// include View::getView('side');
 include View::getView('footer');
?>

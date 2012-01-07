<?php
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
	<div id="wrap">
		<div id="content">
			<div id="contentleft">
<?php doAction('index_loglist_top'); ?>
<?php foreach($logs as $value): ?>
				<div class="essay">
					<h2><?php topflg($value['top']); ?><a href="<?php echo $value['log_url']; ?>"><?php echo $value['log_title']; ?></a></h2>
					<span class="datetime">Posttime : <?php echo gmdate('Y-n-j G:i l', $value['date']); ?> | Aauthor : <?php blog_author($value['author']); ?> | <?php blog_sort($value['logid']); ?> <?php editflg($value['logid'],$value['author']); ?>
					</span>
	<?php echo $value['log_description']; ?>
				</div>
<?php endforeach; ?>
			</div>
			<!--
			<div id="sidebar">
				<ul>
					<li>
						<h3>分类归档</h3>
						<ul>
							<li>
								<a href="">前端技术</a>
							</li>
							<li>
								<a href="">平日杂记</a>
							</li>
							<li>
								<a href="">电脑相关</a>
							</li>
							<li>
								<a href="">博客之路</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			-->
		<div id="page"><?php echo $page_url;?></div>
		</div><!--end #content-->
		<div class="clear"></div>
<?php
// include View::getView('side');
 include View::getView('footer');
?>

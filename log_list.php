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
					<span class="datetime">Posttime : <?php echo gmdate('Y-n-j G:i l', $value['date']); ?> | Aauthor : <?php blog_author($value['author']); ?> | <?php blog_sort($value['logid']); ?> | View : <a href="<?php echo $value['log_url']; ?>"><?php echo $value['views']; ?></a> <?php editflg($value['logid'],$value['author']); ?>
					</span>
	<?php echo $value['log_description']; ?>
				</div>
<?php endforeach; ?>
			</div>
			<div id="sidebar">
				<ul>
<li>
<p>My Tags:</p>
<p>Mac , Vim , Github</p>
</li>
<?php 
$widgets = !empty($options_cache['widgets1']) ? unserialize($options_cache['widgets1']) : array();
doAction('diff_side');
foreach ($widgets as $val)
{
	$widget_title = @unserialize($options_cache['widget_title']);
	$custom_widget = @unserialize($options_cache['custom_widget']);
	if(strpos($val, 'custom_wg_') === 0)
	{
		$callback = 'widget_custom_text';
		if(function_exists($callback))
		{
			call_user_func($callback, htmlspecialchars($custom_widget[$val]['title']), $custom_widget[$val]['content']);
		}
	}else{
		$callback = 'widget_'.$val;
		if(function_exists($callback))
		{
			preg_match("/^.*\s\((.*)\)/", $widget_title[$val], $matchs);
			$wgTitle = isset($matchs[1]) ? $matchs[1] : $widget_title[$val];
			call_user_func($callback, htmlspecialchars($wgTitle));
		}
	}
}
?>
				</ul>
			</div>
		<div id="page"><?php echo $page_url;?></div>
		</div><!--end #content-->
		<div class="clear"></div>
<?php
// include View::getView('side');
 include View::getView('footer');
?>

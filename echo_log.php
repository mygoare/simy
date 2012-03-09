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
	<div class="nextlog"><?php neighbor_log($neighborLog); ?></div>
<!-- JiaThis Button BEGIN -->
<div id="jiathis_style_32x32">
<a class="jiathis_button_qzone"></a>
<a class="jiathis_button_tsina"></a>
<a class="jiathis_button_tqq"></a>
<a class="jiathis_button_fanfou"></a>
<a class="jiathis_button_twitter"></a>
<a class="jiathis_button_douban"></a>
<a class="jiathis_button_fb"></a>
<a class="jiathis_button_renren"></a>
<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" >
var jiathis_config={
	summary:"",
	hideMore:true
}
</script>
<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
<!-- JiaThis Button END -->
			</div>
		</div>
		<div class="clear"></div>
<?php
// include View::getView('side');
 include View::getView('footer');
?>

	</div>
<?php
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
		<div id="footer">
			<p id="copy">&copy; 2011-2012 All rights resverd. <a href="http://sae.sina.com.cn" target="_blank"><img src="http://static.sae.sina.com.cn/image/poweredby/117X12px.gif" title="Powered by Sina App Engine" alt="sinaapp"/></a> Powered by mygoare</p>
			<p id="fixedFooter">
				<a href="./post/4" title="About Me">About</a>
				<a href="" title="Some Works Made By Me">Works</a>
				<a href="" title="Friends Links">Friend</a>
				<a href="" title="References">Reference</a>
			</p>
<?php doAction('index_footer'); ?>
		</div>
<script type="text/javascript">
var fixedFooter= document.getElementById("fixedFooter");
var footerLinks = fixedFooter.getElementsByTagName("a");
for (var i = 0; i<footerLinks.length;i++)
{
	var link = footerLinks.item(i);
	var h = link.href;
	//在href=""为空时，href返回的是当前网址
	if(h==location.href)
	{
		link.onclick = function()
		{
			aClick();
			return false;
		}
	}
}
function aClick()
{
	return alert("Under Written !!!");
}
</script>
<div style="display:none;"><script src="http://s4.cnzz.com/stat.php?id=3883286&web_id=3883286&show=pic" language="JavaScript"></script></div>
</body>
</html>

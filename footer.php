	</div>
<?php
if(!defined('EMLOG_ROOT')) {exit('error!');} 
?>
		<div id="footer">
			<p id="copy">&copy; 2011-2012 All rights resverd. <a href="http://sae.sina.com.cn" target="_blank"><img src="http://static.sae.sina.com.cn/image/poweredby/117X12px.gif" title="Powered by Sina App Engine" alt="sinaapp"/></a> Powered by mygoare</p>
			<p id="fixedFooter">
				<a href="">About</a>
				<a href="">Works</a>
				<a href="">Friend</a>
				<a href="">Reference</a>
			</p>
<?php doAction('index_footer'); ?>
		</div>
<script type="text/javascript">
var fixedFooter= document.getElementById("fixedFooter");
var footerLinks = fixedFooter.getElementsByTagName("a");
for (var i = 0; i<footerLinks.length;i++)
{
	var link = footerLinks.item(i);
	link.onclick = function()
	{
		aClick();
		return false;
	}
}
function aClick()
{
	return alert("Under Written !!!");
}
</script>
</body>
</html>

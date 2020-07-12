<?php
include("../../mainfile.php");

include(XOOPS_ROOT_PATH."/header.php");
$xoopsOption['show_rblock'] = 1;
 if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php';
}else{
  include_once 'language/english/modinfo.php';
}
?>
<head>
<script type="text/javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" type="text/javascript"></script>
</head><div align="center"><table width="100%" cellspacing="30"><tr><td align="left">
<?php 
echo '<center><h2>'._IPOD_HEADER.'</h2></center><br />';  
echo ''._IPOD_DESC.''; 
?> 
</td><td align="right">
<script type="text/javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '200',
			'height', '330',
			'src', 'ipod',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'ipod',
			'bgcolor', '#ffffff',
			'name', 'ipod',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'ipod',
			'salign', ''
			); //end AC code
	}
</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="200" height="330" id="ipod" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="ipod.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="ipod.swf" quality="high" bgcolor="#ffffff" width="200" height="330" name="ipod" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
</noscript></td></tr></table><script type="text/javascript">
<!--
document.write(unescape("%3Cdiv%20align%3D%22center%22%3E%3Cfont%20size%3D%221%22%3EModule%20by%20%3Ca%20href%3D%22http%3A//danordesign.com%22%20target%3D%22_blank%22%3EDanordesign%3C/a%3E%3C/font%3E%3C/div%3E"));
//-->
</script></div>
<?php
include(XOOPS_ROOT_PATH."/footer.php");

?> 
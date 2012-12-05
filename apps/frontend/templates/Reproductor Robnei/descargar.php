<?php
if($_GET["rob"]<>"")
 	{
	$rob = $_GET["rob"];
	function robnei($rob){
	$rob = str_replace(" ","%20",$rob);
	$rob = str_replace("xlx",$codexxx,$rob);
	return $rob;
 	}
@header("Content-Type: audio/mpeg3");
@@header('Content-Disposition: attachment; filename="'.$_GET["nombre"].' - [wWw.Robnei.CoM].mp3"');
@readfile(robnei($rob));
	}
	else
	{
	print "<script> location.href='http://www.robnei.com'; </script>";
	}
?>
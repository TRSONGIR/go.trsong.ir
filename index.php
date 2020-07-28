<?php
$gdriveid = $_GET['url'];
$gdrive= "http://sib-design.ir/sibmusic/demo1/?p=";
$url = $gdrive.$gdriveid;
header ("Location: $url");
exit;
?>

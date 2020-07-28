<?php
$trsong = "http://localhost/sibmusic/?p=";
$postid = $_GET['id'];
$url = $trsong.$postid;
header(location: $url);
exit;
?>

<?php
$tr="http://sib-design.ir/sibmusic/demo2/?p=";
$id= $_GET['url'];
$url= $tr.$id;
header("Location: $url");
exit;
?>

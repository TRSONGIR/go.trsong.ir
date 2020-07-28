<?php
$tr="http://sib-design.ir/sibmusic/demo2/?p=";
$id= $_GET['url'];
$url= $tr.$id;
if($id != '' ){
header("Location: $url");
exit;
}else{
header("Location: http://doman.ir");
}
?>

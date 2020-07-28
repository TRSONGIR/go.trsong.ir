<?php
$tr="http://sib-design.ir/sibmusic/demo2/?p=";
$id= $_GET['url'];
if($id != '' ){
$url= $tr.$id;
header("Location: $url");
exit();
}else{
header("Location: http://trsong.ir");
exit();
}
?>

<?php
include('../../../../config.php');
$member_index = $_POST['member_index'];

$query = $mysqli->query("select * from `member_images` where memberid = '$member_index'");
$res = $query->fetch_assoc();
$filename2 =  $res['image_location'];
$use = substr($filename2,strpos($filename2,"/")+1);
unlink("../../../uploads/".$use);


/*$mysqli->query("delete from `member` where memberid = '$member_index'") or die(mysqli_error($mysqli));

$mysqli->query("delete from `member_images` where memberid = '$member_index'") or die(mysqli_error($mysqli));*/

echo 1;
?>
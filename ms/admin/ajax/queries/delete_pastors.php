<?php
include('../../../../config.php');
$id=$_POST['i_index'];

$query = $mysqli->query("select * from website_image_pastors where imageid = '$id'");
$res = $query->fetch_assoc();
$filename =  $res['image_location'];

$use = substr($filename,strpos($filename,"/")+1);
unlink("../../../uploads/".$use);

$mysqli->query("delete from website_image_pastors where imageid = '$id'") or die(mysqli_error($mysqli));
$mysqli->query("delete from website_pastors where imageid = '$id'") or die(mysqli_error($mysqli));

echo 1;
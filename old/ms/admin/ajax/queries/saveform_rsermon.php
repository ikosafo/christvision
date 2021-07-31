<?php
include('../../../../config.php');

$title = mysqli_real_escape_string($mysqli, $_POST['title']);
$link = mysqli_real_escape_string($mysqli, $_POST['link']);
$description = mysqli_real_escape_string($mysqli, $_POST['description']);
$datetime = date("Y-m-d H:i:s");

$getcount = $mysqli->query("select * from website_youtubelink");
$count = mysqli_num_rows($getcount);


if ($count == "0"){
    $mysqli->query("INSERT INTO `website_youtubelink`
            (`title`,
             `link`,
             `description`,
             `dateuploaded`)
VALUES ('$title',
        '$link',
        '$description',
        '$datetime')") or die(mysqli_error($mysqli));
    echo 1;
}

else {
    echo 2;
}



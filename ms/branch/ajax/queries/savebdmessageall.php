<?php
require_once('../../../../config.php');

$branch = $_SESSION['branch'];
$title = mysqli_real_escape_string($mysqli,$_POST['title']);
$message = mysqli_real_escape_string($mysqli,$_POST['message']);


function sendSMS($message, $phone)
{
    include('../../../../dbcon.php');
    $branch = $_SESSION['branch'];
    $getkey = $mysqli->query("select * from `mnotify` where branch = '$branch' LIMIT 1");
    $reskey = $getkey->fetch_assoc();

    $keyval = $reskey['mnotify_key'];
    $sender = $_POST['title'];
    $key = $keyval;
    $url = "http://bulk.mnotify.net/smsapi?key=" . $key . "&to=" . $phone . "&msg=" . urlencode($message) . "&sender_id=" . $sender;
    $response = file_get_contents($url);
}

$date = date('Y-m-d H:i:s');

$res= $mysqli->query("SELECT * FROM `member` WHERE branch = '$branch'
                           AND MONTH(birthdate) = MONTH(NOW())
                           AND DAY(birthdate) = DAY(NOW())");
$group = "Birthday Celebrants";


while ($record = $res->fetch_assoc()) {
    $number = $record['telephone'];
    $num = substr("$number", 1);
    $phone = '+233' . $num;

    sendSMS($message, $phone);
}

$query = $mysqli->query("INSERT INTO `sms`
            (`group`,
             `message`,
             `datesent`,
             `title`,
             `branch`)
VALUES ('$group',
        '$message',
        '$date',
        '$title',
        '$branch')")

or die(mysqli_error($mysqli));

echo 1;


?>



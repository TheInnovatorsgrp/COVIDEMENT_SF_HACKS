<?php
session_start();
include 'assets/inc/config.php';

if ($_POST) {
    $real_name = $_POST['real_name'];
    $email = $_POST['email'];
    $astatus = $_POST['astatus'];
    $date = $_POST['date'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $adhaar = $_POST['adhaar'];
    $addr = $_POST['addr'];
    if (!$email || !$real_name || !$astatus || !$date || !$state || !$city || !$phone || !$adhaar || !$addr) {
        header("LOCATION: app.php?error=emptyfield");
    } else {
        $sql = "SELECT * FROM appointment WHERE adhaar='$adhaar'";
        $result = $connect_db->query($sql);
        $checkexist = mysqli_num_rows($result);
        if ($checkexist == 0) {
        } else {
            header("LOCATION: app.php?error=adhaarexist");
        }
    }
}

$otp = password_hash($phone, PASSWORD_DEFAULT);

$to = $email;
$subject = 'OTP From Covidment';
$message = 'Your OTP: ' . $otp;
$headers = 'From: webmaster@example.com' . "\r\n" .
'Reply-To: webmaster@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

include_once 'verify.php';

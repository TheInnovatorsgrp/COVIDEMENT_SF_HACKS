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
    $otp = mysqli_real_escape_string($connect_db, $_POST['otp']);
    $otp2 = password_hash($phone, PASSWORD_DEFAULT);

    $verify = password_verify($phone, $otp);
    if (!$verify) {
        die("<div class='error-message' style='display: block;'>Wrong OTP!</div>");
    }
    if (!$email || !$real_name || !$astatus || !$date || !$state || !$city || !$phone || !$adhaar || !$addr) {
        die("<div class='error-message' style='display: block;'>Please fill all required fields in order to regiter yourself.</div>");
    } else {
        $sql = "SELECT * FROM appointment WHERE adhaar='$adhaar'";
        $result = $connect_db->query($sql);
        $checkexist = mysqli_num_rows($result);
        if ($checkexist == 0) {
            $sql = "INSERT INTO appointment (email, name, astatus, adate, state, city, phone, adhaar, addr) VALUES ('$email', '$real_name', $astatus, '$date', '$state', '$city', '$phone', '$adhaar', '$addr')";
            $result = $connect_db->query($sql);
            die("OK");
        } else {
            die("<div class='error-message' style='display: block;'>You are Already Registered!</div>");
        }
    }
}

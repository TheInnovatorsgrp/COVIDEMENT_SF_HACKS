<?php
session_start();
include 'assets/inc/config.php';

if ($_POST) {
    $username = $_POST['email'];
    $real_name = $_POST['real_name'];
    if ($_POST['pass'] == $_POST['pass2']) {
        $password = $_POST['pass'];
    } else {
        die("<div class='error-message' style='display: block;'>Both Passwords are not matching.</div>");
        die();
    }
    if (!$username || !$password || !$real_name) {
        die("<div class='error-message' style='display: block;'>Please fill all required fields in order to regiter yourself.</div>");
    } else {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = $connect_db->query($sql);
        $checkexist = mysqli_num_rows($result);
        if ($checkexist == 0) {
            $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user (username, real_name, password) VALUES ('$username', '$real_name', '$encrypted_password')";
            $result = $connect_db->query($sql);
            die("OK");
        } else {
            die("<div class='error-message' style='display: block;'>The Username is already taken by someone, Please use any other Username!</div>");
        }
    }
}

<?php
session_start();
include 'assets/inc/config.php';
$username = mysqli_real_escape_string($connect_db, $_POST['email']);
$password = mysqli_real_escape_string($connect_db, $_POST['password']);

$sql = "SELECT * FROM user WHERE username='$username'";
$result = $connect_db->query($sql);
$row = $result->fetch_assoc();
$hash_password = $row['password'];
$verify = password_verify($password, $hash_password);
if ($verify == false) {
    header("LOCATION: login.php?error=log_fail");
} else {
    if (!$row) {
        header("LOCATION: login.php?error=log_fail");
    } else {
        $uid = $row['id'];
        $sql = "SELECT * FROM atn_table WHERE sid='$uid' AND date=CURDATE()";
        $result = $connect_db->query($sql);
        $checkexist = mysqli_num_rows($result);
        if ($checkexist == 0) {
            $sql = "INSERT INTO atn_table (sid, date) VALUES ('$uid', CURDATE())";
            $result = $connect_db->query($sql);
        }
        $_SESSION['id'] = $row['id'];

        header("LOCATION: dash.php");
    }
}

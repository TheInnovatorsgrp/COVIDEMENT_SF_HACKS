<?php
$url_path = $_SERVER['REQUEST_URI'];
if (strpos($url_path, '?error=log_register')) {
    echo "<div class='error-message' style='display: block;'>Please Logout, and Register...</div>";
} else
if (strpos($url_path, '?error=already_log')) {
    echo "<div class='error-message' style='display: block;'>You are already Logged In...</div>";
} else
if (strpos($url_path, '?error=log_fail')) {
    echo "<div class='error-message' style='display: block;'>The Username or Password is incorrect!</div>";
} else
if (strpos($url_path, '?error=usernameexist')) {
    echo "<div class='error-message' style='display: block;'>The Username is already taken by someone, Please use any other Username!</div>";
} else
if (strpos($url_path, '?error=emptyfield')) {
    echo "<div class='error-message' style='display: block;'>Please fill all required fields in order to regiter yourself.</div>";
} else
if (strpos($url_path, '?error=wrongpass')) {
    echo "<div class='error-message' style='display: block;'>Both Passwords are not matching.</div>";
} else
if (strpos($url_path, '?success=register')) {
    echo "<div class='error-message' style='display: block;'>You have been Successfully Registered.</div>";
} else
if (strpos($url_path, '?error=adhaarexist')) {
    echo "<div class='error-message' style='display: block;'>You are already Registered.</div>";
}

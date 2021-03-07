<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
if (isset($_SESSION['id'])) {
	header("LOCATION: active.php");
}
$set = "login";
include_once "header.php";
?>
						<?php

    include_once "login_form.php";
?>
<br><br><br>
<?php
include_once "footer.php";
?>
</html>
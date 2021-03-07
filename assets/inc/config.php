<?php
$connect_db = mysqli_connect("localhost", "root", "", "covidement");
if (!$connect_db) {
    die("<b>Warning!</b> Connection Failed: " . mysqli_connect_error());
}

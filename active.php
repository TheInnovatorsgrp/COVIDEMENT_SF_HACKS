<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("LOCATION: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Active Appointments</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type="text/css">
  #footer {
  color: #444444;
  font-size: 14px;
  background: #f1f7fd;
  position: absolute;
  bottom: 0;
  width: 100%;


  }
  .appointment-btn {
    margin-left: 25px;
    background: #f72585;
    color: #fff;
    border-radius: 50px;
    padding: 8px 25px;
    white-space: nowrap;
    transition: 0.3s;
    font-size: 14px;
    display: inline-block;
    border: 0;
}

  #footer .copyright {
	color: #444444;
  }
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Active Appointments</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="https://covidement.develop.eu.org/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.icmr.gov.in/">Covid-19 Updates</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Quick Links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ICMR Labs</a>
          <a class="dropdown-item" href="#">Bio Repositories</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Contact Us</a>
        </div>
      </li>

    </ul>
    <?php

if (isset($_SESSION['id'])) {

    echo '<form class="log-form" action="logout.php">

<button type="submit" class="appointment-btn scrollto">LOG OUT</button>

</form>';

} 

?>
  </div>
</nav>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Date</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
    </tr>
  </thead>
  <tbody>
    <?php

include 'assets/inc/config.php';
$sql = "SELECT * FROM appointment";
$result = $connect_db->query($sql);
$apps = mysqli_num_rows($result);

for ($aid = 1; $aid <= $apps; $aid++) {

    $sql = "SELECT * FROM appointment WHERE aid='$aid'";
    $result = $connect_db->query($sql);
    $checkexist = mysqli_num_rows($result);
    if ($checkexist == 0) {
        continue;
    }
    $app = $result->fetch_assoc();

    $ast = '';
    switch ($app['astatus']) {
        case 1:$ast = "Low";
            break;
        case 2:$ast = "Medium";
            break;
        case 3:$ast = "High";
            break;
        default:$ast = "N/A";
    }
    echo "<tr>
  <th>" . $app['aid'] . "</th>
  <td>" . $app['name'] . "</td>
  <td>$ast</td>
  <td>" . $app['adate'] . "</td>
  <td>" . $app['city'] . "</td>
  <td>" . $app['state'] . "</td>
</tr>";
}
?>
  </tbody>
</table>

<!-- -------------------------------->
 <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Innovatorsgrp</span></strong>. All Rights Reserved
        </div>

    </div>
	</div>

  </footer>
</body>
</html>
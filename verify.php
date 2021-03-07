<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
$set = "login";
include_once "header.php";
?>

<section id="login_form" class="appointment section-bg" style="padding-top:200px;">
      <div class="container">

        <div class="section-title">
          <h2>Verify Email</h2>

        </div>
        <form action="do_add.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group mt-3">
              <?php
echo "<input type=\"hidden\" name=\"email\" id=\"email\" placeholder=\"Enter Verification Code\" value='$email'>
              <input type=\"hidden\" name=\"real_name\" id=\"real_name\" placeholder=\"Enter Verification Code\" value='$real_name'>
              <input type=\"hidden\" name=\"astatus\" id=\"astatus\" placeholder=\"Enter Verification Code\" value='$astatus'>
              <input type=\"hidden\" name=\"date\" id=\"date\" placeholder=\"Enter Verification Code\" value='$date'>
              <input type=\"hidden\" name=\"state\" id=\"state\" placeholder=\"Enter Verification Code\" value='$state'>
              <input type=\"hidden\" name=\"city\" id=\"city\" placeholder=\"Enter Verification Code\" value='$city'>
              <input type=\"hidden\" name=\"phone\" id=\"phone\" placeholder=\"Enter Verification Code\" value='$phone'>
              <input type=\"hidden\" name=\"adhaar\" id=\"adhaar\" placeholder=\"Enter Verification Code\" value='$adhaar'>
              <input type=\"hidden\" name=\"addr\" id=\"addr\" placeholder=\"Enter Verification Code\" value='$addr'>";
?>
            <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter Verification Code">
              <div class="validate"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Login to Dashboard</button></div>
        </form>

      </div>
    </section>


<?php
include_once "footer.php";
?>
</html>
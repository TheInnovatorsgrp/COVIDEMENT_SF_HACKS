<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
session_start();
include_once "header.php";
?>

<section id="register_form" class="appointment section-bg" style="padding-top:200px;">
      <div class="container">

        <div class="section-title">
          <h2>Register</h2>

        </div>

        <form action="do_register.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="real_name" id="real_name" placeholder="Your Full Name" data-rule="text">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3">
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Your Password" data-rule="password">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group mt-3">
            <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Confirm Password" data-rule="password">
              <div class="validate"></div>
            </div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">You successfully Registered. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Register as Host</button></div>
        </form>

      </div>
    </section>

    <?php
include_once "footer.php";
?>
</html>
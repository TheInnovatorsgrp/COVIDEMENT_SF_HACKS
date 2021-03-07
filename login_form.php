<section id="login_form" class="appointment section-bg" style="padding-top:200px;">

      <div class="container">



        <div class="section-title">

          <h2>Login</h2>



        </div>

        <?php

include_once "error.php";

?>

        <form action="do_login.php" method="post" role="form">

          <div class="row">

            <div class="col-md-6 form-group mt-3">

            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">

              <div class="validate"></div>

            </div>

            <div class="col-md-6 form-group mt-3">

            <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" data-rule="password">
            <br/>
              <div class="validate"></div>

            </div>

          </div>
<center>
<a href="https://covidement.develop.eu.org/register.php"><strong>Click to register as a new Beneficiary!</strong></a>
</center>
          <div class="mb-3">

            <div class="loading">Loading</div>

            <div class="error-message"></div>

            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>

          </div>

          <div class="text-center"><button type="submit">Login to Dashboard</button></div>

        </form>



      </div>

    </section>


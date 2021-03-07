<section id="appointment" class="appointment section-bg">

      <div class="container">



        <div class="section-title">

          <h2>Make an Appointment</h2>



        </div>



        <form action="appointment.php" method="post" role="form">

          <div class="row">

            <div class="col-md-4 form-group">

              <input type="text" name="real_name" class="form-control" id="real_name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

              <div class="validate"></div>

            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">

              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">

              <div class="validate"></div>

            </div>

            <div class="col-md-4 form-group mt-3 mt-md-0">

            <select name="astatus" id="astatus" class="form-select">

                <option value="">Select Urgency</option>

                <option value="1">Low</option>

                <option value="2">Medium</option>

                <option value="3">High</option>

              </select>

              <div class="validate"></div>

            </div>

          </div>

          <div class="row">

            <div class="col-md-4 form-group mt-3">

              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

              <div class="validate"></div>

            </div>

            <div class="col-md-4 form-group mt-3">

              <select name="state" id="state" class="form-select">

                <option value="">Select State</option>

                <option value="Uttar Pradesh">Uttar Pradesh</option>

                <option value="Himanchal Pradesh">Himachal Pradesh</option>

                <option value="Maharashtra">Maharashtra</option>

              </select>

              <div class="validate"></div>

            </div>

            <div class="col-md-4 form-group mt-3">

              <select name="city" id="city" class="form-select">

                <option value="">Select City </option>

                <option value="Lucknow">Lucknow</option>

                <option value="Hamirpur">HamirPur</option>

                <option value="Mumbai">Mumbai</option>

              </select>

              <div class="validate"></div>

            </div>

          </div>

            <div class="row">

          <div class="col-md-4 form-group mt-3">

              <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" data-rule="minlen:9" data-msg="Please enter at least 9 chars">

              <div class="validate"></div>

            </div>

            <div class="col-md-4 form-group mt-3">

              <input type="text" class="form-control" name="adhaar" id="adhaar" placeholder="Your Adhaar">

              <div class="validate"></div>

            </div> <div class="col-md-4 form-group mt-3">

              <input type="text" name="addr" class="form-control" id="addr" placeholder="Your Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

              <div class="validate"></div>

            </div>

            </div>
            <br/>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>

        </form>



      </div>

    </section>


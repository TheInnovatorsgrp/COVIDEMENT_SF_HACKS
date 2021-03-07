<!DOCTYPE html>

<html lang="en">



<?php
session_start();
include_once "header.php";


?>



  <!-- ======= Hero Section ======= -->



    <section id="hero" class="d-flex align-items-center">

         <span id="gif1"></span>



        <script>

                var gif1 = bodymovin.loadAnimation({

                container: document.getElementById('gif1'), // required

                path: 'assets/img/gif1.json', // required

                renderer: 'svg', // required

                loop: true, // optional

                autoplay: true, // optional

              });



         </script>

    <div class="container mt-sm-5">

    <br>

      <h1>Welcome to COVIDEMENT</h1>

      <h2>Get vaccinated at a location near you | PROTECT YOUR FAMILY AND COMMUNITY</h2>

      <a href="#about" class="btn-get-started scrollto">Get Started</a>

    </div>

  </section><!-- End Hero -->



  <main id="main">



    <!-- ======= Why Us Section ======= -->

    <section id="why-us" class="why-us">



        <div class="container">



        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch">

            <div class="content">

              <h3>Why Choose Covidement ?</h3>

              <p>

                With the sky high demand of covid-19 vaccines, we will be regulating a proper and Prioritised supply for everyone while maintaining the hygiene. Our idea will be collecting the beneficiary entries in need of vaccine and the data will be arranged accordingly by prioritising the more in need. This will not only help in supplying the vaccine properly but will also be ensuring to reach our aim of complete vaccinations by 2021 itself.



              </p>

              <div class="text-center">

                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>

              </div>

            </div>

          </div>

          <div class="col-lg-8 d-flex align-items-stretch">

            <div class="icon-boxes d-flex flex-column justify-content-center">

              <div class="row">

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class="bx bx-receipt"></i>

                    <h4>Priority Focused</h4>

                    <p>Our idea primarily focuses on helping the government maintain a proper vaccine supply promoting Digital Healthcare in India.

</p>

                  </div>

                </div>

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class="bx bx-cube-alt"></i>

                    <h4>COVID-19 RT PCR KITS</h4>

                    <p>Performance evaluation of commercial kits for real time PCR for COVID-19 by ICMR identified validation centres</p>

                  </div>

                </div>

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class="bx bx-images"></i>

                    <h4>Non-Profit</h4>

                    <p>Investors can join us to support our mission and achieve the goal of a prioritised regulated vaccine supply.

                      </p>

                  </div>

                </div>

              </div>

            </div><!-- End .content-->

          </div>

        </div>



      </div>

    </section><!-- End Why Us Section -->



    <!-- ======= About Section ======= -->

    <section  class="about">

      <div class="container-fluid">



        <div class="row">

          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">

            <a href="https://www.youtube.com/watch?v=B-aaVh0BQSw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>

          </div>



          <div id="about" class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">

            <h3>Vaccines to protect against COVID-19 are now available in limited quantities in the India and recommended for specific groups.</h3>

            <p>COVIDEMENT will be updated once COVID-19 vaccination is widely available to the public to help direct people to find a vaccine provider near them.</p>



            <div class="icon-box">

              <div class="icon"><i class="bx bx-fingerprint"></i></div>

              <h4 class="title"><a href="">VACCINE RECOMMENDATIONS</a></h4>

              <p class="description">SAGE recommends the use of the Moderna mRNA-1273 vaccine at a <br/>
                                    schedule of two doses (100 µg, 0.5 ml each) 28 days apart.</p>

            </div>



            <div class="icon-box">

              <div class="icon"><i class="bx bx-gift"></i></div>

              <h4 class="title"><a href="">ICMR laboratory</a></h4>

              <p class="description">SARS-CoV-2(COVID-19) testing.</p>

            </div>



            <div class="icon-box">

              <div class="icon"><i class="bx bx-atom"></i></div>

              <h4 class="title"><a href="">Bio-Repository</a></h4>

              <p class="description">Estabalishment of a network of Bio Repository in India.</p>

            </div>



          </div>

        </div>



      </div>

    </section><!-- End About Section -->



    <!-- ======= Counts Section ======= -->

    <section id="counts" class="counts">

      <div class="container">



        <div class="row">



          <div class="col-lg-3 col-md-6">

            <div class="count-box">

              <i class="icofont-doctor-alt"></i>

              <span data-toggle="counter-up">54,16,849</span>

              <p>Total vaccination</p>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">

            <div class="count-box">

              <i class="icofont-patient-bed"></i>

              <span data-toggle="counter-up">1,135</span>

              <p>Active Icmr labs</p>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">

            <div class="count-box">

              <i class="icofont-laboratory"></i>

              <span data-toggle="counter-up">248</span>

              <p>Research Labs</p>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">

            <div class="count-box">

              <i class="icofont-award"></i>

              <span data-toggle="counter-up">35,000</span>

              <p>Vaccinated Today</p>

            </div>

          </div>



        </div>



      </div>

    </section><!-- End Counts Section -->



    <!-- ======= Services Section ======= -->

    <section id="services" class="services">

      <div class="container">



        <div class="section-title">

          <h2>We want to make vaccination easy and accessible to everyone.</h2>

          <p> COVIDEMENT is a free, online service where users can search for locations that offer vaccinations. We work with partners such as clinics, pharmacies, and health departments to provide accurate and up-to-date information about vaccination services.

</p>

        </div>



        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">

            <div class="icon-box">

              <div class="icon"><i class="icofont-heart-beat"></i></div>

              <h4><a href="https://www.icmr.gov.in/cteststrat.html" target="_blank">Testing Strategy</a></h4>

              <p>Molecular based Test (RT PCR/TruNat/CBNAAT)</p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">

            <div class="icon-box">

              <div class="icon"><i class="icofont-drug"></i></div>

              <h4><a href="https://www.icmr.gov.in/crrteam.html" target="_blank">Rapid Response Team</a></h4>

              <p>ICMR Rapid Response Team for COVID-19</p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">

            <div class="icon-box">

              <div class="icon"><i class="icofont-dna-alt-2"></i></div>

              <h4><a href="https://www.icmr.gov.in/cbiorn.html" target="_blank">COVID Bio Repositories</a></h4>

              <p>Establishment of Network of Bio Repositories in India.</p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">

            <div class="icon-box">

              <div class="icon"><i class="icofont-heartbeat"></i></div>

              <h4><a href="https://www.icmr.gov.in/ckitevaluation.html" target="_blank">Kit Validation & Batch Testing</a></h4>

              <p>Centres for Validation and Batch Testing of COVID-19 Diagnostic Kits
              ICMR INSTITUTES</p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">

            <div class="icon-box">

              <div class="icon"><i class="icofont-disabled"></i></div>

              <h4><a href="https://www.ijmr.org.in/aheadofprint_cv.asp" target="_blank">COVID IJMR</a></h4>

              <p>IJMR under Indian Council of Medical Research.</p>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">

            <div class="icon-box">

              <div class="icon"><i class="icofont-autism"></i></div>

              <h4><a href="https://www.icmr.gov.in/ctestlab.html" target="_blank">Info for Labs</a></h4>

              <p>Government Institutes / Medical Colleges COVID-19 Testing Lab Approval</p>

            </div>

          </div>



        </div>



      </div>

    </section><!-- End Services Section -->



    <!-- ======= Appointment Section ======= -->

<?php

include_once "app_form.php";

?>

<!-- End Appointment Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->

    <section id="faq" class="faq section-bg">

      <div class="container">



        <div class="section-title">

          <h2>Frequently Asked Questions</h2>

          <p>Things you need to know about Vaccination.</p>

        </div>



        <div class="faq-list">

          <ul>

            <li data-aos="fade-up">

              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">

              Are Covid-19 Vaccines Safe?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">

                <p>

                 The India's long-standing vaccine safety program closely and constantly monitors the safety of vaccines.

                 Learn how CDC works to ensure the safety of vaccines in the India.

                </p>

              </div>

            </li>



            <li data-aos="fade-up" data-aos-delay="100">

              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">

             Why should I vaccinate my child? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">

                <p>

                  On-time vaccination throughout childhood is essential because it helps provide immunity before children are exposed to potentially life-threatening diseases.

                  Vaccines are tested to ensure they are safe and effective for children to receive at the recommended ages.

                </p>

              </div>

            </li>



            <li data-aos="fade-up" data-aos-delay="200">

              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">

              Is Vaccination necessary? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">

                <p>

                  Every year, tens of thousands of Indians get sick from diseases that could be prevented by vaccines – some people are hospitalized, some even die.

                  Immunization/Vaccination is our best protection against these diseases.

                </p>

              </div>

            </li>

<!--

            <li data-aos="fade-up" data-aos-delay="300">

              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">

                <p>

                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.

                </p>

              </div>

            </li>



            <li data-aos="fade-up" data-aos-delay="400">

              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">

                <p>

                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.

                </p>

              </div>

            </li>

-->

          </ul>

        </div>



      </div>

    </section><!-- End Frequently Asked Questions Section -->





    <!-- ======= Gallery Section ======= -->

    <section id="gallery" class="gallery">

      <div class="container">



        <div class="section-title">

          <h2>Gallery</h2>

          <p><br/></p>

        </div>

      </div>



      <div class="container-fluid">

        <div class="row no-gutters">



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



        </div>



      </div>

    </section><!-- End Gallery Section -->



    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">

      <div class="container">



        <div class="section-title">

          <h2>Contact</h2>

          <p><br/></p>

        </div>

      </div>



      <div>

        <iframe style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56953.939520825435!2d80.91301581915765!3d26.851997358333143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd09c18f1e13%3A0xbf01e68d3158fb37!2sHazratganj%2C%20Lucknow%2C%20Uttar%20Pradesh%20226001!5e0!3m2!1sen!2sin!4v1612604133688!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>



      <div class="container">

        <div class="row mt-5">



          <div class="col-lg-4">

            <div class="info">

              <div class="address">

                <i class="icofont-google-map"></i>

                <h4>Location:</h4>

                <p>The Innovators Grp Hazratganj,Lucknow</p>

              </div>



              <div class="email">

                <i class="icofont-envelope"></i>

                <h4>Email:</h4>

                <p>theinnovatorsgrp@gmail.com</p>

              </div>



              <div class="phone">

                <i class="icofont-phone"></i>

                <h4>Call:</h4>

                <p>+91 7236013036</p>

              </div>



            </div>



          </div>



          <div class="col-lg-8 mt-5 mt-lg-0">



            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="row">

                <div class="col-md-6 form-group">

                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                  <div class="validate"></div>

                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">

                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                  <div class="validate"></div>

                </div>

              </div>

              <div class="form-group mt-3">

                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                <div class="validate"></div>

              </div>

              <div class="form-group mt-3">

                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

                <div class="validate"></div>

              </div>

              <div class="mb-3">

                <div class="loading">Loading</div>

                <div class="error-message"></div>

                <div class="sent-message">Your message has been sent. Thank you!</div>

              </div>

              <div class="text-center"><button type="submit">Send Message</button></div>

            </form>



          </div>



        </div>



      </div>

    </section><!-- End Contact Section -->



  </main><!-- End #main -->







<?php

include_once "footer.php";

?>







</body>



</html>


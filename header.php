<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Covidement</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link href="assets/img/icon1.jfif" rel="icon">

  <link href="assets/img/apple-touch-icon1.jfif" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">

  <script src="assets/js/lottie.min.js"></script>
<style type="text/css">#header{top: 0px !important;}</style>
</head>

<body>
  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top">

    <div class="container d-flex align-items-center">



      <h1 class="logo me-auto"><a href="#">COVIDEMENT</a></h1>





      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li class="active"><a href="index.php">Home</a></li>

          <li><a href="#about">About</a></li>

          <li><a href="https://www.icmr.gov.in/" target="_blank">Covid-19</a></li>



          <li><a href="https://www.icmr.gov.in/ctestlab.html" target="_blank">Laboratories</a></li>

          <li class="drop-down"><a href="#">Quick Links</a>

            <ul>

              <li><a href="https://www.icmr.gov.in/ctestlab.html" target="_blank">Info For Labs</a></li>

              <li class="drop-down"><a href="https://www.icmr.gov.in/cteststrat.html" target="_blank">Testing Strategy</a>

                <ul>

                  <li><a href="https://www.icmr.gov.in/ckitevaluation.html" target="_blank">Kit Validation</a></li>

                  <li><a href="https://www.icmr.gov.in/ctechdocad.html" target="_blank">Tech Docs</a></li>

                  <li><a href="https://www.icmr.gov.in/ctechdocad.html" target="_blank">Advisory</a></li>

                  <li><a href="https://www.icmr.gov.in/cdepot.html" target="_blank">ICMR Centres</a></li>

                  <li><a href="https://www.icmr.gov.in/cbiorn.html" target="_blank">Bio Repositories</a></li>

                </ul>

              </li>

              <li><a href="https://www.icmr.gov.in/timeline.html" target="_blank">ICMR Timeline</a></li>

              <li><a href="https://www.icmr.gov.in/cbiorn.html" target="_blank">Bio Repositories</a></li>

              <li><a href="https://www.icmr.gov.in/tab1ar1.html" target="_blank">Clinical Reg.</a></li>

            </ul>

          </li>

          <li><a href="#contact">Contact</a></li>
          <li><a href="https://covidement.develop.eu.org/login.php">Login</a></li>


        </ul>

      </nav><!-- .nav-menu -->

<?php

if (isset($_SESSION['id'])) {

    echo '<form class="log-form" action="logout.php">

<button type="submit" class="appointment-btn scrollto">LOG OUT</button>

</form>';

} else {

    echo '<a href="#appointment" class="appointment-btn scrollto pulse">Make an Appointment</a>';

}

?>



    </div>

  </header><!-- End Header -->


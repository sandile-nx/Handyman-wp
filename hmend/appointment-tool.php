<!DOCTYPE html>
<html>
  <head>
    <title>Appointment Tool</title>
    <style>
      .container-fluid {
        height: 100%;
      }
    </style>
    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="assets/css/magnific-popup.css"><link rel="stylesheet" href="assets/css/owl.carousel.min.css"><link rel="stylesheet" href="assets/css/font-awesome.min.css"><link rel="stylesheet" href="assets/css/flaticon.css"><link rel="stylesheet" href="assets/css/ionicons.min.css"><link rel="stylesheet" href="assets/css/headline.css"><link rel="stylesheet" href="assets/css/animate.min.css"><link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css"><link rel="stylesheet" href="assets/css/meanmenu.css"><link rel="stylesheet" href="assets/css/Pe-icon-7-stroke.css"><link rel="stylesheet" href="assets/css/bundle.css"><link rel="stylesheet" href="assets/css/style.css"><link rel="stylesheet" href="assets/css/responsive.css"><script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>-->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </head>
  <body style="background-image:url(assets/img/slider/2.jpg); background-repeat: no-repeat;">
  <div class="d-flex align-items-center">
    <div class="container">
      <div class="card bg-light mx-auto mt-5" style="max-width: 400px;">
        <div class="card-body bg-light">
          <h2 class="text-center mb-4">Make an Appointment</h2>
          <form id="appointmentForm" action="appointment.php" method="post">
            <div class="mb-3">
              <label for="name">Name:</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="date">Date:</label>
              <input type="date" name="date" class="form-control" required>
            </div>
            <div class="mb-3">
              <label for="time">Time:</label>
              <input type="time" name="time" class="form-control" required>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-warning">Submit</button>
            </div>
            <br>
            <div class="Return-home text-center">
              <a href="index-4.php" style="text-decoration: none;color: gray;">Return to Home Page</a>
            </div>
          </form>
        </div>
      </div>
      <div id="appointmentResult"></div>
    </div>
    </div>
    <!--<script src="appointment.js"></script><script src="assets/js/vendor/appointment.js"></script><script src="assets/js/popper.min.js"></script><script src="assets/js -->
  </body>
</html>

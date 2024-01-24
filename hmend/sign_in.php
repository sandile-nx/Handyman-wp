<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from gambolthemes.net/html-items/cursus_main_demo/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 13:10:23 GMT -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Hmend - Sign In</title>
    <!-- <link rel="icon" type="image/png" href="assets/img/images/fav.png"> -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,500" rel="stylesheet">
    <link href="vendor/unicons-2.0.1/css/unicons.css" rel="stylesheet">
    <link href="assets/css/vertical-responsive-menu.min.css" rel="stylesheet">
    <link href="assets/css/stylee.css" rel="stylesheet">
    <link href="assets/css/responsivee.css" rel="stylesheet">
    <link href="assets/css/night-mode.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="assets/vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/vendor/semantic/semantic.min.css">
  </head>
  <body>
    <div class="sign_in_up_bg">
      <div class="container">
        <div class="row justify-content-lg-center justify-content-md-center">
          <div class="col-lg-12">
            <div class="main_logo25" id="logo">
              <a href="#">
                <!-- <img src="assets/img/images/logo.svg" alt> -->
              </a>
              <a href="#">
                <img class="logo-inverse" src="assets/img/images/ct_logo.svg" alt>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-8">
            <div class="sign_form">
              <h2>Welcome Back</h2>
              <p>Log In to Your Hmend Account!</p>
              <button class="social_lnk_btn color_btn_fb">
                <i class="uil uil-facebook-f"></i>Continue with Facebook </button>
              <button class="social_lnk_btn mt-15 color_btn_tw">
                <i class="uil uil-twitter"></i>Continue with Twitter </button>
              <button class="social_lnk_btn mt-15 color_btn_go">
                <i class="uil uil-google"></i>Continue with Google </button>

              <form action="sign_in_validation.php" method="POST">
                <div class="ui search focus mt-15">
                  <div class="ui left icon input swdh95">
                    <input class="prompt srch_explore" type="email" name="emailaddress" value id="id_email" required maxlength="64" placeholder="Email Address">
                    <i class="uil uil-envelope icon icon2"></i>
                  </div>
                </div>
                <div class="ui search focus mt-15">
                  <div class="ui left icon input swdh95">
                    <input class="prompt srch_explore" type="password" name="password" value id="id_password" required maxlength="64" placeholder="Password">
                    <i class="uil uil-key-skeleton-alt icon icon2"></i>
                  </div>
                </div>
                <div class="ui form mt-30 checkbox_sign">
                  <div class="inline field">
                    <div class="ui checkbox mncheck">
                      <input type="checkbox" tabindex="0" class="hidden">
                      <label>Remember Me</label>
                    </div>
                  </div>
                </div>
                <button class="login-btn" type="submit">Sign In</button>
              </form>
              <p class="sgntrm145">Or <a href="#">Forgot Password</a>. </p>
              <p class="mb-0 mt-30 hvsng145">Don't have an account? <a href="sign_up.php">Sign Up</a>
              </p>
            </div>
            <div class="sign_footer">
              <img src="<img src="assets/img/logo/6.png" alt="">© 2023 <strong>Hmend</strong>. All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/main/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/OwlCarousel/owl.carousel.js"></script>
    <script src="assets/vendor/semantic/semantic.min.js"></script>
    <script src="assets/js/main/js/custom.js"></script>
    <script src="assets/js/main/js/night-mode.js"></script>
  </body>
  <!-- Mirrored from gambolthemes.net/html-items/cursus_main_demo/sign_in.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 13:10:24 GMT -->
</html>
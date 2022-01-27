<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Maintenance Mode | Front - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="./assets/css/theme.min.css">
</head>
<body>
 <!-- ========== HEADER ========== -->
 <header id="header" class="header header-box-shadow-on-scroll header-bg-light header-abs-top header-show-hide" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
        <?php include('header.php'); ?>
    </header>
    <!-- ========== END HEADER ========== -->
    <!-- ========== LOGIN MODAL ========== -->
    <?php include('loginmodal.php'); ?>
    <!-- ========== LOGIN MODAL ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-flex">
      <div class="container d-flex align-items-center vh-100">
        <div class="row justify-content-md-center flex-md-grow-1 text-center">
          <div class="col-md-9 col-lg-6">
            <img    class=" img-fluid mb-2" src="./assets/svg/illustrations/maintenance-mode.svg" alt="SVG Illustration">
            <h1 class="h2">We're just tuning up a few things.</h1>
            <p>We apologize for the inconvenience but Front is currently undergoing planned maintenance. Stay tuned!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- End Hero Section -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- ========== FOOTER ========== -->
  <?php include('footer.php'); ?>
  <!-- ========== END FOOTER ========== -->

  <!-- JS Global Compulsory  -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Front -->
  <script src="./assets/js/theme.min.js"></script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>
</html>
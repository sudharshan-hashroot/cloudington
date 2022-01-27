<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Contact Us</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="./assets/vendor/leaflet/dist/leaflet.css">

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
        <div class="position-relative">
            <div class="bg-img-hero" style="background-image: url(./assets/svg/components/abstract-shapes-12.svg);">
                <div class="container space-top-3 space-top-lg-4 space-bottom-2 position-relative z-index-2">
                    <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5 mb-md-9">
                        <h1>Contact us</h1>
                        <p>We'd love to talk about how we can help you.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                            <!-- Card -->
                            <a class="card text-center h-100 transition-3d-hover">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <span class="icon icon-sm icon-circle icon-soft-success">
                                           <i class="fas fa-phone-alt"></i>
                                       </span>
                                    </figure>
                                    <h3 class="h4">Contact support</h3>
                                    <p class="text-body mb-0">+91-9778426319
                                    </p>
                                </div>
                                <div class="card-footer font-weight-bold py-3 px-lg-5" onclick="window.location='tel:+91-9778426319'" style="cursor: pointer;">

                                    Call Us <i class="fas fa-angle-right fa-sm ml-1"></i>

                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-md-4 mb-3 mb-md-0 mb-md-n11">
                            <!-- Card -->
                            <a class="card text-center h-100 transition-3d-hover">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <span class="icon icon-sm icon-circle icon-soft-primary">
                                            <i class="fas fa-globe-asia"></i>
                                        </span>
                                    </figure>
                                    <h3 class="h4">Location</h3>
                                    <p class="text-body mb-0">28/621, H11, 11th Floor, Heavenly Plaza, Vazhakkala, Kakkanad Kochi Ernakulam KL 682021 IN
                                    </p>
                                </div>
                                <div class="card-footer font-weight-bold py-3 px-lg-5" onclick="window.location='https://goo.gl/maps/vBeqzri9jeTHLevg6'" style="cursor: pointer;">
                                    Visit Location <i class="fas fa-angle-right fa-sm ml-1"></i>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>

                        <div class="col-md-4 mb-md-n11">
                            <!-- Card -->
                            <a class="card text-center h-100 transition-3d-hover">
                                <div class="card-body p-lg-5">
                                    <figure class="max-w-8rem w-100 mx-auto mb-4">
                                        <span class="icon icon-sm icon-circle icon-soft-danger">
                                            <i class="fas fa-envelope"></i>
                                        </span>
                                    </figure>
                                    <h3 class="h4">Email</h3>
                                    <p class="text-body mb-0">contact@cloudington.com</p>
                                </div>
                                <div class="card-footer font-weight-bold py-3 px-lg-5" onclick="window.location='mailto:contact@cloudington.com'" style="cursor: pointer;">
                                    Send Us mail <i class="fas fa-angle-right fa-sm ml-1"></i>
                                </div>
                            </a>
                            <!-- End Card -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- SVG Shape -->
            <figure class="position-absolute bottom-0 right-0 left-0">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
          <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
        </svg>
            </figure>
            <!-- End SVG Shape -->
        </div>
        <!-- End Hero Section -->

        <!-- Contact Form Section -->
        <div class="container space-2 space-lg-3">
            <!-- Title -->
            <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2>Tell us about yourself</h2>
                <p>Whether you have questions or you would just like to say hello, contact us.</p>
            </div>
            <!-- End Title -->

            <div class="w-lg-80 mx-auto">
                <!-- Contacts Form -->
                <form class="js-validate">
                    <div class="row">
                        <!-- Input -->
                        <div class="col-sm-6 mb-4">
                            <div class="js-form-message">
                                <label class="input-label">Your name</label>
                                <input type="text" class="form-control" name="name" placeholder="Jeff Fisher" aria-label="Jeff Fisher" required data-msg="Please enter your name.">
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-4">
                            <div class="js-form-message">
                                <label class="input-label">Your email address</label>
                                <input type="email" class="form-control" name="email" placeholder="jackwayley@gmail.com" aria-label="jackwayley@gmail.com" required data-msg="Please enter a valid email address.">
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="w-100"></div>

                        <!-- Input -->
                        <div class="col-sm-6 mb-4">
                            <div class="js-form-message">
                                <label class="input-label">Subject</label>
                                <input type="text" class="form-control" name="subject" placeholder="Subject" aria-label="Subject" required data-msg="Please enter a subject.">
                            </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="col-sm-6 mb-4">
                            <div class="js-form-message">
                                <label class="input-label">Your phone number</label>
                                <input type="text" class="form-control" name="phone" placeholder="1-800-643-4500" aria-label="1-800-643-4500" required data-msg="Please enter a valid phone number.">
                            </div>
                        </div>
                        <!-- End Input -->
                    </div>

                    <!-- Input -->
                    <div class="js-form-message mb-6">
                        <label class="input-label">How can we help you?</label>
                        <div class="input-group">
                            <textarea class="form-control" rows="4" name="text" placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..." required data-msg="Please enter a reason."></textarea>
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-wide transition-3d-hover mb-4">Submit</button>
                        <p class="small">We'll get back to you in 1-2 business days.</p>
                    </div>
                </form>
                <!-- End Contacts Form -->
            </div>
        </div>
        <!-- End Contact Form Section -->


    </main>
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <?php include('footer.php'); ?>
    <!-- ========== END FOOTER ========== -->



    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory  -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="./assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="./assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="./assets/vendor/hs-show-animation/dist/hs-show-animation.min.js"></script>
    <script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="./assets/vendor/leaflet/dist/leaflet.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            var header = new HSHeader($('#header')).init();


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();


            // INITIALIZATION OF UNFOLD
            // =======================================================
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


            // INITIALIZATION OF SHOW ANIMATIONS
            // =======================================================
            $('.js-animation-link').each(function() {
                var showAnimation = new HSShowAnimation($(this)).init();
            });


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this), {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });
            });


            // INITIALIZATION OF LEAFLET
            // =======================================================
            $('#map').each(function() {
                var leaflet = $.HSCore.components.HSLeaflet.init($(this)[0]);

                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    id: 'mapbox/light-v9'
                }).addTo(leaflet);
            });


            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
</body>

</html>
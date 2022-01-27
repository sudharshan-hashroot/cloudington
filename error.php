<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>404 Page Not Found</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="title" content="404 Page Not Found">
    <meta name="description" content="404 Page Not Found">
    <meta name="keywords" content="404 Page Not Found">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/svg/logos/favicon-01.svg">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
    <link rel="stylesheet" href="./assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="./assets/vendor/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/vendor/dzsparallaxer/dzsparallaxer.css">
    <!-- CSS Front Template -->
    <link rel="stylesheet" href="./assets/vendor/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="./assets/css/theme.min.css">
    <link rel="stylesheet" href="./assets/css/vendor.min.css">
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="./node_modules/aos/dist/aos.css">
</head>

<body style="background-image: url(./assets/svg/illustrations/error-404.svg);" class="bg-img-hero-fixed">
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-box-shadow-on-scroll header-bg-transparent header-abs-top header-show-hide" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
        <?php include('header.php'); ?>
    </header>
    <!-- ========== END HEADER ========== -->
    <!-- ========== LOGIN MODAL ========== -->
    <?php include('loginmodal.php'); ?>
    <!-- ========== LOGIN MODAL ========== -->
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="d-lg-flex">
            <div class="container d-lg-flex align-items-lg-center min-vh-lg-100 space-4">
                <div class="w-lg-60 w-xl-50">
                    <!-- Title -->
                    <div class="mb-4">
                        <img    class=" max-w-23rem mb-3" src="./assets/svg/illustrations/error-number-404.svg" alt="SVG Illustration">
                        <p class="lead">Oops! Looks like you followed a bad link. <br> If you think this is a problem with us, please <a href="#">tell us.</a></p>
                    </div>
                    <!-- End Title -->

                    <a class="btn btn-wide btn-primary transition-3d-hover" href="./index.html">Back Home</a>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->
    </main>
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
    <script src="./assets/vendor/hs-switch/dist/hs-switch-text.min.js"></script>
    <script src="./assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="./assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="./assets/vendor/aos/dist/aos.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/theme.min.js"></script>
    <!-- <script src="./assets/js/vendor.min.js"></script> -->
    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-counter/dist/hs-counter.min.js"></script>
    <script src="./node_modules/appear/dist/appear.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF COUNTER
            // =======================================================
            $('.js-counter').each(function() {
                var counter = new HSCounter($(this)).init();
            });
        });
    </script>
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


            // INITIALIZATION OF ION RANGE SLIDER
            // =======================================================
            var ionRangeSlider = $.HSCore.components.HSIonRangeSlider.init($('.js-ion-range-slider'), {
                cusOnChange: function() {
                    var $checked = $('.js-switch-text:checked'),
                        defData = JSON.parse($checked.attr('data-hs-switch-text-options'));

                    defData.target[0].text = $('#rangeSliderResult').text();
                    defData.target[1].text = $('#rangeSliderSecondaryResult').text();

                    $checked.attr('data-hs-switch-text-options', JSON.stringify(defData));
                }
            });


            // INITIALIZATION OF SWITCH
            // =======================================================
            $('.js-switch-text').each(function() {
                var switchText = new HSSwitchText($(this), {
                    afterChange: function() {
                        ionRangeSlider.data('ionRangeSlider').update({
                            from: $(this)[0].target[0].text
                        });
                    }
                }).init();
            });


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                $.HSCore.components.HSValidation.init($(this));
            });


            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });



            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>
    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/slick-carousel/slick/slick.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/hs.slick-carousel.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SLICK CAROUSEL
            // =======================================================
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });
        });
    </script>
    <!-- JS Implementing Plugins -->
    <script src="./node_modules/jquery-validation/dist/jquery.validate.min.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/hs.validation.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                var validation = $.HSCore.components.HSValidation.init($(this));
            });
        });
    </script>



    <!-- JS Front -->
    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-toggle-switch/dist/hs-toggle-switch.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF TOGGLE SWITCH
            // =======================================================
            $('.js-toggle-switch').each(function() {
                var toggleSwitch = new HSToggleSwitch($(this)).init();
            });
        });
    </script>
    <!-- JS Plugins Init. -->


    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
    <!-- JS Implementing Plugins -->
    <script src="./node_modules/aos/dist/aos.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });
        });
    </script>
    <!-- JS Implementing Plugins -->
    <script src="./node_modules/typed.js/lib/typed.min.js"></script>
    <script src="./node_modules/aos/dist/aos.js"></script>

    <!-- JSFront -->
    <script src="./assets/js/hs.typed.js"></script>

    <script>
        // INITIALIZATION OF TEXT ANIMATION (TYPING)
        // =======================================================
        var typed = $.HSCore.components.HSTyped.init(".js-text-animation");


        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
            duration: 650,
            once: true
        });
    </script>
</body>

</html>
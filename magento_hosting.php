<?php include('./pricetable/wordpress_hosting.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Best Managed Magento Hosting Services | Cloudington</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="title" content="Best Managed Magento Hosting Services | Cloudington">
    <meta name="description" content="Get your site up and running instantly with our managed Magento hosting services. We offer 24/7 dedicated support and help achieve optimal server performance.">
    <meta name="keywords" content="Managed Magento Hosting">
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

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-box-shadow-on-scroll header-bg-white header-abs-top header-show-hide" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
        <?php include('header.php'); ?>
    </header>
    <!-- ========== END HEADER ========== -->
    <!-- ========== LOGIN MODAL ========== -->
    <?php include('loginmodal.php'); ?>
    <!-- ========== LOGIN MODAL ========== -->
    <main id="content" role="main" class="overflow-hidden">
        <!-- Hero Section -->


        <div class="position-relative overflow-hidden" style="background:linear-gradient(138deg, #2899f0, #2de0bd);">
            <div class="container space-top-3  space-bottom-3">
<div class="row">
    <div class="col-12 col-md-6 text-left text-white my-auto">
     
        <small class="btn btn-xs btn-soft-light btn-rounded text-uppercase font-weight-bold mb-2">for Your eCommerce Site        </small>     
        <h1 class="font-weight-bold text-white">Fully Managed Magento Hosting        </h1>
        <p>Get your eCommerce website up and running instantly with our fully managed and affordable Magento hosting services. Our hosting services are designed specifically to offers optimum performance for your eCommerce site. Our team of Magento experts are also available round-the-clock to offer reliable support services to our customers.
        </p>
        <div class="mt-5 d-flex align-items-center" style="flex-wrap: wrap;" >
            <a class="btn btn-light transition-3d-hover m-2" href="#planpricing">Check Our Plan  </a>
            <small class="my-3 my-sm-0 mx-2 mx-sm-3">or</small>
            <a class="btn btn-success transition-3d-hover m-2" onclick="openchat();">Talk to Hosting Expert<i class="fas fa-angle-right ml-1"></i></a>

        </div>
      
        
      
    </div>
    <div class="col-12 col-md-6 text-left text-white my-auto">
<img src="./assets/img/landingpage/magento.png" class="w-100" data-aos="fade-up" alt="">
    </div>
</div>
            </div>
        </div>
        <!-- End Hero Section -->
        <!--pricing-->
        <div class="overflow-hidden" id="planpricing">
            <div class="container pb-4 space-2">
                <!-- Title -->

                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                    <div class="min-w-8rem mr-2 mb-2">
                        <div class="avatar d-flex justify-content-center align-items-center bg-soft-warning rounded p-2 mx-auto">
                            <h2 class="m-0"><i class="fab fa-magento text-warning mb-2"></i></h2>
                        </div>
                    </div>
                    <h2 class="h1">Our Managed Magento Hosting Plans</h2>
                    <!-- <p>Choose the right VPS hosting plans for your business </p> -->
                </div>
                <!-- End Title -->
                <!-- Card -->

                <div class="overflow-hidden">


                    <!-- Pricing Section -->
                    <div class="container mt-2">
                        <div class="w-lg-80 mx-lg-auto position-relative">
                            <div class="row position-relative z-index-2 mx-n2 mb-5">
                                <div class="col-sm-6 col-md-4 px-2 mb-3">
                                    <!-- Pricing -->
                                    <div class="card h-100">
                                        <!-- Header -->
                                        <div class="card-header text-center flex-column">
                                            <span class="d-block h3"><?php echo $w1_name;?></span>
                                            <span class="d-flex mb-2 flex-row">
                                                <span class="text-dark align-top curr_sym">$</span>
                                            <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $w1_inr;?>" p-inr="<?php echo $w1_inr;?>" p-aed="<?php echo $w1_aed;?>" p-gbp="<?php echo $w1_gbp;?>" p-usd="<?php echo $w1_usd;?>"> 
                                                                    
                                                <?php echo $w1_inr; ?> 
                                                                    
                                                </span>

                                            </span>
                                            <span class="font-size-1 ml-2">per Month</span>
                                            </span>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Body -->
                                        <div class="card-body">
                                            <?php 
                                            foreach ($w1_description as $i){
                                                echo "    <div class='media font-size-1 text-body mb-3'>
                                                <i class='fas fa-check-circle text-success mt-1 mr-2'></i>
                                                <div class='media-body'>".$i."</div>
                                            </div>" ;
                                            }
                                            ?>

                                        </div>
                                        <!-- End Body -->

                                        <div class="card-footer border-0">
                                            <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $w1_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- End Pricing -->
                                </div>

                                <div class="col-sm-6 col-md-4 px-2 mb-3">
                                    <!-- Pricing -->
                                    <div class="card bg-primary text-white h-100 shadow-primary-lg">
                                        <!-- Header -->
                                        <div class="card-header border-0 bg-primary text-white text-center flex-column">
                                            <span class="d-block h3 text-white"><?php echo $w2_name;?></span>
                                            <span class="d-flex mb-2 flex-row">
                                    <span class="text-white align-top curr_sym">$</span>
                                            <span class="currency font-size-4 text-white font-weight-bold mr-n2" data-value="<?php echo $w2_inr;?>" p-inr="<?php echo $w2_inr;?>" p-aed="<?php echo $w2_aed;?>" p-gbp="<?php echo $w2_gbp;?>" p-usd="<?php echo $w2_usd;?>"> 
                                        
                                        <?php echo $w2_inr; ?> 
                                                           
                                        </span>
                                            </span>
                                            <span class="font-size-1 ml-2">per Month</span>
                                            </span>
                                        </div>
                                        <!-- End Header -->

                                        <div class="border-top opacity-xs"></div>

                                        <!-- Body -->
                                        <div class="card-body">
                                            <?php 
                                            foreach ($w2_description as $i){
                                                echo "    <div class='media font-size-1  mb-3'>
                                                <i class='fas fa-check-circle text-white mt-1 mr-2'></i>
                                                <div class='media-body'>".$i."</div>
                                            </div>" ;
                                            }
                                            ?>

                                        </div>
                                        <!-- End Body -->

                                        <div class="card-footer border-0 bg-primary text-white">
                                            <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $w2_id;?>" class="btn btn-light btn-block transition-3d-hover">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- End Pricing -->
                                </div>

                                <div class="col-sm-6 col-md-4 px-2 mb-3">
                                    <!-- Pricing -->
                                    <div class="card h-100">
                                        <!-- Header -->
                                        <div class="card-header text-center flex-column">
                                            <span class="d-block h3"><?php echo $w3_name;?></span>
                                            <span class="d-flex mb-2 flex-row">
                        <span class="text-dark align-top curr_sym">$</span>
                                            <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $w3_inr;?>" p-inr="<?php echo $w3_inr;?>" p-aed="<?php echo $w3_aed;?>" p-gbp="<?php echo $w3_gbp;?>" p-usd="<?php echo $w3_usd;?>"> 
                                
                            <?php echo $w3_inr; ?> 
                                
                     </span>

                                            </span>
                                            <span class="font-size-1 ml-2">per Month</span>
                                            </span>
                                        </div>
                                        <!-- End Header -->

                                        <!-- Body -->
                                        <div class="card-body">
                                            <?php 
                    foreach ($w3_description as $i){
                        echo " <div class='media font-size-1 text-body mb-3'>
                        <i class='fas fa-check-circle text-success mt-1 mr-2'></i>
                        <div class='media-body'>".$i."</div>
                    </div>" ;
                    }
                    ?>

                                        </div>
                                        <!-- End Body -->

                                        <div class="card-footer border-0">
                                            <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $w3_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">Order Now</a>
                                        </div>
                                    </div>
                                    <!-- End Pricing -->
                                </div>

                            </div>

                            <!-- Info -->
                            <!-- <div class="position-relative z-index-2 text-center">
                                <div class="d-inline-block font-size-1 border bg-white text-center rounded-pill py-3 px-4">
                                    Prefer to start with the Trial version? <a class="d-block d-sm-inline-block font-weight-bold ml-sm-3">Go here <span class="fas fa-angle-right ml-1"></span></a>
                                </div>
                            </div> -->
                            <!-- End Info -->

                            <!-- SVG Elements -->
                            <figure class="max-w-11rem w-100 position-absolute top-0 right-0">
                                <div class="mt-n11 mr-n11">
                                    <!-- <img    class=" img-fluid" src="./assets/svg/components/dots-1.svg" alt="Image Description"> -->
                                </div>
                            </figure>
                            <figure class="max-w-13rem w-100 position-absolute bottom-0 left-0">
                                <div class="mb-3 ml-n9">

                                </div>
                            </figure>
                            <!-- End SVG Elements -->
                        </div>
                    </div>
                    <!-- End Pricing Section -->
                </div>
                <!-- End Card -->


            </div>
        </div>
        <!-- Hero Section -->
        <div class="position-relative bg-white overflow-hidden">
            <div class="container position-relative z-index-2 space-top-1 space-top-lg-2 space-bottom-2 space-bottom-md-3">
                <div class="row align-items-lg-center">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <!-- Info -->
                        <div class="mb-6">
                            <h1 class="text-white mb-3">
                                Magento Hosting on Cloud Made Easy and Affordable

                            </h1>
                            <p class="text-white-70">When it comes to hosting your Magento website, Cloudington is the most trusted managed Magento hosting service provider you can always rely upon. Choose any of our Magento hosting plans, and get your Magento server deployed
                                instantly without any difficulties. Our hosting services are backed by a 24/7 support service that ensures to keep your Magento store up and running without any interruptions.
                            </p>
                        </div>

                        <!-- <a class="btn btn-light btn-wide btn-pill shadow-soft transition-3d-hover mb-2 mb-sm-0 mr-4"  >Contact Sales</a>
                        <a class="btn btn-indigo btn-wide btn-pill transition-3d-hover mb-2 mb-sm-0"  >Get Started</a> -->
                        <!-- End Info -->
                    </div>

                    <div class="col-lg-7">
                        <div class="position-relative">
                            <!-- Device Mockup -->
                            <div class="device d-none d-sm-block mb-3 mb-sm-0" data-aos="fade-up">
                                <img class=" img-fluid" src="./assets/svg/components/macbook.svg" alt="Image Description">
                                <img class=" device-macbook-screen" src="./assets/img/1920x1080/magento" alt="Image Description">
                            </div>
                            <!-- End Device Mockup -->


                        </div>
                    </div>
                </div>
            </div>

            <!-- SVG Shape -->
            <div class="bg-primary position-absolute top-0 right-0 bottom-0 left-0"></div>

            <figure class="d-none d-md-block position-absolute" style="top: 0rem; left: 40rem; width: 62rem; height: 62rem;">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
        <circle fill="#1818EF" opacity=".1" cx="130" cy="130" r="130"/>
      </svg>
            </figure>
            <figure class="d-none d-md-block position-absolute" style="top: 8rem; left: 40rem; width: 62rem; height: 62rem;">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
        <circle fill="#A612DD" opacity=".1" cx="130" cy="130" r="130"/>
      </svg>
            </figure>
            <figure class="d-none d-md-block position-absolute" style="top: 5rem; left: -10rem; width: 62rem; height: 62rem;">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
        <circle fill="#1919CC" opacity=".1" cx="130" cy="130" r="130"/>
      </svg>
            </figure>
            <figure class="d-none d-md-block position-absolute" style="top: -5rem; left: -10rem; width: 75rem; height: 62rem;">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 260 260">
        <circle fill="#1818EF" opacity=".1" cx="130" cy="130" r="130"/>
      </svg>
            </figure>

            <figure class="position-absolute bottom-0 right-0 left-0">
                <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1921 273">
        <polygon fill="#fff" points="0,273 1921,273 1921,0 "/>
      </svg>
            </figure>
            <!-- End SVG Shape -->
        </div>
        <!-- End Hero Section -->

        <!-- Services Section -->
        <div class="container space-2">
            <!-- Title -->
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                <span class="d-block small font-weight-bold text-cap mb-2">benefits</span>
                <h1 class="h1">Our Managed Magento Hosting Benefits </h1>
            </div>
            <!-- End Title -->

            <div class="row mx-n2 mb-3 ">
                <div class="col-sm-6 col-lg-6 px-2 mb-3 mb-lg-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-success icon-circle">
                                    <i class="fas fa-bolt"></i>
                                </span>
                            </figure>
                            <h4>Superior Performance
                            </h4>
                            <p class="font-size-1 text-body mb-0 ">Customers won't prefer websites that are slow to load. By choosing our hosting service, you don't have to worry about your store performance. Your Magento servers will be completely managed by our experts to offer unmatched
                                performance. </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-lg-6 px-2 mb-3 mb-lg-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-info icon-circle">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </figure>
                            <h4>Proactive Security </h4>
                            <p class="font-size-1 text-body mb-0 ">The security of your online store is something you shouldn't compromise. With dedicated firewalls, SSL certification, and much more we make sure to keep your server secure by preventing unauthorized third-party access to the
                                network.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>


            </div>
            <div class="row mx-n2 mb-3">
                <div class="col-sm-6 col-lg-6 px-2 mb-3 mb-sm-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-danger icon-circle">
                                    <i class="fas fa-desktop"></i>
                                </span>
                            </figure>
                            <h4>Proactive Monitoring
                            </h4>
                            <p class="font-size-1 text-body mb-0 ">Our team of Magento experts continuously monitors your server environment for any vulnerabilities. In case if any issues are detected, we will get them resolved immediately and keep your server protected from attackers.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>
                <div class="col-sm-6 col-lg-6 px-2 mb-3 mb-sm-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-primary icon-circle">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </span>
                            </figure>
                            <h4>Regular Data Backups </h4>
                            <p class="font-size-1 text-body mb-0 ">By choosing our managed Magento hosting services you never have to worry about data loss. With regular backup and advanced security service, we help keep your data safe and protected.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>
            </div>
            <div class="row mx-n2 mb-3">
                <div class="col-sm-6 col-lg-6 px-2 mb-3 mb-sm-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-info icon-circle">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                </span>
                            </figure>
                            <h4>Improved Reliability </h4>
                            <p class="font-size-1 text-body mb-0 ">By choosing our managed Magento hosting service, you are guaranteed to get 24/7 hosting support that helps keep your Magento store up and running all the time without any interruptions.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>
                <div class="col-sm-6 col-lg-6 px-2 mb-3 mb-sm-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-success icon-circle">
                                    <i class="fas fa-code"></i>
                                </span>
                            </figure>
                            <h4>Improved Efficiency
                            </h4>
                            <p class="font-size-1 text-body mb-0 ">Our experts continuously monitor your environment and fully optimizes your cloud resources and workloads for better operational efficiency.</p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>
            </div>
        </div>
        <!-- End Services Section -->
        <!-- CTA Section -->
        <div class="bg-primary text-center bg-img-hero position-relative overflow-hidden" style=" background-image: url(./assets/svg/components/abstract-shapes-5.svg); ">
            <figure class="w-35 position-absolute top-0 right-0 ">
                <div class="mt-n11 mr-n11 ">
                    <img class=" img-fluid " src="./assets/svg/components/half-circle-3.svg " alt="Image Description ">
                </div>
            </figure>

            <div class="container space-2 ">
                <div class="mb-5 ">
                    <h2 class="text-white ">Smooth & Secure Migration of Your Magento Store </h2>
                    <p class="text-white ">Move your Magento store from your existing provider to Cloudington and enjoy a powerful hosting experience. With a host of features to offer, you are guaranteed to get the best performance for your online store. Our experts can assist
                        you to ensure a smooth and easy transition of your store to the cloud.
                    </p>
                </div>
                <a class="btn btn-light transition-3d-hover ">Chat with Us</a>
            </div>
        </div>
        <!-- End CTA Section -->
        <!-- Features Section -->
        <div class="container space-2">
            <!-- Title -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <h2 class="h1">Why Choose Our Managed Magento Hosting Service?
                </h2>

            </div>
            <!-- End Title -->

            <div class="row mx-n2">
                <div class="col-sm-12 col-lg-6 px-2 mb-3 mb-lg-3">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover">
                        <div class="card-body">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-success icon-circle">
                                    <i class="fas fa-cogs"></i>
                                </span>
                            </figure>
                            <h4>Control Panel Powered </h4>
                            <p class="font-size-1 text-body mb-0">Our managed Magento hosting service comes equipped with either Plesk or cPanel control panel for easy and effective management of your hosting account.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-12 col-lg-6 px-2 mb-3 mb-lg-3">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover">
                        <div class="card-body">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-info icon-circle">
                                    <i class="fas fa-sync-alt"></i>
                                </span>
                            </figure>
                            <h4>99.99% Guaranteed Uptime
                            </h4>
                            <p class="font-size-1 text-body mb-0">We actively monitor your hosting server for any anomalies and get them resolved quickly in the event of issues, thereby keeping your store up and running 24/7. </p>
                        </div>
                        <div class="card-footer border-0 pt-0">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-12 col-lg-6 px-2 mb-3 mb-lg-3 mb-sm-0">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover">
                        <div class="card-body">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-danger icon-circle">
                                    <i class="fas fa-server"></i>
                                </span>
                            </figure>
                            <h4>Dedicated Support</h4>
                            <p class="font-size-1 text-body mb-0">Our team of Magento experts is available 24/7/365 to assist you and provide support in case of any emergencies.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-12 col-lg-6 px-2 mb-3 mb-lg-3 mb-sm-0">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover">
                        <div class="card-body">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-primary icon-circle">
                                    <i class="fas fa-file-invoice-dollar"></i>
                                </span>
                            </figure>
                            <h4>Affordable Services
                            </h4>
                            <p class="font-size-1 text-body mb-0">All our Magento hosting plans are designed to offer you the best possible services at an affordable and budget-friendly price. </p>
                        </div>
                        <div class="card-footer border-0 pt-0">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>


            </div>
        </div>
        <!-- End Features Section -->

        <div class="position-relative ">
            <!-- Contacts Section -->
            <div class="bg-dark bg-img-hero ">
                <div class="container space-top-2 space-top-lg-3 space-bottom-1 ">
                    <!-- Title -->
                    <div class="w-lg-50 text-center text-white mx-lg-auto mb-7">
                        <span class="d-block small text-white-70 font-weight-bold text-cap mb-2">Contact us</span>
                        <h2 class="text-white text-lh-lg">Looking for a managed hosting plan for your business?
                            <span class="text-success"> Get in touch with us for assistance. </span></h2>
                    </div>
                    <!-- End Title -->

                    <div class="position-relative w-lg-50 z-index-2 mx-lg-auto ">
                        <!-- Form -->
                        <form class="js-validate card shadow-lg p-4 p-lg-7 ">
                            <div class="js-form-message form-group mb-4 ">
                                <label for="inputName " class="input-label ">Name</label>
                                <input type="text " class="form-control " name="name " id="inputName " placeholder="Alex Hecker " aria-label="Alex Hecker " required data-msg="Please enter your name. ">
                            </div>
                            <div class="form-group mb-4 ">
                                <label for="inputCompanyName " class="input-label ">Company name <span class="text-muted font-weight-normal ml-1 ">(optional)</span></label>
                                <input type="text " class="form-control " name="companyName " id="inputCompanyName " placeholder="Pixeel Ltd. " aria-label="Pixeel Ltd. ">
                            </div>
                            <div class="js-form-message form-group mb-4 ">
                                <label for="emailAddressExample2 " class="input-label ">Email address</label>
                                <input type="email " class="form-control " name="emailAddressExample2 " id="emailAddressExample2 " placeholder="alexhecker@pixeel.com " aria-label="alexhecker@pixeel.com " required data-msg="Please enter a valid email
            address. ">
                            </div>
                            <div class="js-form-message form-group mb-4 ">
                                <label for="descriptionTextarea " class="input-label ">Tell us more</label>
                                <textarea class="form-control " rows="3 " id="descriptionTextarea " placeholder="Hi there, I would like to ... " required data-msg="Please enter your message. "></textarea>
                            </div>

                            <div class="d-md-flex justify-content-md-end ">
                                <button type="submit " class="btn btn-primary btn-wide transition-3d-hover ">Submit</button>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
            <!-- End Contacts Section -->

            <!-- SVG Shape -->
            <figure class="position-absolute right-0 bottom-0 left-0 ">
                <svg preserveAspectRatio="none " xmlns="http://www.w3.org/2000/svg " xmlns:xlink="http://www.w3.org/1999/xlink " x="0px " y="0px " viewBox="0 0 1920 323 " enable-background="new 0 0 1920 323 " xml:space="preserve " style="margin-bottom:
            -8px; ">
                <polygon fill="#fff " points="0,323 1920,323 1920,0 "/>
              </svg>
            </figure>
            <!-- End SVG Shape -->
        </div>


        <!-- Testimonials Section -->
        <?php include('./testimonial.php')?>
        <!-- End Testimonials Section -->

        <!-- Collapse Section -->
        <div class="container space-2">
            <h2>FAQ</h2>

            <!-- Basics Accordion -->
            <div id="basicsAccordion">
                <!-- Card -->
                <div class="card shadow-none mb-3">
                    <div class="card-header card-collapse" id="basicsHeadingOne">
                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseOne" aria-expanded="false" aria-controls="basicsCollapseOne">
                            What is Cloudington's Magento Hosting?                  
  
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>It is a kind of hosting in which your Magento store is hosted on cloud servers that are fully optimized and configured to offer the best possible performance.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->



                <!-- Card -->
                <div class="card shadow-none mb-3">
                    <div class="card-header card-collapse" id="basicsHeadingThree">
                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                            Can Cloudington help me migrate our online store from an existing
                            service provider?                            
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>Yes. Our experts are available 24/7 to assist you and to ensure a smooth and seamless transition of your online store from the existing host to Cloudington.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card shadow-none mb-3">
                    <div class="card-header card-collapse" id="basicsHeadingFour">
                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                            How secure is your Magento Hosting Service?
  
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>Our experts continuously monitor your hosting environment for any vulnerabilities. With services such as dedicated firewalls, SSL encryption, two-factor authentication, etc. we guarantee to keep your system protected and secure.</p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->


                <!-- End Card -->
            </div>
            <!-- End Basics Accordion -->
        </div>
        <!-- End Collapse Section -->



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
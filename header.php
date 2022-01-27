<!-- ========== HEADER ========== -->

<style>
    .navbar-promo-link .media span .fab {
        font-size: 1.6rem;
    }
    
    .navbar-promo-link .media span .fas {
        font-size: 1.4rem;
    }
    
    @media(max-width:992px) {
        .navbar-expand-lg .dropdown-menu:not(.navbar-promo):not(.dropdown-menu-no-border-on-mobile) {
            border: none!important;
        }
        .navbar-promo-item {
            margin-left: 0!important;
            margin-right: 0!important;
        }
        .navbar-promo-link .media span .fab {
            font-size: 1.6rem;
        }
        .navbar-promo-link .media span .fas {
            font-size: 1.4rem;
        }
        .header-section {
            padding-left: 5px!important;
            padding-right: 5px!important;
        }
        .mob-currency {
            display: flex!important;
            justify-content: space-between!important;
            padding: 0!important;
        }
        .currencydd {
            margin-right: 0!important;
        }
        .c_type {
            padding-right: 0!important;
            padding-left: 0!important;
        }
        .navbar-brand img {
            width: 10rem!important;
        }
    }
</style>
<header id="header" class="header left-aligned-navbar">
    <div class="header-section px-5">
        <div id="logoAndNav" class="container-fluid">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg">
                <!-- Logo -->
                <a class="navbar-brand" href="/" aria-label="Front">
                    <img src="./assets/update_logos/mockup-no bg.png" alt="Logo" style="padding-bottom: 0.5rem;">
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse">
                    <div class="navbar-body header-abs-top-inner">
                        <ul class="navbar-nav">
                            <!-- Home -->
                            <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                                "desktop": {
                                  "position": "left",
                                  "maxWidth": "900px"
                                }
                              }'>
                                <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Cloud Servers</a>

                                <!-- Home - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="homeMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/aws-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <img class=" navbar-promo-icon" src="./assets/svg/cloud-rect/Amazon_Web_Services_Logo.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">AWS Cloud </span>
                                                                <span class="navbar-promo-text">Fully managed AWS hosting</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <!-- <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/google-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <img class=" navbar-promo-icon" src="./assets/svg/cloud-square/gcp.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title"> Google Cloud </span>
                                                                <span class="navbar-promo-text">Affordable Google cloud hosting   </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                                <div class="navbar-promo-card navbar-promo-item w-50">
                                                    <a class="navbar-promo-link" href="/managed-linode-hosting">
                                                        <div class="media align-items-center">
                                                            <img class=" navbar-promo-icon p-1" src="./assets/svg/cloud-square/linode.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Linode Cloud</span>
                                                                <span class="navbar-promo-text">Fully managed Linode cloud hosting</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/azure-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <img class=" navbar-promo-icon" src="./assets/svg/cloud-square/azure.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Azure Cloud</span>
                                                                <span class="navbar-promo-text">Fully managed Azure cloud hosting</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/digital-ocean-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <img class=" navbar-promo-icon" src="./assets/svg/cloud-square/do.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Digital Ocean</span>
                                                                <span class="navbar-promo-text">Fully managed DigitalOcean hosting  </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                            </div>
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <!-- <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/google-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <img class=" navbar-promo-icon" src="./assets/svg/cloud-square/gcp.svg" alt="SVG">
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title"> Google Cloud </span>
                                                                <span class="navbar-promo-text">Affordable Google cloud hosting   </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div> -->
                                                <!-- End Promo Item -->


                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <!-- End Home - Mega Menu -->
                            </li>
                            <!-- End Home -->

                            <!-- Web Hosting -->
                            <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                            "desktop": {
                              "position": "center",
                              "maxWidth": "300px"
                            }                            
                          }'>
                                <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Web Hosting</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100 responsiveheader rheader1" aria-labelledby="demosMegaMenu" style="min-width: 330px;">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/shared-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-info icon-circle mr-3">
                                                            <i class="fas fa-server "></i>
                                                        </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Shared Hosting </span>
                                                                <span class="navbar-promo-text">Affordable shared hosting
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/wordpress-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-primary icon-circle mr-3">
                                                            <i class="fab fa-wordpress "></i>
                                                        </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title"> Wordpress Hosting</span>
                                                                <span class="navbar-promo-text">Managed WordPress hosting
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->


                                            </div>

                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/magento-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-warning icon-circle mr-3">
                                                            <i class="fab fa-magento "></i>
                                                        </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Magento Hosting</span>
                                                                <span class="navbar-promo-text">Managed Magento hosting</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                            </div>
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link" href="/vps-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-success icon-circle mr-3">
                                                            <i class="fas fa-cloud "></i>
                                                        </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">VPS Cloud Hosting</span>
                                                                <span class="navbar-promo-text">Managed VPS hosting</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!-- End Web Hosting -->

                            <!-- Home -->
                            <li class="hs-has-mega-menu navbar-nav-item" data-hs-mega-menu-item-options='{
                              "desktop": {
                                "position": "left",
                                "maxWidth": "900px"
                              }
                            }'>
                                <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Specialized Clouds</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="docsMegaMenu" style="left: 10%;">
                                    <div class="row no-gutters">
                                        <div class="col-lg-12">
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/managed-cloud-startups">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-success icon-circle mr-3">
                                                              <i class="fas fa-cloud "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Cloud For Startups</span>
                                                                <span class="navbar-promo-text">Managed Cloud Hosting for Startups
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/joomla-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-danger icon-circle mr-3">
                                                              <i class="fab fa-joomla"></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Joomla Cloud</span>
                                                                <span class="navbar-promo-text">Managed Joomla cloud hosting
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/video-stream-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-dark icon-circle mr-3">
                                                              <i class="fas fa-video "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Video Streaming</span>
                                                                <span class="navbar-promo-text">Managed Video stream hosting
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                            </div>
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/wordpress-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-primary icon-circle mr-3">
                                                              <i class="fab fa-wordpress "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Wordpress Cloud</span>
                                                                <span class="navbar-promo-text">Managed WordPress cloud hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/drupal-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-info icon-circle mr-3">
                                                              <i class="fab fa-drupal "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Drupal Cloud</span>
                                                                <span class="navbar-promo-text">Managed Drupal cloud hosting
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/gaming-server-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-warning icon-circle mr-3">
                                                              <i class="fas fa-gamepad "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Gaming Cloud</span>
                                                                <span class="navbar-promo-text">Gaming cloud server hosting
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/magento-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-warning icon-circle mr-3">
                                                              <i class="fab fa-magento "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Magento Cloud</span>
                                                                <span class="navbar-promo-text">Fully managed Magento cloud hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/radio-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-success icon-circle mr-3">
                                                              <i class="fas fa-broadcast-tower "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Radio Streaming Cloud</span>
                                                                <span class="navbar-promo-text">Secure radio stream hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/backup-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-primary icon-circle mr-3">
                                                              <i class="fas fa-cloud-upload-alt "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Backup Cloud</span>
                                                                <span class="navbar-promo-text">Cloud backup as a service (BaaS)                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/business-email">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-info icon-circle mr-3">
                                                              <i class="fas fa-envelope "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Business Email Cloud</span>
                                                                <span class="navbar-promo-text">Secure business email hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/private-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-danger icon-circle mr-3">
                                                              <i class="fas fa-lock "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Private Cloud</span>
                                                                <span class="navbar-promo-text">Dedicated private cloud hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/hosted-ox-app-suite">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-dark icon-circle mr-3">
                                                              <i class="fab fa-xing"></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">OX Suite Cloud</span>
                                                                <span class="navbar-promo-text">Managed hosted OX App Suite                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->

                                            </div>
                                            <div class="navbar-promo-card-deck">
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/cpanel-cloud-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-warning icon-circle mr-3">
                                                              <i class="fas fa-server "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">cPanel Cloud</span>
                                                                <span class="navbar-promo-text">Managed cPanel hosting service                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/moodle-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-info icon-circle mr-3">
                                                              <i class="fas fa-graduation-cap "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">Moodle Cloud</span>
                                                                <span class="navbar-promo-text">Managed Moodle LMS hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                                <!-- Promo Item -->
                                                <div class="navbar-promo-card navbar-promo-item">
                                                    <a class="navbar-promo-link " href="/woocommerce-hosting">
                                                        <div class="media align-items-center">
                                                            <span class="icon icon-md icon-soft-primary icon-circle mr-3">
                                                              <i class="fas fa-shopping-cart "></i>
                                                          </span>
                                                            <div class="media-body">
                                                                <span class="navbar-promo-title">WooCommerce Cloud</span>
                                                                <span class="navbar-promo-text">Managed WooCommerce hosting                                                            </span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- End Promo Item -->
                                            </div>



                                        </div>

                                        <!-- Promo -->

                                        <!-- End Promo -->
                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!-- End Home -->



                            <!-- Docs -->
                            <li class="hs-has-mega-menu navbar-nav-item " data-hs-mega-menu-item-options='{
                                    "desktop": {
                                      "position": "center",
                                      "maxWidth": "260px"
                                    }
                                  }'>
                                <a id="docsMegaMenu2" class="hs-mega-menu-invoker nav-link nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false"> More</a>


                                <div class="hs-mega-menu dropdown-menu responsiveheader rheader2" aria-labelledby="docsMegaMenu2" style="min-width: 330px">

                                    <div class="navbar-promo-item d-none">
                                        <a class="navbar-promo-link">
                                            <div class="media align-items-center">
                                                <span class="icon icon-md icon-soft-info icon-circle mr-3">
                                                <i class="fab fa-expeditedssl "></i>
                                            </span>
                                                <div class="media-body">
                                                    <span class="navbar-promo-title">
                                            SSL Certification
                                             
                                                              </span>
                                                    <small class="navbar-promo-text">Development guides</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>



                                    <div class="navbar-promo-item">
                                        <a class="navbar-promo-link" href="https://my.cloudyea.com/cart.php?a=add&domain=register">
                                            <div class="media align-items-center">
                                                <span class="icon icon-md icon-soft-success icon-circle mr-3">
                                                <i class="fas fa-globe "></i>
                                            </span>
                                                <div class="media-body">
                                                    <span class="navbar-promo-title">Domain Registration</span>
                                                    <small class="navbar-promo-text">Start building</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="navbar-promo-item d-none">
                                        <a class="navbar-promo-link">
                                            <div class="media align-items-center">
                                                <span class="icon icon-md icon-soft-danger icon-circle mr-3">
                                                <i class="fas fa-laptop-code "></i>
                                            </span>
                                                <div class="media-body">
                                                    <span class="navbar-promo-title">cPanel Licensing</span>
                                                    <small class="navbar-promo-text">Start building</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>



                                </div>

                            </li>
                            <!-- End Docs -->

                            <!-- Currency -->
                            <li class="navbar-nav-last-item">
                                <div class="dropdown show currencydd mr-3">
                                    <a class="mob-currency btn btn-sm btn-light-outline dropdown-toggle p-1 ddtoggle " role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="selected_ctype" style="width: 2.2rem;">
                                        <span class="spinner-grow spinner-grow-sm text-primary "  role="status">                                        
                                        </span>
                                        </span>
                                    </a>

                                    <div class="dropdown-menu currency-menu " aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item c_type" data-sym="₹">₹ INR</a>
                                        <a class="dropdown-item c_type" data-sym="$">$ USD</a>
                                        <a class="dropdown-item c_type" data-sym="£">£ GBP</a>
                                        <a class="dropdown-item c_type" data-sym="د.إ">د.إ AED</a>
                                    </div>
                                </div>

                            </li>
                            <li class="navbar-nav-last-item ml-0">
                                <a class="btn btn-sm btn-outline-primary loginbtn mr-3" href="https://my.cloudyea.com/index.php?rp=/login">
                                    Login
                                  </a>
                                <a class="btn btn-sm btn-primary transition-3d-hover " href="https://my.cloudyea.com/register.php">
                                    Signup
                                   </a>
                            </li>

                            <!-- Currency -->




                        </ul>

                    </div>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- JS Implementing Plugins -->

<script src="./assets/js/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script src="./assets/js/custom.js"></script>
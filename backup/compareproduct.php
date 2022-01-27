<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Create a Product | Cloudington</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="noindex">

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
    <link rel="stylesheet" href="./node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="./node_modules/quill/dist/quill.snow.css">
    <style>
        .checkbox-outline-input:checked~.checkbox-outline-label>.btn {
            background-color: #2899f0;
            color: #fff;
        }
        
        @media (max-width:772px) {
            #stickyBlockStartPointPostJob {
                display: none;
            }
        }
    </style>
</head>

<body class="bg-light">
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-box-shadow-on-scroll header-bg-light header-abs-top header-show-hide" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
        <?php include('header.php'); ?>
    </header>
    <!-- ========== HEADER ========== -->
    <!-- Step Section -->
    <div class="container space-top-3 space-bottom-4">
        <!-- Step Form -->
        <form class="js-step-form-2" data-hs-step-form-options='{
            "progressSelector": "#postJobStepFormProgress",
            "stepsSelector": "#postJobStepFormContent",
            "endSelector": "#postJobFinishBtn",
            "isValidate": false
          }'>
            <div class="row">
                <div id="stickyBlockStartPointPostJob" class="col-lg-3">
                    <a href="./productcreation.php" type="button" class="btn btn-soft-primary"><i class="fas fa-angle-left mr-1"></i>
                Back 
                    </a>
                    <!-- Sticky Block -->
                    <div class="js-sticky-block" data-hs-sticky-block-options='{
                 "parentSelector": "#stickyBlockStartPointPostJob",
                 "breakpoint": "lg",
                 "startPoint": "#stickyBlockStartPointPostJob",
                 "endPoint": "#stickyBlockEndPointPostJob",
                 "stickyOffsetTop": 20,
                 "stickyOffsetBottom": 0
               }'>
                        <!-- Step -->
                        <ul id="postJobStepFormProgress" class="js-step-progress step step-icon-xs step-border-last-0 mt-5">
                            <li class="step-item">
                                <a class="step-content-wrapper" onclick="resetLoad();" href="javascript:;" data-hs-step-form-next-options='{
                    "targetSelector": "#postJobStepBasic"
                  }'>
                                    <span class="step-icon step-icon-soft-dark">1</span>
                                    <div class="step-content">
                                        <span class="step-title">Configuration Options</span>
                                        <span class="step-title-description step-text font-size-1">Server Configuration options</span>
                                    </div>
                                </a>
                            </li>

                            <li class="step-item">
                                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                    "targetSelector": "#postJobStepAddress"
                  }'>
                                    <span class="step-icon step-icon-soft-dark">2</span>
                                    <div class="step-content">
                                        <span class="step-title">Server Instances</span>
                                        <span class="step-title-description step-text font-size-1">Select Server Instances</span>
                                    </div>
                                </a>
                            </li>
                            <li class="step-item">
                                <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                    "targetSelector": "#selectRegion"
                  }'>
                                    <span class="step-icon step-icon-soft-dark">3</span>
                                    <div class="step-content">
                                        <span class="step-title">Server Region</span>
                                        <span class="step-title-description step-text font-size-1">Select Server Region</span>
                                    </div>
                                </a>
                            </li>


                        </ul>
                        <!-- End Step -->
                    </div>
                    <!-- End Sticky Block -->
                </div>

                <div id="formContainerPostJob" class="col-lg-9">
                    <!-- Content Step Form -->
                    <div id="postJobStepFormContent">
                        <!-- Card -->
                        <div id="postJobStepBasic" class="card active">
                            <!-- Header -->
                            <div class="card-header bg-img-hero bg-primary text-white py-4">
                                <div class="flex-grow-1">
                                    <span class="">Step 1 of 3</span>
                                    <h3 class="card-header-title text-white">Configuration Options</h3>

                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <!-- Form Group -->
                            <div class="card-body">
                                <div class="mb-2">
                                    <h5 class="divider mb-3">Select CMS type</h5>

                                    <!-- Radio Checkbox Group -->

                                    <div class="row mx-n2 cmstype">
                                        <div class="col-6 col-md-3 px-2 mb-3 mb-md-0">
                                            <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                <input value="wordpress" type="radio" id="typeOfListingRadio1" name="cmsvalue" class="custom-control-input checkbox-outline-input checkbox-icon-input" checked="">
                                                <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="typeOfListingRadio1">
                                            <span class="icon icon-lg icon-circle icon-soft-primary mb-3">
                                                <i class="fab fa-wordpress" style="font-size: 1.5rem;"></i>
                                            </span>
                                            <span class="d-block">Wordpress</span>
                                          </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 px-2 mb-3 mb-md-0">
                                            <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                <input type="radio" value="joomla" id="typeOfListingRadio2" name="cmsvalue" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                                                <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="typeOfListingRadio2">
                                                    <span class="icon icon-lg icon-circle icon-soft-danger mb-3">
                                                        <i class="fab fa-joomla" style="font-size: 1.5rem;"></i>
                                                    </span>
                                            <span class="d-block">Joomla</span>
                                          </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 px-2">
                                            <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                <input type="radio" value="drupal" id="typeOfListingRadio3" name="cmsvalue" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                                                <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="typeOfListingRadio3">
                                                    <span class="icon icon-lg icon-circle icon-soft-info mb-3">
                                                        <i class="fab fa-drupal" style="font-size: 1.5rem;"></i>
                                                    </span>
                                            <span class="d-block">Drupal</span>
                                          </label>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3 px-2">
                                            <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                <input type="radio" value="magento" id="typeOfListingRadio4" name="cmsvalue" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                                                <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="typeOfListingRadio4">
                                                    <span class="icon icon-lg icon-circle icon-soft-warning mb-3">
                                                        <i class="fab fa-magento" style="font-size: 1.5rem;"></i>
                                                    </span>
                                            <span class="d-block">Magento</span>
                                          </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Radio Checkbox Group -->
                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-6 ">
                                    <h5 class="divider mb-2">Select Storage</h5>
                                    <div id="statusLabel" style="flex-wrap: wrap;" class="btn-group btn-group-toggle btn-group-segment d-flex  form-group storagevalue" data-toggle="buttons">
                                        <label class="btn btn-sm flex-fill">
                                          <input value="25" type="radio" name="options" id="optionBuy" checked="">25 GB
                                        </label>
                                        <label class="btn btn-sm flex-fill">
                                          <input value="50" type="radio" name="options" id="optionRent">50 GB
                                        </label>
                                        <label class="btn btn-sm flex-fill active">
                                          <input type="radio" value="60" name="options" id="optionSold">60 GB
                                        </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="80" type="radio" name="options" id="optionSold">80 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="160" type="radio" name="options" id="optionSold">160 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="320" type="radio" name="options" id="optionSold">320 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="640" type="radio" name="options" id="optionSold">640 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="1280" type="radio" name="options" id="optionSold">1280 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="1920" type="radio" name="options" id="optionSold">1920 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="2560" type="radio" name="options" id="optionSold">2560 GB
                                          </label>
                                        <label class="btn btn-sm flex-fill active">
                                            <input value="3840" type="radio" name="options" id="optionSold">3840 GB
                                          </label>
                                    </div>
                                </div>
                                <!-- End Form Group -->
                                <!-- Form Group -->
                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 monthlyvisitors">
                                            <h5 class="divider mb-2">Number of Monthly Visitors</h5>

                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="100,500" type="radio" class="custom-control-input" name="visitCount" id="remoteOccasionRadio2" checked>
                                                    <label class="custom-control-label" for="remoteOccasionRadio2">100 - 500</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->

                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="500,10000" type="radio" class="custom-control-input" name="visitCount" id="remoteOccasionRadio3">
                                                    <label class="custom-control-label" for="remoteOccasionRadio3">500 - 1000</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->

                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="1000,10000" type="radio" class="custom-control-input" name="visitCount" id="remoteOccasionRadio4">
                                                    <label class="custom-control-label" for="remoteOccasionRadio4">1000 - 10,000</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->
                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="10000+" type="radio" class="custom-control-input" name="visitCount" id="remoteOccasionRadio5">
                                                    <label class="custom-control-label" for="remoteOccasionRadio5">More than 10,000</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->
                                        </div>
                                        <div class="col-md-6 col-sm-12 websitecount">
                                            <h5 class="divider mb-2">Number of Websites</h5>
                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2" id="websitecount">
                                                <div class="custom-control custom-radio">
                                                    <input value="1,5" type="radio" class="custom-control-input" name="websiteCount" id="web1" checked>
                                                    <label class="custom-control-label" for="web1">1 - 5</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->

                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="5,10" type="radio" class="custom-control-input" name="websiteCount" id="web2">
                                                    <label class="custom-control-label" for="web2">5 - 10</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->

                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="10,50" type="radio" class="custom-control-input" name="websiteCount" id="web3">
                                                    <label class="custom-control-label" for="web3">10 - 50</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->

                                            <!-- Custom Radio -->
                                            <div class="form-control mb-2">
                                                <div class="custom-control custom-radio">
                                                    <input value="50+" type="radio" class="custom-control-input" name="websiteCount" id="web4">
                                                    <label class="custom-control-label" for="web4">More than 50</label>
                                                </div>
                                            </div>
                                            <!-- End Custom Radio -->
                                        </div>

                                    </div>

                                </div>
                                <!-- End Form Group -->
                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer">
                                <div class="d-flex justify-content-end align-items-center">
                                    <a onclick="compareinstance();" type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                            "targetSelector": "#postJobStepAddress"
                          }'>
                    Continue <i class="fas fa-angle-right ml-1"></i>
                        </a>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div id="postJobStepAddress" class="card" style="display: none;">
                            <!-- Header -->
                            <div class="card-header bg-img-hero bg-primary py-4">
                                <div class="flex-grow-1">
                                    <span class="text-light">Step 2 of 3</span>
                                    <h3 class="card-header-title text-white">Server instances</h3>
                                    <p class="card-text text-light">Select your instance type.</p>
                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body p-2">
                                <!-- Form Group -->
                                <div class="form-group  text-center">
                                    <div class="mb-6">
                                        <h5 class="divider mb-3">Select Instance type</h5>

                                        <!-- Radio Checkbox Group -->
                                        <div id="inloader" class="spinner-grow text-primary my-5 " role="status">

                                        </div>
                                        <div id="instancedata" class="row mx-n2 justify-content-center" style="display: none;">
                                            <div class="col-6 col-md-3 px-2 mb-3 mb-md-0">
                                                <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                    <input type="radio" id="awsinstance" name="instancetype" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                                                    <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="awsinstance">
                                                        <figure class="avatar mx-auto d-flex justify-content-center">
                                                            <img class="p-1" height="100" width="100" style="height: auto;" src="./assets/svg/cloud-square/aws.svg" alt="Logo">
                                                        </figure>
                                                <span class="d-block">Cloud A1</span>
                                                <hr>
                                                <div class="card-body p-1 text-left">
                                                    <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                        
                                      ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                        <i class="fas fa-microchip text-success"></i>
                                      </span>
                
                                                        <div class="media-body w-50">vCPU</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 Cores</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                      media
                                      font-size-1
                                      text-body
                                      mb-3
                                      align-items-center
                                    ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                      <i class="fas fa-memory text-success"></i>
                                    </span>
                
                                                        <div class="media-body w-50">RAM</div>
                                                        <div class="media-body pl-2">
                                                            <b>4 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                    media
                                    font-size-1
                                    text-body
                                    mb-3
                                    align-items-center
                                  ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                    <i class="fas fa-hdd text-success"></i>
                                  </span>
                
                                                        <div class="media-body w-50">Storage</div>
                                                        <div class="media-body pl-2">
                                                            <b>40 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                  media
                                  font-size-1
                                  text-body
                                  mb-1
                                  align-items-center
                                ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                  <i class="fas fa-wifi text-success"></i>
                                </span>
                
                                                        <div class="media-body w-50">Bandwidth</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 TB</b>
                                                        </div>
                                                    </div>
                                           
                                                </div>
                                                <hr>
                                                <div class="btn btn-soft-primary btn-block">₹ 499</div>
                                              </label>

                                                </div>

                                            </div>
                                            <div class="col-6 col-md-3 px-2 mb-3 mb-md-0">
                                                <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                    <input type="radio" id="gcpinstance" name="instancetype" class="custom-control-input checkbox-outline-input checkbox-icon-input" checked="">
                                                    <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="gcpinstance">
                                                        <figure class="avatar mx-auto d-flex justify-content-center">
                                                            <img class="p-2" height="100" width="100" style="height: auto;" src="./assets/svg/cloud-square/gcp.svg" alt="Logo">
                                                        </figure>
                                                <span class="d-block">Cloud G1</span>
                                                <hr>
                                                <div class="card-body p-1 text-left">
                                                    <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                        
                                      ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                        <i class="fas fa-microchip text-success"></i>
                                      </span>
                
                                                        <div class="media-body w-50">vCPU</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 Cores</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                      media
                                      font-size-1
                                      text-body
                                      mb-3
                                      align-items-center
                                    ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                      <i class="fas fa-memory text-success"></i>
                                    </span>
                
                                                        <div class="media-body w-50">RAM</div>
                                                        <div class="media-body pl-2">
                                                            <b>4 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                    media
                                    font-size-1
                                    text-body
                                    mb-3
                                    align-items-center
                                  ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                    <i class="fas fa-hdd text-success"></i>
                                  </span>
                
                                                        <div class="media-body w-50">Storage</div>
                                                        <div class="media-body pl-2">
                                                            <b>40 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                  media
                                  font-size-1
                                  text-body
                                  mb-1
                                  align-items-center
                                ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                  <i class="fas fa-wifi text-success"></i>
                                </span>
                
                                                        <div class="media-body w-50">Bandwidth</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 TB</b>
                                                        </div>
                                                    </div>
                                           
                                                </div>
                                                <hr>
                                                <div class="btn btn-soft-primary btn-block">₹ 499</div>
                                              </label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 px-2">
                                                <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                    <input type="radio" id="doinstance" name="instancetype" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                                                    <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="doinstance">
                                                        <figure class="avatar mx-auto d-flex justify-content-center">
                                                            <img class="p-2" height="100" width="100" style="height: auto;" src="./assets/svg/cloud-square/do.svg" alt="Logo">
                                                        </figure>
                                                <span class="d-block">Cloud D1</span>
                                                <hr>
                                                <div class="card-body p-1 text-left">
                                                    <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                        
                                      ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                        <i class="fas fa-microchip text-success"></i>
                                      </span>
                
                                                        <div class="media-body w-50">vCPU</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 Cores</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                      media
                                      font-size-1
                                      text-body
                                      mb-3
                                      align-items-center
                                    ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                      <i class="fas fa-memory text-success"></i>
                                    </span>
                
                                                        <div class="media-body w-50">RAM</div>
                                                        <div class="media-body pl-2">
                                                            <b>4 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                    media
                                    font-size-1
                                    text-body
                                    mb-3
                                    align-items-center
                                  ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                    <i class="fas fa-hdd text-success"></i>
                                  </span>
                
                                                        <div class="media-body w-50">Storage</div>
                                                        <div class="media-body pl-2">
                                                            <b>40 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                  media
                                  font-size-1
                                  text-body
                                  mb-1
                                  align-items-center
                                ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                  <i class="fas fa-wifi text-success"></i>
                                </span>
                
                                                        <div class="media-body w-50">Bandwidth</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 TB</b>
                                                        </div>
                                                    </div>
                                           
                                                </div>
                                                <hr>
                                                <div class="btn btn-soft-primary btn-block">₹ 499</div>
                                              </label>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 px-2">
                                                <div class="custom-control custom-radio custom-control-inline checkbox-outline checkbox-icon text-center w-100 h-100">
                                                    <input type="radio" id="linodeinstance" name="instancetype" class="custom-control-input checkbox-outline-input checkbox-icon-input">
                                                    <label class="checkbox-outline-label checkbox-icon-label w-100 rounded py-3 px-1 mb-0" for="linodeinstance">
                                                        <figure class="avatar mx-auto d-flex justify-content-center">
                                                            <img class="p-2" height="100" width="100" style="height: auto;" src="./assets/svg/cloud-square/linode.svg" alt="Logo">
                                                        </figure>
                                                <span class="d-block">Cloud LS1</span>
                                                <hr>
                                                <div class="card-body p-1 text-left">
                                                    <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                        
                                      ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                        <i class="fas fa-microchip text-success"></i>
                                      </span>
                
                                                        <div class="media-body w-50">vCPU</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 Cores</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                      media
                                      font-size-1
                                      text-body
                                      mb-3
                                      align-items-center
                                    ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                      <i class="fas fa-memory text-success"></i>
                                    </span>
                
                                                        <div class="media-body w-50">RAM</div>
                                                        <div class="media-body pl-2">
                                                            <b>4 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                    media
                                    font-size-1
                                    text-body
                                    mb-3
                                    align-items-center
                                  ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                    <i class="fas fa-hdd text-success"></i>
                                  </span>
                
                                                        <div class="media-body w-50">Storage</div>
                                                        <div class="media-body pl-2">
                                                            <b>40 GB</b>
                                                        </div>
                                                    </div>
                                                    <div class="
                                  media
                                  font-size-1
                                  text-body
                                  mb-1
                                  align-items-center
                                ">
                                                        <span class="icon icon-xs icon-soft-primary mt-1 mr-2">
                                  <i class="fas fa-wifi text-success"></i>
                                </span>
                
                                                        <div class="media-body w-50">Bandwidth</div>
                                                        <div class="media-body pl-2">
                                                            <b>2 TB</b>
                                                        </div>
                                                    </div>
                                           
                                                </div>
                                                <hr>
                                                <div class="btn btn-soft-primary btn-block">₹ 499</div>
                                              </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Radio Checkbox Group -->
                                    </div>
                                </div>
                                <!-- End Form Group -->


                            </div>

                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <button onclick="resetLoad();" type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                       "targetSelector": "#postJobStepBasic"
                     }'>
                    <i class="fas fa-angle-left mr-1"></i> Previous 
                  </button>

                                    <div class="ml-auto">
                                        <button type="button" onclick="resetLoad();" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#selectRegion"
                            }'>
                      Continue <i class="fas fa-angle-right ml-1"></i>
                    </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->
                        <!-- Card -->
                        <div id="selectRegion" class="card" style="display: none;">
                            <!-- Header -->
                            <div class="card-header bg-img-hero bg-primary py-4">
                                <div class="flex-grow-1">
                                    <span class="text-light">Step 3 of 3</span>
                                    <h3 class="card-header-title text-white">Server Region</h3>
                                    <p class="card-text text-light">Select your Server Region.</p>
                                </div>
                            </div>
                            <!-- End Header -->

                            <!-- Body -->
                            <div class="card-body">
                                <!-- Form Group -->
                                <!-- Form Group -->
                                <div class="form-group mb-6 ">
                                    <h5 class="divider mb-3">Select Server Region</h5>

                                    <!-- Select -->
                                    <select id="countryLabelPostJob" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="countrySelect" data-hs-select2-options='{
                      "minimumResultsForSearch": "Infinity"
                    }'>
                <option label="empty"></option>
                <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>Afghanistan</option>
                <option value="AX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>Aland Islands</option>
                <option value="AL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>Albania</option>
                <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>Algeria</option>
                <option value="AS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>American Samoa</option>
                <option value="AD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>Andorra</option>
                <option value="AO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>Angola</option>
                <option value="AI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>Anguilla</option>
                <option value="AG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>Antigua and Barbuda</option>
                <option value="AR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>Argentina</option>
                <option value="AM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>Armenia</option>
                <option value="AW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>Aruba</option>
                <option value="AU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>Australia</option>
                <option value="AT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>Austria</option>
                <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>Azerbaijan</option>
                <option value="BS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>Bahamas</option>
                <option value="BH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>Bahrain</option>
                <option value="BD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>Bangladesh</option>
                <option value="BB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>Barbados</option>
                <option value="BY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>Belarus</option>
                <option value="BE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>Belgium</option>
                <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>Belize</option>
                <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>Benin</option>
                <option value="BM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>Bermuda</option>
                <option value="BT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>Bhutan</option>
                <option value="BO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>Bolivia (Plurinational State of)</option>
                <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>Bonaire, Sint Eustatius and Saba</option>
                <option value="BA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>Bosnia and Herzegovina</option>
                <option value="BW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>Botswana</option>
                <option value="BR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>Brazil</option>
                <option value="IO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>British Indian Ocean Territory</option>
                <option value="BN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>Brunei Darussalam</option>
                <option value="BG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>Bulgaria</option>
                <option value="BF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>Burkina Faso</option>
                <option value="BI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>Burundi</option>
                <option value="CV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>Cabo Verde</option>
                <option value="KH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>Cambodia</option>
                <option value="CM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>Cameroon</option>
                <option value="CA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>Canada</option>
                <option value="KY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>Cayman Islands</option>
                <option value="CF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>Central African Republic</option>
                <option value="TD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>Chad</option>
                <option value="CL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>Chile</option>
                <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>China</option>
                <option value="CX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>Christmas Island</option>
                <option value="CC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>Cocos (Keeling) Islands</option>
                <option value="CO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>Colombia</option>
                <option value="KM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>Comoros</option>
                <option value="CK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>Cook Islands</option>
                <option value="CR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>Costa Rica</option>
                <option value="HR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>Croatia</option>
                <option value="CU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>Cuba</option>
                <option value="CW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>Curaçao</option>
                <option value="CY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>Cyprus</option>
                <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>Czech Republic</option>
                <option value="CI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ci.svg" alt=Côte d'Ivoire Flag" /><span class="text-truncate">Côte d'Ivoire</span></span>'>Côte d'Ivoire</option>
                <option value="CD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>Democratic Republic of the Congo</option>
                <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>Denmark</option>
                <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>Djibouti</option>
                <option value="DM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>Dominica</option>
                <option value="DO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>Dominican Republic</option>
                <option value="EC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>Ecuador</option>
                <option value="EG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>Egypt</option>
                <option value="SV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>El Salvador</option>
                <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>England</option>
                <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>Equatorial Guinea</option>
                <option value="ER" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>Eritrea</option>
                <option value="EE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>Estonia</option>
                <option value="ET" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>Ethiopia</option>
                <option value="FK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>Falkland Islands</option>
                <option value="FO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>Faroe Islands</option>
                <option value="FM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>Federated States of Micronesia</option>
                <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>Fiji</option>
                <option value="FI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>Finland</option>
                <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>France</option>
                <option value="GF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>French Guiana</option>
                <option value="PF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>French Polynesia</option>
                <option value="TF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>French Southern Territories</option>
                <option value="GA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>Gabon</option>
                <option value="GM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>Gambia</option>
                <option value="GE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>Georgia</option>
                <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>Germany</option>
                <option value="GH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>Ghana</option>
                <option value="GI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>Gibraltar</option>
                <option value="GR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>Greece</option>
                <option value="GL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>Greenland</option>
                <option value="GD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>Grenada</option>
                <option value="GP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>Guadeloupe</option>
                <option value="GU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>Guam</option>
                <option value="GT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>Guatemala</option>
                <option value="GG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>Guernsey</option>
                <option value="GN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>Guinea</option>
                <option value="GW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>Guinea-Bissau</option>
                <option value="GY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>Guyana</option>
                <option value="HT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>Haiti</option>
                <option value="VA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>Holy See</option>
                <option value="HN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>Honduras</option>
                <option value="HK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>Hong Kong</option>
                <option value="HU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>Hungary</option>
                <option value="IS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>Iceland</option>
                <option value="IN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>India</option>
                <option value="ID" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>Indonesia</option>
                <option value="IR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>Iran (Islamic Republic of)</option>
                <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>Iraq</option>
                <option value="IE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>Ireland</option>
                <option value="IM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>Isle of Man</option>
                <option value="IL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>Israel</option>
                <option value="IT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>Italy</option>
                <option value="JM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>Jamaica</option>
                <option value="JP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>Japan</option>
                <option value="JE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>Jersey</option>
                <option value="JO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>Jordan</option>
                <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>Kazakhstan</option>
                <option value="KE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>Kenya</option>
                <option value="KI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>Kiribati</option>
                <option value="KW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>Kuwait</option>
                <option value="KG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>Kyrgyzstan</option>
                <option value="LA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>Laos</option>
                <option value="LV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>Latvia</option>
                <option value="LB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>Lebanon</option>
                <option value="LS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>Lesotho</option>
                <option value="LR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>Liberia</option>
                <option value="LY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>Libya</option>
                <option value="LI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>Liechtenstein</option>
                <option value="LT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>Lithuania</option>
                <option value="LU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>Luxembourg</option>
                <option value="MO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>Macau</option>
                <option value="MG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>Madagascar</option>
                <option value="MW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>Malawi</option>
                <option value="MY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>Malaysia</option>
                <option value="MV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>Maldives</option>
                <option value="ML" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>Mali</option>
                <option value="MT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>Malta</option>
                <option value="MH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>Marshall Islands</option>
                <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>Martinique</option>
                <option value="MR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>Mauritania</option>
                <option value="MU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>Mauritius</option>
                <option value="YT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>Mayotte</option>
                <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>Mexico</option>
                <option value="MD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>Moldova</option>
                <option value="MC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>Monaco</option>
                <option value="MN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>Mongolia</option>
                <option value="ME" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>Montenegro</option>
                <option value="MS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>Montserrat</option>
                <option value="MA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>Morocco</option>
                <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>Mozambique</option>
                <option value="MM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>Myanmar</option>
                <option value="NA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>Namibia</option>
                <option value="NR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>Nauru</option>
                <option value="NP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>Nepal</option>
                <option value="NL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>Netherlands</option>
                <option value="NC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>New Caledonia</option>
                <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>New Zealand</option>
                <option value="NI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>Nicaragua</option>
                <option value="NE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>Niger</option>
                <option value="NG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>Nigeria</option>
                <option value="NU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>Niue</option>
                <option value="NF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>Norfolk Island</option>
                <option value="KP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>North Korea</option>
                <option value="MK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>North Macedonia</option>
                <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>Northern Ireland</option>
                <option value="MP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mp.svg" alt="Northern Markna Islands Flag" /><span class="text-truncate">Northern Markna Islands</span></span>'>Northern Markna Islands</option>
                <option value="NO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>Norway</option>
                <option value="OM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>Oman</option>
                <option value="PK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>Pakistan</option>
                <option value="PW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>Palau</option>
                <option value="PA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>Panama</option>
                <option value="PG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>Papua New Guinea</option>
                <option value="PY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>Paraguay</option>
                <option value="PE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>Peru</option>
                <option value="PH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>Philippines</option>
                <option value="PN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>Pitcairn</option>
                <option value="PL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>Poland</option>
                <option value="PT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>Portugal</option>
                <option value="PR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>Puerto Rico</option>
                <option value="QA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>Qatar</option>
                <option value="CG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>Republic of the Congo</option>
                <option value="RO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>Romania</option>
                <option value="RU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>Russia</option>
                <option value="RW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>Rwanda</option>
                <option value="RE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>Réunion</option>
                <option value="BL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>Saint Barthélemy</option>
                <option value="SH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="KN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>Saint Kitts and Nevis</option>
                <option value="LC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>Saint Lucia</option>
                <option value="MF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>Saint Martin</option>
                <option value="PM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>Saint Pierre and Miquelon</option>
                <option value="VC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>Saint Vincent and the Grenadines</option>
                <option value="WS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>Samoa</option>
                <option value="SM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>San Marino</option>
                <option value="ST" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>Sao Tome and Principe</option>
                <option value="SA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>Saudi Arabia</option>
                <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>Scotland</option>
                <option value="SN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>Senegal</option>
                <option value="RS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>Serbia</option>
                <option value="SC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>Seychelles</option>
                <option value="SL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>Sierra Leone</option>
                <option value="SG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>Singapore</option>
                <option value="SX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>Sint Maarten</option>
                <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>Slovakia</option>
                <option value="SI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>Slovenia</option>
                <option value="SB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>Solomon Islands</option>
                <option value="SO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>Somalia</option>
                <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>South Africa</option>
                <option value="GS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>South Georgia and the South Sandwich Islands</option>
                <option value="KR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>South Korea</option>
                <option value="SS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>South Sudan</option>
                <option value="ES" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>Spain</option>
                <option value="LK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>Sri Lanka</option>
                <option value="PS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>State of Palestine</option>
                <option value="SD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>Sudan</option>
                <option value="SR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>Suriname</option>
                <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>Svalbard and Jan Mayen</option>
                <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>Swaziland</option>
                <option value="SE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>Sweden</option>
                <option value="CH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>Switzerland</option>
                <option value="SY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>Syrian Arab Republic</option>
                <option value="TW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>Taiwan</option>
                <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>Tajikistan</option>
                <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>Tanzania</option>
                <option value="TH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>Thailand</option>
                <option value="TL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>Timor-Leste</option>
                <option value="TG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>Togo</option>
                <option value="TK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>Tokelau</option>
                <option value="TO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>Tonga</option>
                <option value="TT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>Trinidad and Tobago</option>
                <option value="TN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>Tunisia</option>
                <option value="TR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>Turkey</option>
                <option value="TM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>Turkmenistan</option>
                <option value="TC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>Turks and Caicos Islands</option>
                <option value="TV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>Tuvalu</option>
                <option value="UG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>Uganda</option>
                <option value="UA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>Ukraine</option>
                <option value="AE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>United Arab Emirates</option>
                <option value="GB" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>United Kingdom</option>
                <option value="UM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>United States Minor Outlying Islands</option>
                <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>United States of America</option>
                <option value="UY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>Uruguay</option>
                <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>Uzbekistan</option>
                <option value="VU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>Vanuatu</option>
                <option value="VE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>Venezuela (Bolivarian Republic of)</option>
                <option value="VN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>Vietnam</option>
                <option value="VG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>Virgin Islands (British)</option>
                <option value="VI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>Virgin Islands (U.S.)</option>
                <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>Wales</option>
                <option value="WF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>Wallis and Futuna</option>
                <option value="EH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>Western Sahara</option>
                <option value="YE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>Yemen</option>
                <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>Zambia</option>
                <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle mr-2" src="./node_modules/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>Zimbabwe</option>
              </select>
                                    <!-- End Select -->
                                </div>
                                <!-- End Form Group -->
                                <!-- End Form Group -->


                            </div>
                            <!-- End Body -->

                            <!-- Footer -->
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <button type="button" onclick="compareinstance();" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                       "targetSelector": "#postJobStepAddress"
                     }'>
                    <i class="fas fa-angle-left mr-1"></i> Previous 
                  </button>

                                    <div class="ml-auto">
                                        <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#"
                            }'>
                      Continue <i class="fas fa-angle-right ml-1"></i>
                    </button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Footer -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <!-- End Content Step Form -->

                    <!-- Message Body -->
                    <div id="successMessageContentPostJob" style="display: none;">
                        <div class="text-center">
                            <img class="img-fluid mb-3" src="./assets/svg/illustrations/server-woman.svg" alt="Image Description" style="max-width: 15rem;">

                            <div class="mb-4">
                                <h2>Successful!</h2>
                                <p>New <span class="font-weight-bold text-dark">Product</span> has been successfully created.</p>
                            </div>

                            <div class="d-flex justify-content-center">

                                <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-prev-options='{
                                    "targetSelector": "#postJobStepBasic"
                                  }'>
                                 <i class="fas fa-angle-left mr-1"></i> Previous 
                               </button>

                                <a class="btn btn-primary" href="#">
                                   View Product
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- End Message Body -->

                    <!-- Sticky Block End Point -->
                    <div id="stickyBlockEndPointPostJob"></div>
                </div>
            </div>
            <!-- End Row -->
        </form>
        <!-- End Step Form -->
    </div>
    <!-- End Step Section -->





    </main>
    <!-- ========== END MAIN CONTENT ========== -->

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
    <script src="./assets/js/fetchinstance.js"></script>
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

    <!-- JS Plugins Init. -->
    <!-- JS Implementing Plugins -->

    <script src="./assets/vendor/hs-file-attach/dist/hs-file-attach.min.js"></script>
    <script src="./assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
    <script src="./node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="./node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="./node_modules/quill/dist/quill.min.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/hs.select2.js"></script>
    <script src="./assets/js/hs.mask.js"></script>
    <script src="./assets/js/hs.quill.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF MASKED INPUT
            // =======================================================
            $('.js-masked-input').each(function() {
                var mask = $.HSCore.components.HSMask.init($(this));
            });


            // INITIALIZATION OF FILE ATTACH
            // =======================================================
            $('.js-file-attach').each(function() {
                var customFile = new HSFileAttach($(this)).init();
            });


            // INITIALIZATION OF ADD INPUT FILED
            // =======================================================
            $('.js-add-field').each(function() {
                new HSAddField($(this), {
                    addedField: () => {
                        $('.js-add-field .js-custom-select-dynamic').each(function() {
                            var select2dynamic = $.HSCore.components.HSSelect2.init($(this));
                        });
                    }
                }).init();
            });


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-custom-select').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });


            // INITIALIZATION OF QUILLJS EDITOR
            // =======================================================
            var quill = $.HSCore.components.HSQuill.init('.js-quill');
        });
    </script>


    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
    <!-- JS Implementing Plugins -->
    <script src="./assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="./assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
    <script src="./node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="./node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="./assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
    <script src="./node_modules/quill/dist/quill.min.js"></script>
    <script src="./node_modules/dropzone/dist/min/dropzone.min.js"></script>
    <script src="./assets/vendor/hs-count-characters/dist/js/hs-count-characters.js"></script>
    <script src="./assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>

    <!-- JS Front -->
    <script src="./assets/js/hs.mask.js"></script>
    <script src="./assets/js/hs.select2.js"></script>
    <script src="./assets/js/hs.quill.js"></script>
    <script src="./assets/js/hs.dropzone.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF UNFOLD
            // =======================================================
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


            // INITIALIZATION OF SELECT2
            // =======================================================
            $('.js-custom-select').each(function() {
                var select2 = $.HSCore.components.HSSelect2.init($(this));
            });


            // INITIALIZATION OF MASKED INPUT
            // =======================================================
            $('.js-masked-input').each(function() {
                var mask = $.HSCore.components.HSMask.init($(this));
            });


            // INITIALIZATION OF STEP FORM
            // =======================================================
            var stepForm = new HSStepForm($('.js-step-form-2'), {
                finish: function() {
                    $("#postJobStepFormProgress").hide();
                    $("#postJobStepFormContent").hide();
                    $("#successMessageContentPostJob").hide();
                    scrollToTop('#header');
                    $('#formContainerPostJob').removeClass('col-lg-8').addClass('col-lg-12')
                },
                onNextStep: function() {
                    scrollToTop('.js-step-form-2')
                },
                onPrevStep: function() {
                    scrollToTop('.js-step-form-2')
                }
            }).init();

            function scrollToTop(el = '.js-step-form-1') {
                $('html, body').animate({
                    scrollTop: $(el).offset().top - 60
                }, 500)
            }


            // INITIALIZATION OF QUILLJS EDITOR
            // =======================================================
            var quill = $.HSCore.components.HSQuill.init('.js-quill');


            // INITIALIZATION OF STICKY BLOCKS
            // =======================================================
            $('.js-sticky-block').each(function() {
                var stickyBlock = new HSStickyBlock($(this)).init();
            });


            // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
            // =======================================================
            $('.js-dropzone').each(function() {
                var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
            });


            // INITIALIZATION OF COUNTER CHARACTERS
            // =======================================================
            $('.js-count-characters').each(function() {
                new HSCountCharacters($(this)).init()
            });


            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>
</body>

</html>
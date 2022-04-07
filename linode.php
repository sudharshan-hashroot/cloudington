<?php include('./pricetable/linode_price.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Managed Linode Hosting - Linode Web Hosting | Cloudyea</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="title" content="Managed Linode Hosting - Linode Web Hosting | Cloudyea">
    <meta name="description" content="From deploying Linode servers to effectively managing them, we make your Linode hosting experience simple and powerful. Get the best managed Linode hosting service.">
    <meta name="keywords" content="Managed Linode Hosting">

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
</head>

<body>
    <?php include('./pricetable/linode_price.php');?>
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

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main" class="overflow-hidden">
        <!-- Hero Section -->
        <div class="container space-2 " style="margin-top: 5rem;">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-sm-10 col-lg-5 mb-7 mb-lg-0">
                    <img class=" img-fluid" src="./assets/svg/illustrations/full-stack.svg" alt="Image Description">
                </div>

                <div class="col-md-6">
                    <div class="mb-5">
                        <span style="border-radius: 3rem;" class="bg-soft-primary text-primary font-weight-bold px-3 py-2">
                            Starting from <span class="curr_sym">₹</span>
                        <span class="currency" data-value="<?php echo $ls1_inr;?>" 
                        p-inr="<?php echo $ls1_inr;?>" 
                        p-aed="<?php echo $ls1_aed;?>" 
                        p-gbp="<?php echo $ls1_gbp;?>" 
                        p-usd="<?php echo $ls1_usd;?>"> 
                        <?php echo $ls1_inr; ?> 
                            </span> per Month
                        </span>
                        <h1 class="display-4 mb-3 mt-2">
                            Linode Managed Hosting Services
                        </h1>
                        <p class="lead">Simplify your hosting experience with the help of our fully managed Linode hosting services.
                        </p>
                    </div>

                    <div class="row justify-content-lg-center align-items-md-center">
                        <div class="col-md-6 mb-7 mb-md-0">
                            <!-- Features -->
                            <div class="media mb-4">
                                <span class="icon icon-xs icon-soft-success icon-circle mr-3">
                                <i class="fas fa-check"></i>
                              </span>
                                <div class="media-body text-dark">
                                    Dedicated Support
                                </div>
                            </div>
                            <div class="media mb-4">
                                <span class="icon icon-xs icon-soft-success icon-circle mr-3">
                                <i class="fas fa-check"></i>
                              </span>
                                <div class="media-body text-dark">Proactive Monitoring
                                </div>
                            </div>
                            <div class="media mb-4">
                                <span class="icon icon-xs icon-soft-success icon-circle mr-3">
                                <i class="fas fa-check"></i>
                              </span>
                                <div class="media-body text-dark">
                                    Control Panel Powered
                                </div>
                            </div>
                            <!-- End Features -->
                        </div>
                        <div class="col-md-6 mb-7 mb-md-0">
                            <!-- Features -->

                            <div class="media mb-4">
                                <span class="icon icon-xs icon-soft-success icon-circle mr-3">
                                <i class="fas fa-check"></i>
                              </span>
                                <div class="media-body text-dark">
                                    Instant Deployment
                                </div>
                            </div>
                            <div class="media mb-4">
                                <span class="icon icon-xs icon-soft-success icon-circle mr-3">
                                <i class="fas fa-check"></i>
                              </span>
                                <div class="media-body text-dark">
                                    Fully Optimized
                                </div>
                            </div>
                            <div class="media mb-4">
                                <span class="icon icon-xs icon-soft-success icon-circle mr-3">
                                <i class="fas fa-check"></i>
                              </span>
                                <div class="media-body text-dark">
                                    Guaranteed Uptime
                                </div>
                            </div>
                            <!-- End Features -->
                        </div>

                    </div>


                    <div class="d-sm-flex align-items-sm-center flex-sm-wrap mt-3">
                        <a class="btn btn-primary transition-3d-hover mb-2" href="#planpricing">Check Our Plans</a>

                        <div class="mx-2"></div>


                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero Section -->


        <!--pricing-->
        <!-- Pricing Section -->

        <div class="overflow-hidden" id="planpricing">
            <div class="container pb-4">
                <!-- Title -->
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-3">
                    <div class="min-w-8rem mr-2">
                        <figure class="avatar mx-auto d-flex justify-content-center">
                            <img class=" " width="100" height="100" style="height: 70%;" src="./assets/svg/cloud-rect/linode.svg" alt="Logo">
                        </figure>
                    </div>
                    <!-- <h2 class="h1">Our AWS Cloud Hosting Plan</h2> -->
                    <!-- <p>Linode details content goes here.</p> -->
                </div>
                <!-- End Title -->
                <!-- Card -->

                <!-- Nav -->
                <div class="text-center">
                    <ul class="nav nav-segment nav-pills scrollbar-horizontal mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-one-code-features-example1-tab" data-toggle="pill" href="#pills-one-code-features-example1" role="tab" aria-controls="pills-one-code-features-example1" aria-selected="true">Shared CPU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-two-code-features-example1-tab" data-toggle="pill" href="#pills-two-code-features-example1" role="tab" aria-controls="pills-two-code-features-example1" aria-selected="false">Dedicated CPU</a>
                        </li>

                    </ul>
                </div>
                <!-- End Nav -->

                <!-- Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-one-code-features-example1" role="tabpanel" aria-labelledby="pills-one-code-features-example1-tab">

                        <div class="card">


                            <!-- Table -->
                            <div class="table-responsive-sm">
                                <table class="table table-bordered  table-hover table-thead-bordered table-nowrap table-align-middle">
                                    <thead class="thead-light px-2">
                                        <tr>
                                            <th class="w-40">Servers</th>
                                            <th>RAM</th>
                                            <th>vCPU</th>
                                            <th>SSD Storage</th>
                                            <th>Bandwidth</th>
                                            <th>Price</th>
                                            <th>Configure</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ls1_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls1_ram[2].$ls1_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls1_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls1_storage[2].$ls1_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls1_bandwidth[2].$ls1_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ls1_inr;?>" p-inr="<?php echo $ls1_inr;?>" p-aed="<?php echo $ls1_aed;?>" p-gbp="<?php echo $ls1_gbp;?>" p-usd="<?php echo $ls1_usd;?>"> 
        
                                            <?php echo $ls1_inr; ?> 
        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ls1_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ls2_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls2_ram[2].$ls2_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls2_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls2_storage[2].$ls2_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls2_bandwidth[2].$ls2_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ls2_inr;?>" p-inr="<?php echo $ls2_inr;?>" p-aed="<?php echo $ls2_aed;?>" p-gbp="<?php echo $ls2_gbp;?>" p-usd="<?php echo $ls2_usd;?>"> 
                                            
                                            <?php echo $ls2_inr; ?> 
                                            
                                            </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ls2_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ls3_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls3_ram[2].$ls3_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls3_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls3_storage[2].$ls3_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls3_bandwidth[2].$ls3_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ls3_inr;?>" p-inr="<?php echo $ls3_inr;?>" p-aed="<?php echo $ls3_aed;?>" p-gbp="<?php echo $ls3_gbp;?>" p-usd="<?php echo $ls3_usd;?>"> 
                                            
                                            <?php echo $ls3_inr; ?> 
                                            
                                            </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ls3_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ls4_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls4_ram[2].$ls4_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls4_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls4_storage[2].$ls4_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls4_bandwidth[2].$ls4_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ls4_inr;?>" p-inr="<?php echo $ls4_inr;?>" p-aed="<?php echo $ls4_aed;?>" p-gbp="<?php echo $ls4_gbp;?>" p-usd="<?php echo $ls4_usd;?>"> 
                                            
                                            <?php echo $ls4_inr; ?> 
                                            
                                            </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ls4_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ls5_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls5_ram[2].$ls5_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls5_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls5_storage[2].$ls5_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls5_bandwidth[2].$ls5_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ls5_inr;?>" p-inr="<?php echo $ls5_inr;?>" p-aed="<?php echo $ls5_aed;?>" p-gbp="<?php echo $ls5_gbp;?>" p-usd="<?php echo $ls5_usd;?>"> 
                                            
                                            <?php echo $ls5_inr; ?> 
                                            
                                            </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ls5_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ls6_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls6_ram[2].$ls6_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls6_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls6_storage[2].$ls6_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ls6_bandwidth[2].$ls6_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ls6_inr;?>" p-inr="<?php echo $ls6_inr;?>" p-aed="<?php echo $ls6_aed;?>" p-gbp="<?php echo $ls6_gbp;?>" p-usd="<?php echo $ls6_usd;?>"> 
                                            
                                            <?php echo $ls6_inr; ?> 
                                            
                                            </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ls6_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table -->
                        </div>
                        <!-- End Card -->

                    </div>

                    <div class="tab-pane fade" id="pills-two-code-features-example1" role="tabpanel" aria-labelledby="pills-two-code-features-example1-tab">
                        <div class="card">


                            <!-- Table -->
                            <div class="table-responsive-sm">
                                <table class="table table-bordered  table-hover table-thead-bordered table-nowrap table-align-middle">
                                    <thead class="thead-light px-2">
                                        <tr>
                                            <th class="w-40">Servers</th>
                                            <th>RAM</th>
                                            <th>vCPU</th>
                                            <th>SSD Storage</th>
                                            <th>Bandwidth</th>
                                            <th>Price</th>
                                            <th>Configure</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld1_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld1_ram[2].$ld1_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld1_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld1_storage[2].$ld1_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld1_bandwidth[2].$ld1_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld1_inr;?>" p-inr="<?php echo $ld1_inr;?>" p-aed="<?php echo $ld1_aed;?>" p-gbp="<?php echo $ld1_gbp;?>" p-usd="<?php echo $ld1_usd;?>"> 
                            
                                        <?php echo $ld1_inr; ?> 
                            
                                    </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld1_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld2_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld2_ram[2].$ld2_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld2_vcpu[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld2_storage[2].$ld2_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld2_bandwidth[2].$ld2_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld2_inr;?>" p-inr="<?php echo $ld2_inr;?>" p-aed="<?php echo $ld2_aed;?>" p-gbp="<?php echo $ld2_gbp;?>" p-usd="<?php echo $ld2_usd;?>"> 
                                        
                                        <?php echo $ld2_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld2_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld3_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld3_ram[2].$ld3_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld3_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld3_storage[2].$ld3_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld3_bandwidth[2].$ld3_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld3_inr;?>" p-inr="<?php echo $ld3_inr;?>" p-aed="<?php echo $ld3_aed;?>" p-gbp="<?php echo $ld3_gbp;?>" p-usd="<?php echo $ld3_usd;?>"> 
                                        
                                        <?php echo $ld3_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld3_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld4_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld4_ram[2].$ld4_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld4_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld4_storage[2].$ld4_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld4_bandwidth[2].$ld4_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld4_inr;?>" p-inr="<?php echo $ld4_inr;?>" p-aed="<?php echo $ld4_aed;?>" p-gbp="<?php echo $ld4_gbp;?>" p-usd="<?php echo $ld4_usd;?>"> 
                                        
                                        <?php echo $ld4_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld4_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld5_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld5_ram[2].$ld5_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld5_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld5_storage[2].$ld5_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld5_bandwidth[2].$ld5_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld5_inr;?>" p-inr="<?php echo $ld5_inr;?>" p-aed="<?php echo $ld5_aed;?>" p-gbp="<?php echo $ld5_gbp;?>" p-usd="<?php echo $ld5_usd;?>"> 
                                        
                                        <?php echo $ld5_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld5_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld6_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld6_ram[2] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld6_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld6_storage[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld6_bandwidth[2].$ld6_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld6_inr;?>" p-inr="<?php echo $ld6_inr;?>" p-aed="<?php echo $ld6_aed;?>" p-gbp="<?php echo $ld6_gbp;?>" p-usd="<?php echo $ld6_usd;?>"> 
                                        
                                        <?php echo $ld6_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld6_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="100" height="100" src="./assets/svg/cloud-square/linode.svg" alt="Image Description">

                                                    <div class="media-body">
                                                        <a class="d-inline-block text-dark">
                                                            <h6 class="text-hover-primary mb-0">
                                                                <?php echo $ld7_name;?>
                                                            </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld7_ram[2].$ld7_ram[3] ;?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld7_vcpu[2];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld7_storage[2].$ld7_storage[3];?></span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span><?php echo $ld7_bandwidth[2].$ld7_bandwidth[3];?>	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $ld7_inr;?>" p-inr="<?php echo $ld7_inr;?>" p-aed="<?php echo $ld7_aed;?>" p-gbp="<?php echo $ld7_gbp;?>" p-usd="<?php echo $ld7_usd;?>"> 
                                        
                                        <?php echo $ld7_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $ld7_id;?>">
                                                    <span>Order Now</span>
                                                </a>
                                            </td>


                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- End Table -->
                        </div>
                        <!-- End Card -->
                    </div>


                </div>
                <!-- End Tab Content -->



            </div>
        </div>
        <!-- End Pricing Section -->
        <!--pricing-->
        <!--map-->
        <div class="overflow-hidden" id="maplocations">
            <div class="container pb-4 space-2">
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-3">
                    <div class="min-w-8rem mr-2 mb-2">
                        <span class="icon icon-md icon-circle icon-soft-primary">
                          <i class="fas fa-globe"></i>
                      </span>
                    </div>
                    <h2 class="h1">Linode Server Locations</h2>
                    <p>Choose the right server location for your hosting needs </p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <?php include('./assets/svg/maps/linodemap.php');?>
                </div>
                <div class="js-slick-carousel slick slick-gutters-3 slick-equal-height" data-hs-slick-carousel-options='{
                    "prevArrow": "<span class=\"fas fa-arrow-left slick-arrow slick-arrow-left slick-arrow-centered-y shadow-soft rounded-circle ml-sm-2 ml-md-n2\"></span>",
                    "nextArrow": "<span class=\"fas fa-arrow-right slick-arrow slick-arrow-right slick-arrow-centered-y shadow-soft rounded-circle mr-sm-2 mr-md-n2\"></span>",
                    "slidesToShow": 3,
                    "responsive": [{
                      "breakpoint": 992,
                        "settings": {
                          "slidesToShow": 2
                        }
                      }, {
                      "breakpoint": 768,
                      "settings": {
                        "slidesToShow": 1
                      }
                    }]
                  }'>
                    <div class="js-slide mb-4 jslocation WestCoastUSA">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/usa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    West Coast USA</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Fremont</span>

                            </div>

                            <!-- <div class="card-footer">
<span class="badge badge-soft-success mr-2">
<span class="legend-indicator bg-info"></span>Active
</span>
</div> -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation EastCoastUSA">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/usa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    East Coast USA</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Atlanta , Newark</span>

                            </div>

                            <!-- <div class="card-footer">
<span class="badge badge-soft-success mr-2">
<span class="legend-indicator bg-info"></span>Active
</span>
</div> -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation MidWestUSA">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/usa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    Mid West USA
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Dallas</span>

                            </div>

                            <!-- <div class="card-footer">
<span class="badge badge-soft-success mr-2">
<span class="legend-indicator bg-info"></span>Active
</span>
</div> -->
                        </div>
                        <!-- End Card -->

                    </div>



                    <div class="js-slide mb-4 jslocation CanadaCentral">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/canada.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    Canada
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Toronto</span>

                            </div>

                            <!-- <div class="card-footer">
<span class="badge badge-soft-success mr-2">
<span class="legend-indicator bg-info"></span>Active
</span>
</div> -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation London">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/uk.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    UK
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">London</span>

                            </div>

                            <!-- <div class="card-footer">
        <span class="badge badge-soft-success mr-2">
<span class="legend-indicator bg-info"></span>Active
        </span>
    </div> -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Frankfruit">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/germany.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    Germany
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Frankfrut</span>

                            </div>

                            <!-- <div class="card-footer">
                    <span class="badge badge-soft-success mr-2">
           <span class="legend-indicator bg-info"></span>Active
                    </span>
                </div> -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Hyderabad">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/india.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    India
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Mumbai</span>

                            </div>

                            <!-- <div class="card-footer">
                                <span class="badge badge-soft-success mr-2">
                       <span class="legend-indicator bg-info"></span>Active
                                </span>
                            </div> -->
                        </div>
                        <!-- End Card -->

                    </div>


                    <div class="js-slide mb-4 jslocation Tokyo">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/japan.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    Japan
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Tokyo</span>

                            </div>

                            <!-- <div class="card-footer">
                                <span class="badge badge-soft-success mr-2">
                       <span class="legend-indicator bg-info"></span>Active
                                </span>
                            </div> -->
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Singapore">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/singapore.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    Singapore
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Singapore</span>

                            </div>

                            <!-- <div class="card-footer">
                                <span class="badge badge-soft-success mr-2">
                       <span class="legend-indicator bg-info"></span>Active
                                </span>
                            </div> -->
                        </div>
                        <!-- End Card -->

                    </div>

                    <div class="js-slide mb-4 jslocation Sydney">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar mx-auto mb-3">
                                    <img class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/australia.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    Australia
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Sydney</span>

                            </div>

                            <!-- <div class="card-footer">
                                <span class="badge badge-soft-success mr-2">
                       <span class="legend-indicator bg-info"></span>Active
                                </span>
                            </div> -->
                        </div>
                        <!-- End Card -->

                    </div>

                </div>
                <!-- End Slick Carousel -->
            </div>

        </div>
        <!-- Slick Carousel -->
        <!--map-->
        <!-- CTA Section -->
        <div class="bg-primary text-center bg-img-hero position-relative overflow-hidden" style=" background-image: url(./assets/svg/components/abstract-shapes-5.svg); ">
            <!-- <figure class="w-35 position-absolute top-0 right-0 ">
                <div class="mt-n11 mr-n11 ">
                    <img    class=" img-fluid " src="./assets/svg/components/half-circle-3.svg " alt="Image Description ">
                </div>
            </figure> -->
            <div class="container space-2 ">
                <div class="mb-5 ">
                    <h2 class="text-white ">Stay away from the hassles of managing your cloud infrastructure </h2>
                    <p class="text-white ">We offer a fully managed Linode hosting service that lets you host your website on the cloud VPS servers at an affordable price. From deploying servers to effectively managing them and overseeing their performance, we guarantee to
                        make your Linode hosting experience simple and powerful.
                    </p>
                </div>
                <a class="btn btn-light transition-3d-hover ">Get Started</a>
            </div>
        </div>
        <!-- End CTA Section -->
        <!-- Features Section -->
        <div class="container space-2 ">
            <!-- Title -->
            <div class="w-md-80 w-lg-90 text-center mx-md-auto mb-5 mb-md-9 ">
                <h2 class="h1 ">Our Managed Linode Web hosting Service Offering </h2>
                <p>With our Linode managed hosting service, we help you to easily host your website on the Linode cloud servers at an affordable price. Our team of cloud experts has the right set of skills required to assist you in all aspects of cloud management.
                    Partner with us to get your dedicated Linode servers deployed quickly.
                </p>
            </div>
            <!-- End Title -->

            <div class="row mx-n2 mb-3 ">
                <div class="col-sm-6 col-lg-4 px-2 mb-3 mb-lg-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-primary icon-circle">
                                    <i class="fas fa-clock"></i>
                                </span>
                            </figure>
                            <h4> 24/7 Expert Support </h4>
                            <p class="font-size-1 text-body mb-0 ">Our Linode web hosting is backed by a 24/7 support service to assist our customers and ensure the smooth and efficient operation of their cloud servers.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-lg-4 px-2 mb-3 mb-lg-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-danger icon-circle">
                                    <i class="fas fa-user-shield"></i>
                                </span>
                            </figure>
                            <h4>Dedicated Firewall </h4>
                            <p class="font-size-1 text-body mb-0 ">Having a dedicated firewall ensures server security and helps prevent unauthorized third-party access to your infrastructure.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-lg-4 px-2 mb-3 mb-sm-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-info icon-circle">
                                    <i class="fas fa-cog"></i>
                                </span>
                            </figure>
                            <h4>Easy-to-use Control Panel</h4>
                            <p class="font-size-1 text-body mb-0 ">To better your hosting infrastructure, our managed service comes equipped with the industry's best control panel tool.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>
            </div>
            <div class="row mx-n2 ">
                <div class="col-sm-6 col-lg-4 px-2 mb-3 mb-lg-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-success icon-circle">
                                    <i class="fas fa-tachometer-alt"></i>
                                </span>
                            </figure>
                            <h4>Proactive Monitoring</h4>
                            <p class="font-size-1 text-body mb-0 ">Our team of experts will continuously keep track of your server infrastructure for vulnerabilities and get them resolved instantly.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-lg-4 px-2 mb-3 mb-lg-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-primary icon-circle">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </span>
                            </figure>
                            <h4>Managed Backups </h4>
                            <p class="font-size-1 text-body mb-0 ">We regularly backup your website and guarantee to keep your data secure and ready for restoration in case of any loss or attacks.
                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>

                <div class="col-sm-6 col-lg-4 px-2 mb-3 mb-sm-0 ">
                    <!-- Icon Blocks -->
                    <a class="card h-100 transition-3d-hover ">
                        <div class="card-body ">
                            <figure class="w-100 max-w-8rem mb-4 ">
                                <span class="icon icon-lg icon-soft-danger icon-circle">
                                    <i class="fas fa-server"></i>
                                </span>
                            </figure>
                            <h4>Server Optimization</h4>
                            <p class="font-size-1 text-body mb-0 ">We provide dedicated Linode servers that are specifically optimized and configured to offer optimal performance.

                            </p>
                        </div>
                        <div class="card-footer border-0 pt-0 ">

                        </div>
                    </a>
                    <!-- End Icon Blocks -->
                </div>
            </div>
        </div>
        <!-- End Features Section -->

        <!-- Icons Section -->
        <div class="position-relative bg-primary overflow-hidden ">
            <div class="container space-top-2 space-top-lg-3 position-relative z-index-2 ">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9 ">
                    <h2 class="text-white ">Why Choose Our Managed Linode Hosting Service? </h2>
                    <p class="text-white-70 ">Get the highest level of performance and guaranteed uptime with Cloudyea's Linode web hosting service. </p>
                </div>
                <!-- End Title -->

                <!-- Icon Blocks -->
                <div class="w-lg-80 mx-lg-auto mb-11 ">
                    <div class="row mb-9 ">
                        <div class="col-6 col-md-4 mb-7 ">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3 ">
              <i class="fas fa-bolt "></i>
            </span>
                            <h4 class="text-white mb-3 ">Improved Efficiency </h4>
                            <p class="text-white-70 ">We ensure to keep your workloads fully optimized and help achieve better operational efficiency.
                            </p>
                            <!-- End Icon Block -->
                        </div>

                        <div class="col-6 col-md-4 mb-7 ">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3 ">
              <i class="fas fa-funnel-dollar "></i>
            </span>
                            <h4 class="text-white mb-3 ">Reduced Cloud Spend </h4>
                            <p class="text-white-70 ">By assigning the right resources to workloads, we help reduce your cloud spend on excess and idle resources.
                            </p>
                            <!-- End Icon Block -->
                        </div>

                        <div class="col-6 col-md-4 mb-7 ">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3 ">
              <i class="fas fa-lock "></i>
            </span>
                            <h4 class="text-white mb-3 ">Enhanced Security </h4>
                            <p class="text-white-70 ">We perform regular security audits and follow the best security practices to ensure the security of your hosting servers.
                            </p>
                            <!-- End Icon Block -->
                        </div>

                        <div class="col-6 col-md-4 mb-7 mb-md-0 ">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3 ">
              <i class="fas fa-user-clock "></i>
            </span>
                            <h4 class="text-white mb-3 ">Guaranteed Uptime</h4>
                            <p class="text-white-70 ">Our Managed Linode hosting service comes with a 99.9% guaranteed uptime SLA.
                            </p>
                            <!-- End Icon Block -->
                        </div>

                        <div class="col-6 col-md-4 ">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3 ">
              <i class="fas fa-tachometer-alt "></i>
            </span>
                            <h4 class="text-white mb-3 ">Enhanced Performance</h4>
                            <p class="text-white-70 ">Our cloud engineers make use of the most advanced technologies to offer optimal cloud performance.
                            </p>
                            <!-- End Icon Block -->
                        </div>

                        <div class="col-6 col-md-4 ">
                            <!-- Icon Block -->
                            <span class="d-block text-white font-size-2 mb-3 ">
              <i class="fas fa-cloud-download-alt "></i>
            </span>
                            <h4 class="text-white mb-3 ">Instant Deployment
                            </h4>
                            <p class="text-white-70 ">No more waiting. Get your Linode servers deployed quickly with the help of our managed hosting service.
                            </p>
                            <!-- End Icon Block -->
                        </div>
                    </div>


                </div>
                <!-- End Icon Blocks -->

                <div class="w-85 w-md-75 w-lg-65 text-center mx-auto ">
                    <img class=" img-fluid " src="./assets/svg/illustrations/ai-creation.svg " alt="Image Description ">
                </div>
            </div>

            <!-- SVG Background Shape -->
            <figure class="w-35 position-absolute top-0 right-0 ">
                <div class="mt-n11 mr-n11 ">
                    <img class=" img-fluid " src="./assets/svg/components/half-circle-3.svg " alt="Image Description ">
                </div>
            </figure>
            <figure class="w-25 position-absolute bottom-0 left-0 ">
                <div class="mb-n11 ml-n11 ">
                    <img class=" img-fluid " src="./assets/svg/components/half-circle-2.svg " alt="Image Description ">
                </div>
            </figure>
            <!-- End SVG Background Shape -->
        </div>
        <!-- End Icons Section -->





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
                            Is it possible to scale my Linode server?   
  
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseOne" class="collapse" aria-labelledby="basicsHeadingOne" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>Yes, you can easily scale your managed Linode server according to the current requirements without having to worry about any data loss.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->



                <!-- Card -->
                <div class="card shadow-none mb-3">
                    <div class="card-header card-collapse" id="basicsHeadingThree">
                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseThree" aria-expanded="false" aria-controls="basicsCollapseThree">
                            Can I select the Linode cloud server location of my choice?  
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseThree" class="collapse" aria-labelledby="basicsHeadingThree" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>Yes. All you have to do is select the preferred location from the drop-down menu while choosing your Linode web hosting plan.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card shadow-none mb-3">
                    <div class="card-header card-collapse" id="basicsHeadingFour">
                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFour" aria-expanded="false" aria-controls="basicsCollapseFour">
                            Can Cloudyea help us migrate our website from the existing cloud service provider to Linode?

  
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseFour" class="collapse" aria-labelledby="basicsHeadingFour" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>Yes. Our cloud engineers are available 24/7 to assist you and to ensure a smooth and seamless transition of the website.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->
                <!-- Card -->
                <div class="card shadow-none mb-3">
                    <div class="card-header card-collapse" id="basicsHeadingFive">
                        <a class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed bg-white px-0" href="javascript:;" role="button" data-toggle="collapse" data-target="#basicsCollapseFive" aria-expanded="false" aria-controls="basicsCollapseFive">
                            Why do I need Cloudyea's managed Linode hosting service, if I can buy Linode cloud servers by myself?

  
            <span class="card-btn-toggle">
              <span class="card-btn-toggle-default">+</span>
              <span class="card-btn-toggle-active">−</span>
            </span>
          </a>
                    </div>
                    <div id="basicsCollapseFive" class="collapse" aria-labelledby="basicsHeadingFive" data-parent="#basicsAccordion">
                        <div class="card-body px-0">
                            <p>Setting up a completely optimized cloud environment can be challenging and might require the assistance of experts who have a great understanding of the platform. Even after that, you need to continuously monitor and keep track
                                of resource usages and optimize it accordingly to keep the cloud spend in control. With our managed Linode hosting service, we take care of all your hosting-related needs, while you can focus on growing your business.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Basics Accordion -->
        </div>
        <!-- End Collapse Section -->







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



    <!-- JS Front -->

    <!-- JS Plugins Init. -->


    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="./assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
</body>

</html>
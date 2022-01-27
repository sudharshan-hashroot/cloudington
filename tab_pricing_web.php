<?php include('./pricetable/shared_hosting.php');?>
<?php include('./pricetable/wordpress_hosting.php');?>
<?php include('./pricetable/vps_cloud_hosting.php');?>
<div class="container space-2">
    <!-- Title -->
    <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-2">
        <h2 class='h1'>Web Hosting Plans</h2>
        <p>Choose the best web hosting plan that suits your business requirements</p>
    </div>
    <!-- End Title -->

    <!-- Nav -->
    <div class="text-center w-lg-80 mx-lg-auto">
        <ul class="nav nav-pills  nav-segment tablemobile w-100 nav-dark nav-justified scrollbar-horizontal font-weight-bold" role="tablist">
            <li class="nav-item ">
                <a class="nav-link py-3 active" id="shared_hosting" data-toggle="pill" href="#shared_hosting_tab" role="tab" aria-controls="shared_hosting_tab" aria-selected="true"><span><i class="fas fa-server"></i></span> Shared Hosting</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link py-3" id="wordpress_hosting" data-toggle="pill" href="#wordpress_hosting_tab" role="tab" aria-controls="wordpress_hosting_tab" aria-selected="false"><span><i class="fab fa-wordpress text-large" style="font-size: 1.2rem;"></i></span> Wordpress Cloud Hosting</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link py-3" id="vps_hosting" data-toggle="pill" href="#vps_hosting_tab" role="tab" aria-controls="vps_hosting_tab" aria-selected="false"><span><i class="fas fa-cloud"></i></span> VPS Cloud Hosting</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link py-3" id="mag_hosting" 
                   data-toggle="pill" href="#mag_hosting_tab" role="tab" 
                              aria-controls="mag_hosting_tab" aria-selected="false"><span><i class="fab fa-magento"></i></span> Magento Cloud Hosting</a>
            </li>


        </ul>
    </div>
    <!-- End Nav -->

    <!-- Tab Content -->
    <div class="tab-content pr-lg-4">

        <div class="tab-pane fade show active" id="shared_hosting_tab" role="tabpanel" aria-labelledby="shared_hosting">

            <div class="overflow-hidden">
                <!-- Hero Section -->
                <div class="bg-img-hero">
                    <div class="container space-top-2 space-bottom-1 space-bottom-lg-2">


                    </div>
                </div>
                <!-- End Hero Section -->

                <!-- Pricing Section -->
                <div class="container mt-n10">
                    <div class="w-lg-80 mx-lg-auto position-relative">
                        <div class="row position-relative z-index-2 mx-n2 mb-5">
                            <div class="col-sm-6 col-md-6 col-lg-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $s1_name;?></span>
                                        <span class="d-flex mb-2 flex-row">
                                            <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $s1_inr;?>" p-inr="<?php echo $s1_inr;?>" p-aed="<?php echo $s1_aed;?>" p-gbp="<?php echo $s1_gbp;?>" p-usd="<?php echo $s1_usd;?>"> 
                                                                
                                            <?php echo $s1_inr; ?> 
                                                                
                                            </span>

                                        </span>
                                        <span class="font-size-1 ml-2">per Month</span>
                                        </span>
                                    </div>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <?php 
                                        foreach ($s1_description as $i){
                                            echo "    <div class='media font-size-1 text-body mb-3'>
                                            <i class='fas fa-check-circle text-success mt-1 mr-2'></i>
                                            <div class='media-body'>".$i."</div>
                                        </div>" ;
                                        }
                                        ?>

                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $s1_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">Order Now</a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card bg-primary text-white h-100 shadow-primary-lg">
                                    <!-- Header -->
                                    <div class="card-header border-0 bg-primary text-white text-center flex-column">
                                        <span class="d-block h3 text-white"><?php echo $s2_name;?></span>
                                        <span class="d-flex mb-2 flex-row">
                <span class="text-white align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-white font-weight-bold mr-n2" data-value="<?php echo $s2_inr;?>" p-inr="<?php echo $s2_inr;?>" p-aed="<?php echo $s2_aed;?>" p-gbp="<?php echo $s2_gbp;?>" p-usd="<?php echo $s2_usd;?>"> 
                                    
                                    <?php echo $s2_inr; ?> 
                                                       
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
                                        foreach ($s2_description as $i){
                                            echo "    <div class='media font-size-1  mb-3'>
                                            <i class='fas fa-check-circle text-white mt-1 mr-2'></i>
                                            <div class='media-body'>".$i."</div>
                                        </div>" ;
                                        }
                                        ?>

                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0 bg-primary text-white">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $s2_id;?>" class="btn btn-light btn-block transition-3d-hover">Order Now</a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $s3_name;?></span>
                                        <span class="d-flex mb-2 flex-row">
            <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $s3_inr;?>" p-inr="<?php echo $s3_inr;?>" p-aed="<?php echo $s3_aed;?>" p-gbp="<?php echo $s3_gbp;?>" p-usd="<?php echo $s3_usd;?>"> 
                            
             <?php echo $s3_inr; ?> 
                            
                 </span>

                                        </span>
                                        <span class="font-size-1 ml-2">per Month</span>
                                        </span>
                                    </div>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <?php 
                foreach ($s3_description as $i){
                    echo " <div class='media font-size-1 text-body mb-3'>
                    <i class='fas fa-check-circle text-success mt-1 mr-2'></i>
                    <div class='media-body'>".$i."</div>
                </div>" ;
                }
                ?>

                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $s3_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">Order Now</a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>
                            <div class="d-none col-sm-6 col-md-6 col-lg-3 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $s4_name;?></span>
                                        <span class="d-flex mb-2 flex-row">
                <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $s4_inr;?>" p-inr="<?php echo $s4_inr;?>" p-aed="<?php echo $s4_aed;?>" p-gbp="<?php echo $s4_gbp;?>" p-usd="<?php echo $s4_usd;?>"> 
                                    
                <?php echo $s4_inr; ?> 
                                    
                </span>

                                        </span>
                                        <span class="font-size-1 ml-2">per Month</span>
                                        </span>
                                    </div>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <?php 
                foreach ($s4_description as $i){
                    echo " <div class='media font-size-1 text-body mb-3'>
                    <i class='fas fa-check-circle text-success mt-1 mr-2'></i>
                    <div class='media-body'>".$i."</div>
                </div>" ;
                }
                ?>

                                    </div>
                                    <!-- End Body -->

                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $s4_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">Order Now</a>
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
                                <!-- <img class=" img-fluid" src="./assets/svg/components/dots-1.svg" alt="Managed cloud hosting"> -->
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


        </div>
        <div class="tab-pane fade show " id="wordpress_hosting_tab" role="tabpanel" aria-labelledby="wordpress_hosting">

            <div class="overflow-hidden">
                <!-- Hero Section -->
                <div class="bg-img-hero">
                    <div class="container space-top-2 space-bottom-1 space-bottom-lg-2">


                    </div>
                </div>
                <!-- End Hero Section -->

                <!-- Pricing Section -->
                <div class="container mt-n10">
                    <div class=" w-lg-80 mx-lg-auto position-relative">
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
                                <!-- <img class=" img-fluid" src="./assets/svg/components/dots-1.svg" alt="Managed cloud hosting"> -->
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


        </div>
        <div class="tab-pane fade show " id="vps_hosting_tab" role="tabpanel" aria-labelledby="vps_hosting">

            <div class="overflow-hidden">
                <!-- Hero Section -->
                <div class="bg-img-hero">
                    <div class="container space-top-2 space-bottom-1 space-bottom-lg-2">


                    </div>
                </div>
                <!-- End Hero Section -->

                <!-- Pricing Section -->
                <div class="container mt-n10">
                    <div class="w-lg-80 mx-lg-auto position-relative">
                        <div class="row position-relative z-index-2 mx-n2 mb-5">
                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $v1_name;?></span>

                                        <span class="d-flex mb-2 flex-row">
            <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $v1_inr;?>" p-inr="<?php echo $v1_inr;?>" p-aed="<?php echo $v1_aed;?>" p-gbp="<?php echo $v1_gbp;?>" p-usd="<?php echo $v1_usd;?>"> 
                            
             <?php echo $v1_inr; ?> 
                            
                 </span>

                                        </span>
                                        <span class="font-size-1 mb-2">per Month</span>
                                        <span class="badge badge-success badge-pill"><?php echo $v1_description[0];?></span>
                                    </div>



                                    </small>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                      ">

                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                          ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-microchip text-success"></i>
                                            </span>

                                            <div class="media-body w-30">vCPU</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_vcpu[2]; ?> Core(s)</b>
                                            </div>
                                        </div>
                                        <div class="
                          media
                          font-size-1
                          text-body
                          mb-3
                          align-items-center
                        ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-memory text-success"></i>
                                            </span>

                                            <div class="media-body w-30">RAM</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_ram[2].$v1_ram[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                        media
                        font-size-1
                        text-body
                        mb-3
                        align-items-center
                      ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-hdd text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Storage</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_storage[2].$v1_storage[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                      media
                      font-size-1
                      text-body
                      mb-1
                      align-items-center
                    ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-wifi text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Bandwidth</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_bandwidth[2].$v1_bandwidth[3];?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <!-- End Body -->


                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $v1_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>

                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card bg-primary text-white h-100">
                                    <!-- Header -->
                                    <div class="card-header bg-primary text-white  text-center flex-column">
                                        <span class="d-block h3 text-white "><?php echo $v2_name;?></span>

                                        <span class="d-flex mb-2 flex-row text-white ">
                            <span class="align-top curr_sym">$</span>
                                        <span class="currency font-size-4  font-weight-bold mr-n2" data-value="<?php echo $v2_inr;?>" p-inr="<?php echo $v2_inr;?>" p-aed="<?php echo $v2_aed;?>" p-gbp="<?php echo $v2_gbp;?>" p-usd="<?php echo $v2_usd;?>"> 
                            
                            <?php echo $v2_inr; ?> 
                            
                            </span>

                                        </span>
                                        <span class="font-size-1 mb-2">per Month</span>
                                        <span class="badge badge-light badge-pill"><?php echo $v2_description[0];?></span>
                                    </div>



                                    </small>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="
                                        media
                                        font-size-1
                                      
                                        mb-3
                                        align-items-center
                                      ">

                                        </div>
                                        <div class="
                            media
                            font-size-1
                         
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-microchip text-light"></i>
                                            </span>

                                            <div class="media-body w-30">vCPU</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_vcpu[2]; ?> Core(s)</b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                        
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-memory text-light"></i>
                                            </span>

                                            <div class="media-body w-30">RAM</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_ram[2].$v2_ram[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                          
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-hdd text-light"></i>
                                            </span>

                                            <div class="media-body w-30">Storage</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_storage[2].$v2_storage[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                     
                            mb-1
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-wifi text-light"></i>
                                            </span>

                                            <div class="media-body w-30">Bandwidth</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_bandwidth[2].$v2_bandwidth[3];?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <!-- End Body -->


                                    <div class="card-footer bg-primary text-white border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $v2_id;?>" class="btn btn-light btn-block transition-3d-hover">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>
                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $v3_name;?></span>

                                        <span class="d-flex mb-2 flex-row">
                            <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $v3_inr;?>" p-inr="<?php echo $v3_inr;?>" p-aed="<?php echo $v3_aed;?>" p-gbp="<?php echo $v3_gbp;?>" p-usd="<?php echo $v3_usd;?>"> 
                            
                            <?php echo $v3_inr; ?> 
                            
                            </span>

                                        </span>
                                        <span class="font-size-1 mb-2">per Month</span>
                                        <span class="badge badge-success badge-pill"><?php echo $v3_description[0];?></span>
                                    </div>



                                    </small>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                      ">

                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-microchip text-success"></i>
                                            </span>

                                            <div class="media-body w-30">vCPU</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_vcpu[2]; ?> Core(s)</b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-memory text-success"></i>
                                            </span>

                                            <div class="media-body w-30">RAM</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_ram[2].$v3_ram[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-hdd text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Storage</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_storage[2].$v3_storage[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-1
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-wifi text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Bandwidth</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_bandwidth[2].$v3_bandwidth[3];?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <!-- End Body -->


                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $v3_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>
                        </div>

                        <!-- Info -->


                    </div>
                </div>
                <!-- End Pricing Section -->
            </div>


        </div>
        <div class="tab-pane fade show " id="mag_hosting_tab" role="tabpanel" aria-labelledby="mag_hosting">

            <div class="overflow-hidden">
                <!-- Hero Section -->
                <div class="bg-img-hero">
                    <div class="container space-top-2 space-bottom-1 space-bottom-lg-2">


                    </div>
                </div>
                <!-- End Hero Section -->

                <!-- Pricing Section -->
                <div class="container mt-n10">
                    <div class="w-lg-80 mx-lg-auto position-relative">
                        <div class="row position-relative z-index-2 mx-n2 mb-5">
                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $v1_name;?></span>

                                        <span class="d-flex mb-2 flex-row">
            <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $v1_inr;?>" p-inr="<?php echo $v1_inr;?>" p-aed="<?php echo $v1_aed;?>" p-gbp="<?php echo $v1_gbp;?>" p-usd="<?php echo $v1_usd;?>"> 
                            
             <?php echo $v1_inr; ?> 
                            
                 </span>

                                        </span>
                                        <span class="font-size-1 mb-2">per Month</span>
                                        <span class="badge badge-success badge-pill"><?php echo $v1_description[0];?></span>
                                    </div>



                                    </small>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                      ">

                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                          ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-microchip text-success"></i>
                                            </span>

                                            <div class="media-body w-30">vCPU</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_vcpu[2]; ?> Core(s)</b>
                                            </div>
                                        </div>
                                        <div class="
                          media
                          font-size-1
                          text-body
                          mb-3
                          align-items-center
                        ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-memory text-success"></i>
                                            </span>

                                            <div class="media-body w-30">RAM</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_ram[2].$v1_ram[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                        media
                        font-size-1
                        text-body
                        mb-3
                        align-items-center
                      ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-hdd text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Storage</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_storage[2].$v1_storage[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                      media
                      font-size-1
                      text-body
                      mb-1
                      align-items-center
                    ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-wifi text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Bandwidth</div>
                                            <div class="media-body">
                                                <b><?php echo $v1_bandwidth[2].$v1_bandwidth[3];?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <!-- End Body -->


                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $v1_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>

                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card bg-primary text-white h-100">
                                    <!-- Header -->
                                    <div class="card-header bg-primary text-white  text-center flex-column">
                                        <span class="d-block h3 text-white "><?php echo $v2_name;?></span>

                                        <span class="d-flex mb-2 flex-row text-white ">
                            <span class="align-top curr_sym">$</span>
                                        <span class="currency font-size-4  font-weight-bold mr-n2" data-value="<?php echo $v2_inr;?>" p-inr="<?php echo $v2_inr;?>" p-aed="<?php echo $v2_aed;?>" p-gbp="<?php echo $v2_gbp;?>" p-usd="<?php echo $v2_usd;?>"> 
                            
                            <?php echo $v2_inr; ?> 
                            
                            </span>

                                        </span>
                                        <span class="font-size-1 mb-2">per Month</span>
                                        <span class="badge badge-light badge-pill"><?php echo $v2_description[0];?></span>
                                    </div>



                                    </small>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="
                                        media
                                        font-size-1
                                      
                                        mb-3
                                        align-items-center
                                      ">

                                        </div>
                                        <div class="
                            media
                            font-size-1
                         
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-microchip text-light"></i>
                                            </span>

                                            <div class="media-body w-30">vCPU</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_vcpu[2]; ?> Core(s)</b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                        
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-memory text-light"></i>
                                            </span>

                                            <div class="media-body w-30">RAM</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_ram[2].$v2_ram[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                          
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-hdd text-light"></i>
                                            </span>

                                            <div class="media-body w-30">Storage</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_storage[2].$v2_storage[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                     
                            mb-1
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-light mt-1 mr-3">
                                                <i class="fas fa-wifi text-light"></i>
                                            </span>

                                            <div class="media-body w-30">Bandwidth</div>
                                            <div class="media-body">
                                                <b><?php echo $v2_bandwidth[2].$v2_bandwidth[3];?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <!-- End Body -->


                                    <div class="card-footer bg-primary text-white border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $v2_id;?>" class="btn btn-light btn-block transition-3d-hover">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>
                            <div class="col-sm-6 col-md-4 px-2 mb-3">
                                <!-- Pricing -->
                                <div class="card h-100">
                                    <!-- Header -->
                                    <div class="card-header text-center flex-column">
                                        <span class="d-block h3"><?php echo $v3_name;?></span>

                                        <span class="d-flex mb-2 flex-row">
                            <span class="text-dark align-top curr_sym">$</span>
                                        <span class="currency font-size-4 text-dark font-weight-bold mr-n2" data-value="<?php echo $v3_inr;?>" p-inr="<?php echo $v3_inr;?>" p-aed="<?php echo $v3_aed;?>" p-gbp="<?php echo $v3_gbp;?>" p-usd="<?php echo $v3_usd;?>"> 
                            
                            <?php echo $v3_inr; ?> 
                            
                            </span>

                                        </span>
                                        <span class="font-size-1 mb-2">per Month</span>
                                        <span class="badge badge-success badge-pill"><?php echo $v3_description[0];?></span>
                                    </div>



                                    </small>
                                    <!-- End Header -->

                                    <!-- Body -->
                                    <div class="card-body">
                                        <div class="
                                        media
                                        font-size-1
                                        text-body
                                        mb-3
                                        align-items-center
                                      ">

                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-microchip text-success"></i>
                                            </span>

                                            <div class="media-body w-30">vCPU</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_vcpu[2]; ?> Core(s)</b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-memory text-success"></i>
                                            </span>

                                            <div class="media-body w-30">RAM</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_ram[2].$v3_ram[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-3
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-hdd text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Storage</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_storage[2].$v3_storage[3];?></b>
                                            </div>
                                        </div>
                                        <div class="
                            media
                            font-size-1
                            text-body
                            mb-1
                            align-items-center
                            ">
                                            <span class="icon icon-xs icon-soft-success mt-1 mr-3">
                                                <i class="fas fa-wifi text-success"></i>
                                            </span>

                                            <div class="media-body w-30">Bandwidth</div>
                                            <div class="media-body">
                                                <b><?php echo $v3_bandwidth[2].$v3_bandwidth[3];?></b>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-1">
                                    <!-- End Body -->


                                    <div class="card-footer border-0">
                                        <a type="button" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $v3_id;?>" class="btn btn-soft-primary btn-block transition-3d-hover">
                                            Get Started
                                        </a>
                                    </div>
                                </div>
                                <!-- End Pricing -->
                            </div>
                        </div>

                        <!-- Info -->


                    </div>
                </div>
                <!-- End Pricing Section -->
            </div>


        </div>

    </div>
    <!-- End Tab Content -->
</div>
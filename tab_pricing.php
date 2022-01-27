<?php include('./pricetable/aws_price.php');?>
<!-- <?php include('./pricetable/gcp_price.php');?> -->
<?php include('./pricetable/digital_price.php');?>
<?php include('./pricetable/linode_price.php');?>
<style>
    .nav-segment .c_tab .active {
        background: #fff;
        /* border-radius: 20rem; */
    }
    
    .nav-segment .c_tab .active figure {
        filter: none!important;
    }
    
    .nav-segment .c_tab .nav-link figure {
        filter: grayscale(1) invert(1) brightness(3) opacity(0.5);
    }
    
    @media(max-width:996px) {
        .tablemobile {
            flex-direction: column;
            /* border-radius: 1rem!important; */
        }
    }
</style>
<!-- Nav -->
<div class="w-lg-80 mx-lg-auto">
    <ul class="nav nav-pills  tablemobile bg-primary nav-segment  w-100 nav-dark nav-justified scrollbar-horizontal font-weight-bold" role="tablist">
        <li class="nav-item c_tab">
            <a class="nav-link active" id="pills-one-code-sample-tab" data-toggle="pill" href="#pills-one-code-sample" role="tab" aria-controls="pills-one-code-sample" aria-selected="true">
                <figure class="py-2">
                    <img class=" " width="100" height="100" src="./assets/svg/cloud-rect/Amazon_Web_Services_Logo.svg" alt="Logo" style="max-height:1.8rem;padding: .1rem;">
                </figure>
            </a>

        </li>
        <!-- <li class="nav-item c_tab">
            <a class="nav-link" id="pills-two-code-sample-tab" data-toggle="pill" href="#pills-two-code-sample" role="tab" aria-controls="pills-two-code-sample" aria-selected="false">
                <figure class="py-2">
                    <img class="" width="200" height="200" src="./assets/svg/cloud-rect/gcp.svg" alt="Logo" style="max-height:1.8rem;padding: .2rem;">
                </figure>
            </a>
        </li> -->
        <li class="nav-item c_tab">
            <a class="nav-link" id="pills-three-code-sample-tab" data-toggle="pill" href="#pills-three-code-sample" role="tab" aria-controls="pills-three-code-sample" aria-selected="false">
                <figure class="py-2">
                    <img class=" " width="200" height="200" src="./assets/svg/cloud-rect/digitalocean-2.svg" alt="Logo" style="max-height:1.8rem;padding: .15rem;">
                </figure>
            </a>
        </li>
        <li class="nav-item c_tab">
            <a class="nav-link" id="pills-four-code-sample-tab" data-toggle="pill" href="#pills-four-code-sample" role="tab" aria-controls="pills-four-code-sample" aria-selected="false">
                <figure class="py-2">
                    <img class="" width="100" height="100" src="./assets/svg/cloud-rect/linode.svg" alt="Logo" style="max-height:1.8rem;">
                </figure>
            </a>
        </li>

    </ul>
</div>

<!-- End Nav -->
<div class="tab-content">
    <div class="tab-pane fade pt-5 show active" id="pills-one-code-sample" role="tabpanel" aria-labelledby="pills-one-code-sample-tab">
        <div class="container pb-4">

            <!-- Title -->
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5">
                <div class="min-w-8rem mr-2">
                    <figure class="avatar mx-auto d-flex justify-content-center">
                        <img class=" " width="100" height="100" style="height: 70%;" width="80" height="80" src="./assets/svg/cloud-rect/Amazon_Web_Services_Logo.svg" alt="Logo">
                    </figure>
                </div>
                <!-- <h2 class="h1">Our AWS Cloud Hosting Plan</h2> -->
                <!-- <p>AWS details content goes here.</p> -->
            </div>
            <!-- End Title -->
            <!-- Nav -->

            <!-- Card -->
            <div class="card">


                <!-- Table -->
                <div class="table-responsive-sm">
                    <table class="table table-bordered  table-hover table-thead-bordered table-nowrap table-align-middle">
                        <thead class="thead-light px-2">
                            <tr>
                                <th class="w-40">Servers</th>
                                <th>RAM</th>
                                <th>VCPU</th>
                                <th>SSD Storage</th>
                                <th>Price</th>
                                <th>Configure</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a1_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a1_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a1_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a1_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a1_storage[2]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a1_inr;?>" p-inr="<?php echo $a1_inr;?>" p-aed="<?php echo $a1_aed;?>" p-gbp="<?php echo $a1_gbp;?>" p-usd="<?php echo $a1_usd;?>"> 

                                    <?php echo $a1_inr; ?> 

                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a1_id;?>" instance-id="1799" data-target="#selectRegion" pnum="1">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a2_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a2_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a2_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a2_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a2_storage[2]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a2_inr;?>" p-inr="<?php echo $a2_inr;?>" p-aed="<?php echo $a2_aed;?>" p-gbp="<?php echo $a2_gbp;?>" p-usd="<?php echo $a2_usd;?>"> 
                    
                                    <?php echo $a2_inr; ?> 
                    
                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a2_id;?>" instance-id="1800" data-target="#selectRegion" pnum="2">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a3_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a3_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a3_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a3_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a3_storage[2]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a3_inr;?>" p-inr="<?php echo $a3_inr;?>" p-aed="<?php echo $a3_aed;?>" p-gbp="<?php echo $a3_gbp;?>" p-usd="<?php echo $a3_usd;?>"> 
                    
                                    <?php echo $a3_inr; ?> 
                    
                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a3_id;?>" instance-id="1801" data-target="#selectRegion" pnum="3">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a4_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a4_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a4_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a4_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a4_storage[2]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a4_inr;?>" p-inr="<?php echo $a4_inr;?>" p-aed="<?php echo $a4_aed;?>" p-gbp="<?php echo $a4_gbp;?>" p-usd="<?php echo $a4_usd;?>"> 
                    
                                    <?php echo $a4_inr; ?> 
                    
                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a4_id;?>" instance-id="1802" data-target="#selectRegion" pnum="4">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a5_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a5_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a5_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a5_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a5_storage[2]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body  p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a5_inr;?>" p-inr="<?php echo $a5_inr;?>" p-aed="<?php echo $a5_aed;?>" p-gbp="<?php echo $a5_gbp;?>" p-usd="<?php echo $a5_usd;?>"> 
                    
                                    <?php echo $a5_inr; ?> 
                    
                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a5_id;?>" instance-id="1803" data-target="#selectRegion" pnum="5">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a6_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a6_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a6_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a6_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a6_storage[3]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body  p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a6_inr;?>" p-inr="<?php echo $a6_inr;?>" p-aed="<?php echo $a6_aed;?>" p-gbp="<?php echo $a6_gbp;?>" p-usd="<?php echo $a6_usd;?>"> 
                    
                                    <?php echo $a6_inr; ?> 
                    
                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a6_id;?>" instance-id="1804" data-target="#selectRegion" pnum="6">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $a7_name; ?>
                                                </h6>
                                            </a>
                                            <br>
                                            <small><?php echo $a7_module;?></small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a7_ram[2].$a1_ram[3]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a7_vcpu[2]; ?> </span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $a7_storage[2]; ?> 	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body  p-price">
                                        <span class="font-weight-bold ">  
                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a7_inr;?>" p-inr="<?php echo $a7_inr;?>" p-aed="<?php echo $a7_aed;?>" p-gbp="<?php echo $a7_gbp;?>" p-usd="<?php echo $a7_usd;?>"> 
                    
                                    <?php echo $a7_inr; ?> 
                    
                                </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $a7_id;?>" instance-id="1805" data-target="#selectRegion" pnum="7">
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

    <div class="tab-pane fade d-none  pt-5" id="pills-two-code-sample" role="tabpanel" aria-labelledby="pills-two-code-sample-tab">
        <div class="container pb-4">
            <!-- Title -->
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5">
                <div class="min-w-8rem mr-2">
                    <figure class="avatar mx-auto d-flex justify-content-center">
                        <img class=" " width="200" height="200" style="height: 80%;" src="./assets/svg/cloud-rect/gcp.svg" alt="Logo">
                    </figure>
                </div>
                <!-- <h2 class="h1">Our AWS Cloud Hosting Plan</h2> -->
                <!-- <p>GCP details content goes here.</p> -->
            </div>
            <!-- End Title -->
            <!-- Card -->

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
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G1 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>0.5GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1(shared)</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g1_inr;?>" p-inr="<?php echo $g1_inr;?>" p-aed="<?php echo $g1_aed;?>" p-gbp="<?php echo $g1_gbp;?>" p-usd="<?php echo $g1_usd;?>">
                                                        <?php echo $g1_inr; ?> 
                                                        </span></span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=17">
                                        <span>Order Now</span>
                                    </a>
                               
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G2 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1(shared)</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g2_inr;?>" p-inr="<?php echo $g2_inr;?>" p-aed="<?php echo $g2_aed;?>" p-gbp="<?php echo $g2_gbp;?>" p-usd="<?php echo $g2_usd;?>">
            <?php echo $g2_inr; ?> 
            </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=18">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G3 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g3_inr;?>" p-inr="<?php echo $g3_inr;?>" p-aed="<?php echo $g3_aed;?>" p-gbp="<?php echo $g3_gbp;?>" p-usd="<?php echo $g3_usd;?>">
                                                        <?php echo $g3_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=19">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G4 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g4_inr;?>" p-inr="<?php echo $g4_inr;?>" p-aed="<?php echo $g4_aed;?>" p-gbp="<?php echo $g4_gbp;?>" p-usd="<?php echo $g4_usd;?>">
            <?php echo $g4_inr; ?> 
            </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=20">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G5 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>3.75GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">

                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g5_inr;?>" p-inr="<?php echo $g5_inr;?>" p-aed="<?php echo $g5_aed;?>" p-gbp="<?php echo $g5_gbp;?>" p-usd="<?php echo $g5_usd;?>">
                                                        <?php echo $g5_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=21">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G6 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>3.75GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g6_inr;?>" p-inr="<?php echo $g6_inr;?>" p-aed="<?php echo $g6_aed;?>" p-gbp="<?php echo $g6_gbp;?>" p-usd="<?php echo $g6_usd;?>">
                                                        <?php echo $g6_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=22">
                                        <span>Order Now</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G7 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g7_inr;?>" p-inr="<?php echo $g7_inr;?>" p-aed="<?php echo $g7_aed;?>" p-gbp="<?php echo $g7_gbp;?>" p-usd="<?php echo $g7_usd;?>">
                                                        <?php echo $g7_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=24">
                                        <span>Order Now</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G8 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g8_inr;?>" p-inr="<?php echo $g8_inr;?>" p-aed="<?php echo $g8_aed;?>" p-gbp="<?php echo $g8_gbp;?>" p-usd="<?php echo $g8_usd;?>">
                                                        <?php echo $g8_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=25">
                                        <span>Order Now</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G9 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>15GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g9_inr;?>" p-inr="<?php echo $g9_inr;?>" p-aed="<?php echo $g9_aed;?>" p-gbp="<?php echo $g9_gbp;?>" p-usd="<?php echo $g9_usd;?>">
                                                        <?php echo $g9_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=26">
                                        <span>Order Now</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G10 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>16GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g10_inr;?>" p-inr="<?php echo $g10_inr;?>" p-aed="<?php echo $g10_aed;?>" p-gbp="<?php echo $g10_gbp;?>" p-usd="<?php echo $g10_usd;?>">
                                                        <?php echo $g10_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=27">
                                        <span>Order Now</span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="80" height="80" src="./assets/svg/cloud-square/gcp.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud G11 </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>16GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $g11_inr;?>" p-inr="<?php echo $g11_inr;?>" p-aed="<?php echo $g11_aed;?>" p-gbp="<?php echo $g11_gbp;?>" p-usd="<?php echo $g11_usd;?>">
                                                        <?php echo $g11_inr; ?> 
                                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=28">
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

    <div class="tab-pane fade  pt-5" id="pills-three-code-sample" role="tabpanel" aria-labelledby="pills-three-code-sample-tab">
        <div class="container pb-4">
            <!-- Title -->
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-5">
                <div class="min-w-8rem mr-2">
                    <figure class="avatar mx-auto d-flex justify-content-center">
                        <img class=" " width="200" height="200" style="height: 80%;" height="100" src="./assets/svg/cloud-rect/digitalocean-2.svg" alt="Logo">
                    </figure>
                </div>
                <!-- <h2 class="h1">Our AWS Cloud Hosting Plan</h2> -->
                <!-- <p>Digital Ocean details content goes here.</p> -->
            </div>
            <!-- End Title -->
            <!-- Card -->

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
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d1_product_name; ?>
                                                </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d1_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d1_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d1_storage[3];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d1_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d1_inr;?>" p-inr="<?php echo $d1_inr;?>" p-aed="<?php echo $d1_aed;?>" p-gbp="<?php echo $d1_gbp;?>" p-usd="<?php echo $d1_usd;?>"> 

                                            <?php echo $d1_inr; ?> 

                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <!-- <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $d1_product_id;?>">
                                        <span>Order Now</span>
                                    </a> -->
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d1_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d2_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d2_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d2_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d2_storage[3];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d2_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d2_inr;?>" p-inr="<?php echo $d2_inr;?>" p-aed="<?php echo $d2_aed;?>" p-gbp="<?php echo $d2_gbp;?>" p-usd="<?php echo $d2_usd;?>"> 
                            
                                            <?php echo $d2_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <!-- <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudyea.com/cart.php?a=add&pid=<?php echo $d2_product_id;?>">
                                        <span>Order Now</span>
                                    </a> -->
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d2_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d3_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d3_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d3_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d3_storage[3];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d3_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d3_inr;?>" p-inr="<?php echo $d3_inr;?>" p-aed="<?php echo $d3_aed;?>" p-gbp="<?php echo $d3_gbp;?>" p-usd="<?php echo $d3_usd;?>"> 
                            
                                            <?php echo $d3_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d3_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d4_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d4_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d4_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d4_storage[3];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d4_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d4_inr;?>" p-inr="<?php echo $d4_inr;?>" p-aed="<?php echo $d4_aed;?>" p-gbp="<?php echo $d4_gbp;?>" p-usd="<?php echo $d4_usd;?>"> 
                            
                                            <?php echo $d4_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d4_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d5_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d5_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d5_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d5_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d5_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d5_inr;?>" p-inr="<?php echo $d5_inr;?>" p-aed="<?php echo $d5_aed;?>" p-gbp="<?php echo $d5_gbp;?>" p-usd="<?php echo $d5_usd;?>"> 
                            
                                            <?php echo $d5_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d5_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d6_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d6_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d6_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d6_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d6_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d6_inr;?>" p-inr="<?php echo $d6_inr;?>" p-aed="<?php echo $d6_aed;?>" p-gbp="<?php echo $d6_gbp;?>" p-usd="<?php echo $d6_usd;?>"> 
                            
                                            <?php echo $d6_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d6_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d7_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d7_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d7_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d7_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d7_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d7_inr;?>" p-inr="<?php echo $d7_inr;?>" p-aed="<?php echo $d7_aed;?>" p-gbp="<?php echo $d7_gbp;?>" p-usd="<?php echo $d7_usd;?>"> 
                            
                                            <?php echo $d7_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d7_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d8_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d8_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d8_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d8_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d8_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d8_inr;?>" p-inr="<?php echo $d8_inr;?>" p-aed="<?php echo $d8_aed;?>" p-gbp="<?php echo $d8_gbp;?>" p-usd="<?php echo $d8_usd;?>"> 
                            
                                            <?php echo $d8_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d8_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d9_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d9_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d9_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d9_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d9_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d9_inr;?>" p-inr="<?php echo $d9_inr;?>" p-aed="<?php echo $d9_aed;?>" p-gbp="<?php echo $d9_gbp;?>" p-usd="<?php echo $d9_usd;?>"> 
                            
                                            <?php echo $d9_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d9_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d10_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d10_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d10_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d10_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d10_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d10_inr;?>" p-inr="<?php echo $d10_inr;?>" p-aed="<?php echo $d10_aed;?>" p-gbp="<?php echo $d10_gbp;?>" p-usd="<?php echo $d10_usd;?>"> 
                            
                                            <?php echo $d10_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d10_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d11_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d11_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d11_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d11_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d11_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d11_inr;?>" p-inr="<?php echo $d11_inr;?>" p-aed="<?php echo $d11_aed;?>" p-gbp="<?php echo $d11_gbp;?>" p-usd="<?php echo $d11_usd;?>"> 
                            
                                            <?php echo $d11_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d11_id;?>"  data-target="#selectDORegion">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1 p-1" width="80" height="80" src="./assets/svg/cloud-square/do.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0 p-title">
                                                    <?php echo $d12_product_name;?> </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d12_ram[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d12_vcpu[2];?></span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d12_storage[2];?>	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span><?php echo $d12_bandwidth[2];?>	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body p-price"">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d12_inr;?>" p-inr="<?php echo $d12_inr;?>" p-aed="<?php echo $d12_aed;?>" p-gbp="<?php echo $d12_gbp;?>" p-usd="<?php echo $d12_usd;?>"> 
                            
                                            <?php echo $d12_inr; ?> 
                            
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $d12_id;?>"  data-target="#selectDORegion">
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
    <div class="tab-pane fade  pt-5" id="pills-four-code-sample" role="tabpanel" aria-labelledby="pills-four-code-sample-tab">
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
                                                        <h6 class="text-hover-primary mb-0 p-title">
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
                                            <a class="text-body p-price">
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
                                            <!-- <a class="plink btn btn-outline-primary btn-block border transition-3d-hover configorder" href="javascript:;" data-toggle="modal" product-id="<?php echo $ls1_id;?>"  data-target="#selectLIRegion">
                                                <span>Order Now</span>
                                            </a> -->
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

</div>
<!-- End Tab Content -->


<!-- Edit Card Modal -->


<!-- Add New Address Modal -->
<div class="modal fade" id="selectRegion" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="#selectRegion">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h4 id="addNewAddressModalTitle" class="modal-title">Configurable Options</h4>
                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-xs btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
                </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body">
                <form id="configoption">
                    <!-- Form Group -->
                    <div class="row form-group">
                        <!-- <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label> -->
                        <div class="col-sm-12">
                            <div class="px-3 d-flex shadow-sm rounded p-2 justify-content-between align-items-center border border-warning mb-4">
                                <div class="media align-items-center">
                                    <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/aws.svg" alt="Image Description" loading="lazy">
    
                                    <div class="media-body">
                                        <a class="d-inline-block text-dark">
                                            <h6 class="text-hover-primary mb-0 p_title">
                                              <?php echo $a1_name;?>                                              </h6>
                                        </a>
                                        <br>
                                        <small class="p_module">  <?php echo $a1_module;?>  </small>
                                    </div>
                                </div>
                                <div class="p_price">
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  
                                        <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="499" p-inr="499" p-aed="25" p-gbp="5" p-usd="7"><?php echo $a1_inr;?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
<div class="col-sm-12">
    
    <label for=""> Host Name</label>
    <div class="mb-3">
        <input type="text" class="form-control" name="hostname" id="hostname" tabindex="1" placeholder="servername.yourdomain.com" aria-label="Email Address" required="" data-msg="Please enter a hostname." >
    </div>
   
</div>
                        <div class="col-sm-12">
                            <label for=""> Select Region</label>
                            <!-- Select -->
                            <div class="mb-3">
                                <select class="js-custom-select" id="regionselect" data-hs-select2-options='{
                          "dropdownParent": "#selectRegion",
                          "customClass": "custom-select",
                          "placeholder": "Select Region",
                          "searchInputPlaceholder": "Search Region"
                        }' required>
                  <option label="empty"></option>
                  <?php 
                  foreach($a1_region as $i){

                  ?>
                  <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                    <?php
                                    }
                    ?>
                   </select>
                            </div>
                            <!-- End Select -->


                        </div>
                        <div class="col-sm-12">
                        <label for=""> Select Blueprint</label>
                            <!-- Select -->
                            <div class="mb-3">
                                <select class="js-custom-select" id="blueprintselect" data-hs-select2-options='{
                          "dropdownParent": "#selectRegion",
                          "customClass": "custom-select",
                          "placeholder": "Select Blueprint",
                          "searchInputPlaceholder": "Search Blueprint"
                        }' required>
                  <option label="empty"></option>
                  <?php 
                  foreach($a1_blueprint as $i){

                  ?>
                  <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                    <?php
                                    }
                    ?>
                   </select>
                            </div>
                            <!-- End Select -->


                        </div>
                        <div class="col-sm-12 d-none">
                            <label for=""> Select Instance type</label>
                                <!-- Select -->
                                <div class="mb-3">
                                    <select class="js-custom-select" id="instancetype" data-hs-select2-options='{
                              "dropdownParent": "#selectRegion",
                              "customClass": "custom-select",
                              "placeholder": "Select Instance type",
                              "searchInputPlaceholder": "Search Instance type"
                            }'>
                      <option label="empty"></option>
                      <?php 
                      foreach($a1_instance as $i){
    
                      ?>
                      <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                        <?php
                                        }
                        ?>
                       </select>
                                </div>
                                <!-- End Select -->
    
    
                            </div>
                    </div>
                    <!-- End Form Group -->



                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary submitall">Submit</button>
                    </div>
<!-- 
                    <div class="d-flex justify-content-center">
                        <a type="button" data-url="https://my.cloudyea.com/cart.php?a=add" data-new='' class="p_order  btn btn-primary">Order Now</a>
                    </div> -->
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Add New Address Modal -->
<!-- Add New Address Modal -->
<div class="modal fade" id="selectDORegion" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="#selectDORegion">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h4 id="addNewAddressModalTitle" class="modal-title">Configurable Options</h4>
                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-xs btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
                </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body">
                <form id="configdooption">
                    <!-- Form Group -->
                    <div class="row form-group">
                        <!-- <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label> -->
                        <div class="col-sm-12">
                            <div class="px-3 d-flex shadow-sm rounded p-2 justify-content-between align-items-center border border-warning mb-4">
                                <div class="media align-items-center">
                                    <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/do.svg" alt="Image Description" loading="lazy">
    
                                    <div class="media-body">
                                        <a class="d-inline-block text-dark">
                                            <h6 class="text-hover-primary mb-0 p_title">
                                              <?php echo $d1_product_name;?> </h6>
                                        </a>
                                        <br>
                                      
                                    </div>
                                </div>
                                <div class="p_price">
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  
                                        <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="499" p-inr="499" p-aed="25" p-gbp="5" p-usd="7"><?php echo $d1_inr;?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
<div class="col-sm-12">
    <label for=""> Host Name</label>
    <div class="mb-3">
        <input type="text" class="form-control" name="hostname" id="dohostname" tabindex="1" placeholder="servername.yourdomain.com" aria-label="Email Address" required="" data-msg="Please enter a hostname." >
    </div>
   
</div>
                        <div class="col-sm-12">
                            <label for=""> Select Region</label>
                            <!-- Select -->
                            <div class="mb-3">
                                <select class="js-custom-select" id="doregionselect" data-hs-select2-options='{
                          "dropdownParent": "#selectDORegion",
                          "customClass": "custom-select",
                          "placeholder": "Select Region",
                          "searchInputPlaceholder": "Search Region"
                        }' required>
                  <option label="empty"></option>
                  <?php 
                  foreach($d1_region as $i){

                  ?>
                  <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                    <?php
                                    }
                    ?>
                   </select>
                            </div>
                            <!-- End Select -->


                        </div>
                        <div class="col-sm-12">
                        <label for=""> Select Blueprint</label>
                            <!-- Select -->
                            <div class="mb-3">
                                <select class="js-custom-select" id="doblueprintselect" data-hs-select2-options='{
                          "dropdownParent": "#selectDORegion",
                          "customClass": "custom-select",
                          "placeholder": "Select Blueprint",
                          "searchInputPlaceholder": "Search Blueprint"
                        }' required>
                  <option label="empty"></option>
                  <?php 
                  foreach($d1_blueprint as $i){

                  ?>
                  <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                    <?php
                                    }
                    ?>
                   </select>
                            </div>
                            <!-- End Select -->


                        </div>
                  
                    </div>
                    <!-- End Form Group -->



                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary submitall">Submit</button>
                    </div>
<!-- 
                    <div class="d-flex justify-content-center">
                        <a type="button" data-url="https://my.cloudyea.com/cart.php?a=add" data-new='' class="p_order  btn btn-primary">Order Now</a>
                    </div> -->
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<div class="modal fade" id="selectLIRegion" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="#selectDORegion">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header">
                <h4 id="addNewAddressModalTitle" class="modal-title">Configurable Options</h4>
                <div class="modal-close">
                    <button type="button" class="btn btn-icon btn-xs btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
                </div>
            </div>
            <!-- End Header -->

            <!-- Body -->
            <div class="modal-body">
                <form id="configlioption">
                    <!-- Form Group -->
                    <div class="row form-group">
                        <!-- <label for="locationLabel" class="col-sm-3 col-form-label input-label">Location</label> -->
                        <div class="col-sm-12">
                            <div class="px-3 d-flex shadow-sm rounded p-2 justify-content-between align-items-center border border-warning mb-4">
                                <div class="media align-items-center">
                                    <img class=" avatar avatar-sm  mr-3" src="./assets/svg/cloud-square/linode.svg" alt="Image Description" loading="lazy">
    
                                    <div class="media-body">
                                        <a class="d-inline-block text-dark">
                                            <h6 class="text-hover-primary mb-0 p_title">
                                              <?php echo $ls1_name;?> </h6>
                                        </a>
                                        <br>
                                      
                                    </div>
                                </div>
                                <div class="p_price">
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  
                                        <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="499" p-inr="499" p-aed="25" p-gbp="5" p-usd="7"><?php echo $ls1_inr;?></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
<div class="col-sm-12">
    <label for=""> Host Name</label>
    <div class="mb-3">
        <input type="text" class="form-control" name="hostname" id="lihostname" tabindex="1" placeholder="servername.yourdomain.com" aria-label="Email Address" required="" data-msg="Please enter a hostname." >
    </div>
   
</div>
                        <div class="col-sm-12">
                            <label for=""> Select Region</label>
                            <!-- Select -->
                            <div class="mb-3">
                                <select class="js-custom-select" id="liregionselect" data-hs-select2-options='{
                          "dropdownParent": "#selectLIRegion",
                          "customClass": "custom-select",
                          "placeholder": "Select Region",
                          "searchInputPlaceholder": "Search Region"
                        }' required>
                  <option label="empty"></option>
                  <?php 
                  foreach($ls1_region as $i){

                  ?>
                  <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                    <?php
                                    }
                    ?>
                   </select>
                            </div>
                            <!-- End Select -->


                        </div>
                        <div class="col-sm-12">
                        <label for=""> Select Blueprint</label>
                            <!-- Select -->
                            <div class="mb-3">
                                <select class="js-custom-select" id="liblueprintselect" data-hs-select2-options='{
                          "dropdownParent": "#selectLIRegion",
                          "customClass": "custom-select",
                          "placeholder": "Select Blueprint",
                          "searchInputPlaceholder": "Search Blueprint"
                        }' required>
                  <option label="empty"></option>
                  <?php 
                  foreach($ls1_blueprint as $i){

                  ?>
                  <option value=<?php echo $i['id'];?> ><?php echo $i['name'];?></option>
                    <?php
                                    }
                    ?>
                   </select>
                            </div>
                            <!-- End Select -->


                        </div>
                  
                    </div>
                    <!-- End Form Group -->



                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary submitall">Submit</button>
                    </div>
<!-- 
                    <div class="d-flex justify-content-center">
                        <a type="button" data-url="https://my.cloudyea.com/cart.php?a=add" data-new='' class="p_order  btn btn-primary">Order Now</a>
                    </div> -->
                </form>
            </div>
            <!-- End Body -->
        </div>
    </div>
</div>
<!-- End Add New Address Modal -->
<!-- End Edit Card Modal -->
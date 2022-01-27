<?php include('./pricetable/aws_price.php');?>
<?php include('./pricetable/gcp_price.php');?>
<?php include('./pricetable/digital_price.php');?>
<?php include('./pricetable/linode_price.php');?>
<style>
    .nav-segment .c_tab .active {
        background: #fff;
        border-radius: 20rem;
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
            border-radius: 1rem!important;
        }
    }
</style>
<!-- Nav -->
<div class="w-lg-100 mx-lg-auto">
    <ul class="nav nav-pills rounded-pill tablemobile bg-primary nav-segment  w-100 nav-dark nav-justified scrollbar-horizontal font-weight-bold" role="tablist">
        <li class="nav-item c_tab">
            <a class="nav-link active" id="pills-one-code-sample-tab" data-toggle="pill" href="#pills-one-code-sample" role="tab" aria-controls="pills-one-code-sample" aria-selected="true">
                <figure class="py-2">
                    <img class=" " width="100" height="100" src="./assets/svg/cloud-rect/Amazon_Web_Services_Logo.svg" alt="Logo" style="max-height:1.8rem;padding: .1rem;">
                </figure>
            </a>

        </li>
        <li class="nav-item c_tab">
            <a class="nav-link" id="pills-two-code-sample-tab" data-toggle="pill" href="#pills-two-code-sample" role="tab" aria-controls="pills-two-code-sample" aria-selected="false">
                <figure class="py-2">
                    <img class="" width="200" height="200" src="./assets/svg/cloud-rect/gcp.svg" alt="Logo" style="max-height:1.8rem;padding: .2rem;">
                </figure>
            </a>
        </li>
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
        <div class=" pb-4">

            <!-- Card -->

            <div class="card">


                <!-- Table -->
                <div class="table-responsive-sm">
                    <table class="table table-bordered  table-hover table-thead-bordered table-nowrap table-align-middle">
                        <thead class="thead-light px-2">
                            <tr>
                                <th class="w-40">Servers</th>
                                <th>RAM</th>
                                <th>CPU</th>
                                <th>SSD Storage</th>
                                <th>Price</th>
                                <th>Configure</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A1 </h6>
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
                                        <span class="font-weight-bold ">  
                                                <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a1_inr;?>" p-inr="<?php echo $a1_inr;?>" p-aed="<?php echo $a1_aed;?>" p-gbp="<?php echo $a1_gbp;?>" p-usd="<?php echo $a1_usd;?>"> 

                                                <?php echo $a1_inr; ?> 

                                            </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=8">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A2 </h6>
                                            </a>
                                            <small class="d-none">t3.nano</small>
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
                                        <span class="font-weight-bold ">  
                                                <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a2_inr;?>" p-inr="<?php echo $a2_inr;?>" p-aed="<?php echo $a2_aed;?>" p-gbp="<?php echo $a2_gbp;?>" p-usd="<?php echo $a2_usd;?>">

                                                <?php echo $a2_inr; ?>

                                              </span>

                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=6">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A3 </h6>
                                            </a>
                                            <small class="d-none">t3.micro</small>
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
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a3_inr;?>" p-inr="<?php echo $a3_inr;?>" p-aed="<?php echo $a3_aed;?>" p-gbp="<?php echo $a3_gbp;?>" p-usd="<?php echo $a3_usd;?>">
                                                <?php echo $a3_inr; ?>
                                              </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=9">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A4 </h6>
                                            </a>
                                            <small class="d-none">t2.micro</small>
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
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a4_inr;?>" p-inr="<?php echo $a4_inr;?>" p-aed="<?php echo $a4_aed;?>" p-gbp="<?php echo $a4_gbp;?>" p-usd="<?php echo $a4_usd;?>">

                                                <?php echo $a4_inr; ?>

                                              </span></span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=10">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A5 </h6>
                                            </a>
                                            <small class="d-none">t3.small</small>
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
                                        <span class="font-weight-bold "> 
                                                     <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a5_inr;?>" p-inr="<?php echo $a5_inr;?>" p-aed="<?php echo $a5_aed;?>" p-gbp="<?php echo $a5_gbp;?>" p-usd="<?php echo $a5_usd;?>">

                                                     <?php echo $a5_inr; ?>

                                                   </span>

                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=12">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A6 </h6>
                                            </a>
                                            <small class="d-none">t3.medium</small>
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
                                        <span class="font-weight-bold ">  
                                                    <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a6_inr;?>" p-inr="<?php echo $a6_inr;?>" p-aed="<?php echo $a6_aed;?>" p-gbp="<?php echo $a6_gbp;?>" p-usd="<?php echo $a6_usd;?>">
  <?php echo $a6_inr; ?>
</span>

                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=13">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A7 </h6>
                                            </a>
                                            <small class="d-none">t3.large</small>
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
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a7_inr;?>" p-inr="<?php echo $a7_inr;?>" p-aed="<?php echo $a7_aed;?>" p-gbp="<?php echo $a7_gbp;?>" p-usd="<?php echo $a7_usd;?>">
  <?php echo $a7_inr; ?>
</span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=14">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A8 </h6>
                                            </a>
                                            <small class="d-none">t3.xlarge</small>
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
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a8_inr;?>" p-inr="<?php echo $a8_inr;?>" p-aed="<?php echo $a8_aed;?>" p-gbp="<?php echo $a8_gbp;?>" p-usd="<?php echo $a8_usd;?>">
  <?php echo $a8_inr; ?>
</span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=15">
                                        <span>Order Now</span>
                                    </a>
                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="media align-items-center">
                                        <img class=" avatar avatar-sm  mr-3 p-1" width="100" height="100" src="./assets/svg/cloud-square/aws.svg" alt="Image Description">

                                        <div class="media-body">
                                            <a class="d-inline-block text-dark">
                                                <h6 class="text-hover-primary mb-0">Cloud A9 </h6>
                                            </a>
                                            <small class="d-none">t3.2xlarge</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>32GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>20GB SSD	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $a9_inr;?>" p-inr="<?php echo $a9_inr;?>" p-aed="<?php echo $a9_aed;?>" p-gbp="<?php echo $a9_gbp;?>" p-usd="<?php echo $a9_usd;?>">
                                                <?php echo $a9_inr; ?>
                                              </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=16">
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

    <div class="tab-pane fade  pt-5" id="pills-two-code-sample" role="tabpanel" aria-labelledby="pills-two-code-sample-tab">
        <div class="container pb-4">
            <!-- Title -->
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                <div class="min-w-8rem mr-2">
                    <figure class="avatar mx-auto d-flex justify-content-center">
                        <img class=" " width="200" height="200" style="height: 80%;" src="./assets/svg/cloud-rect/gcp.svg" alt="Logo">
                    </figure>
                </div>
                <!-- <h2 class="h1">Our AWS Cloud Hosting Plan</h2> -->
                <p>GCP details content goes here.</p>
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=17">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=18">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=19">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=20">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=21">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=22">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=24">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=25">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=26">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=27">
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
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=28">
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
            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                <div class="min-w-8rem mr-2">
                    <figure class="avatar mx-auto d-flex justify-content-center">
                        <img class=" " width="200" height="200" style="height: 80%;" height="100" src="./assets/svg/cloud-rect/digitalocean-2.svg" alt="Logo">
                    </figure>
                </div>
                <!-- <h2 class="h1">Our AWS Cloud Hosting Plan</h2> -->
                <p>Digital Ocean details content goes here.</p>
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
                                                <h6 class="text-hover-primary mb-0">Cloud D1-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d1_inr;?>" p-inr="<?php echo $d1_inr;?>" p-aed="<?php echo $d1_aed;?>" p-gbp="<?php echo $d1_gbp;?>" p-usd="<?php echo $d1_usd;?>"> 

                                            <?php echo $d1_inr; ?> 

                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=31">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D2-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>1</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>50 GB	</span>
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
                                        <span class="currency" data-value="<?php echo $d2_inr;?>" p-inr="<?php echo $d2_inr;?>" p-aed="<?php echo $d2_aed;?>" p-gbp="<?php echo $d2_gbp;?>" p-usd="<?php echo $d2_usd;?>"> 

                                            <?php echo $d2_inr; ?> 
                                            
                                            </span> </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=32">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D3-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>60 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>60 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d3_inr;?>" p-inr="<?php echo $d3_inr;?>" p-aed="<?php echo $d3_aed;?>" p-gbp="<?php echo $d3_gbp;?>" p-usd="<?php echo $d3_usd;?>"> 

                                            <?php echo $d3_inr; ?> 
                                            
                                            </span> </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=33">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D4-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>80 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d4_inr;?>" p-inr="<?php echo $d4_inr;?>" p-aed="<?php echo $d4_aed;?>" p-gbp="<?php echo $d4_gbp;?>" p-usd="<?php echo $d4_usd;?>"> 

                                            <?php echo $d4_inr; ?> 
                                            
                                            </span></span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=34">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D5-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>160 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>5 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d5_inr;?>" p-inr="<?php echo $d5_inr;?>" p-aed="<?php echo $d5_aed;?>" p-gbp="<?php echo $d5_gbp;?>" p-usd="<?php echo $d5_usd;?>"> 

                                            <?php echo $d5_inr; ?> 
                                            
                                            </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=35">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D6-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>16 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>320 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>6 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d6_inr;?>" p-inr="<?php echo $d6_inr;?>" p-aed="<?php echo $d6_aed;?>" p-gbp="<?php echo $d6_gbp;?>" p-usd="<?php echo $d6_usd;?>"> 
         <?php echo $d6_inr; ?> 

</span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=36">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D7-G </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>2</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>25 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d7_inr;?>" p-inr="<?php echo $d7_inr;?>" p-aed="<?php echo $d7_aed;?>" p-gbp="<?php echo $d7_gbp;?>" p-usd="<?php echo $d7_usd;?>"> 
                                                     <?php echo $d7_inr; ?> 
                                        
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=37">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D8-R </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>16 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>4</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>50 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>5 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d8_inr;?>" p-inr="<?php echo $d8_inr;?>" p-aed="<?php echo $d8_aed;?>" p-gbp="<?php echo $d8_gbp;?>" p-usd="<?php echo $d8_usd;?>"> 
         <?php echo $d8_inr; ?> 

</span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=38">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D9-G </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>32 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>100 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>6 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d9_inr;?>" p-inr="<?php echo $d9_inr;?>" p-aed="<?php echo $d9_aed;?>" p-gbp="<?php echo $d9_gbp;?>" p-usd="<?php echo $d9_usd;?>"> 
                                                     <?php echo $d9_inr; ?> 
                                        
                                        </span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=39">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D10-G </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>64 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>16</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>200 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>7 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d10_inr;?>" p-inr="<?php echo $d10_inr;?>" p-aed="<?php echo $d10_aed;?>" p-gbp="<?php echo $d10_gbp;?>" p-usd="<?php echo $d10_usd;?>"> 
         <?php echo $d10_inr; ?> 

</span>
                                        </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=40">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D11-G </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>128 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>32</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>400 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>8 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d11_inr;?>" p-inr="<?php echo $d11_inr;?>" p-aed="<?php echo $d11_aed;?>" p-gbp="<?php echo $d11_gbp;?>" p-usd="<?php echo $d11_usd;?>"> 
         <?php echo $d11_inr; ?> 

</span> </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=42">
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
                                                <h6 class="text-hover-primary mb-0">Cloud D12-G </h6>
                                            </a>
                                            <small class="d-none">t4g.nano</small>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>160 GB</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>40</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>500 GB	</span>
                                    </a>
                                </td>
                                <td>
                                    <a class="text-body">
                                        <span>9 TB	</span>
                                    </a>
                                </td>

                                <td>
                                    <a class="text-body">
                                        <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                        <span class="currency" data-value="<?php echo $d12_inr;?>" p-inr="<?php echo $d12_inr;?>" p-aed="<?php echo $d12_aed;?>" p-gbp="<?php echo $d12_gbp;?>" p-usd="<?php echo $d12_usd;?>"> 
         <?php echo $d12_inr; ?> 

</span> </span>
                                    </a>
                                </td>

                                <td>
                                    <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=43">
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
                <p>Linode details content goes here.</p>
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
                    <p>
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LS1 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>1 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>1</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>25 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>1 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l1_inr;?>" p-inr="<?php echo $l1_inr;?>" p-aed="<?php echo $l1_aed;?>" p-gbp="<?php echo $l1_gbp;?>" p-usd="<?php echo $l1_usd;?>"> 
    
                                        <?php echo $l1_inr; ?> 
    
                                    </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=52">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LS2 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>2 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>1</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>50 GB	</span>
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
                                                    <span class="currency" data-value="<?php echo $l2_inr;?>" p-inr="<?php echo $l2_inr;?>" p-aed="<?php echo $l2_aed;?>" p-gbp="<?php echo $l2_gbp;?>" p-usd="<?php echo $l2_usd;?>"> 
    
                                        <?php echo $l2_inr; ?> 
                                        
                                        </span> </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=53">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LS3 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>4 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>2</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>80 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>4 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l3_inr;?>" p-inr="<?php echo $l3_inr;?>" p-aed="<?php echo $l3_aed;?>" p-gbp="<?php echo $l3_gbp;?>" p-usd="<?php echo $l3_usd;?>"> 
    
                                        <?php echo $l3_inr; ?> 
                                        
                                        </span> </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=54">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LS4 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>8 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>4</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>160 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>5 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l4_inr;?>" p-inr="<?php echo $l4_inr;?>" p-aed="<?php echo $l4_aed;?>" p-gbp="<?php echo $l4_gbp;?>" p-usd="<?php echo $l4_usd;?>"> 
    
                                        <?php echo $l4_inr; ?> 
                                        
                                        </span></span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=55">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LS5 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>16 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>6</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>320 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>8 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l5_inr;?>" p-inr="<?php echo $l5_inr;?>" p-aed="<?php echo $l5_aed;?>" p-gbp="<?php echo $l5_gbp;?>" p-usd="<?php echo $l5_usd;?>"> 
    
                                        <?php echo $l5_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=56">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LS6 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>32 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>8</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>640 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>16 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l6_inr;?>" p-inr="<?php echo $l6_inr;?>" p-aed="<?php echo $l6_aed;?>" p-gbp="<?php echo $l6_gbp;?>" p-usd="<?php echo $l6_usd;?>"> 
    
                                        <?php echo $l6_inr; ?> 
                                        
                                        </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=57">
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
                    </p>
                </div>

                <div class="tab-pane fade" id="pills-two-code-features-example1" role="tabpanel" aria-labelledby="pills-two-code-features-example1-tab">
                    <p>
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD1 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>4 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>2</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>80 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>4 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l7_inr;?>" p-inr="<?php echo $l7_inr;?>" p-aed="<?php echo $l7_aed;?>" p-gbp="<?php echo $l7_gbp;?>" p-usd="<?php echo $l7_usd;?>"> 
                                    <?php echo $l7_inr; ?> 
                       
                       </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=58">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD2 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>8 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>4</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>160 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>5 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l8_inr;?>" p-inr="<?php echo $l8_inr;?>" p-aed="<?php echo $l8_aed;?>" p-gbp="<?php echo $l8_gbp;?>" p-usd="<?php echo $l8_usd;?>"> 
                                    <?php echo $l8_inr; ?> 
                                   
                                   </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=59">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD3 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>16 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>8</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>320 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>6 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l9_inr;?>" p-inr="<?php echo $l9_inr;?>" p-aed="<?php echo $l9_aed;?>" p-gbp="<?php echo $l9_gbp;?>" p-usd="<?php echo $l9_usd;?>"> 
                                    <?php echo $l9_inr; ?> 
                       
                       </span>
                                                    </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=60">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD4 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>32 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>16</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>640 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>7 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l10_inr;?>" p-inr="<?php echo $l10_inr;?>" p-aed="<?php echo $l10_aed;?>" p-gbp="<?php echo $l10_gbp;?>" p-usd="<?php echo $l10_usd;?>"> 
                                             <?php echo $l10_inr; ?> 
                                
                                </span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=61">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD5 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>64 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>32</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>1280 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>8 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l12_inr;?>" p-inr="<?php echo $l11_inr;?>" p-aed="<?php echo $l11_aed;?>" p-gbp="<?php echo $l11_gbp;?>" p-usd="<?php echo $l11_usd;?>"> 
 <?php echo $l11_inr; ?> 

</span>
                                                    </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=62">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD6 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>96 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>48</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>1920 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>9 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l12_inr;?>" p-inr="<?php echo $l12_inr;?>" p-aed="<?php echo $l12_aed;?>" p-gbp="<?php echo $l12_gbp;?>" p-usd="<?php echo $l12_usd;?>"> 
 <?php echo $l12_inr; ?> 

</span> </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=63">
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
                                                            <h6 class="text-hover-primary mb-0">Cloud LD7 </h6>
                                                        </a>
                                                        <small class="d-none">t4g.nano</small>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>128 GB</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>50</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>2500 GB	</span>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="text-body">
                                                    <span>10 TB	</span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="text-body">
                                                    <span class="font-weight-bold ">  <span class="curr_sym">₹</span>
                                                    <span class="currency" data-value="<?php echo $l13_inr;?>" p-inr="<?php echo $l13_inr;?>" p-aed="<?php echo $l13_aed;?>" p-gbp="<?php echo $l13_gbp;?>" p-usd="<?php echo $l13_usd;?>"> 
 <?php echo $l13_inr; ?> 

</span> </span>
                                                </a>
                                            </td>

                                            <td>
                                                <a class="plink btn btn-outline-primary btn-block border transition-3d-hover" href="https://my.cloudington.com/cart.php?a=add&pid=64">
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
                    </p>
                </div>


            </div>
            <!-- End Tab Content -->



        </div>
    </div>

</div>
<!-- End Tab Content -->
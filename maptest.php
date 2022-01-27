<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= <!--map-->
        <div class="overflow-hidden" id="maplocations">
            <div class="container pb-4 space-2">
                <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-3">
                    <div class="min-w-8rem mr-2 mb-2">
                        <span class="icon icon-md icon-circle icon-soft-primary">
                          <i class="fas fa-globe"></i>
                      </span>
                    </div>
                    <h2 class="h1"> Global Data center Locations</h2>
                    <p>Whatever your status, our offers evolve according to your needs.</p>
                </div>
                <div class="d-flex justify-content-center align-items-center">
                    <?php include('./assets/svg/maps/homemap.php');?>
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
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/usa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">West Coast USA</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">California,Fremont, Los Angeles, Oregan, San Francisco </span>
                                <span class="d-block font-size-1 text-body mb-1">5 location(s) served by 4 provider(s).    </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation EastCoastUSA">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/usa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">East Coast USA</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">New York, Ohio, South Carolina, Virginia, Newark, Atlanta </span>
                                <span class="d-block font-size-1 text-body mb-1">  6 location(s) served by 5 provider(s).  </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation MidWestUSA">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/usa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Mid West USA</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Dallas, Iowa, Texas, Wyoming </span>
                                <span class="d-block font-size-1 text-body mb-1"> 4 location(s) served by 4 provider(s).  </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation CanadaCentral">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/canada.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Canada</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Montreal, Quebec City, Toronto   </span>
                                <span class="d-block font-size-1 text-body mb-1"> 3 location(s) served by 5 provider(s).  </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation SãoPaulo">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/brazil.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Brazil</a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">São Paulo  </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 3 provider(s).  </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation CapeTown">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/south_africa.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">South Africa </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Cape Town, Johannesburg                          </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 1 provider(s).  </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Paris">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/france.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">France </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Paris </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 2 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Switzerland">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/switzerland.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Switzerland </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Geneva, Zurich                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 2 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>



                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Milan">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/italy.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Italy </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Milan</span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>




                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Frankfruit">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/germany.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Germany </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Berlin, Frankfurt, Magdeburg                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 3 location(s) served by 5 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>





                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Amstredam">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/netherlands.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Netherlands </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Amstredam                              </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 4 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>







                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Belgium">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/belgium.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Belgium </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Brussels                              </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Sweden">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/sweden.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Sweden </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Stockholm                              </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Finland">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/finland.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Finland </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Hamania                              </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation NorwayCentral">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/norway.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Norway </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Oslo, Stavangar  </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation London">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/uk.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">United Kingdom </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">London, Cardiff
                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 5 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Ireland">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/ireland.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Ireland </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Dublin
                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 2 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation UAE">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/uae.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">UAE </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Abu Dhabi, Dubai

                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 2 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Hyderabad">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/india.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">India </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Bangalore, Chennai, Mumbai, Pune

                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 4 location(s) served by 5 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Beijing">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/china.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">China </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Hong kong

                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 3 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Seoul">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/south_korea.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">South Korea </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Busan, Seoul


                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 2 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Tokyo">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/japan.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Japan </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Osaka, Tokyo



                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 5 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Singapore">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/singapore.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Singapore </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Singapore



                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 5 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Jakarta">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/indonesia.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Indonesia </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Jakarta



                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation KualaLumpar">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/malaysia.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Malaysia </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Kuala Lumpar



                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 1 location(s) served by 1 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>
                    <div class="js-slide mb-4 jslocation Sydney">
                        <!-- Card -->
                        <div class="card card-bordered card-hover-shadow w-100">
                            <div class="card-body text-center">
                                <figure class="avatar flagsm mx-auto mb-1">
                                    <img    class=" avatar-img rounded-circle shadow-soft" src="./assets/svg/maps/flag/australia.svg" alt="Logo">
                                </figure>
                                <h3 class="mb-1">
                                    <a class="text-dark">Australia </a>
                                </h3>
                                <span class="d-block font-size-1 text-body mb-1">Canberra, Sydney, Victoria




                                </span>
                                <span class="d-block font-size-1 text-body mb-1"> 2 location(s) served by 5 provider(s).   </span>

                            </div>

                            <div class="card-footer">
                                <div class=" text-center d-flex justify-content-center align-items-center">


                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/azure.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/aws.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/digitalocean.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/googlecloud.svg" alt="" srcset="">
                                        </a>
                                    </div>
                                    <div class="list-inline-item ">
                                        <a class="">
                                            <img width="50" height="50" class="providerssm" src="./assets/svg/maps/providers/linode.svg" style="filter:grayscale(1)" alt="" srcset="">
                                        </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- End Card -->

                    </div>

                </div>
                <!-- End Slick Carousel -->
            </div>

        </div>
        <!-- Slick Carousel -->
        <!--map-->, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
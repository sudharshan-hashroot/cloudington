<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Listing (Grid) - Jobs | Front - Responsive Website Template</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css">
  <link rel="stylesheet" href="../assets/vendor/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../assets/vendor/ion-rangeslider/css/ion.rangeSlider.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../assets/css/theme.min.css">
</head>
<body>
<!-- ========== HEADER ========== -->
<header id="header" class="header header-box-shadow-on-scroll header-bg-light header-abs-top header-show-hide" data-hs-header-options='{
        "fixMoment": 1000,
        "fixEffect": "slide"
      }'>
    <?php include('headercareers.php'); ?>
    </header>
    <!-- ========== END HEADER ========== -->
       <!-- ========== LOGIN MODAL ========== -->
       <?php include('loginmodal.php'); ?>
    <!-- ========== LOGIN MODAL ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="gradient-x-three-sm-primary">
      <div class="container space-top-2 space-top-lg-4 space-bottom-2">
        <!-- Card -->
        <div class="card p-2 mb-3">
          <!-- Input Group -->
          <div class="form-row input-group-borderless">
            <div class="col-sm mb-2 mb-md-0">
              <div class="input-group input-group-merge input-group-borderless">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-search"></i>
                  </div>
                </div>

                <input type="text" class="form-control" placeholder="Job title, skills, or company" aria-label="Job title, skills, or company">
              </div>
            </div>

            <div class="col-sm d-sm-none">
              <hr class="my-0">
            </div>
            
            <div class="col-sm column-divider-sm mb-2 mb-md-0">
              <div class="input-group input-group-merge input-group-borderless">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fas fa-map-marker-alt"></i>
                  </div>
                </div>

                <input type="text" class="form-control" placeholder="City, state, or zip" aria-label="City, state, or zip" value="London, UK">
              </div>
            </div>

            <div class="col-md-auto">
              <button type="button" class="btn btn-block btn-primary px-5">Search</button>
            </div>
          </div>
          <!-- End Input Group -->
        </div>
        <!-- End Card -->

        <div class="row align-items-center">
          <div class="col-md-auto mr-n3 mb-3 mb-lg-0">
            <h6 class="mb-0">Limit search to:</h6>
          </div>

          <div class="col-md mb-3 mb-lg-0">
            <!-- Checkbox -->
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="searchJobTitleCheck" checked>
                  <label class="custom-control-label" for="searchJobTitleCheck">Job title</label>
                </div>
              </li>

              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="searchSkillsCheck">
                  <label class="custom-control-label" for="searchSkillsCheck">Skills</label>
                </div>
              </li>

              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="searchCompaniesCheck">
                  <label class="custom-control-label" for="searchCompaniesCheck">Companies</label>
                </div>
              </li>

              <li class="list-inline-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="searchStudyFieldCheck">
                  <label class="custom-control-label" for="searchStudyFieldCheck">Filed of study</label>
                </div>
              </li>
            </ul>
            <!-- End Checkbox -->
          </div>

          <div class="col-lg-auto">
            <!-- Checkbox Switch -->
            <label class="toggle-switch d-flex align-items-center" for="remoteOnlySwitch">
              <input type="checkbox" class="toggle-switch-input" id="remoteOnlySwitch">
              <span class="toggle-switch-label">
                <span class="toggle-switch-indicator"></span>
              </span>
              <span class="toggle-switch-content">
                <span class="d-block">Remote only</span>
              </span>
            </label>
            <!-- End Checkbox Switch -->
          </div>
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Listing Section -->
    <div class="container space-2 space-bottom-lg-3">
      <div class="row">
        <div class="col-lg-3 order-lg-2 mb-5 mb-lg-0">
          <!-- Navbar -->
          <div class="navbar-expand-lg navbar-expand-lg-collapse-block navbar-light">
            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn btn-block btn-white"
                    aria-label="Toggle navigation"
                    aria-expanded="false"
                    aria-controls="sidebarNav"
                    data-toggle="collapse"
                    data-target="#sidebarNav">
              <span class="d-flex justify-content-between align-items-center">
                <span class="h5 mb-0">View all filters</span>
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
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <div id="sidebarNav" class="collapse navbar-collapse">
              <div class="pt-4 pt-lg-0">
                <!-- Filter Form -->
                <form>
                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Distance</h6>

                    <div class="mt-n1">
                      <p class="font-size-1 mb-0">Within <span id="rangeSliderDistance"></span> miles of <span class="font-weight-bold text-dark">London</span></p>
                    </div>

                    <!-- Range Slider -->
                    <input class="js-ion-range-slider" type="text"
                           data-hs-ion-range-slider-options='{
                             "extra_classes": "range-slider-custom",
                             "min": 0,
                             "max": 100,
                             "from": 25,
                             "to": 75,
                             "result_min_target_el": "#rangeSliderDistance"
                           }'>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                      <span class="font-size-1 text-body">5 miles</span>
                      <span class="font-size-1 text-body">100 miles</span>
                    </div>
                    <!-- End Range Slider -->
                  </div>
                  <!-- End Filter Group -->

                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Last updated</h6>

                    <!-- Select -->
                    <div id="lastUpdatedSelect" class="select2-custom select2-custom-sm-right">
                      <select class="js-custom-select custom-select-sm" style="opacity: 0;" 
                              data-hs-select2-options='{
                                "dropdownParent": "#lastUpdatedSelect",
                                "minimumResultsForSearch": "Infinity",
                                "customClass": "custom-select custom-select-sm",
                                "dropdownAutoWidth": true
                              }'>
                        <option value="within last day">within last day</option>
                        <option value="within last week">within last week</option>
                        <option value="within last month">within last month</option>
                        <option value="within last 3 months">within last 3 months</option>
                        <option value="within last 6 months" selected>within last 6 months</option>
                        <option value="show all resumes">show all resumes</option>
                      </select>
                    </div>
                    <!-- End Select -->
                  </div>
                  <!-- End Filter Group -->

                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Job titles</h6>

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="jobTitles1">
                        <label class="custom-control-label" for="jobTitles1">Graphic Designer</label>
                      </div>
                      <small>2</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="jobTitles2" checked>
                        <label class="custom-control-label" for="jobTitles2">UI/UX Designer</label>
                      </div>
                      <small>2</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="jobTitles3" checked>
                        <label class="custom-control-label" for="jobTitles3">Full Stack Developer</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="jobTitles5">
                        <label class="custom-control-label" for="jobTitles5">Information Associate</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->
                  </div>
                  <!-- End Filter Group -->

                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Company</h6>

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="company1">
                        <label class="custom-control-label" for="company1">Capsule</label>
                      </div>
                      <small>2</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="company2">
                        <label class="custom-control-label" for="company2">Spec</label>
                      </div>
                      <small>2</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="company3">
                        <label class="custom-control-label" for="company3">Mailchimp</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="company4">
                        <label class="custom-control-label" for="company4">Google</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="company5">
                        <label class="custom-control-label" for="company5">Prosperops</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="company6">
                        <label class="custom-control-label" for="company6">Figma</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->
                  </div>
                  <!-- End Filter Group -->

                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Years of experience</h6>

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="yearsOfExperience1" checked>
                        <label class="custom-control-label" for="yearsOfExperience1">6-10 years</label>
                      </div>
                      <small>5</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="yearsOfExperience2">
                        <label class="custom-control-label" for="yearsOfExperience2">3-5 years</label>
                      </div>
                      <small>3</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="yearsOfExperience3">
                        <label class="custom-control-label" for="yearsOfExperience3">More than 10 years</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->
                  </div>
                  <!-- End Filter Group -->

                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Education</h6>

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="education1">
                        <label class="custom-control-label" for="education1">Bachelors</label>
                      </div>
                      <small>5</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="education2">
                        <label class="custom-control-label" for="education2">Masters</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="education3">
                        <label class="custom-control-label" for="education3">Associates</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->
                  </div>
                  <!-- End Filter Group -->

                  <!-- Filter Group -->
                  <div class="mb-5">
                    <h6 class="small text-cap">Assessment <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Assessments shown her6 are summarized for convenience only. View the candidate’s profile for more information, including score ranges for each assessment. Indeed makes no statement as to the skill level of any candidate."></i></h6>

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="assessment1">
                        <label class="custom-control-label" for="assessment1">Attention to detail</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="assessment2">
                        <label class="custom-control-label" for="assessment2">Graphic Design</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="assessment3">
                        <label class="custom-control-label" for="assessment3">Social Media</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->

                    <!-- Checkbox -->
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="assessment4">
                        <label class="custom-control-label" for="assessment4">Marketing</label>
                      </div>
                      <small>1</small>
                    </div>
                    <!-- End Checkbox -->
                  </div>
                  <!-- End Filter Group -->

                  <button type="button" class="btn btn-sm btn-block btn-white">
                    <i class="fas fa-redo fa-sm mr-1"></i> Reset all
                  </button>
                </form>
                <!-- End Filter Form -->
              </div>
            </div>
          </div>
          <!-- End Navbar -->
        </div>

        <div class="col-lg-9">
          <!-- Title and Sort -->
          <div class="row align-items-sm-center">
            <div class="col-sm mb-3 mb-sm-0">
              <h3 class="mb-0">90 jobs for <span class="font-weight-normal">UK</span></h3>
            </div>

            <div class="col-sm-auto">
              <div class="d-flex align-items-center">
                <span class="font-size-1 mr-2">Sort by:</span>

                <!-- Select -->
                <div id="sortBySelect" class="select2-custom select2-custom-sm-right mr-3">
                  <select class="js-custom-select custom-select-sm" style="opacity: 0;" 
                          data-hs-select2-options='{
                            "dropdownParent": "#sortBySelect",
                            "minimumResultsForSearch": "Infinity",
                            "customClass": "custom-select custom-select-sm",
                            "dropdownAutoWidth": true,
                            "dropdownWidth": "12rem"
                          }'>
                    <option value="Relevance" selected>Relevance</option>
                    <option value="mostRecent">Most recent</option>
                  </select>
                </div>
                <!-- End Select -->

                <!-- Nav -->
                <ul class="nav nav-segment">
                  <li class="list-inline-item">
                    <a class="nav-link active" href="job-grid.php">
                      <i class="fas fa-th-large"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="nav-link" href="job-list.php">
                      <i class="fas fa-list"></i>
                    </a>
                  </li>
                </ul>
                <!-- End Nav -->
              </div>
            </div>
          </div>
          <!-- End Title and Sort -->

          <hr class="my-4">

          <!-- Listing -->
          <div class="row">
            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/mailchimp.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Mailchimp</a>
                            <img    class=" avatar avatar-xss ml-1" src="../assets/svg/illustrations/top-vendor.svg" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark1" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark1">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Senior B2B sales consultant</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$125k-$135k yearly</span>

                  <span class="badge badge-soft-info mr-2">
                    <span class="legend-indicator bg-info"></span>Remote
                  </span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 7 hours ago</li>
                    <li class="list-inline-item">Oxford</li>
                    <li class="list-inline-item">Full time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/google.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Google</a>
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark2" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark2">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Office assistant/Social media assistant</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$50-$135 hourly</span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 21 hours ago</li>
                    <li class="list-inline-item">Newcastle</li>
                    <li class="list-inline-item">Part time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/spec.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Spec</a>
                            <img    class=" avatar avatar-xss ml-1" src="../assets/svg/illustrations/top-vendor.svg" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark3" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark3">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Marketing and Communications Manager</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$5k monthly</span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 1 day ago</li>
                    <li class="list-inline-item">London</li>
                    <li class="list-inline-item">Full time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/prosperops.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Prosperops</a>
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark4" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark4">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Senior backend developer</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$75k-$85k yearly</span>

                  <span class="badge badge-soft-info mr-2">
                    <span class="legend-indicator bg-info"></span>Remote
                  </span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 1 day ago</li>
                    <li class="list-inline-item">Liverpool</li>
                    <li class="list-inline-item">Full time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/figma.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Figma</a>
                            <img    class=" avatar avatar-xss ml-1" src="../assets/svg/illustrations/top-vendor.svg" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark5" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark5">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Senior product manager</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$76k-$98k yearly</span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 2 days ago</li>
                    <li class="list-inline-item">London</li>
                    <li class="list-inline-item">Full time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/gmail.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Gmail</a>
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark6" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark6">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">iOS Engineer</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$500-$1000 weekly</span>

                  <span class="badge badge-soft-info mr-2">
                    <span class="legend-indicator bg-info"></span>Remote
                  </span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 3 days ago</li>
                    <li class="list-inline-item">Manchester</li>
                    <li class="list-inline-item">Part time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/mastercard.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">MasterCard</a>
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark7" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark7">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Administrative Business Partner</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$50k-$10k monthly</span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 2 days ago</li>
                    <li class="list-inline-item">Liverpool</li>
                    <li class="list-inline-item">Full time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/capsule.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Capsule</a>
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark8" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark8">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Junior Account Manager</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$1k-$1.5k weekly</span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 3 days ago</li>
                    <li class="list-inline-item">Oxford</li>
                    <li class="list-inline-item">Part time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/guideline.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Guideline</a>
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark9" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark9">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Full stack developer</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$50-$100 hourly</span>

                  <span class="badge badge-soft-info mr-2">
                    <span class="legend-indicator bg-info"></span>Remote
                  </span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 6 days ago</li>
                    <li class="list-inline-item">Manchester</li>
                    <li class="list-inline-item">Part time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-5">
              <!-- Card -->
              <div class="card card-bordered card-hover-shadow h-100">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col">
                      <div class="media align-items-center">
                        <img    class=" avatar avatar-sm mr-3" src="../assets/svg/brands/slack.svg" alt="Image Description">
                        <div class="media-body">
                          <h6 class="mb-0">
                            <a class="text-dark" href="employer.php">Slack</a>
                            <img    class=" avatar avatar-xss ml-1" src="../assets/svg/illustrations/top-vendor.svg" alt="Review rating" data-toggle="tooltip" data-placement="top" title="Claimed profile">
                          </h6>
                        </div>
                      </div>
                    </div>

                    <div class="col-auto">
                      <!-- Checkbbox Bookmark -->
                      <div class="custom-control custom-checkbox-bookmark">
                        <input type="checkbox" id="checkboxBookmark10" class="custom-control-input custom-checkbox-bookmark-input">
                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmark10">
                          <span class="custom-checkbox-bookmark-default" data-toggle="tooltip" data-placement="top" title="Save this job">
                            <i class="far fa-star"></i>
                          </span>
                          <span class="custom-checkbox-bookmark-active" data-toggle="tooltip" data-placement="top" title="Saved">
                            <i class="fas fa-star"></i>
                          </span>
                        </label>
                      </div>
                      <!-- End Checkbbox Bookmark -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <h3 class="mb-3">
                    <a class="text-dark" href="job-overview.php">Senior product manager</a>
                  </h3>

                  <span class="d-block font-size-1 text-body mb-1">$80k-$100k yearly</span>
                </div>

                <div class="card-footer">
                  <ul class="list-inline list-separator small text-body">
                    <li class="list-inline-item">Posted 7 days ago</li>
                    <li class="list-inline-item">London</li>
                    <li class="list-inline-item">Full time</li>
                  </ul>
                </div>
              </div>
              <!-- End Card -->
            </div>
          </div>
          <!-- End Listing -->

          <!-- Pagination -->
          <div class="d-flex justify-content-between align-items-center mt-7">
            <nav aria-label="Page navigation">
              <ul class="pagination mb-0">
                <li class="page-item ml-0">
                  <a class="page-link"   aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link"  >1</a></li>
                <li class="page-item"><a class="page-link"  >2</a></li>
                <li class="page-item disabled"><a class="page-link"  >...</a></li>
                <li class="page-item"><a class="page-link"  >9</a></li>
                <li class="page-item">
                  <a class="page-link"   aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>

            <small class="d-none d-sm-inline-block text-body">Page 1 out of 9</small>
          </div>
          <!-- End Pagination -->
        </div>
      </div>
      <!-- End Row -->
    </div>
    <!-- End Listing Section -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <?php include('footer.php'); ?>
  <!-- ========== END FOOTER ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
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
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../assets/vendor/hs-header/dist/hs-header.min.js"></script>
  <script src="../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
  <script src="../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
  <script src="../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
  <script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
  <script src="../assets/vendor/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

  <!-- JS Front -->
  <script src="../assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();

      
      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();

      
      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF SELECT2
      // =======================================================
      $('.js-custom-select').each(function () {
        var select2 = $.HSCore.components.HSSelect2.init($(this));
      });


      // INITIALIZATION OF ION RANGE SLIDER
      // =======================================================
      $('.js-ion-range-slider').each(function () {
        var ionRangeSlider = $.HSCore.components.HSIonRangeSlider.init($(this));
      });
      
      
      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="../../assets/vendor/babel-polyfill/dist/polyfill.min.js"><\/script>');
  </script>
</body>
</html>

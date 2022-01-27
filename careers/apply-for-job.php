<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Job Overview - Jobs | Front - Responsive Website Template</title>

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
    <link rel="stylesheet" href="../assets/vendor/quill/dist/quill.snow.css">

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
        <!-- Page Header -->
        <div class="container space-top-1 space-top-lg-4">
            <div class="w-lg-75 mx-lg-auto">
                <div class="page-header">
                    <!-- Media -->
                    <div class="d-sm-flex mb-3">
                        <a class="mr-4" href="employer.php">
                            <img    class=" avatar avatar-lg mb-3" src="../assets/svg/brands/capsule.svg" alt="Image Description">
                        </a>

                        <div class="media-body">
                            <div class="row mb-2">
                                <div class="col">
                                    <h1 class="h2 mb-1">UX/UI Designer</h1>

                                    <ul class="list-inline list-separator">
                                        <li class="list-inline-item">
                                            <a href="employer.php">Capsule</a>
                                        </li>

                                        <li class="list-inline-item">
                                            <!-- Rating List -->
                                            <a class="d-flex align-items-center font-size-1" href="employer.php">
                                                <img    class=" mr-1" src="../assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                                <img    class=" mr-1" src="../assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                                <img    class=" mr-1" src="../assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                                <img    class=" mr-1" src="../assets/svg/illustrations/star.svg" alt="Review rating" width="12">
                                                <img    class=" mr-1" src="../assets/svg/illustrations/star-half.svg" alt="Review rating" width="12">
                                                <span class="ml-1">2,391 reviews</span>
                                            </a>
                                            <!-- End Rating List -->
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-auto">
                                    <!-- Checkbbox Bookmark -->
                                    <div class="custom-control custom-checkbox-bookmark">
                                        <input type="checkbox" id="checkboxBookmarkSaveJob" class="custom-control-input custom-checkbox-bookmark-input">
                                        <label class="custom-checkbox-bookmark-label" for="checkboxBookmarkSaveJob">
                      <span class="custom-checkbox-bookmark-default">
                        <i class="far fa-star mr-1"></i> <small class="text-body">Save this job</small>
                      </span>
                      <span class="custom-checkbox-bookmark-active">
                        <i class="fas fa-star mr-1"></i> <small class="text-body">Saved</small>
                      </span>
                    </label>
                                    </div>
                                    <!-- End Checkbbox Bookmark -->
                                </div>
                            </div>
                            <!-- End Row -->

                            <ul class="list-inline list-separator small text-body mb-2">
                                <li class="list-inline-item">Posted 7 hours ago</li>
                                <li class="list-inline-item">Oxford, England, United Kingdom</li>
                                <li class="list-inline-item">Full time</li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Media -->
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- Description Section -->
        <div class="container space-2 space-bottom-lg-3">
            <div class="w-lg-75 mx-lg-auto">
                <!-- Card -->
                <div class="card card-bordered mb-10">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm mb-2 mb-sm-0">
                                <h5 class="text-cap mb-1">
                                    <i class="fas fa-bolt mr-1"></i> Autofill application
                                </h5>
                                <small>Save time by importing your resume.</small>
                            </div>

                            <div class="col-sm-auto">
                                <!-- Unfold -->
                                <div class="hs-unfold">
                                    <a class="js-hs-unfold-invoker btn btn-sm btn-primary" href="javascript:;" data-hs-unfold-options='{
                       "target": "#importResumeFromDropdown",
                       "type": "css-animation"
                     }'>
                    Import resume from <i class="fas fa-angle-down ml-1"></i>
                  </a>

                                    <div id="importResumeFromDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu mt-1">
                                        <a class="dropdown-item"  >
                                            <i class="fas fa-laptop dropdown-item-icon"></i> My Computer
                                        </a>
                                        <a class="dropdown-item"  >
                                            <i class="fab fa-dropbox dropdown-item-icon"></i> Dropbox
                                        </a>
                                        <a class="dropdown-item"  >
                                            <i class="fab fa-google-drive dropdown-item-icon"></i> Google Drive
                                        </a>
                                    </div>
                                </div>
                                <!-- End Unfold -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->

                <form class="js-validate">
                    <div class="border-bottom mb-4">
                        <h3>Personal information</h3>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="firstName" class="input-label">First name</label>
                                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Nataly" aria-label="Nataly">
                            </div>
                            <!-- End Form Group -->
                        </div>

                        <div class="col-sm-6">
                            <!-- Form Group -->
                            <div class="form-group">
                                <label for="lastName" class="input-label">Last name</label>
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Gaga" aria-label="Gaga">
                            </div>
                            <!-- End Form Group -->
                        </div>
                    </div>
                    <!-- End Row -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="email" class="input-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="nayagaga@pixeel.com" aria-label="alex@pixeel.com">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="js-add-field form-group" data-hs-add-field-options='{
                  "template": "#addPhoneFieldTemplate",
                  "container": "#addPhoneFieldContainer",
                  "defaultCreated": 0
                }'>
                        <label for="phoneLabel" class="input-label">Phone <span class="input-label-secondary">(Optional)</span></label>

                        <div class="input-group align-items-center">
                            <input type="text" class="js-masked-input form-control" name="phone" id="phoneLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                       "template": "+0(000)000-00-00"
                     }'>

                            <div class="input-group-append">
                                <!-- Select -->
                                <select class="js-custom-select custom-select dropdown-toggle" name="phoneSelect" data-hs-select2-options='{
                        "minimumResultsForSearch": "Infinity",
                        "customClass": "custom-select",
                        "dropdownAutoWidth": true,
                        "width": true
                      }'>
                  <option value="Mobile" selected>Mobile</option>
                  <option value="Home">Home</option>
                  <option value="Work">Work</option>
                  <option value="Fax">Fax</option>
                  <option value="Direct">Direct</option>
                </select>
                                <!-- End Select -->
                            </div>
                        </div>

                        <!-- Container For Input Field -->
                        <div id="addPhoneFieldContainer"></div>

                        <a href="javascript:;" class="js-create-field form-link btn btn-xs btn-no-focus btn-ghost-primary">
                            <i class="fas fa-plus mr-1"></i> Add phone
                        </a>
                    </div>
                    <!-- End Form Group -->

                    <!-- Add Phone Input Field -->
                    <div id="addPhoneFieldTemplate" style="display: none;">
                        <div class="input-group input-group-add-field">
                            <input type="text" class="js-masked-input form-control" data-name="additionlPhone" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                       "template": "+0(000)000-00-00"
                     }'>

                            <div class="input-group-append">
                                <!-- Select -->
                                <select class="js-custom-select-dynamic btn btn-white dropdown-toggle" data-name="additionlPhoneSelect" data-hs-select2-options='{
                        "minimumResultsForSearch": "Infinity",
                        "customClass": "custom-select",
                        "dropdownAutoWidth": true,
                        "width": true
                      }'>
                  <option value="Mobile" selected>Mobile</option>
                  <option value="Home">Home</option>
                  <option value="Work">Work</option>
                  <option value="Fax">Fax</option>
                  <option value="Direct">Direct</option>
                </select>
                                <!-- End Select -->
                            </div>

                            <a class="js-delete-field input-group-add-field-delete" href="javascript:;">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <!-- End Add Phone Input Field -->

                    <div class="border-bottom mt-10 mb-4">
                        <h3>Profile</h3>
                    </div>

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="summary" class="input-label">Summary</label>

                        <textarea class="form-control" rows="6" name="summary" id="summary" placeholder="In a few words, tell us about yourself..." aria-label="In a few words, tell us about yourself..." required></textarea>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="input-label">Resume/CV and Cover Letter <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Maximum file size 10 MB."></i></label>

                        <div id="resumeAttach" class="js-dropzone dz-dropzone dz-dropzone-boxed">
                            <div class="dz-message p-2">
                                <span class="d-block mb-1">Browse your files</span>
                                <small class="d-block text-muted">or drag' n' drop here</small>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <div class="border-bottom mt-10 mb-4">
                        <h3>Details</h3>
                    </div>

                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="input-label">Do you have the right to work in the UK?</label>

                        <!-- Button Group -->
                        <div class="btn-group btn-group-toggle btn-group-segment" data-toggle="buttons">
                            <label class="btn">
                <input type="radio" name="rightToWorkInUkLabelOptions" id="rightToWorkInUkLabelOption1">
                  <i class="fas fa-check mr-1"></i> Yes
              </label>
                            <label class="btn">
                <input type="radio" name="rightToWorkInUkLabelOptions" id="rightToWorkInUkLabelOption2">
                  <i class="fas fa-times mr-1"></i> No
              </label>
                        </div>
                        <!-- End Button Group -->
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="noticePeriod" class="input-label">Notice Period</label>
                        <input type="text" class="form-control" name="noticePeriod" id="noticePeriod" placeholder="2 months" aria-label="2 months">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="input-label">Upload your portfolio <i class="far fa-question-circle text-body ml-1" data-toggle="tooltip" data-placement="top" title="Maximum file size 10 MB."></i></label>

                        <div id="portfolioAttach" class="js-dropzone dz-dropzone dz-dropzone-boxed">
                            <div class="dz-message p-2">
                                <span class="d-block mb-1">Browse your files</span>
                                <small class="d-block text-muted">or drag' n' drop here</small>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label for="expectedSalary" class="input-label">Expected salary</label>
                        <input type="text" class="form-control" name="expectedSalary" id="expectedSalary" placeholder="2 months" aria-label="2 months">
                    </div>
                    <!-- End Form Group -->

                    <!-- Form Group -->
                    <div class="form-group">
                        <label class="input-label">Do you have experience designing for mobile?</label>

                        <!-- Button Group -->
                        <div class="btn-group btn-group-toggle btn-group-segment" data-toggle="buttons">
                            <label class="btn">
                <input type="radio" name="experienceInSimilaryAreaOptions" id="experienceInSimilaryAreaOption1"> <i class="fas fa-check mr-1"></i> Yes
              </label>
                            <label class="btn">
                <input type="radio" name="experienceInSimilaryAreaOptions" id="experienceInSimilaryAreaOption2"> <i class="fas fa-times mr-1"></i> No
              </label>
                        </div>
                        <!-- End Button Group -->
                    </div>
                    <!-- End Form Group -->

                    <div class="mt-7">
                        <button type="submit" class="btn btn-block btn-primary">Submit application</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Description Section -->
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
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Implementing Plugins -->
    <script src="../assets/vendor/hs-header/dist/hs-header.min.js"></script>
    <script src="../assets/vendor/hs-go-to/dist/hs-go-to.min.js"></script>
    <script src="../assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js"></script>
    <script src="../assets/vendor/hs-unfold/dist/hs-unfold.min.js"></script>
    <script src="../assets/vendor/hs-add-field/dist/hs-add-field.min.js"></script>
    <script src="../assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/vendor/quill/dist/quill.min.js"></script>
    <script src="../assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

    <!-- JS Front -->
    <script src="../assets/js/theme.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            var header = new HSHeader($('#header')).init();


            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu')).init();


            // INITIALIZATION OF UNFOLD
            // =======================================================
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


            // INITIALIZATION OF MASKED INPUT
            // =======================================================
            $('.js-masked-input').each(function() {
                var mask = $.HSCore.components.HSMask.init($(this));
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


            // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
            // =======================================================
            $('.js-dropzone').each(function() {
                var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
            });


            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
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
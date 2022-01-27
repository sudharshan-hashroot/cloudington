<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Post a Job - Jobs | Front - Responsive Website Template</title>

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
    <!-- Step Section -->
    <div class="container space-top-1 space-top-lg-4 space-bottom-2 space-bottom-lg-3">
      <!-- Step Form -->
      <form class="js-step-form"
            data-hs-step-form-options='{
              "progressSelector": "#postJobStepFormProgress",
              "stepsSelector": "#postJobStepFormContent",
              "endSelector": "#postJobFinishBtn",
              "isValidate": false
            }'>
        <div class="row">
          <div id="stickyBlockStartPoint" class="col-lg-4">
            <!-- Sticky Block -->
            <div class="js-sticky-block"
                 data-hs-sticky-block-options='{
                   "parentSelector": "#stickyBlockStartPoint",
                   "breakpoint": "lg",
                   "startPoint": "#stickyBlockStartPoint",
                   "endPoint": "#stickyBlockEndPoint",
                   "stickyOffsetTop": 20,
                   "stickyOffsetBottom": 0
                 }'>
              <!-- Step -->
              <ul id="postJobStepFormProgress" class="js-step-progress step step-icon-xs step-border-last-0 mt-5">
                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepBasic"
                    }'>
                    <span class="step-icon step-icon-soft-dark">1</span>
                    <div class="step-content">
                      <span class="step-title">Getting started</span>
                      <span class="step-title-description step-text font-size-1">General info about company</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepAddress"
                    }'>
                    <span class="step-icon step-icon-soft-dark">2</span>
                    <div class="step-content">
                      <span class="step-title">Address</span>
                      <span class="step-title-description step-text font-size-1">Company location address</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepJobDetails"
                    }'>
                    <span class="step-icon step-icon-soft-dark">3</span>
                    <div class="step-content">
                      <span class="step-title">Job details</span>
                      <span class="step-title-description step-text font-size-1">Job type details and more</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepPayment"
                    }'>
                    <span class="step-icon step-icon-soft-dark">4</span>
                    <div class="step-content">
                      <span class="step-title">Payment</span>
                      <span class="step-title-description step-text font-size-1">Pay and receive options</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepAdditionalJobDetails"
                    }'>
                    <span class="step-icon step-icon-soft-dark">5</span>
                    <div class="step-content">
                      <span class="step-title">Additional job details</span>
                      <span class="step-title-description step-text font-size-1">Job schedule</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepJobDescription"
                    }'>
                    <span class="step-icon step-icon-soft-dark">6</span>
                    <div class="step-content">
                      <span class="step-title">Job description</span>
                      <span class="step-title-description step-text font-size-1">Describe the responsibilities of this job</span>
                    </div>
                  </a>
                </li>

                <li class="step-item">
                  <a class="step-content-wrapper" href="javascript:;"
                     data-hs-step-form-next-options='{
                      "targetSelector": "#postJobStepJobApplicationSettings"
                    }'>
                    <span class="step-icon step-icon-soft-dark">7</span>
                    <div class="step-content">
                      <span class="step-title">Application settings</span>
                      <span class="step-title-description step-text font-size-1">Control job notifications</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End Step -->
            </div>
            <!-- End Sticky Block -->
          </div>

          <div id="formContainer" class="col-lg-8">
            <!-- Content Step Form -->
            <div id="postJobStepFormContent">
              <!-- Card -->
              <div id="postJobStepBasic" class="card active">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 1 of 7</span>
                    <h3 class="card-header-title">Getting started</h3>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="countryLabel" class="input-label">Country</label>

                    <!-- Select -->
                    <select id="countryLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="countrySelect"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity"
                          }'>
                      <option label="empty"></option>
                      <option value="AF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>Afghanistan</option>
                      <option value="AX" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>Aland Islands</option>
                      <option value="AL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>Albania</option>
                      <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>Algeria</option>
                      <option value="AS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>American Samoa</option>
                      <option value="AD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>Andorra</option>
                      <option value="AO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>Angola</option>
                      <option value="AI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>Anguilla</option>
                      <option value="AG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>Antigua and Barbuda</option>
                      <option value="AR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>Argentina</option>
                      <option value="AM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>Armenia</option>
                      <option value="AW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>Aruba</option>
                      <option value="AU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>Australia</option>
                      <option value="AT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>Austria</option>
                      <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>Azerbaijan</option>
                      <option value="BS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>Bahamas</option>
                      <option value="BH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>Bahrain</option>
                      <option value="BD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>Bangladesh</option>
                      <option value="BB" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>Barbados</option>
                      <option value="BY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>Belarus</option>
                      <option value="BE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>Belgium</option>
                      <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>Belize</option>
                      <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>Benin</option>
                      <option value="BM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>Bermuda</option>
                      <option value="BT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>Bhutan</option>
                      <option value="BO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>Bolivia (Plurinational State of)</option>
                      <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>Bonaire, Sint Eustatius and Saba</option>
                      <option value="BA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>Bosnia and Herzegovina</option>
                      <option value="BW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>Botswana</option>
                      <option value="BR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>Brazil</option>
                      <option value="IO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>British Indian Ocean Territory</option>
                      <option value="BN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>Brunei Darussalam</option>
                      <option value="BG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>Bulgaria</option>
                      <option value="BF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>Burkina Faso</option>
                      <option value="BI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>Burundi</option>
                      <option value="CV" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>Cabo Verde</option>
                      <option value="KH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>Cambodia</option>
                      <option value="CM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>Cameroon</option>
                      <option value="CA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>Canada</option>
                      <option value="KY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>Cayman Islands</option>
                      <option value="CF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>Central African Republic</option>
                      <option value="TD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>Chad</option>
                      <option value="CL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>Chile</option>
                      <option value="CN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>China</option>
                      <option value="CX" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>Christmas Island</option>
                      <option value="CC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>Cocos (Keeling) Islands</option>
                      <option value="CO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>Colombia</option>
                      <option value="KM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>Comoros</option>
                      <option value="CK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>Cook Islands</option>
                      <option value="CR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>Costa Rica</option>
                      <option value="HR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>Croatia</option>
                      <option value="CU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>Cuba</option>
                      <option value="CW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>Curaçao</option>
                      <option value="CY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>Cyprus</option>
                      <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>Czech Republic</option>
                      <option value="CI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>Côte d'Ivoire</option>
                      <option value="CD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>Democratic Republic of the Congo</option>
                      <option value="DK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>Denmark</option>
                      <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>Djibouti</option>
                      <option value="DM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>Dominica</option>
                      <option value="DO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>Dominican Republic</option>
                      <option value="EC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>Ecuador</option>
                      <option value="EG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>Egypt</option>
                      <option value="SV" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>El Salvador</option>
                      <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>England</option>
                      <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>Equatorial Guinea</option>
                      <option value="ER" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>Eritrea</option>
                      <option value="EE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>Estonia</option>
                      <option value="ET" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>Ethiopia</option>
                      <option value="FK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>Falkland Islands</option>
                      <option value="FO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>Faroe Islands</option>
                      <option value="FM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>Federated States of Micronesia</option>
                      <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>Fiji</option>
                      <option value="FI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>Finland</option>
                      <option value="FR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>France</option>
                      <option value="GF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>French Guiana</option>
                      <option value="PF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>French Polynesia</option>
                      <option value="TF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>French Southern Territories</option>
                      <option value="GA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>Gabon</option>
                      <option value="GM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>Gambia</option>
                      <option value="GE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>Georgia</option>
                      <option value="DE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>Germany</option>
                      <option value="GH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>Ghana</option>
                      <option value="GI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>Gibraltar</option>
                      <option value="GR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>Greece</option>
                      <option value="GL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>Greenland</option>
                      <option value="GD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>Grenada</option>
                      <option value="GP" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>Guadeloupe</option>
                      <option value="GU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>Guam</option>
                      <option value="GT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>Guatemala</option>
                      <option value="GG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>Guernsey</option>
                      <option value="GN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>Guinea</option>
                      <option value="GW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>Guinea-Bissau</option>
                      <option value="GY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>Guyana</option>
                      <option value="HT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>Haiti</option>
                      <option value="VA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>Holy See</option>
                      <option value="HN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>Honduras</option>
                      <option value="HK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>Hong Kong</option>
                      <option value="HU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>Hungary</option>
                      <option value="IS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>Iceland</option>
                      <option value="IN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>India</option>
                      <option value="ID" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>Indonesia</option>
                      <option value="IR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>Iran (Islamic Republic of)</option>
                      <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>Iraq</option>
                      <option value="IE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>Ireland</option>
                      <option value="IM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>Isle of Man</option>
                      <option value="IL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>Israel</option>
                      <option value="IT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>Italy</option>
                      <option value="JM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>Jamaica</option>
                      <option value="JP" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>Japan</option>
                      <option value="JE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>Jersey</option>
                      <option value="JO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>Jordan</option>
                      <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>Kazakhstan</option>
                      <option value="KE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>Kenya</option>
                      <option value="KI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>Kiribati</option>
                      <option value="KW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>Kuwait</option>
                      <option value="KG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>Kyrgyzstan</option>
                      <option value="LA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>Laos</option>
                      <option value="LV" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>Latvia</option>
                      <option value="LB" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>Lebanon</option>
                      <option value="LS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>Lesotho</option>
                      <option value="LR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>Liberia</option>
                      <option value="LY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>Libya</option>
                      <option value="LI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>Liechtenstein</option>
                      <option value="LT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>Lithuania</option>
                      <option value="LU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>Luxembourg</option>
                      <option value="MO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>Macau</option>
                      <option value="MG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>Madagascar</option>
                      <option value="MW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>Malawi</option>
                      <option value="MY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>Malaysia</option>
                      <option value="MV" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>Maldives</option>
                      <option value="ML" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>Mali</option>
                      <option value="MT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>Malta</option>
                      <option value="MH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>Marshall Islands</option>
                      <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>Martinique</option>
                      <option value="MR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>Mauritania</option>
                      <option value="MU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>Mauritius</option>
                      <option value="YT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>Mayotte</option>
                      <option value="MX" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>Mexico</option>
                      <option value="MD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>Moldova</option>
                      <option value="MC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>Monaco</option>
                      <option value="MN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>Mongolia</option>
                      <option value="ME" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>Montenegro</option>
                      <option value="MS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>Montserrat</option>
                      <option value="MA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>Morocco</option>
                      <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>Mozambique</option>
                      <option value="MM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>Myanmar</option>
                      <option value="NA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>Namibia</option>
                      <option value="NR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>Nauru</option>
                      <option value="NP" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>Nepal</option>
                      <option value="NL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>Netherlands</option>
                      <option value="NC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>New Caledonia</option>
                      <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>New Zealand</option>
                      <option value="NI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>Nicaragua</option>
                      <option value="NE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>Niger</option>
                      <option value="NG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>Nigeria</option>
                      <option value="NU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>Niue</option>
                      <option value="NF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>Norfolk Island</option>
                      <option value="KP" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>North Korea</option>
                      <option value="MK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>North Macedonia</option>
                      <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>Northern Ireland</option>
                      <option value="MP" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Markna Islands Flag" /><span class="text-truncate">Northern Markna Islands</span></span>'>Northern Markna Islands</option>
                      <option value="NO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>Norway</option>
                      <option value="OM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>Oman</option>
                      <option value="PK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>Pakistan</option>
                      <option value="PW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>Palau</option>
                      <option value="PA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>Panama</option>
                      <option value="PG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>Papua New Guinea</option>
                      <option value="PY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>Paraguay</option>
                      <option value="PE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>Peru</option>
                      <option value="PH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>Philippines</option>
                      <option value="PN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>Pitcairn</option>
                      <option value="PL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>Poland</option>
                      <option value="PT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>Portugal</option>
                      <option value="PR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>Puerto Rico</option>
                      <option value="QA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>Qatar</option>
                      <option value="CG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>Republic of the Congo</option>
                      <option value="RO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>Romania</option>
                      <option value="RU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>Russia</option>
                      <option value="RW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>Rwanda</option>
                      <option value="RE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>Réunion</option>
                      <option value="BL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>Saint Barthélemy</option>
                      <option value="SH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>Saint Helena, Ascension and Tristan da Cunha</option>
                      <option value="KN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>Saint Kitts and Nevis</option>
                      <option value="LC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>Saint Lucia</option>
                      <option value="MF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>Saint Martin</option>
                      <option value="PM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>Saint Pierre and Miquelon</option>
                      <option value="VC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>Saint Vincent and the Grenadines</option>
                      <option value="WS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>Samoa</option>
                      <option value="SM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>San Marino</option>
                      <option value="ST" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>Sao Tome and Principe</option>
                      <option value="SA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>Saudi Arabia</option>
                      <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>Scotland</option>
                      <option value="SN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>Senegal</option>
                      <option value="RS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>Serbia</option>
                      <option value="SC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>Seychelles</option>
                      <option value="SL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>Sierra Leone</option>
                      <option value="SG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>Singapore</option>
                      <option value="SX" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>Sint Maarten</option>
                      <option value="SK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>Slovakia</option>
                      <option value="SI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>Slovenia</option>
                      <option value="SB" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>Solomon Islands</option>
                      <option value="SO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>Somalia</option>
                      <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>South Africa</option>
                      <option value="GS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>South Georgia and the South Sandwich Islands</option>
                      <option value="KR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>South Korea</option>
                      <option value="SS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>South Sudan</option>
                      <option value="ES" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>Spain</option>
                      <option value="LK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>Sri Lanka</option>
                      <option value="PS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>State of Palestine</option>
                      <option value="SD" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>Sudan</option>
                      <option value="SR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>Suriname</option>
                      <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>Svalbard and Jan Mayen</option>
                      <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>Swaziland</option>
                      <option value="SE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>Sweden</option>
                      <option value="CH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>Switzerland</option>
                      <option value="SY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>Syrian Arab Republic</option>
                      <option value="TW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>Taiwan</option>
                      <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>Tajikistan</option>
                      <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>Tanzania</option>
                      <option value="TH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>Thailand</option>
                      <option value="TL" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>Timor-Leste</option>
                      <option value="TG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>Togo</option>
                      <option value="TK" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>Tokelau</option>
                      <option value="TO" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>Tonga</option>
                      <option value="TT" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>Trinidad and Tobago</option>
                      <option value="TN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>Tunisia</option>
                      <option value="TR" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>Turkey</option>
                      <option value="TM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>Turkmenistan</option>
                      <option value="TC" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>Turks and Caicos Islands</option>
                      <option value="TV" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>Tuvalu</option>
                      <option value="UG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>Uganda</option>
                      <option value="UA" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>Ukraine</option>
                      <option value="AE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>United Arab Emirates</option>
                      <option value="GB" selected data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>United Kingdom</option>
                      <option value="UM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>United States Minor Outlying Islands</option>
                      <option value="US" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>United States of America</option>
                      <option value="UY" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>Uruguay</option>
                      <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>Uzbekistan</option>
                      <option value="VU" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>Vanuatu</option>
                      <option value="VE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>Venezuela (Bolivarian Republic of)</option>
                      <option value="VN" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>Vietnam</option>
                      <option value="VG" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>Virgin Islands (British)</option>
                      <option value="VI" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>Virgin Islands (U.S.)</option>
                      <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>Wales</option>
                      <option value="WF" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>Wallis and Futuna</option>
                      <option value="EH" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>Western Sahara</option>
                      <option value="YE" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>Yemen</option>
                      <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>Zambia</option>
                      <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>Zimbabwe</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="languageLabel" class="input-label">What language will your job posting be displayed in?</label>

                    <!-- Select -->
                    <select id="languageLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="languageSelect"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity"
                          }'>
                      <option label="empty"></option>
                      <option value="language1" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>English (US)</span></span>'>English (US)</option>
                      <option value="language2" selected data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>English (UK)</span></span>'>English (UK)</option>
                      <option value="language3" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" width="16"/><span>Deutsch</span></span>'>Deutsch</option>
                      <option value="language4" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Image description" width="16"/><span>Dansk</span></span>'>Dansk</option>
                      <option value="language5" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Image description" width="16"/><span>Español</span></span>'>Español</option>
                      <option value="language6" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Image description" width="16"/><span>Nederlands</span></span>'>Nederlands</option>
                      <option value="language7" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Image description" width="16"/><span>Italiano</span></span>'>Italiano</option>
                      <option value="language8" data-option-template='<span class="d-flex align-items-center"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Image description" width="16"/><span>中文 (繁體)</span></span>'>中文 (繁體)</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="companyNameLabel" class="input-label">Company name</label>

                    <input type="text" class="form-control" name="companyName" id="companyNameLabel" placeholder="Htmlstream" aria-label="Htmlstream">
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="jobTitleLabel" class="input-label">Job title</label>

                    <input type="text" class="form-control" name="jobTitleName" id="jobTitleLabel" placeholder="UI/UX Designer" aria-label="UI/UX Designer">
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex justify-content-end align-items-center">
                    <button type="button" class="btn btn-primary"
                            data-hs-step-form-next-options='{
                              "targetSelector": "#postJobStepAddress"
                            }'>
                      Save and continue <i class="fas fa-angle-right ml-1"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepAddress" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 2 of 7</span>
                    <h3 class="card-header-title">Commute is the #2 reason candidates withdraw</h3>
                    <p class="card-text">Save time in the interview stage by providing location information.</p>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="streetAddressLabel" class="input-label">Enter a street address</label>
                    <p class="small mt-n2">We won't share your street address. We use your location to find candidates in your area.</p>

                    <input type="text" class="form-control" name="streetAddress" id="streetAddressLabel" placeholder="Arch 294 Jewell Street" aria-label="Arch 294 Jewell Street">
                  </div>
                  <!-- End Form Group -->

                  <div class="row mx-n2">
                    <div class="col-sm-6 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="cityLabel" class="input-label">City</label>
                        <input type="text" class="form-control" name="cityName" id="cityLabel" placeholder="London" aria-label="London">
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-6 col-sm-3 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="stateLabel" class="input-label">State</label>
                        <input type="text" class="form-control" name="stateName" id="stateLabel" placeholder="Camberwell" aria-label="Camberwell">
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-6 col-sm-3 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="zipCodeLabel" class="input-label">ZIP code</label>
                        <input type="text" class="js-masked-input form-control" name="zipCodeName" id="zipCodeLabel" placeholder="xxx xxx" aria-label="xxx xxx"
                               data-hs-mask-options='{
                                 "template": "AA0 0AA"
                               }'>
                      </div>
                      <!-- End Form Group -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Can this job be performed remotely, meaning primarily from home? If so, we’ll add a "Remote" tag to your post</label>
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="remoteOccasionRadioName" id="remoteOccasionRadio1" checked>
                        <label class="custom-control-label" for="remoteOccasionRadio1">No</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="remoteOccasionRadioName" id="remoteOccasionRadio2">
                        <label class="custom-control-label" for="remoteOccasionRadio2">Yes, always</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="remoteOccasionRadioName" id="remoteOccasionRadio3">
                        <label class="custom-control-label" for="remoteOccasionRadio3">Yes, occasionally</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="remoteOccasionRadioName" id="remoteOccasionRadio4">
                        <label class="custom-control-label" for="remoteOccasionRadio4">Yes, temporarily due to COVID-19</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepBasic"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#postJobStepJobDetails"
                              }'>
                        Save and continue <i class="fas fa-angle-right ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepJobDetails" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 3 of 7</span>
                    <h3 class="card-header-title">Job details</h3>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">What type of job is it?</label>
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jobTypeRadioName" id="jobTypeRadio1" checked>
                        <label class="custom-control-label" for="jobTypeRadio1">Full time</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jobTypeRadioName" id="jobTypeRadio2">
                        <label class="custom-control-label" for="jobTypeRadio2">Part time</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jobTypeRadioName" id="jobTypeRadio3">
                        <label class="custom-control-label" for="jobTypeRadio3">Temporary</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jobTypeRadioName" id="jobTypeRadio4">
                        <label class="custom-control-label" for="jobTypeRadio4">Contract</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jobTypeRadioName" id="jobTypeRadio5">
                        <label class="custom-control-label" for="jobTypeRadio5">Internship</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="jobTypeRadioName" id="jobTypeRadio6">
                        <label class="custom-control-label" for="jobTypeRadio6">Commission only</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="numberOfHiresLabel" class="input-label">How many hires do you want to make for this position?</label>
                    <p class="small mt-n2">More hires will require more candidates.</p>

                    <!-- Select -->
                    <select id="numberOfHiresLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="numberOfHiresSelect"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity"
                          }'>
                      <option label="empty"></option>
                      <option value="numberOfHires1" selected>1</option>
                      <option value="numberOfHires2">2</option>
                      <option value="numberOfHires3">3</option>
                      <option value="numberOfHires4">4</option>
                      <option value="numberOfHires5">5</option>
                      <option value="numberOfHires6">6</option>
                      <option value="numberOfHires7">7</option>
                      <option value="numberOfHires8">8</option>
                      <option value="numberOfHires9">9</option>
                      <option value="numberOfHires10">10</option>
                      <option value="numberOfHires10+">10+ hires</option>
                      <option value="numberOfHiresOngoingNeed">I have an ongoing need to fill this role</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="deadlineLabel" class="input-label">How urgently do you need to make a hire?</label>
                    <p class="small mt-n2">Help us help you hit your deadline.</p>

                    <!-- Select -->
                    <select id="deadlineLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="deadlineSelect"
                          data-hs-select2-options='{
                            "minimumResultsForSearch": "Infinity"
                          }'>
                      <option label="empty"></option>
                      <option value="deadline1">1 to 3 days</option>
                      <option value="deadline2">3 to 7 days</option>
                      <option value="deadline3">1 to 2 weeks</option>
                      <option value="deadline4">2 to 4 weeks</option>
                      <option value="deadline5" selected>More than 4 weeks</option>
                    </select>
                    <!-- End Select -->
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepAddress"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#postJobStepPayment"
                              }'>
                        Save and continue <i class="fas fa-angle-right ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepPayment" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 4 of 7</span>
                    <h3 class="card-header-title">What's the pay?</h3>
                    <p class="card-text">Tell job seekers the pay and receive up to two times more applications</p>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <div class="row mx-n2">
                    <div class="col-sm-6 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="jobSalaryTypeLabel" class="input-label">What is the pay for this job?</label>

                        <!-- Select -->
                        <select id="jobSalaryTypeLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="jobSalaryTypeSelect"
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity"
                              }'>
                          <option value="jobSalaryType1" selected>Range</option>
                          <option value="jobSalaryType2">Starting at</option>
                          <option value="jobSalaryType3">Up to</option>
                          <option value="jobSalaryType4">Exact rate</option>
                          <option value="jobSalaryType5">Salary based on experience</option>
                        </select>
                        <!-- End Select -->
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-sm-6 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="jobSalaryCurrencyLabel" class="input-label">Currency</label>
                        
                        <!-- Select -->
                        <select id="jobSalaryCurrencyLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="jobSalaryCurrencySelect"
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity"
                              }'>
                          <option label="empty"></option>
                          <option value="currency1" selected data-option-template='<span class="d-flex align-items-center text-truncate"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" width="16"/><span>USD (United States Dollar)</span></span>'>USD (United States Dollar)</option>
                          <option value="currency2" data-option-template='<span class="d-flex align-items-center text-truncate"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" width="16"/><span>GBP (United Kingdom Pound)</span></span>'>GBP (United Kingdom Pound)</option>
                          <option value="currency3" data-option-template='<span class="d-flex align-items-center text-truncate"><img    class=" avatar avatar-xss avatar-circle mr-2" src="../assets/vendor/flag-icon-css/flags/1x1/eu.svg" alt="Image description" width="16"/><span>Euro (Euro Member Countries)</span></span>'>Euro (Euro Member Countries)</option>
                        </select>
                        <!-- End Select -->
                      </div>
                      <!-- End Form Group -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <div class="row mx-n2">
                    <div class="col-6 col-sm-4 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="salaryFromLabel" class="input-label">From</label>
                        <input type="text" class="form-control" name="salaryFromName" id="salaryFromLabel" placeholder="0" aria-label="0">
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-6 col-sm-4 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="salaryToLabel" class="input-label">To</label>
                        <input type="text" class="form-control" name="salaryToName" id="salaryToLabel" placeholder="0" aria-label="0">
                      </div>
                      <!-- End Form Group -->
                    </div>

                    <div class="col-12 col-sm-4 px-2">
                      <!-- Form Group -->
                      <div class="form-group">
                        <label for="jobSalaryPeriodLabel" class="input-label">Period</label>
                        
                        <!-- Select -->
                        <select id="jobSalaryPeriodLabel" class="js-custom-select custom-select dropdown-toggle" size="1" style="opacity: 0;" name="jobSalaryPeriodSelect"
                              data-hs-select2-options='{
                                "minimumResultsForSearch": "Infinity"
                              }'>
                          <option label="empty"></option>
                          <option value="jobSalaryPeriod1">per hour</option>
                          <option value="jobSalaryPeriod2">per day</option>
                          <option value="jobSalaryPeriod3">per week</option>
                          <option value="jobSalaryPeriod4">per month</option>
                          <option value="jobSalaryPeriod5" selected>per year</option>
                        </select>
                        <!-- End Select -->
                      </div>
                      <!-- End Form Group -->
                    </div>
                  </div>
                  <!-- End Row -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Are there any forms of supplemental pay offered? <span class="input-label-secondary">(Optional)</span></label>
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="supplementalPayCheckboxName" id="supplementalPayCheckbox1">
                        <label class="custom-control-label" for="supplementalPayCheckbox1">Signing bonus</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="supplementalPayCheckboxName" id="supplementalPayCheckbox2">
                        <label class="custom-control-label" for="supplementalPayCheckbox2">Commission pay</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="supplementalPayCheckboxName" id="supplementalPayCheckbox3">
                        <label class="custom-control-label" for="supplementalPayCheckbox3">Bonus pay</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="supplementalPayCheckboxName" id="supplementalPayCheckbox4">
                        <label class="custom-control-label" for="supplementalPayCheckbox4">Tips</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="supplementalPayCheckboxName" id="supplementalPayCheckbox5">
                        <label class="custom-control-label" for="supplementalPayCheckbox5">Other</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Are any of the following benefits offered?</label>
                    
                    <div class="row mx-n2">
                      <div class="col-md-6 px-2">
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox1">
                            <label class="custom-control-label" for="benefitsCheckbox1">Health insurance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox2">
                            <label class="custom-control-label" for="benefitsCheckbox2">Paid time off</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->

                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox3">
                            <label class="custom-control-label" for="benefitsCheckbox3">Dental insurance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox4">
                            <label class="custom-control-label" for="benefitsCheckbox4">401(k)</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox5">
                            <label class="custom-control-label" for="benefitsCheckbox5">Vision insurance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox6">
                            <label class="custom-control-label" for="benefitsCheckbox6">Flexible schedule</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox7">
                            <label class="custom-control-label" for="benefitsCheckbox7">Tuition reimbursement</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox8">
                            <label class="custom-control-label" for="benefitsCheckbox8">Life insurance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox9">
                            <label class="custom-control-label" for="benefitsCheckbox9">401(k) matching</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox10">
                            <label class="custom-control-label" for="benefitsCheckbox10">Disability insurance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                      
                      <div class="col-md-6 px-2">
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox11">
                            <label class="custom-control-label" for="benefitsCheckbox11">Retirement plan</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox12">
                            <label class="custom-control-label" for="benefitsCheckbox12">Referral program</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox13">
                            <label class="custom-control-label" for="benefitsCheckbox13">Employee discount</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox14">
                            <label class="custom-control-label" for="benefitsCheckbox14">Flexible spending account</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox15">
                            <label class="custom-control-label" for="benefitsCheckbox15">Disability insurance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox16">
                            <label class="custom-control-label" for="benefitsCheckbox16">Relocation assistance</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox17">
                            <label class="custom-control-label" for="benefitsCheckbox17">Parental leave</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox18">
                            <label class="custom-control-label" for="benefitsCheckbox18">Employee assistance program</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox19">
                            <label class="custom-control-label" for="benefitsCheckbox19">Other</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                        
                        <!-- Custom Radio -->
                        <div class="form-control mb-2">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="benefitsCheckboxName" id="benefitsCheckbox20" checked>
                            <label class="custom-control-label" for="benefitsCheckbox20">None</label>
                          </div>
                        </div>
                        <!-- End Custom Radio -->
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepJobDetails"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#postJobStepAdditionalJobDetails"
                              }'>
                        Save and continue <i class="fas fa-angle-right ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepAdditionalJobDetails" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 5 of 7</span>
                    <h3 class="card-header-title">Additional job details</h3>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">What is the schedule for this job?</label>
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox1">
                        <label class="custom-control-label" for="officeHoursCheckbox1">8 hour shift</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox2">
                        <label class="custom-control-label" for="officeHoursCheckbox2">10 hour shift</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox3">
                        <label class="custom-control-label" for="officeHoursCheckbox3">12 hour shift</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox4">
                        <label class="custom-control-label" for="officeHoursCheckbox4">Weekends</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox5">
                        <label class="custom-control-label" for="officeHoursCheckbox5">Monday to Friday</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox6">
                        <label class="custom-control-label" for="officeHoursCheckbox6">On call</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox7">
                        <label class="custom-control-label" for="officeHoursCheckbox7">Holidays</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox8">
                        <label class="custom-control-label" for="officeHoursCheckbox8">Night shift</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox9">
                        <label class="custom-control-label" for="officeHoursCheckbox9">Overtime</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox10">
                        <label class="custom-control-label" for="officeHoursCheckbox10">Day shift</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="officeHoursCheckboxName" id="officeHoursCheckbox11">
                        <label class="custom-control-label" for="officeHoursCheckbox11">Other</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="companyWebsiteLabel" class="input-label">Please enter your company's website, if there is one:</label>

                    <input type="text" class="form-control" name="companyWebsite" id="companyWebsiteLabel" placeholder="http://htmlstream.com/" aria-label="http://htmlstream.com/">
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepPayment"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#postJobStepJobDescription"
                              }'>
                        Save and continue <i class="fas fa-angle-right ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepJobDescription" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 6 of 7</span>
                    <h3 class="card-header-title">Job description</h3>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Describe the responsibilities of this job, required work experience, skills, or education.</label>

                    <div class="mb-3">
                      <a href="javascript:;" data-toggle="modal" data-target="#uploadFilesModal">Upload a .pdf or .docx</a>
                    </div>

                    <!-- Quill -->
                    <div class="quill-custom">
                      <div class="js-quill" style="min-height: 15rem;"
                           data-hs-quill-options='{
                           "placeholder": "Type your message...",
                            "modules": {
                              "toolbar": [
                                ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                              ]
                            }
                           }'>
                      </div>
                    </div>
                    <!-- End Quill -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Include COVID-19 precautions <span class="badge badge-soft-dark ml-1">Important to job seekers</span></label>
                    <p class="small mt-n2">We'll save this information to make posting faster in the future.</p>
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox1">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox1">Remote interview process</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox2">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox2">Personal protective equipment provided or required</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->

                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox3">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox3">Plastic shield at work stations</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox4">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox4">Temperature screenings</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox5">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox5">Social distancing guidelines in place</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox6">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox6">Virtual meetings</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                    
                    <!-- Custom Radio -->
                    <div class="form-control mb-2">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="covid19PrecautionsCheckboxName" id="covid19PrecautionsCheckbox7">
                        <label class="custom-control-label" for="covid19PrecautionsCheckbox7">Sanitizing, disinfecting, or cleaning procedures in place</label>
                      </div>
                    </div>
                    <!-- End Custom Radio -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="row mb-2">
                      <div class="col">
                        <label for="additionalCovid19PrecautionsLabel" class="input-label">Are you taking any additional COVID-19 precautions?</label>
                        <p class="small mt-n2 mb-0">Let job seekers know how you’re responding to COVID-19.</p>
                      </div>

                      <div class="col-auto align-self-end">
                        <span id="additionalCovid19PrecautionsCountCharacters" class="text-muted"></span>
                      </div>
                    </div>
                    <!-- End Row -->
                    
                    <textarea id="additionalCovid19PrecautionsLabel" class="js-count-characters form-control" placeholder="Ex: All customers are required to wear a mask, curbside pickup available, common surfaces are sanitized regularly, etc." aria-label="Ex: All customers are required to wear a mask, curbside pickup available, common surfaces are sanitized regularly, etc." rows="4" maxlength="250"
                              data-hs-count-characters-options='{
                                "output": "#additionalCovid19PrecautionsCountCharacters"
                              }'></textarea>
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepAdditionalJobDetails"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#postJobStepJobApplicationSettings"
                              }'>
                        Save and continue <i class="fas fa-angle-right ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepJobApplicationSettings" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero py-4" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <span class="d-lg-none">Step 7 of 7</span>
                    <h3 class="card-header-title">Application settings</h3>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">How do you want to receive applications? <i class="far fa-question-circle" data-toggle="tooltip" data-placement="top" title="Email: Screen candidates individually, received by email. In person: We source and send candidates directly to you."></i></label>

                    <!-- Button Group -->
                    <div class="btn-group btn-group-toggle btn-group-segment d-flex" data-toggle="buttons">
                      <label class="btn flex-fill active">
                        <input type="checkbox" name="receiveApplicationsName" id="receiveApplicationsOption1" checked> Email
                      </label>
                      <label class="btn flex-fill">
                        <input type="checkbox" name="receiveApplicationsName" id="receiveApplicationsOption2"> Phone
                      </label>
                      <label class="btn flex-fill">
                        <input type="checkbox" name="receiveApplicationsName" id="receiveApplicationsOption3"> In-person
                      </label>
                    </div>
                    <!-- End Button Group -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label class="input-label">Do you want applicants to submit a resume?</label>

                    <!-- Button Group -->
                    <div class="btn-group btn-group-toggle btn-group-segment d-flex" data-toggle="buttons">
                      <label class="btn flex-fill active">
                        <input type="checkbox" name="submitApplicationsName" id="submitApplicationsOption1" checked> Yes
                      </label>
                      <label class="btn flex-fill">
                        <input type="checkbox" name="submitApplicationsName" id="submitApplicationsOption2"> No
                      </label>
                      <label class="btn flex-fill">
                        <input type="checkbox" name="submitApplicationsName" id="submitApplicationsOption3"> Optional
                      </label>
                    </div>
                    <!-- End Button Group -->
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="canditateApplicationsSentToEmailNameLabel" class="input-label">Daily updates about this job and candidates will be sent to:</label>

                    <input type="email" class="form-control" name="canditateApplicationsSentToEmailName" id="canditateApplicationsSentToEmailNameLabel" placeholder="example@gmail.com" aria-label="example@gmail.com">
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <label for="sendEmailUpdatesCheckbox" class="input-label">Daily updates about this job and candidates will be sent to:</label>

                    <!-- Custom Checkbox -->
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="sendEmailUpdatesCheckbox" checked>
                      <label class="custom-control-label" for="sendEmailUpdatesCheckbox">Also send an individual email update every time a new candidate applies</label>
                    </div>
                    <!-- End Custom Checkbox -->
                  </div>
                  <!-- End Form Group -->
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepJobDescription"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-primary"
                              data-hs-step-form-next-options='{
                                "targetSelector": "#postJobStepJobPreviewJob"
                              }'>
                        Save and continue <i class="fas fa-angle-right ml-1"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div id="postJobStepJobPreviewJob" class="card" style="display: none;">
                <!-- Header -->
                <div class="card-header bg-img-hero" style="background-image: url(../assets/svg/components/abstract-shapes-21.svg);">
                  <div class="flex-grow-1">
                    <h3 class="card-header-title">Preview job</h3>
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <p>By pressing confirm, you agree that this job will be posted and applications will be processed in accordance with Front Job's <a  >Cookie Policy</a>, <a  >Privacy Policy</a> and <a  >Terms of Service</a>. You consent to Front Job informing a user that you have opened, viewed or made a decision regarding the user's application.</p>

                  <hr class="my-4">

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Job Title</h5>
                        <span class="d-block">UI/UX Designer</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepBasic"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Company</h5>
                        <span class="d-block">Capsule</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepBasic"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Location</h5>
                        <span class="d-block mb-2">Remote work allowed: No</span>
                        <span class="d-block">Camberwell, SE5 0BU</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepAddress"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Street Address</h5>
                        <span class="d-block">Arch 294 Jewell Street, SE5 0BU, London</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepAddress"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Pay and Benefits</h5>
                        <span class="d-block mb-2">Salary based on experience</span>
                        <span class="d-block">Benefits: Health insurance, Flexible schedule, Employee discount, Relocation assistance</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepPayment"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Job Type</h5>
                        <span class="d-block">Full time</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepJobDetails"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Job Description</h5>
                        <h5>Who we are:</h5>

                        <p>We are reinventing personal communication for the digital era.</p>

                        <p>TouchNote is a creative platform that lets people send custom-made cards, straight from their phone to those they love anywhere in the world. Our easy to use app has helped people nurture their most meaningful relationships over 15 million times and was awarded the Good Web Guide's App of the Year 2018.</p>

                        <p>We are a team of passionate and creative individuals trying to make a difference. We're proud to offer a highly collaborative, solution-focused environment that celebrates diversity and has been listed in Deloitte's Technology Fast 50 and The Financial Times Future 100 UK.</p>

                        <h5>The role:</h5>

                        <p>We are looking for a talented mid-level Product Designer to help shape the future of our product experience here at TouchNote.</p>

                        <p>Sitting in the product team and reporting directly to the Head of Design, you'll work extensively with product, growth and our engineering team to understand our user base, and work to improve business needs, related requirements and technical constraints.</p>

                        <h5>About you:</h5>

                        <ul class="pl-4">
                          <li>You're always on top of the latest design trends, ambassador of Apple Humans guidelines and Google Material design and a good understanding of transitions and haptic feedback.</li>
                          <li>You're a quick learner, always open-minded and curious, and eager to learn new skills.</li>
                          <li>You have a keen interest and knowledge of gamification and the user onboarding process.</li>
                          <li>You've got a can-do attitude, have a proactive approach to your work, are autonomous and take ownership of your work; a perfectionist and are used to working in a fast-paced environment.</li>
                        </ul>

                        <h5>Requirements:</h5>

                        <ul class="pl-4">
                          <li>You're a driven designer and have a minimum of 2-3 years of experience in delivering both UX & UI design, including experience in mobile and native applications.</li>
                          <li>You've got proven mobile design and proven UI experience on mobile app design and web: working with sketches, prototypes, wireframes, user flows and UI interactions.</li>
                          <li>Your portfolio is full of beautiful, well thought out interface work that showcases your flair and attention-to-detail. It includes examples of mobile and app products you have worked on (iOS and Android)</li>
                          <li>You've used Figma and are an Adobe Creative Cloud expert (Photoshop, Illustrator, After Effects).</li>
                        </ul>

                        <h5>COVID-19 precautions</h5>
                        <span class="d-block">Remote interview process</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepJobDescription"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Language</h5>
                        <span class="d-block">English</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepBasic"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Expected Hiring Date</h5>
                        <span class="d-block">More than 4 weeks</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepJobDetails"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Hires Needed</h5>
                        <span class="d-block">1</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepJobDetails"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Schedule</h5>
                        <span class="d-block">Monday to Friday</span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepAdditionalJobDetails"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <!-- Info -->
                  <div class="border-bottom pb-4 mb-4">
                    <div class="row">
                      <div class="col-sm-8 mb-3 mb-sm-0">
                        <h5>Application Settings</h5>
                        <span class="d-block">Apply method: <span class="font-weight-bold text-dark">Email</span></span>
                        <span class="d-block mb-2">Send updates to: <span class="font-weight-bold text-dark">maria@gmail.com</span></span>
                        <span class="d-block">Do you want applicants to submit a resume? <span class="font-weight-bold text-dark">Yes</span></span>
                      </div>

                      <div class="col-sm-4">
                        <div class="d-sm-flex justify-content-sm-end">
                          <button type="button" class="btn btn-sm btn-outline-primary"
                            data-hs-step-form-prev-options='{
                              "targetSelector": "#postJobStepAdditionalJobDetails"
                            }'>
                            <i class="fas fa-pen fa-sm mr-1"></i> Edit
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- End Row -->
                  </div>
                  <!-- End Info -->

                  <p class="small">By clicking "Confirm", you agree to candidates appearing in your dashboard based on the preferences you've selected above. You also agree to our <a  >Front Jobs Terms of Service</a>.</p>
                </div>
                <!-- End Body -->

                <!-- Footer -->
                <div class="card-footer">
                  <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-ghost-secondary"
                       data-hs-step-form-prev-options='{
                         "targetSelector": "#postJobStepJobApplicationSettings"
                       }'>
                      <i class="fas fa-angle-left mr-1"></i> Previous step
                    </button>

                    <div class="ml-auto">
                      <button type="button" class="btn btn-white mr-2">Save in drafts</button>
                      <button id="postJobFinishBtn" type="button" class="btn btn-primary">Confirm</button>
                    </div>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
              <!-- End Card -->
            </div>
            <!-- End Content Step Form -->

            <!-- Message Body -->
            <div id="successMessageContent" style="display: none;">
              <div class="text-center">
                <img    class=" img-fluid mb-3" src="../assets/svg/illustrations/medal.svg" alt="Image Description" style="max-width: 15rem;">

                <div class="mb-4">
                  <h2>Successful!</h2>
                  <p>New <span class="font-weight-bold text-dark">UI/UX Designer</span> job has been successfully created.</p>
                </div>

                <div class="d-flex justify-content-center">
                  <a class="btn btn-white mr-3" href="employer.php">
                    Go to profile <i class="fas fa-angle-right mr-1 ml-2"></i>
                  </a>
                  <a class="btn btn-primary"  >
                    <i class="fas fa-briefcase mr-1"></i> Create new job
                  </a>
                </div>
              </div>
            </div>
            <!-- End Message Body -->

            <!-- Sticky Block End Point -->
            <div id="stickyBlockEndPoint"></div>
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

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Upload files Modal -->
  <div class="modal fade" id="uploadFilesModal" tabindex="-1" role="dialog" aria-labelledby="uploadFilesModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header">
          <h4 id="uploadFilesModalTitle" class="modal-title">Add files</h4>

          <button type="button" class="btn btn-icon btn-xs btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body">
          <!-- Dropzone -->
          <div id="attachFilesLabel" class="js-dropzone dz-dropzone dz-dropzone-boxed gradient-overlay-half-primary-v4">
            <div class="dz-message">
              <figure class="max-w-10rem mx-auto mb-3">
                <img    class=" img-fluid" src="../assets/svg/illustrations/drag-n-drop.svg" alt="Image Description">
              </figure>

              <h5>Drag and drop your file here</h5>

              <p class="mb-2">or</p>

              <span class="btn btn-sm btn-white">Browse files</span>
            </div>
          </div>
          <!-- End Dropzone -->
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-white" data-dismiss="modal" aria-label="Close">Cancel</button>
          <button type="button" class="btn btn-sm btn-primary">Upload</button>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Upload files Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

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
  <script src="../assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
  <script src="../assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
  <script src="../assets/vendor/select2/dist/js/select2.full.min.js"></script>
  <script src="../assets/vendor/quill/dist/quill.min.js"></script>
  <script src="../assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
  <script src="../assets/vendor/hs-count-characters/dist/js/hs-count-characters.js"></script>
  <script src="../assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js"></script>

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


      // INITIALIZATION OF STEP FORM
      // =======================================================
      $('.js-step-form').each(function () {
        var stepForm = new HSStepForm($(this), {
          finish: function() {
            $("#postJobStepFormProgress").hide();
            $("#postJobStepFormContent").hide();
            $("#successMessageContent").show();
            scrollToTop('#header');
            $('#formContainer').removeClass('col-lg-8').addClass('col-lg-12')
          },
          onNextStep: function() {
            scrollToTop()
          },
          onPrevStep: function() {
            scrollToTop()
          }
        }).init();
      });

      function scrollToTop(el = '.js-step-form') {
        $('html, body').animate({
          scrollTop: $(el).offset().top - 30
        }, 500)
      }


      // INITIALIZATION OF MASKED INPUT
      // =======================================================
      $('.js-masked-input').each(function () {
        var mask = $.HSCore.components.HSMask.init($(this));
      });


      // INITIALIZATION OF QUILLJS EDITOR
      // =======================================================
      var quill = $.HSCore.components.HSQuill.init('.js-quill');


      // INITIALIZATION OF DROPZONE FILE ATTACH MODULE
      // =======================================================
      $('.js-dropzone').each(function () {
        var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
      });


      // INITIALIZATION OF COUNTER CHARACTERS
      // =======================================================
      $('.js-count-characters').each(function () {
        new HSCountCharacters($(this)).init()
      });


      // INITIALIZATION OF STICKY BLOCKS
      // =======================================================
      $('.js-sticky-block').each(function () {
        var stickyBlock = new HSStickyBlock($(this)).init();
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

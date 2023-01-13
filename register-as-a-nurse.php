<?php
require 'classes/session.php';
require 'classes/user.php';
$session = new Session();
$current_user = new Users();

if (isset($_SESSION['continue']) && $_SESSION['continue'] != true) {
    if (isset($_SESSION['session_id'])) {
        header('location: nurse');
    } else {
        header('location: login');
    }
}

$current_user_info = json_decode($current_user->get_current_user_info(), true);
$first_name = $current_user_info['first_name'];
$session_id = $session->get_session_id();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up - Cheina Care Givers</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/multi-step-form.css">

    <!-- Javascript dependencies -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script> -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="fontawesome-free-5.11.2-web/js/all.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body style="padding-top: 77px; overflow-x:hidden; max-width: 100%;">

    <?php include 'nav.php'; ?>

    <main class="container">
        <!-- Nurse sign up -->
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="d-flex" style="min-height: calc(100vh - 77px);">

                    <div class="m-auto w-100">
                        <div class="text-center" id="continue-box">
                            <h2>Welcome, <span class="h1 green"><?php echo ucfirst($first_name); ?></span></h2>
                            <h3>You have registered successfully. <br> Click continue to complete your profile.</h3>
                            <button type="button" id="btn-continue" class="btn btn-primary">Continue <i class="fa fa-long-arrow-alt-right"></i></button>
                        </div>

                        <form id="nurse-form" class="text-left regForm" style="display: none;">
                            <h4 class="mb-4 mb-5"> <span class="green h4"><?php echo ucfirst($first_name); ?></span> , complete your profile.</h4>
                            <input type="text" name="post_type" value="nurse_update" hidden>
                            <input type="text" value="<?php echo $session_id; ?>" hidden name="user_id" id="user_id">

                            <div class="tab">
                                <!-- Why are you looking for a new job? -->
                                <div class="form-group">
                                    <label for="why_job">Why do you want this job? <small>(Select all that apply).</small></label>
                                    <select multiple class="form-control selectpicker" id="why_job" name="why_job[]" required>
                                        <option value="Moving home">Moving home</option>
                                        <option value="Higher salary">Higher salary</option>
                                        <option value="Career progression">Career progression</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>

                                <!-- job process -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gps">What is your job search level?</label>
                                        <select class="form-control" id="job_search_level" name="job_search_level" required>
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="Just starting">Just starting</option>
                                            <option value="Already interviewing">Already interviewing</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="available_to_start">When can you start a new role?</label>
                                        <input type="text" class="form-control datepicker" id="start_date" name="start_date" placeholder="Eg. 01/08/20XX" required>
                                    </div>
                                </div>

                            </div>

                            <div class="tab">
                                <!-- do you drive -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="drive">Do you drive?</label>
                                        <select class="form-control" id="drive" name="drive" required>
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="have_car">Do you have a car that you can use?</label>
                                        <select class="form-control" id="have_car" name="have_car" required>
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- NMC PIN -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="have_nmc_pin">Do you have an active NMC PIN?</label>
                                        <select class="form-control" id="have_nmc_pin" name="have_nmc_pin" required>
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div id="nmc_pin_div" class="form-group col-md-6" style="display: none;">
                                        <label for="nmc_pin">What is your NMC PIN?</label>
                                        <input type="text" class="form-control" id="nmc_pin" name="nmc_pin" placeholder="Enter your NMC PIN here">
                                    </div>
                                </div>
                            </div>

                            <div class="tab">
                                <!-- Registration type -->
                                <div class="form-group">
                                    <label for="registration_type">What Registration type do you hold? <small>(Select all that apply).</small></label>
                                    <select multiple class="form-control selectpicker" id="registration_type" name="registration_type[]" required>
                                        <option value="RN1: Adult nurse, level 1">RN1: Adult nurse level 1</option>
                                        <option value="RNA: Adult nurse, level 1">RNA: Adult nurse level 1</option>
                                        <option value="RN3: Mental health nurse, level 1">RN3: Mental health nurse level 1</option>
                                        <option value="RNMH: Mental health nurse, level 1">RNMH: Mental health nurse level 1</option>
                                        <option value="RN5: Learning disabilities nurse, level 1">RN5: Learning disabilities nurse level 1</option>
                                        <option value="RNLD: Learning disabilities nurse, level 1">RNLD: Learning disabilities nurse level 1</option>
                                        <option value="RN8: Children's nurse, level 1">RN8: Children's nurse level 1</option>
                                        <option value="RNC: Children's nurse, level 1">RNC: Children's nurse level 1</option>
                                        <option value="RN2: Adult nurse, level 2">RN2: Adult nurse level 2</option>
                                        <option value="RN4: Mental health nurse, level 2">RN4: Mental health nurse level 2</option>
                                        <option value="RN6: Learning disabilities nurse, level 2">RN6: Learning disabilities nurse level 2</option>
                                        <option value="RN7: General nurse, level 2">RN7: General nurse level 2</option>
                                        <option value="RN9: Fever nurse, level 2">RN9: Fever nurse level 2</option>
                                        <option value="RM: Midwife">RM: Midwife</option>
                                    </select>
                                </div>

                                <!-- qualification -->
                                <!-- do you drive -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="qualification">What is your qualification?</label>
                                        <select class="form-control" id="qualification" name="qualification" required>
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="DipN">DipN</option>
                                            <option value="BSC or BA ">BSC or BA </option>
                                            <option value="MSC or MA">MSC or MA</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="additional_qualification">Any additional professional qualification?</label>
                                        <select class="form-control" id="additional_qualification" name="additional_qualification" required>
                                            <option value="" selected disabled>Select an option</option>
                                            <option value="RHV: Health visitor">RHV: Health visitor</option>
                                            <option value="HV: Health visitor">HV: Health visitor</option>
                                            <option value="RSN: School nurse">RSN: School nurse</option>
                                            <option value="SN: School nurse">SN: School nurse</option>
                                            <option value="ROH: Occupational health nurse">ROH: Occupational health nurse</option>
                                            <option value="OH: Occupational health nurse">OH: Occupational health nurse</option>
                                            <option value="RFHN: Family health nurse">RFHN: Family health nurse</option>
                                            <option value="FHN: Family health nurse">FHN: Family health nurse</option>
                                            <option value="RPHN: Specialist community public health nurse">RPHN: Specialist community public health nurse</option>
                                            <option value="V100: Community practitioner nurse prescriber">V100: Community practitioner nurse prescriber</option>
                                            <option value="V150: Community practitioner nurse prescriber (without SPQ or SCPHN)">V150: Community practitioner nurse prescriber (without SPQ or SCPHN)</option>
                                            <option value="V200: Nurse independent prescriber (extended formulary)">V200: Nurse independent prescriber (extended formulary)</option>
                                            <option value="V300: Nurse independent / supplementary prescriber">V300: Nurse independent / supplementary prescriber</option>
                                            <option value="LPE: Lecturer / Practice Educator">LPE: Lecturer / Practice Educator</option>
                                            <option value="TCH: Teacher">TCH: Teacher</option>
                                            <option value="SPA: Specialist practitioner: Adult nursing">SPA: Specialist practitioner: Adult nursing</option>
                                            <option value="SPMH: Specialist practitioner: Mental health">SPMH: Specialist practitioner: Mental health</option>
                                            <option value="SPC: Specialist practitioner: Children's nursing">SPC: Specialist practitioner: Children's nursing</option>
                                            <option value="SPLD: Specialist practitioner: Learning disability nurse">SPLD: Specialist practitioner: Learning disability nurse</option>
                                            <option value="SPGP: Specialist practitioner: General practice nursing">SPGP: Specialist practitioner: General practice nursing</option>
                                            <option value="SCMH: Specialist practitioner: Community mental health nursing">SCMH: Specialist practitioner: Community mental health nursing</option>
                                            <option value="SCLD: Specialist practitioner: Community learning disabilities nursing">SCLD: Specialist practitioner: Community learning disabilities nursing</option>
                                            <option value="SPCC: Specialist practitioner: Community children’s nursing">SPCC: Specialist practitioner: Community children’s nursing</option>
                                            <option value="SPDN: Specialist practitioner: District nursing">SPDN: Specialist practitioner: District nursing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div style="overflow:auto;">
                                <div class="w-100">
                                    <p id="warning" class="text-danger float-left"></p>
                                    <button class="btn btn-primary float-right" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                    <button class="btn btn-secondary text-white float-right mr-3" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                </div>
                            </div>
                            <!-- Circles which indicates the steps of the form: -->
                            <div style="text-align:center;margin-top:40px;">
                                <span class="step"></span>
                                <span class="step"></span>
                                <span class="step"></span>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Nurse sign up end -->
    </main>


    <script>
        var currentYear = (new Date).getFullYear();
        $("#current_year").text((new Date).getFullYear());

        jQuery(function($) {

            $('#have_nmc_pin').change(function() {
                if ($(this).val() == "Yes") {
                    $('#nmc_pin_div').show();
                } else {
                    $('#nmc_pin').val('');
                    $('#nmc_pin_div').hide();
                }
            })


            $('#nurse-form').submit(function(e) {
                e.preventDefault();
                $('#nextBtn').html('Submitting...');
                var form = $(this).serialize();
                console.log(form);

                $.ajax({
                    url: 'api/user_api.php',
                    data: form,
                    method: 'POST',
                    success: function(data) {
                        var res = JSON.parse(data);
                        $('#nextBtn').html('Submit');

                        if (res.code == 200) {
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Your profile has been updated. Click Ok to continue',
                                showConfirmButton: true,
                            }).then((result) => {
                                if (result.value) {
                                    location.href = 'nurse';
                                }
                            })
                        }
                        console.log(data);
                    },
                    error: function(error) {
                        console.log(error)
                    }
                })
            });


            $('#btn-continue').click(function() {
                $('#continue-box').hide();
                $('#nurse-form').show();

            });

            //datepicker
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });

            //multi select
            $('.selectpicker').selectpicker();

            //box-shadow nav on scroll
            $(window).scroll(function() {
                if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                    // $('#return-to-top').fadeIn(200); // Fade in the arrow
                    $('.navbar').removeClass('on-nav-scroll');
                    $('.navbar').addClass('on-nav-scroll');
                } else {
                    // $('#return-to-top').fadeOut(200); // Else fade out the arrow
                    $('.navbar').removeClass('on-nav-scroll');
                    $('.navbar').addClass('transparent');
                }
            });



        });

        //multistep form
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
                $('#nextBtn').removeAttr("type").attr("type", "submit");
                $("#nextBtn").prop("onclick", null).off("click");
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
                $('#nextBtn').removeAttr("type").attr("type", "button");
                $('#nextBtn').attr('onClick', 'nextPrev(1);');
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            $('#warning').html('');
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                // document.getElementById("nurse-form").submit();
                // $('#nurse-form').submit();

                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            z = x[currentTab].getElementsByTagName("select");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if ((y[i].hasAttribute('required') && y[i].value == "")) {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // show warning 
                    $('#warning').html('<i class="fa fa-exclamation-circle"></i> Complete required feilds.');
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // A loop that checks every select field in the current tab:
            for (i = 0; i < z.length; i++) {
                // If a field is empty...
                if ((z[i].hasAttribute('required') && z[i].value == "")) {
                    // add an "invalid" class to the field:
                    z[i].style.backgroundColor = "#ffdddd";
                    // show warning 
                    $('#warning').html('<i class="fa fa-exclamation-circle"></i> Complete required feilds.');
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>

</body>

</html>
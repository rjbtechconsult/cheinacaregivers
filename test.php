<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }

    #regForm {
        background-color: #ffffff;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>

<body>

    <form id="regForm" action="/action_page.php">
        <h1>Register:</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">Name:
            <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
        </div>
        <div class="tab">Contact Info:
            <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
            <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
        </div>
        <div class="tab">Birthday:
            <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
            <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
            <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
        </div>
        <div class="tab">Login Info:
            <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
            <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>








    <form id="nurse-form" style="display: none;" class="text-left">
        <h4 class="mb-4">Register as a Nurse</h4>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="firstname">First Name</label>
                <input oninput="this.className = ''" type="text" class="form-control" id="firstname" placeholder="Eg. Adjoa">
            </div>
            <div class="form-group col-md-6">
                <label for="lastname">Last Name</label>
                <input oninput="this.className = ''" type="text" class="form-control" id="lastname" placeholder="Eg. Mansah">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input oninput="this.className = ''" type="email" class="form-control" id="email" placeholder="Eg. adjoamansah@email.com">
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone Number</label>
                <input oninput="this.className = ''" type="tel" class="form-control" id="phone" placeholder="Eg. 233241234567 ">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address_1">Address 1</label>
                <input oninput="this.className = ''" type="text" class="form-control" id="address_1" placeholder="Eg. No.1 Street name, Accra">
            </div>
            <div class="form-group col-md-6">
                <label for="address_2">Address 2</label>
                <input oninput="this.className = ''" type="text" class="form-control" id="address_2" placeholder="Eg. No.2 Street name, Kumasi">
            </div>
        </div>

        <!-- Password -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ghana_post">Ghana Post Address?</label>
                <input oninput="this.className = ''" type="text" class="form-control" id="ghana_post" placeholder="Eg. GHA-12345">
            </div>

            <div class="form-group col-md-6">
                <label for="password">Create a Password</label>
                <input oninput="this.className = ''" type="password" class="form-control" id="password" placeholder="Eg. 1234@Password">
            </div>
        </div>


        <!-- Why are you looking for a new job? -->
        <div class="form-group">
            <label for="why_job">Why do you want this job? <small>(Select all that apply).</small></label>
            <select multiple class="form-control selectpicker" id="why_job">
                <option value="Moving home">Moving home</option>
                <option value="Higher salary">Higher salary</option>
                <option value="Career progression">Career progression</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <!-- job process -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gps">Where are you in the job search process?</label>
                <select class="form-control" id="gps">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Just starting">Just starting</option>
                    <option value="Already interviewing">Already interviewing</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="available">When can you start a new role?</label>
                <select class="form-control" id="available">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Immediately">Immediately</option>
                    <option value="">Select a date</option>
                </select>
            </div>
        </div>

        <!-- do you drive -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="drive">Do you drive?</label>
                <select class="form-control" id="drive">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="available">Do you have a car that you can use?</label>
                <select class="form-control" id="available">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
        </div>

        <!-- NMC PIN -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nmc">Do you have an active NMC PIN?</label>
                <select class="form-control" id="nmc">
                    <option value="" selected disabled>Select an option</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="nmc_pin">What is your NMC PIN?</label>
                <input type="text" class="form-control" id="nmc_pin" placeholder="Enter your NMC PIN here">
            </div>
        </div>

        <!-- Registration type -->
        <div class="form-group">
            <label for="registration_type">What Registration type do you hold? <small>(Select all that apply).</small></label>
            <select multiple class="form-control selectpicker" id="registration_type">
                <option value="RN1: Adult nurse, level 1">RN1: Adult nurse, level 1</option>
                <option value="RNA: Adult nurse, level 1">RNA: Adult nurse, level 1</option>
                <option value="RN3: Mental health nurse, level 1">RN3: Mental health nurse, level 1</option>
                <option value="RNMH: Mental health nurse, level 1">RNMH: Mental health nurse, level 1</option>
                <option value="RN5: Learning disabilities nurse, level 1">RN5: Learning disabilities nurse, level 1</option>
                <option value="RNLD: Learning disabilities nurse, level 1">RNLD: Learning disabilities nurse, level 1</option>
                <option value="RN8: Children's nurse, level 1">RN8: Children's nurse, level 1</option>
                <option value="RNC: Children's nurse, level 1">RNC: Children's nurse, level 1</option>
                <option value="RN2: Adult nurse, level 2">RN2: Adult nurse, level 2</option>
                <option value="RN4: Mental health nurse, level 2">RN4: Mental health nurse, level 2</option>
                <option value="RN6: Learning disabilities nurse, level 2">RN6: Learning disabilities nurse, level 2</option>
                <option value="RN7: General nurse, level 2">RN7: General nurse, level 2</option>
                <option value="RN9: Fever nurse, level 2">RN9: Fever nurse, level 2</option>
                <option value="RM: Midwife">RM: Midwife</option>
            </select>
        </div>

        <!-- qualification -->
        <!-- do you drive -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="qualification">What is your qualification?</label>
                <select class="form-control" id="qualification">
                    <option value="" selected disabled>Select an option</option>
                    <option value="DipN">DipN</option>
                    <option value="BSC or BA ">BSC or BA </option>
                    <option value="MSC or MA">MSC or MA</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="additional_qualification">Any additional professional qualification?</label>
                <select class="form-control" id="additional_qualification">
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


        <!-- 
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">State</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Zip</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address_2">Address 2</label>
                            <input type="text" class="form-control" id="address_2" placeholder="Eg. No.2 Street name, Kumasi">
                        </div>

                        <div class="form-group">
                            <label for="inputAddress2">Address 2</label>
                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Check me out
                                </label>
                            </div>
                        </div> -->

        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>

    <script>
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
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
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
                document.getElementById("regForm").submit();
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
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
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
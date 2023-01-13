<?
// require 'classes/session.php';
// $session = new Sesstion();
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
</head>

<body style="padding-top: 77px; overflow-x:hidden; max-width: 100%;">

    <!--Navbar -->
    <nav class="navbar  navbar-expand-lg fixed-top transparent">
        <div class="container">
            <a class="navbar-brand link-unstyled" href="./">
                <img class="logo" src="img/logo.png" width="150" alt="Cheina Care Givers">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-bars fa-lg"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav my-2 my-lg-0 ml-auto text-center">
                    <li class="nav-item nav-item-padding active">
                        <a id="home" class="nav-link text-dark text-center nav-active" href="./">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-item-padding active">
                        <a class="nav-link text-dark text-center" href="#">ABOUT<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-item-padding active">
                        <a class="nav-link text-dark text-center" href="#">SERVICES <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-item-padding active">
                        <a class="nav-link text-dark text-center" href="#">SHOWCASE <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-item-padding active">
                        <a class="nav-link text-dark text-center" href="#">BLOG <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item nav-item-padding active">
                        <a class="nav-link text-dark   text-center" href="#">CONTACT <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
                <ul class="navbar-nav my-2 my-lg-0 ml-auto">
                    <li class="nav-item nav-item-padding active text-center">
                        <button class="btn btn-primary btn-lg box-shadow-btn">SIGN UP</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar -->

    <main>
        <div class="row row-sign-up">

            <!-- Nurse sign up -->
            <div class="col-md-6 col-sign-up d-flex py-5">
                <div class="m-auto text-center container w-90">
                    <h5 id="change-to-nurse" class="text-center mb-3" style="display: none;">I've changed my mind. I want to:</h5>
                    <button id="show-nurse-form" class="btn btn-primary btn-lg box-shadow-btn">REGISTER AS A NURSE</button>

                    <form id="nurse-form" name="nurse-form" style="display: none;" class="text-left regForm">
                        <h4 class="mb-4">Register as a Nurse:</h4>
                        <input type="text" value="nurse" name="nurse" hidden>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Eg. Maame" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Eg. Ekuah" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Eg. adjoamansah@email.com" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Eg. 233241234567" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address_1">Address 1</label>
                                <input type="text" class="form-control" id="address_1" name="address_1" placeholder="Eg. No.1 Street name, Accra" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address_2">Address 2</label>
                                <input type="text" class="form-control" id="address_2" name="address_2" placeholder="Eg. No.2 Street name, Kumasi">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="ghana_post">Ghana Post Address?</label>
                                <input type="text" class="form-control" id="ghana_post" name="ghana_post" placeholder="Eg. GHA-12345">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password">Create a Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Eg. 1234@Password" required>
                            </div>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <button class="btn btn-primary" type="submit" name="submit-nurse" id="submit-nurse">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <!-- Nurse sign up end -->

            <div id="col-employer" class="col-md-6 col-sign-up d-flex">
                <div class="m-auto text-center">
                    <h5 id="change-to-employer" class="text-center mb-3" style="display: none;">I've changed my mind. I want to:</h5>
                    <button id="show-employer-form" class="btn btn-primary btn-lg box-shadow-btn">REGISTER AS AN EMPLOYER</button>

                    <form id="employer-form" style="display: none;">
                        <h4>Register as an Employer</h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </main>


    <script>
        var currentYear = (new Date).getFullYear();
        $("#current_year").text((new Date).getFullYear());

        jQuery(function($) {

            $('#nurse-form').submit(function(e) {
                e.preventDefault();
                $('#submit-nurse').html('Submitting...');
                var form = $(this).serialize();
                console.log(form);
                $.ajax({
                    url: 'api/sign-up.php',
                    method: 'post',
                    data: form,
                    success: function(data) {
                        console.log(data);
                        var res = JSON.parse(data);
                        if (res.code == 300) {
                            alert(res.message);
                        }
                        if (res.code == 200) {
                            window.location.href = "register-as-a-nurse";
                        }
                    },
                    error: function(error) {}
                });
            });

            //datepicker
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });

            //multi select
            $('.selectpicker').selectpicker();

            //show form on button click
            $('#show-nurse-form').click(function() {
                $(this).hide();
                $('#change-to-nurse').hide();
                $('#nurse-form').show();
                // $('#nurse-form').addClass('scrollable-left');
                // $('#col-employer').addClass('fixed-right');

                $('#employer-form').hide();
                $('#change-to-employer').show();
                $('#show-employer-form').show();

            });

            $('#show-employer-form').click(function() {
                $(this).hide();
                $('#change-to-employer').hide();
                $('#employer-form').show();

                $('#nurse-form').hide();
                $('#change-to-nurse').show();
                $('#show-nurse-form').show();

            });

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
    </script>

</body>

</html>
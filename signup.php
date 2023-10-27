<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CARMIQUE -Sign Up</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary"><span class="text-primary">CAR</span>MIQUE</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        <a href="service.html" class="nav-item nav-link">Services</a>
                        <a href="pricing.php" class="nav-item nav-link">Pricing</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="blog.html" class="dropdown-item">Blog Grid</a>
                                <a href="single.html" class="dropdown-item">Blog Detail</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-white">Sign up</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn text-white" href="">Home</a>
                        <i class="fas fa-angle-right text-white"></i>
                        <a class="btn text-white disabled" href="">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->
    <?php  
        if (isset($_GET['price'])) { 
            $price = $_GET['price']; 
        } else {
            $price =0;
        }
    ?>

    <div class="container-fluid py-5">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-12">
                    <h3>Please Fill up the informaton.</h3>
                    <div class="contact-form">
                        <div id="success"></div>

                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post"> 

                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="seller@designerfotos.com">
                            <input type="hidden" name="item_name" value="Memorex 256MB Memory Stick">
                            <input type="hidden" name="item_number" value="MEM32507725">
                            <input type="hidden" name="amount" value="<?php  echo $price;?>">
                            <input type="hidden" name="tax" value="0">
                            <input type="hidden" name="quantity" value="1"> 
                            <input type="hidden" name="currency_code"  value="USD">
                            <!-- Enable override of buyers's address stored with PayPal . -->
                            <input type="hidden" name="address_override" value="1">
                            <!-- Set variables that override the address stored with PayPal. -->
                            <input type="hidden" name="first_name" value="John">
                            <input type="hidden" name="last_name" value="Doe">
                            <input type="hidden" name="address1" id="customAddressD"  value="">
                            <input type="hidden" name="city"  id="customNameD" value="">
                            <input type="hidden" name="state" id="customEmailD" value="" >
                            <input type="hidden" name="zip" id="customMobileD" value="">
                            <input type="hidden" name="country" value="US"> 


                            <div class="control-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                                    required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone"
                                    required="required" data-validation-required-message="Please enter a Phone" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required="required"
                                    data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" rows="6" name="address" id="address"
                                    placeholder="Address" required="required"
                                    data-validation-required-message="Please enter your Address"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div>
                                <button class="btn btn-success py-3 px-5" type="submit">CONTINUE TO PAY</button>
                            </div>


                            <input type="hidden" name="return" value="https://sarait.com.bd/dry-service/success.php">
                            <input type="hidden" name="cancel_return" value="https://sarait.com.bd/dry-service/cancel.php">

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Get a reference to the name input and the hidden input
    var nameInput = document.getElementById("name");
    var customNameInput = document.getElementById("customNameD");
    nameInput.addEventListener("input", function() {
        customNameInput.value = nameInput.value;
    });


    var phoneInput = document.getElementById("phone");
    var customMobileD = document.getElementById("customMobileD");
    phoneInput.addEventListener("input", function() {
        customMobileD.value = phoneInput.value;
    });

    var emailInput = document.getElementById("email");
    var customEmailD = document.getElementById("customEmailD");
    emailInput.addEventListener("input", function() {
        customEmailD.value = emailInput.value;
    });

    var addressInput = document.getElementById("address");
    var customAddressD = document.getElementById("customAddressD");
    addressInput.addEventListener("input", function() {
        customAddressD.value = addressInput.value;
    });
    </script>


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="">
                    <h1 class="text-secondary mb-3"><span class="text-white">CAR</span>MIQUE</h1>
                </a>
                <p>Say goodbye to laundry woes, reclaim your time and strike off chores. Live Life, we’ll handle your
                    Laundry</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Get In Touch</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Fordham Center Bronx, NY 10468 United States</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+1 716 919 7707</p>
                <p><i class="fa fa-envelope mr-2"></i>request@carmique.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white mb-4">Newsletter</h4>
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control border-0" placeholder="Your Email"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-lg btn-secondary btn-block border-0" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Carmique.com</a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
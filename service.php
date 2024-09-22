<?php
require './config/app.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Services | <?php echo APP_NAME; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Honelo" name="keywords">
    <meta content="Honelo despansery is despansery that located in Kabuku Tanga." name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid py-2 d-none d-lg-flex">
        <div class="container">
            <div class="d-flex justify-content-between">
                <div>
                    <small class="me-3"><i class="fa fa-map-marker-alt me-2"></i>kabuku ,Tanga Tanzania.</small>
                    <small class="me-3"><i class="fa fa-clock me-2"></i>Mon-Sat 09am-5pm, Sun Closed</small>
                </div>
                <nav class="breadcrumb mb-0">
                    <a class="breadcrumb-item small text-body" href="#">Support</a>
                    <a class="breadcrumb-item small text-body" href="team.html">Team</a>
                </nav>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Brand Start -->
    <div class="container-fluid bg-primary text-white pt-4 pb-5 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex">
                    <i class="bi bi-telephone-inbound fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span><?php echo OFFICE_NUMBER ?></span>
                    </div>
                </div>
                <a href="index.html" class="h1 text-white mb-0"><?php echo APP_NAME ?><span class="text-dark"><?php echo NAME2 ?></span></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-2"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span><?php echo OFFICE_EMAIL; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.php" class="navbar-brand d-lg-none">
                    <h1 class="text-primary m-0"><?php echo APP_NAME; ?> <span class="text-dark"><?php echo NAME2; ?></span></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link active">Services</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    
    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container pt-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Reliable & High-Quality Laboratory Service</h1>
                <p class="mb-5">here is most best of our services we provide to our client with the best Doctors & Lab Assistant and Latest Technology.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-heart-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Pathology Testing</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service within and out side of our center.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-lungs text-dark"></i>
                        </div>
                        <h5 class="mb-3">Microbiology Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service only within our center.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-virus text-dark"></i>
                        </div>
                        <h5 class="mb-3">Biochemistry Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service only within our center..</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-capsule-pill text-dark"></i>
                        </div>
                        <h5 class="mb-3">Histopatology Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service within and out side of our center..</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-capsule text-dark"></i>
                        </div>
                        <h5 class="mb-3">Urine Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service within and out side of our center.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-prescription2 text-dark"></i>
                        </div>
                        <h5 class="mb-3">Blood Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service ony within our center.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-clipboard2-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Fever Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service within and out side of our center.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-file-medical text-dark"></i>
                        </div>
                        <h5 class="mb-3">Allergy Tests</h4>
                            <p class="mb-4"><?php echo NAME ?> provide This service only within our center.</p>
                        <!-- <a class="btn btn-light px-3" href="">Read More<i class="bi bi-chevron-double-right ms-1"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <div class="container-fluid footer position-relative bg-dark text-white-50 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-6 pe-lg-5">
                    <a href="index.html" class="navbar-brand">
                        <h1 class="h1 text-primary mb-0"><?php echo APP_NAME ?><span class="text-white"></span></h1>
                    </a>
                    <p class="fs-5 mb-4"><?php echo NAME ?> best choice for you and your family health.</p>
                    <p><i class="fa fa-map-marker-alt me-2"></i><?php echo ADRESS; ?></p>
                    <p><i class="fa fa-phone-alt me-2"></i><?php echo OFFICE_NUMBER; ?></p>
                    <p><i class="fa fa-envelope me-2"></i><?php echo OFFICE_EMAIL; ?></p>
                    <div class="d-flex mt-4">
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="row g-5">
                        <div class="col-sm-6">
                            <h4 class="text-light mb-4">Popular Links</h4>
                            <a class="btn btn-link" href="abuot.php">About Us</a>
                            <a class="btn btn-link" href="contact.php">Contact Us</a>
                            <a class="btn btn-link" href="service.php">Our Services</a>
                            <a class="btn btn-link" href="terms.php">Terms & Condition</a>
                            <a class="btn btn-link" href="support.php">Support</a>
                        </div>
                        <div class="col-sm-12">
                            <h4 class="text-light mb-4">Newsletter</h4>
                            <div class="w-100">
                                <div class="input-group">
                                    <input type="text" class="form-control border-0 py-3 px-4" style="background: rgba(255, 255, 255, .1);" placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark text-white-50 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; <a href="#"><?php echo APP_NAME; ?></a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Honelo is <a href="https://samtechnology.koyeb.app"><?php echo DEV; ?></a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
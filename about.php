<?php $page = 'about';
require './components/head.php' ?>
<title>About Us</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require './components/top_nav.php' ?>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php require './components/navbar.php' ?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header about-imgs py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5 pb-0" id="about_us">
        <div class="container py-5 pb-0">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="img/farmer.jpg" class="img-fluid h-100" alt="img">
                        <div class="bg-dark experiences">
                            <h1 class="display-3 text-primary">Get</h1>
                            <h5 class="fw-bold text-light">500+ Service</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            About TheInnovators</h5>
                        <h1 class="display-5 mb-2">World Best Services</h1>
                        <p class="fs-5" style="text-align: justify;">Our WebSite One Step Solution Provides the Best
                            Services and Solution for Everyone. We Provide Experienced and Certified Provider for all
                            type of Services. We provide service provider in time and our web site is the best website
                            in the world.</p>
                        <div class="row service_highlight">
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-hand-holding-dollar text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Selling</h5>
                                        <h5>Crops</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-flask-vial text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Soil</h5>
                                        <h5>Testing</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-house-chimney-medical text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Chemical</h5>
                                        <h5>Medicine</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fa-solid fa-flask text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Pesticides &</h5>
                                        <h5>Fertilizers</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="service.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find
                                Services</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <?php require './components/footer.php' ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>
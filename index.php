<?php

$page = 'home';
require './components/head.php';
?>
<title>The Innovator's</title>
</head>

<body>
    <!-- Google Translate Element -->
    <div id="google_translate_element" class="position-fixed top-0 end-0 p-2"></div>

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


    <!-- Carousel Start -->
    <div class="container-fluid  px-0">
        <div id="hero">
            <img src="./img/view-min1.jpg" class="hero_bg" alt="Second slide">
            <div class="container carousel-content">
                <h4 class="mb-4 animated slideInDown text-primary">Your Work, Your Sanctuary, Our Services</h4>
                <h1 class="text-white display-3 mb-4 animated slideInDown"> Enhancing Domestic Harmony: Where <span
                        class="text-primary"> Excellence</span> Comes Home to You.</h1>

                <a href="./service.php" class="me-2"><button type="button"
                        class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Explore
                        Services</button></a>
            </div>
        </div>
    </div>
    <!-- Carousel End -->



    <!-- Services Start -->
    <div class="container-fluid services py-2 bg-light " id="services">
        <div class="container text-center py-3">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our
                    Services</h5>
                <h1 class="display-5">Popular Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-light services-item p-2">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 services-inner-icon p-1">
                                <img src="./img/service/s1.jpg" class="service_img" alt="">
                            </div>
                        </div>
                        <h5 class="mb-3">Selling Crops</h5>
                        <a href="./cropsService.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-3 py-2">View</button>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-light services-item p-2">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 services-inner-icon p-1">
                                <img src="./img/service/s2.jpg" class="service_img" alt="">
                            </div>
                        </div>
                        <h5 class="mb-3">Soil Testing</h5>
                        <a href="./popular_service_option.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-3 py-2">View</button>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-light services-item p-2">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 services-inner-icon p-1">
                                <img src="./img/service/s3.jpg" class="service_img" alt="">
                            </div>
                        </div>
                        <h5 class="mb-3">Chemical Medicine</h5>
                        <a href="./popular_service_option.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-3 py-2">View</button>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="bg-light services-item p-2">
                        <div class="d-flex" style="align-items: center; justify-content: center;">
                            <div class="mb-4 services-inner-icon p-1">
                                <img src="./img/service/s4.jpg" class="service_img" alt="">
                            </div>
                        </div>
                        <h5 class="mb-3">Pesticides & Fertilizers</h5>
                        <a href="./popular_service_option.php">
                            <button type="button" class="btn btn-primary border-0 rounded-pill px-3 py-2">View</button>
                        </a>
                    </div>
                </div>
            </div>
            <a href="./service.php" class="d-block text-end">
                <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp"
                    data-wow-delay=".3s">More Services</button>
            </a>
        </div>
    </div>
    <!-- Services End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about_us">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="img/farmer.png" class="img-fluid h-100" alt="img">
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
    <div class="container-fluid bg-dark">
        <div class="container">
            <marquee class="marquee-text pt-3 pb-3">Potato: 20rs Rice: 30rs Wheat: 20rs Corn: 10rs Onion: 40rs
                Garlic: 50rs Mustard: 70rs Potato: 20rs Rice: 30rs Wheat: 20rs Corn: 10rs Onion: 40rs
                Garlic: 50rs Mustard: 70rs</marquee>
        </div>
    </div>
    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container blog-flex py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog
                </h5>
                <h1 class="display-5">Latest Blog & News</h1>
            </div>
            <div class="owl-carousel blog-carousel wow fadeInUp col-md-4" data-wow-delay=".5s">
                <div class="blog-item">
                    <!-- <img src="./img/farmer.jpg" class="img-fluid w-100 rounded-top" alt=""> -->
                    <div class="rounded-bottom bg-light">
                        <div class="d-flex justify-content-between p-4 pb-2">
                            <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                            <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>12/12/2005</span>
                        </div>
                        <div class="px-4 pb-0">
                            <h4>New Blog</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe minima iure natus!
                                Impedit quos possimus quae eligendi ducimus culpa repudiandae!</p>
                        </div>
                        <div class="p-4 py-2 d-flex justify-content-between bg-light rounded-bottom blog-btn">
                            <a href="#!" type="button" class="btn btn-primary border-0">Read More</a>
                            <a href="#" class="my-auto text-dark"><i class="fa fa-comments me-2"></i>23 Comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="./blog.php" class="d-block text-end">
                <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-4 wow fadeInUp"
                    data-wow-delay=".3s">More Blogs</button>
            </a>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Testiminial Start -->
    <div class="container-fluid testimonial py-5 bg-light" id="feedback">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Feedback
                </h5>
                <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
               
                    <div class="testimonial-item">
                        <div class="testimonial-content rounded mb-4 p-4">
                            <p class="fs-5 m-0"><?php echo $result['feedback_title'] ?></p>
                        </div>
                        <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                            <div class="position-relative">
                                <img src="img/feedback/feedback1.jpg" class="img-fluid rounded-circle py-2" alt="">
                                <div class="position-absolute" style="top: 33px; left: -25px;">
                                    <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                                </div>
                            </div>
                            <div class="ms-3">
                                <h4 class="mb-0"><?php echo $result['username'] ?></h4>
                                <p class="mb-1"><?php echo $result['feedback_details'] ?></p>
                                <div class="d-flex">
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                    <small class="fas fa-star text-primary me-1"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                
                ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5 pb-0">
        <div class="container py-5 pb-0">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Get In
                    Touch</h5>
                <h1 class="display-5 w-50 mx-auto">Contact for any query</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235850.27042420284!2d88.18253565744779!3d22.535660583743923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1698202482559!5m2!1sen!2sin"
                            class="border-0 rounded w-100 h-100" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="rounded contact-form">
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control p-3" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" placeholder="Subject">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control p-3" rows="6" cols="10"
                                placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-primary border-0 py-3 px-4 rounded-pill" type="button">Send
                            Message</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact End -->

    <script>
    // Check if accessToken exists in localStorage
    const accessToken = localStorage.getItem("accessToken");

    // If accessToken exists, show Profile link and hide Login link
    if (accessToken) {
        document.getElementById("profileLink").style.display = "flex";
        document.getElementById("loginLink").style.display = "none";
    } else {
        // If no accessToken, show Login link and hide Profile link
        document.getElementById("loginLink").style.display = "flex";
        document.getElementById("profileLink").style.display = "none";
    }
</script>

    <?php require './components/footer.php' ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


    <?php require './components/scripts.php' ?>
</body>

</html>
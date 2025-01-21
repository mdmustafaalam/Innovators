<?php $page = 'home';
require './components/head.php' ?>
<title>Login</title>

<style>
    #hero h1 {
        margin: 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: white;
    }

    #hero h2 {
        color: #ffe69b;
        margin: 10px 0 30px 0;
        font-size: 24px;
    }

    hr {
        margin: .5rem 0 !important;
    }

    .card {
        height: 100%;
    }

    #profile_data .row .col:first-child {
        font-weight: 500;
    }

    #profile_data .row {
        background: #fffce5;
        margin: 8px 0;
        padding: 8px;
        border-radius: 8px;
    }


    .card {
        margin-bottom: 20px;
    }

    .card-body {
        padding: 20px;
    }

    .card-body h6 {
        margin-top: 0;
        margin-bottom: 20px;
    }
</style>

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


    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row" id="profile_data">
                <div class="col-lg-4 ">
                    <div class="card ">
                        <div class="card-body text-center">
                            <img src="./img/pro.jpeg" alt="avatar" class="rounded-circle img-fluid"
                                style="width: 150px; aspect-ratio: 1/1;">
                            <h5 class="m-0 mt-3">EX1234</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Name</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="fullName">Suraj Jhat</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Father's Name</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="fatherName">Example</p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Date of Birth</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="dateOfBirth">10/05/2000</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="email">example@gmail.com</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="phone">74185296385</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Blood Group</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="bloodGroup">A+</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">City</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="city">Kolkata</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">State</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="state">West Bengal</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Country</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="country">India</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Address</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="address">Kalyani, Nadia, Kolkata</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Pin Code</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="pinCode">752741</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-2">
                    <div class="card ">
                        <div class="card-body">

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Pan Number</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="panNumber">EUTP56M5</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Aadhar Number</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="aadharNumber">789445671235</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Annual Income</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="annualIncome">60000</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Current Location</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="annualIncome">Kolkata</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Gram panchyat</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="annualIncome">Kolkata Panch</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-0">Password</p>
                                </div>
                                <div class="col">
                                    <p class="text-muted mb-0" id="annualIncome">edr123</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>


    <?php require './components/footer.php' ?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>
<?php $page = 'home';
require './components/head.php' ?>
<title>Pricing plan</title>
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





    <!-- pricing Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h1 class="display-5 w-50 mx-auto">Register</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register Form</div>
                        <div class="card-body">
                            <form>
                                <div class="form-group mb-3">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" required
                                        placeholder="Enter your name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required
                                        placeholder="Enter your email">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="PhN">Phone Number</label>
                                    <input type="text" class="form-control" id="PhN" required
                                        placeholder="Enter your Phone number">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="addre">Address</label>
                                    <input type="text" class="form-control" id="addre" required
                                        placeholder="Enter your address">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" id="city" required
                                        placeholder="Enter your city">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="state">State</label>
                                    <input type="text" class="form-control" id="state" required
                                        placeholder="Enter your state">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="pinN">Pin Code</label>
                                    <input type="text" class="form-control" id="pinN" required
                                        placeholder="Enter your pin">
                                </div>

                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <?php require './components/footer.php' ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php' ?>
</body>

</html>
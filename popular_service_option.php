<?php
$page = 'service';
require './components/head.php';
?>
<title>Service - Find Your Services</title>
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
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Page Name</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="./service.php">Services</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Page Name</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <ul class="">
                    <h3 class="bg-dark p-2 m-0 text-primary">Available Option</h3>

                    <a href="./service_details"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div class="flex-column">
                            <h4>Service Name</h4>
                            <p><small>Kolkata, India</small></p>
                            <span
                                class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                                10AM to 10PM</span>
                        </div>
                        <div class="image-parent">
                            <img src="./img/view-min.jpg" class="shop_img" alt="quixote">
                        </div>
                    </a>
                    <a href="./service_details.php?id=<?php echo $result['id']; ?>"
                        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div class="flex-column">
                            <h4>Service Name</h4>
                            <p><small>Kolkata, India</small></p>
                            <span
                                class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                                10AM to 10PM</span>
                        </div>
                        <div class="image-parent">
                            <img src="./img/view-min.jpg" class="shop_img" alt="quixote">
                        </div>
                    </a>
                </ul>
            </div>
        </div>
    </div>




    <?php require './components/footer.php' ?>





    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


    <?php require './components/scripts.php' ?>
</body>

</html>